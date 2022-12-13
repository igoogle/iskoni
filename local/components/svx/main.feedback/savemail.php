<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CModule::IncludeModule("highloadblock");

use Bitrix\Highloadblock as HL; 
use Bitrix\Main\Entity; 


function savemail($info){

	if(empty($info) /*|| empty($info['email'])*/){
		return false;
	}

	if(empty($info['email'])){
		$info['email'] = '';
	}

	$data = array("UF_SVX_HL_EMAIL" => $info['email']);

	if(!empty($info['name'])){
		$data["UF_SVX_HL_NAME"] = $info['name'];
	}
	if(!empty($info['phone'])){
		$data["UF_SVX_HL_PHONE"] = $info['phone'];
	}
		
	$data["UF_ADDED"] = date('d.m.Y H:i:s');

	$rsData = HL\HighloadBlockTable::getList(array('filter'=>array('NAME'=>'Svxhlemails')));
	if ( $arData = $rsData->fetch() ){
	    $hlbl = $arData['ID'];
	}

	// $hlbl = 1; // "ID  Highload инфоблока"
	$hlblock = HL\HighloadBlockTable::getById($hlbl)->fetch(); 
	// get entity 
	$entity = HL\HighloadBlockTable::compileEntity($hlblock); 
	$entity_data_class = $entity->getDataClass(); 

	// $resData = $entity_data_class::getList(array(
	// 	'select' => array('ID'),
	// 	'filter' => array('UF_SVX_HL_EMAIL'=>$data['UF_SVX_HL_EMAIL']),
	// 	'limit' => 1,
	// ));

	// if ($arItem = $resData->Fetch()) {
	// 	$result = $entity_data_class::update($arItem['ID'], $data);
	// }
	// else{
		$result = $entity_data_class::add($data);
	// }

	$ID = $result->getId();

	return $ID;
}

?>