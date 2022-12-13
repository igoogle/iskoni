<?

  require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

  $arRequest = Bitrix\Main\Context::getCurrent()->getRequest()->toArray();

  CEvent::SendImmediate('WEB_FORM_CATALOG_ITEM', SITE_ID, [
    'USER_NAME' => $arRequest['user-name'],
    'USER_PHONE' => $arRequest['user-phone'],
    'USER_MESSAGE' => $arRequest['message'],
    'CATALOG_ITEM_NAME' => $arRequest['catalog-item-name'],
    'CATALOG_ITEM_LINK' => $arRequest['catalog-item-link'],
  ]);

  leadAdd(
    'Заявка с сайта iskoni.ru',
    $arRequest['user-name'],
    $arRequest['user-phone'],
    $arRequest['message'],
    'Товар: ' . $arRequest['catalog-item-name']
  );

  echo json_encode([
    'status' => 'ok'
  ]);