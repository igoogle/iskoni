<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

// Находим список инфоблоков
/*
if(!CModule::IncludeModule("iblock")) return;

$arIBlockType = CIBlockParameters::GetIBlockTypes();
$arIBlock=array();
$rsIBlock = CIBlock::GetList(Array("sort" => "DESC"), Array("TYPE" => $arCurrentValues["IBLOCK_TYPE"], "ACTIVE"=>"Y"));
while($arr=$rsIBlock->Fetch())
{
	$arIBlock[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];
}
*/


$arTemplateParameters = array(
		
		"AUTOPLAYSPEED" => array(
			"PARENT" => "BASE",
			"NAME" => "Время переключения слайдов (1000 = 1 секунда)",
			"TYPE" => "STRING",
			"DEFAULT" => "5000",

		),
		/*
		"IBLOCK_TYPE" => array(
			"PARENT" => "DATA_SOURSE",
			"NAME" => "Тип инфоблока",
			"TYPE" => "LIST",
			"VALUES" => $arIBlockType,
			"REFRESH" => "Y",
		),
		"IBLOCK_ID" => array(
			"PARENT" => "DATA_SOURSE",
			"NAME" => "Код инфоблока",
			"TYPE" => "LIST",
			"ADDITIONAL_VALUES" => "Y",
			"VALUES" => $arIBlock,
			"REFRESH" => "Y",
		),
		"RELOAD_QUANTITY" => array(
			"PARENT" => "OVERALL",
			"NAME" => "Пересчитывать число элементов",
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		*/

);
?>