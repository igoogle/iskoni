<?php
if(!isset($_REQUEST['mf_theme'])) die('Restricted access');

$config->form_addmsg = 'Укажите ваше имя и контактный телефон.<br>Наш менеджер перезвонит вам в<br>ближайшее время';
$config->form_header = 'Обратный звонок';
$config->phone_title = 'Телефон';
$config->name_title = 'Имя';
$config->phone_time_title = 'Удобное время для звонка';
$config->phone_time_value = 'в любое время';
$config->checbox_name = 'для отправки сообщения поставьте галочку';
//$config->enable_captcha = false;

$field_value = array_merge($field_value, array(
	'phone_time'=>'',
)); 

$field_class = $field_value;
?>
