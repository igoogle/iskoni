<?php



function GetUserField ($entity_id, $value_id, $property_id) 
{ 
      $arUF = $GLOBALS["USER_FIELD_MANAGER"]->GetUserFields($entity_id, $value_id); 
      return $arUF[$property_id]["VALUE"]; 
} 

function SetUserField ($entity_id, $value_id, $uf_id, $uf_value) 
{ 
   return $GLOBALS["USER_FIELD_MANAGER"]->Update($entity_id, $value_id, 
      Array ($uf_id => $uf_value)); 
}



function getStrExeption(){
	$err = '';
	if($ex = $GLOBALS['APPLICATION']->GetException())
        $err = $ex->GetString();
    
    return $err;
}

