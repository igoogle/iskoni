<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!CModule::IncludeModule("iblock")){
	return;
}

$arResult = array(
	'priceMin' => 99999999,
	'priceMax' => 1,
	'squareMin' => 99999999,
	'squareMax' => 1,
);

$arfilter = array('IBLOCK_ID'=>1, 'ACTIVE'=>'Y');

// $arfilter = array_merge($arfilter,$GLOBALS['catalogFilter']);
// DBG::pred($arfilter);

$rsHouses = CIBlockElement::GetList(
	array(),
	$arfilter,
	false,
	false,
	array('ID', 'IBLOCK_ID', 'PROPERTY_PRICE', 'PROPERTY_SIZE_FULL')
);

$arResult['CNT'] = $rsHouses->SelectedRowsCount();

while ($item = $rsHouses->Fetch()) {
	$item['PROPERTY_PRICE_VALUE'] = floatval($item['PROPERTY_PRICE_VALUE']);
	if($item['PROPERTY_PRICE_VALUE'] > 0){
		$arResult['priceMin'] = min($arResult['priceMin'], $item['PROPERTY_PRICE_VALUE']);
		$arResult['priceMax'] = max($arResult['priceMax'], $item['PROPERTY_PRICE_VALUE']);
	}
	if($item['PROPERTY_SIZE_FULL_VALUE'] > 0){
		$arResult['squareMin'] = min($arResult['squareMin'], $item['PROPERTY_SIZE_FULL_VALUE']);
		$arResult['squareMax'] = max($arResult['squareMax'], $item['PROPERTY_SIZE_FULL_VALUE']);
	}
}

$arResult['squareMin'] = floor($arResult['squareMin']);
$arResult['squareMax'] = ceil($arResult['squareMax']);

DBG::pred($arResult);

$filterFields = array('pf', 'pt', 'sf', 'st', 'f', 'br', 'su', 'tr', 's', 'g', 'cp', 'pti', 'bbq', 't', 'dbg');
$arResult['GET'] = array();
foreach ($_GET as $k => $v) {
	if(in_array($k, $filterFields)){
		$arResult['GET'][$k] = $_GET[$k];
	}
}

// DBG::pred($_GET);
