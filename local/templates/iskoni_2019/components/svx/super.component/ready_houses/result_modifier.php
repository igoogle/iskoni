<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

// component text here


if (!CModule::IncludeModule("iblock")) 
	return false;


$arFilter = array(
	"IBLOCK_ID" => 3,
	"!PROPERTY_SLIDES" => false,
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
	"PREVIEW_TEXT",
);

$db_elements = CIblockElement::GetList($arOrder, $arFilter, false, false, $arSelect);

while ($arElement = $db_elements->GetNext())
{
	$arElement['SLIDES'] = array();
	$rsSlides = CIBlockElement::GetProperty(3, $arElement['ID'], "sort", "asc", array("CODE" => "SLIDES"));
	while ($ob = $rsSlides->GetNext())
	{
	    $arElement['SLIDES'][] = CFile::GetFileArray($ob['VALUE']);
	}

	// DBG::pre($arElement);
	
	$arResult["ITEMS"][] = $arElement;
}





// saving template name to cache array
$arResult["__TEMPLATE_FOLDER"] = $this->__folder;

// writing new $arResult to cache file
$this->__component->arResult = $arResult; 
?>