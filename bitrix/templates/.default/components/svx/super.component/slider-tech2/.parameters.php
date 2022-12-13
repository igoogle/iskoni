<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

// Находим список инфоблоков

if(!CModule::IncludeModule("iblock")) return;

$arIBlock=array();
$rsIBlock = CIBlockElement::GetList(array(), array('IBLOCK_ID'=>6, 'ACTIVE'=>'Y'), false, false, array('ID','NAME'));

while($arr=$rsIBlock->Fetch())
{
	$arIBlock[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];
}

$arTemplateParameters = array(	
	"ID" => array(
		"PARENT" => "DATA_SOURSE",
		"NAME" => "Слайдер",
		"TYPE" => "LIST",
		"ADDITIONAL_VALUES" => "Y",
		"VALUES" => $arIBlock,
		//"REFRESH" => "Y",
	),
);
?>