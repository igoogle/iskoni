<?

  require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

  $arRequest = Bitrix\Main\Context::getCurrent()->getRequest()->toArray();

  CEvent::SendImmediate('WEB_FORM_SET', SITE_ID, [
    'USER_NAME' => $arRequest['user-name'],
    'USER_PHONE' => $arRequest['user-phone'],
  ]);

  leadAdd(
    'Заявка с сайта iskoni.ru',
    $arRequest['user-name'],
    $arRequest['user-phone'],
    '',
    'Форма сет',
  );

  echo json_encode([
    'status' => 'ok'
  ]);