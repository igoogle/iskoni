<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

// component text here

if (!CModule::IncludeModule("iblock")) 
	return false;



$arFilter = array(
	"IBLOCK_ID" => 5,
	"ACTIVE" => "Y",
	"ACTIVE_DATE" => "Y",
);
$arOrder = array(
	"SORT" => "ASC",
);
$arSelect = array(
	"ID", 
	"NAME", 
	"IBLOCK_ID",
	"PREVIEW_PICTURE",
	"PROPERTY_PLUS",
	"PROPERTY_MINUS",
	"PROPERTY_PRICE",
	"PROPERTY_SVG",
);

$db_elements = CIblockElement::GetList($arOrder, $arFilter, false, false, $arSelect);

while ($arElement = $db_elements->GetNext())
{
	if(!empty($arElement['PROPERTY_SVG_VALUE'])){
		$arElement["PREVIEW_PICTURE"] = CFile::GetPath($arElement["PROPERTY_SVG_VALUE"]);
	}
	else{
		$arElement["PREVIEW_PICTURE"] = CFile::GetPath($arElement["PREVIEW_PICTURE"]);
	}

	// DBG::pre($arElement);
	
	$arResult["ITEMS"][] = $arElement;
}



// saving template name to cache array
$arResult["__TEMPLATE_FOLDER"] = $this->__folder;

// writing new $arResult to cache file
$this->__component->arResult = $arResult; 
?>