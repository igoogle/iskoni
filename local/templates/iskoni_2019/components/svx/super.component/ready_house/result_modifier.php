<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

// component text here

if (!CModule::IncludeModule("iblock")) 
	return false;

$arFilter = array(
	"IBLOCK_ID" => 3,
	"ACTIVE" => "Y",
	"ACTIVE_DATE" => "Y",
);
if(!empty($arParams['PROJECT']) && $arParams['PROJECT'] > 0){
	$arFilter["PROPERTY_PROJECT"] = (int)$arParams['PROJECT'];
}

$arOrder = array(
	"SORT" => "ASC",
);
$arSelect = array(
	"ID", 
	"NAME", 
	"IBLOCK_ID",
	"PREVIEW_TEXT",
	"PREVIEW_PICTURE",
	"DETAIL_PICTURE",
);


$db_elements = CIblockElement::GetList($arOrder, $arFilter, false, false, $arSelect);
// $db_elements->SetUrlTemplates($arParams["DETAIL_URL"]);

$elements_found = false;
while ($arElement = $db_elements->GetNext())
{
	$elements_found = true;
	$arElement["PREVIEW_PICTURE"] = CFile::GetFileArray($arElement["PREVIEW_PICTURE"]);
	$arElement["DETAIL_PICTURE"] = CFile::GetFileArray($arElement["DETAIL_PICTURE"]);
	#DBG::pred($arElement);
	$arResult["ITEMS"][] = $arElement;
}


// saving template name to cache array
$arResult["__TEMPLATE_FOLDER"] = $this->__folder;

// writing new $arResult to cache file
$this->__component->arResult = $arResult; 
?>