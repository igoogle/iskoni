<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

// component text here
if (!CModule::IncludeModule("iblock")) 
return false;

$arResult['IMAGES'] = array();
$rsSlides = CIBlockElement::GetProperty(6, intval($arParams['ID']), "sort", "asc", array("CODE" => "SLIDES"));
while ($ob = $rsSlides->GetNext())
{
    $arResult['IMAGES'][] = CFile::GetFileArray($ob['VALUE']);
}

// saving template name to cache array
$arResult["__TEMPLATE_FOLDER"] = $this->__folder;

// writing new $arResult to cache file
$this->__component->arResult = $arResult; 
?>