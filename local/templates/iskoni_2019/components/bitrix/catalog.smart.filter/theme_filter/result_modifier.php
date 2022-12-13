<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (isset($arParams["TEMPLATE_THEME"]) && !empty($arParams["TEMPLATE_THEME"]))
{
	$arAvailableThemes = array();
	$dir = trim(preg_replace("'[\\\\/]+'", "/", dirname(__FILE__)."/themes/"));
	if (is_dir($dir) && $directory = opendir($dir))
	{
		while (($file = readdir($directory)) !== false)
		{
			if ($file != "." && $file != ".." && is_dir($dir.$file))
				$arAvailableThemes[] = $file;
		}
		closedir($directory);
	}

	if ($arParams["TEMPLATE_THEME"] == "site")
	{
		$solution = COption::GetOptionString("main", "wizard_solution", "", SITE_ID);
		if ($solution == "eshop")
		{
			$templateId = COption::GetOptionString("main", "wizard_template_id", "eshop_bootstrap", SITE_ID);
			$templateId = (preg_match("/^eshop_adapt/", $templateId)) ? "eshop_adapt" : $templateId;
			$theme = COption::GetOptionString("main", "wizard_".$templateId."_theme_id", "blue", SITE_ID);
			$arParams["TEMPLATE_THEME"] = (in_array($theme, $arAvailableThemes)) ? $theme : "blue";
		}
	}
	else
	{
		$arParams["TEMPLATE_THEME"] = (in_array($arParams["TEMPLATE_THEME"], $arAvailableThemes)) ? $arParams["TEMPLATE_THEME"] : "blue";
	}
}
else
{
	$arParams["TEMPLATE_THEME"] = "blue";
}
$arParams["POPUP_POSITION"] = (isset($arParams["POPUP_POSITION"]) && in_array($arParams["POPUP_POSITION"], array("left", "right"))) ? $arParams["POPUP_POSITION"] : "left";
$meta_arr = array();
foreach ($arResult["ITEMS"] as $key=>$arItem) {
	foreach ($arItem["VALUES"] as $value) {
		if ($value["CHECKED"]) {
			$meta_arr[$arItem["CODE"]]["NAME"] = $arItem["NAME"];
			$meta_arr[$arItem["CODE"]]["CODE"] = $arItem["CODE"];
			$meta_arr[$arItem["CODE"]]["VALUES"][] = $value["VALUE"]; 
		}
	}
}

$meta_postfix = "";
if (count($meta_arr) == 1 && array_key_exists("BEDROOMS", $meta_arr)) {
	$meta_postfix = " с ";
	$last_item = false;
	$bedrooms_text = " комнатами";
	foreach ($meta_arr["BEDROOMS"]["VALUES"] as $key => $value) {
		if ($key + 1 == count($meta_arr["BEDROOMS"]["VALUES"])) {
			$last_item = true;
		}
		$meta_postfix .= $value;
		if (!$last_item) {
			$meta_postfix .= ", ";
		}
	}
	if (count($meta_arr["BEDROOMS"]["VALUES"]) == 1 && $meta_arr["BEDROOMS"]["VALUES"][0] == 1) {
		$bedrooms_text = " комнатой";
	}
	$meta_postfix .= $bedrooms_text;
	$APPLICATION->SetPageProperty("add_string_meta", $meta_postfix);
}

if (count($meta_arr) == 1 && array_key_exists("BATHROOMS", $meta_arr)) {
	$meta_postfix = " с ";
	$last_item = false;
	$bedrooms_text = " санузлами";
	foreach ($meta_arr["BATHROOMS"]["VALUES"] as $key => $value) {
		if ($key + 1 == count($meta_arr["BATHROOMS"]["VALUES"])) {
			$last_item = true;
		}
		$meta_postfix .= $value;
		if (!$last_item) {
			$meta_postfix .= ", ";
		}
	}
	if (count($meta_arr["BATHROOMS"]["VALUES"]) == 1 && $meta_arr["BATHROOMS"]["VALUES"][0] == 1) {
		$bedrooms_text = " санузлом";
	}
	$meta_postfix .= $bedrooms_text;
	$APPLICATION->SetPageProperty("add_string_meta", $meta_postfix);
}
$all_generate = "";

if (count($meta_arr) > 1) {
	$idx = 1;
	foreach ($meta_arr as $key_prop => $value) {
		$all_generate .= mb_strtolower($value["NAME"] . "-");
		$last_value = false;
		foreach ($value["VALUES"] as $key => $valueProp) {
			if ($key + 1 == count($value["VALUES"])) {
				$last_value = true;
			}
			$all_generate .= $valueProp;
			if (!$last_value) {
				$all_generate .= ", ";
			}
		}
		if ($idx != count($meta_arr)) {
			$all_generate .=", ";
		}
		$idx++;
	}
	$APPLICATION->SetPageProperty("add_string_meta_all", $all_generate);
}

