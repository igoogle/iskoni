<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$new = array();

$parent = 0;
foreach($arResult as $n => $arItem){
	if($arItem["IS_PARENT"]){
		$parent = $n;
		$arItem['SUBMENU'] = array();
	}

	if($arItem["DEPTH_LEVEL"] == 1){
		$new[$n] = $arItem;
	}
	else{
		$new[$parent]['SUBMENU'][$n] = $arItem;
	}
}

$arResult = $new;
unset($new);
