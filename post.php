<?

  require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

  if(!isset($_POST['name'])) {

    echo json_encode(array(
      'error' => "<div class=\"col-12 error\">Ошибка! Что-то пошло не так. Попробуйте позднее.</div>"
    ));
    die();

  }

  if ($_POST["obshchaya-ploshchad"] == "unique") {
    $area = $_POST["unique_area"] . " м.";
  } else {
    $area = $_POST["obshchaya-ploshchad"];
  }

  $arEventFields = array(
    "MATERIAL" => $_POST["material"],
    "EHTAZHNOST" => $_POST["ehtazhnost"],
    "TIP_KROVLI" => $_POST["tip-krovli"],
    "TIP_FUNDAMENTA" => $_POST["tip-fundamenta"],
    "OBSHCHAYA_PLOSHCHAD" => $area,
    "NAME" => $_POST["name"],
    "PHONE" => $_POST["tel"],
    "EMAIL" => $_POST["email"],
    "EMAIL_FROM" => $_POST["email"]
  );

  $arrFileIDs = array();

  if ($_FILES) {

    foreach ($_FILES["plan"]["name"] as $key => $value) {
      $arrFile['name'] = $value;
      $arrFile['size'] = $_FILES["plan"]["size"][$key];
      $arrFile['tmp_name'] = $_FILES["plan"]["tmp_name"][$key];
      $arrFile['type'] = $_FILES["plan"]["type"][$key];
      $arrFile["old_file"] = "";
      $arrFile["del"] = "Y";
      $arrFile["MODULE_ID"] = "";
      $fid = CFile::SaveFile($arrFile, "temp_form");
      $arrFileIDs[] = $fid;
      unset($arrFile, $fid);
    }

  }

  header('Content-Type: application/json');
  if (
    CEvent::Send("ORDER_CALCULATE", SITE_ID, $arEventFields, "Y", "", $arrFileIDs && count($arrFileIDs <= 2))
  ) {
    echo json_encode(array(
      'success' => "<div class=\"col-12 success\">Ваша заявка успешно отправлена!</div>"
    ));
  } else {
    echo json_encode(array(
      'error' => "<div class=\"col-12 error\">Ошибка! Что-то пошло не так. Попробуйте позднее.</div>"
    ));
  }