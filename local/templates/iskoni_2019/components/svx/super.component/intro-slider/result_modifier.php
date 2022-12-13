<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!CModule::IncludeModule("iblock")) 
	return false;


$arFilter = array(
	"IBLOCK_ID" => 2,
	"ACTIVE" => "Y",
	"ACTIVE_DATE" => "Y",
	">=ID" => "20",
);

$arOrder = array(
	
"SORT" => "ASC",
);
$arSelect = array(
	"ID", 
	"NAME", 
	"IBLOCK_ID",
	"DETAIL_PICTURE",
	"DETAIL_TEXT",
	"PREVIEW_TEXT",
	"PROPERTY_SUBMETA",
	"PROPERTY_BTNTEXT",
	"PROPERTY_BTNLINK",
);

$db_elements = CIblockElement::GetList($arOrder, $arFilter, false, false, $arSelect);
// $db_elements->SetUrlTemplates($arParams["DETAIL_URL"]);

$elements_found = false;

while ($arElement = $db_elements->GetNext())
{
    $elements_found = true;
    $arElement["DETAIL_PICTURE"] = CFile::GetFileArray($arElement["DETAIL_PICTURE"]);
	$arResult["ITEMS"][] = $arElement;
}
// DBG::pre($arResult);


// saving template name to cache array
$arResult["__TEMPLATE_FOLDER"] = $this->__folder;

// writing new $arResult to cache file
$this->__component->arResult = $arResult; 
?>