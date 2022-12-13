<?

  require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

  $arRequest = Bitrix\Main\Context::getCurrent()->getRequest()->toArray();

  CEvent::SendImmediate('WEB_FORM_FOOTER', SITE_ID, [
    'USER_NAME' => $arRequest['user-name'],
    'USER_PHONE' => $arRequest['user-phone'],
    'MESSAGE' => $arRequest['message'],
  ]);

  leadAdd(
    'Заявка с сайта iskoni.ru',
    $arRequest['user-name'],
    $arRequest['user-phone'],
    $arRequest['message'],
    'Кнопка снизу сайта',
  );

  echo json_encode([
    'status' => 'ok'
  ]);