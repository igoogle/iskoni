<?

  require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

  $crmUrl = 'https://iskoni.bitrix24.ru/';
  $login = 'iskoni.web@yandex.ru';
  $password = '3BrMrFvdQkLQECQ';

  $arParams = array(
    'LOGIN' => $login,
    'PASSWORD' => $password,
    'TITLE' => 'Тест лид с сайта'
  );
  
  $obHttp = new \Bitrix\Main\Web\HttpClient;
  $result = $obHttp->post($crmUrl.'crm/configs/import/lead.php', $arParams);
  $result = json_decode(str_replace('\'', '"', $result), true);
  echo '['.$result['error'].'] '.$result['error_message'];