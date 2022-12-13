<?

  require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

  $arRequest = Bitrix\Main\Context::getCurrent()->getRequest()->toArray();

  $message = '';

  if(isset($arRequest['user_name']) && $arRequest['user_name']) {
    $message .= 'Имя: ' . $arRequest['user_name'] .  '<br/>';
  }

  if(isset($arRequest['user_phone']) && $arRequest['user_phone']) {
    $message .= 'Номер телефона: ' . $arRequest['user_phone'] .  '<br/>';
  }

  if(isset($arRequest['user_email']) && $arRequest['user_email']) {
    $message .= 'E-mail: ' . $arRequest['user_email'] .  '<br/>';
  }

  if(isset($arRequest['floor']) && $arRequest['floor']) {
    $message .= 'Этажность: ' . $arRequest['floor'] . '<br/>';
  }

  if(isset($arRequest['mansarda']) && $arRequest['mansarda']) {
    $message .= 'Мансарда: Да' . '<br/>';
  }

  if(isset($arRequest['house_size_x']) && $arRequest['house_size_x']) {
    $message .= 'Размер дома, длина (м.): ' . $arRequest['house_size_x'] .  '<br/>';
  }

  if(isset($arRequest['house_size_y']) && $arRequest['house_size_y']) {
    $message .= 'Размер дома, ширина (м.): ' . $arRequest['house_size_y'] .  '<br/>';
  }

  if(isset($arRequest['walls']) && $arRequest['walls']) {
    $message .= 'Толщина стен (мм.): ' . $arRequest['walls'] .  '<br/>';
  }

  if(isset($arRequest['walls_custom']) && $arRequest['walls_custom']) {
    $message .= 'Толщина стен (мм.): ' . $arRequest['walls_custom'] .  '<br/>';
  }

  if(isset($arRequest['overlappings']) && $arRequest['overlappings']) {
    $message .= 'Толщина перекрытий (мм.): ' . $arRequest['overlappings'] .  '<br/>';
  }

  if(isset($arRequest['overlappings_custom']) && $arRequest['overlappings_custom']) {
    $message .= 'Толщина перекрытий (мм.): ' . $arRequest['overlappings_custom'] .  '<br/>';
  }

  if(isset($arRequest['roof']) && $arRequest['roof']) {
    $message .= 'Толщина кровли (мм.): ' . $arRequest['roof'] .  '<br/>';
  }

  if(isset($arRequest['roof_custom']) && $arRequest['roof_custom']) {
    $message .= 'Толщина кровли (мм.): ' . $arRequest['roof_custom'] .  '<br/>';
  }

  CEvent::SendImmediate('FORM_BIG', SITE_ID, [
    'MESSAGE' => $message,
  ]);

  leadAdd(
    'Заявка с сайта iskoni.ru',
    $arRequest['user_name'],
    $arRequest['user_phone'],
    $message,
    'Заявка с формы'
  );

  echo json_encode('ok');