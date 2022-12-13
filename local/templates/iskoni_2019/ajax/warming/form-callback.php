<?

  require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

  $arRequest = Bitrix\Main\Context::getCurrent()->getRequest()->toArray();

  CEvent::SendImmediate('WEB_FORM', SITE_ID, [
    'FROM_WHERE' => $arRequest['from_where'],
    'USER_NAME' => $arRequest['user_name'],
    'USER_PHONE' => $arRequest['user_phone'],
    'USER_EMAIL' => $arRequest['user_email'],
  ]);

  leadAdd(
    'Заявка с сайта iskoni.ru',
    $arRequest['user_name'],
    $arRequest['user_phone'],
    '',
    $arRequest['from_where'],
    $arRequest['user_email']
  );

  echo json_encode([
    'status' => 'ok'
  ]);