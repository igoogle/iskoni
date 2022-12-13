<?

  require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

  $arRequest = Bitrix\Main\Context::getCurrent()->getRequest()->toArray();

  CEvent::SendImmediate('WEB_FORM_CALLBACK', SITE_ID, [
    'FROM_WHERE' => $arRequest['where'],
    'USER_NAME' => $arRequest['user-name'],
    'USER_PHONE' => $arRequest['user-phone'],
    'MESSAGE' => $arRequest['message'],
  ]);

  leadAdd('Заявка с сайта iskoni.ru', $arRequest['user-name'], $arRequest['user-phone'], $arRequest['message'], $arRequest['where']);

  echo json_encode([
    'status' => 'ok'
  ]);