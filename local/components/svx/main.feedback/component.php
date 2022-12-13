<?php
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
$arResult["PARAMS_HASH"] = md5(serialize($arParams).$this->GetTemplateName());

$arParams["USE_CAPTCHA"] = (($arParams["USE_CAPTCHA"] != "N" && !$USER->IsAuthorized()) ? "Y" : "N");
$arParams["EVENT_NAME"] = trim($arParams["EVENT_NAME"]);
if($arParams["EVENT_NAME"] == '')
	$arParams["EVENT_NAME"] = "FEEDBACK_FORM";
$arParams["EMAIL_TO"] = trim($arParams["EMAIL_TO"]);
$arParams["PHONE_TO"] = trim($arParams["PHONE_TO"]);
if($arParams["EMAIL_TO"] == '')
	$arParams["EMAIL_TO"] = COption::GetOptionString("main", "email_from");
if(strlen($arParams["PHONE_TO"]) <= 0)
	$arParams["PHONE_TO"] = COption::GetOptionString("main", "phone_from");
$arParams["OK_TEXT"] = trim($arParams["OK_TEXT"]);
if($arParams["OK_TEXT"] == '')
	$arParams["OK_TEXT"] = GetMessage("MF_OK_MESSAGE");

$arParams['NEW_EXT_FIELDS'] = Array();

if (is_array($arParams['EXT_FIELDS']))
	foreach($arParams["EXT_FIELDS"] as $ext_field)
		if (strlen($ext_field) > 0)
			$arParams['NEW_EXT_FIELDS'][] = $ext_field;

if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["submit"] <> '' && (!isset($_POST["PARAMS_HASH"]) || $arResult["PARAMS_HASH"] === $_POST["PARAMS_HASH"]))
{
	$arResult["ERROR_MESSAGE"] = array();
	if(check_bitrix_sessid())
	{
		if(empty($arParams["REQUIRED_FIELDS"]) || !in_array("NONE", $arParams["REQUIRED_FIELDS"]))
		{
			if($arParams["USE_FZ152"] == "Y" && (empty($_POST['FZ152']) || $_POST['FZ152'] != 'Y') )
				$arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_FZ152");
			if((empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])) && strlen($_POST["user_name"]) <= 1)
				$arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_NAME");		
			if((empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])) && strlen($_POST["user_email"]) <= 1)
				$arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_EMAIL");
			if((empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])) && strlen($_POST["user_phone"]) <= 1)
				$arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_PHONE");
			if((empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])) && strlen($_POST["MESSAGE"]) <= 3)
				$arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_MESSAGE");
		}
		if(strlen($_POST["user_email"]) > 1 && !check_email($_POST["user_email"]))
			$arResult["ERROR_MESSAGE"][] = GetMessage("MF_EMAIL_NOT_VALID");
		if(strlen($_POST["user_phone"]) < 1)
			$arResult["ERROR_MESSAGE"][] = GetMessage("MF_PHONE_NOT_VALID");
		if($arParams["USE_CAPTCHA"] == "Y")
		{
			include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");
			$captcha_code = $_POST["captcha_sid"];
			$captcha_word = $_POST["captcha_word"];
			$cpt = new CCaptcha();
			$captchaPass = COption::GetOptionString("main", "captcha_password", "");
			if (strlen($captcha_word) > 0 && strlen($captcha_code) > 0)
			{
				if (!$cpt->CheckCodeCrypt($captcha_word, $captcha_code, $captchaPass))
					$arResult["ERROR_MESSAGE"][] = GetMessage("MF_CAPTCHA_WRONG");
			}
			else
				$arResult["ERROR_MESSAGE"][] = GetMessage("MF_CAPTHCA_EMPTY");

		}
		if($arParams["USE_RECAPTCHA"] == "Y")
		{
			$recaptcha = new \ReCaptcha\ReCaptcha(RE_SEC_KEY, new \ReCaptcha\RequestMethod\CurlPost() );
			$resp = $recaptcha->verify($_REQUEST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

			if (!$resp->isSuccess()){
				foreach ($resp->getErrorCodes() as $code) {
					$arResult["ERROR_MESSAGE"][] = 'Подтвердите, что вы не робот';//GetMessage("MF_CAPTCHA_WRONG");
				}
			}
		}


		if(empty($arResult["ERROR_MESSAGE"]))
		{
			$arFields = Array(
				"AUTHOR" => $_POST["user_name"],
				"AUTHOR_EMAIL" => $_POST["user_email"],
				"EMAIL_TO" => $arParams["EMAIL_TO"],
				"TEXT" => $_POST["MESSAGE"],
			);
			$arFields["TEXT"] = GetMessage("MF_PHONE").":<br>\n".$_POST["user_phone"]."<br><br>\n\n".$arFields["TEXT"];

			foreach($_POST["custom"] as $i => $custom_field){
				if(is_array($custom_field)){
					$arFields["TEXT"] .= "<br><br>\n\n".$arParams['NEW_EXT_FIELDS'][$i].":<br>\n".$custom_field;
					foreach ($custom_field as $value) {
						$arFields["TEXT"] .= $value."<br>\n";
					}
				}
				$arFields["TEXT"] .= "<br><br>\n\n".$arParams['NEW_EXT_FIELDS'][$i].":<br>\n".$custom_field;
			}

			foreach ($arParams['NEW_EXT_FIELDS'] as $i => $code) {
				if(!isset($_POST[$code])){
					continue;
				}
				$arFields["TEXT"] .= "<br><br>\n\n".$arParams['EXT_FIELDS_NAMES'][$i].":<br>\n";
				if(is_array($_POST[$code])){
					foreach ($_POST[$code] as $value) {
						$arFields["TEXT"] .= $value."<br>\n";
					}
				}
				else{
					$arFields["TEXT"] .= $_POST[$code]."<br>\n";
				}
			}
		
			parse_str($_SERVER['QUERY_STRING'],$getParams);
			foreach ($getParams as $k => $v) {
				if(strpos($k, 'utm_') === 0){
					$UTM .= $k.' = '.urldecode($v)."\r\n<br>";
				}
			}

			$arFields["TEXT"] .= "<br><br>\n\n".$UTM;


			if(!empty($arParams["EVENT_MESSAGE_ID"]))
			{
				foreach($arParams["EVENT_MESSAGE_ID"] as $v)
					if(IntVal($v) > 0){
						// CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields, "N", IntVal($v));
					}
			}
			else{
				// CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields);
				mail('svxbot+dbg@gmail.com', 'dbg mail '.$_SERVER['HOST_NAME'], 'not selected mail tpl <br>'.PHP_EOL.print_r($_SERVER,1));
			}

			$_SESSION["MF_NAME"] = htmlspecialcharsbx($_POST["user_name"]);
			$_SESSION["MF_EMAIL"] = htmlspecialcharsbx($_POST["user_email"]);
			$_SESSION["MF_PHONE"] = htmlspecialcharsbx($_POST["user_phone"]);


			if( CModule::IncludeModule("highloadblock") ){
				include "savemail.php";

				$save = savemail(array(
					"email"=>$_POST["user_email"],
					"name"=>$_POST["user_name"],
					"phone"=>$_POST["user_phone"]
				));
			}

			LocalRedirect($APPLICATION->GetCurPageParam("success=".$arResult["PARAMS_HASH"], Array("success")));
		}
		
		$arResult["MESSAGE"] = htmlspecialcharsbx($_POST["MESSAGE"]);
		$arResult["AUTHOR_NAME"] = htmlspecialcharsbx($_POST["user_name"]);
		$arResult["AUTHOR_EMAIL"] = htmlspecialcharsbx($_POST["user_email"]);
		$arResult["AUTHOR_PHONE"] = htmlspecialcharsbx($_POST["user_phone"]);
		foreach($_POST["custom"] as $i => $custom_field)
		{
			$arResult["custom_$i"] = htmlspecialcharsbx($custom_field);
		}
	}
	else
		$arResult["ERROR_MESSAGE"][] = GetMessage("MF_SESS_EXP");
}
elseif($_REQUEST["success"] == $arResult["PARAMS_HASH"])
{
	$arResult["OK_MESSAGE"] = $arParams["OK_TEXT"];
}

if(empty($arResult["ERROR_MESSAGE"]))
{
	if($USER->IsAuthorized())
	{
		$arResult["AUTHOR_NAME"] = $USER->GetFormattedName(false);
		$arResult["AUTHOR_EMAIL"] = htmlspecialcharsbx($USER->GetEmail());
		// $arResult["AUTHOR_PHONE"] = htmlspecialcharsbx($_SESSION["MF_PHONE"]);
	}
	else
	{
		if(strlen($_SESSION["MF_NAME"]) > 0)
			$arResult["AUTHOR_NAME"] = htmlspecialcharsbx($_SESSION["MF_NAME"]);
		if(strlen($_SESSION["MF_EMAIL"]) > 0)
			$arResult["AUTHOR_EMAIL"] = htmlspecialcharsbx($_SESSION["MF_EMAIL"]);
		if(strlen($_SESSION["MF_PHONE"]) > 0)
			$arResult["AUTHOR_PHONE"] = htmlspecialcharsbx($_SESSION["MF_PHONE"]);
	}
	if(strlen($_SESSION["MF_PHONE"]) > 0)
			$arResult["PHONE_TO"] = htmlspecialcharsbx($_SESSION["MF_PHONE"]);
}

if($arParams["USE_CAPTCHA"] == "Y")
	$arResult["capCode"] =  htmlspecialcharsbx($APPLICATION->CaptchaGetCode());

$this->IncludeComponentTemplate();
