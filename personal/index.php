<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мой профиль");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	".default",
	Array(
		"CHECK_RIGHTS" => "N",
		"SEND_INFO" => "N",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(),
		"USER_PROPERTY_NAME" => ""
	)
);?>
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>