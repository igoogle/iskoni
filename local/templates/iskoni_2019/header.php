<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

  define('IS_PERSONAL', (CSite::InDir('/personal/')));

  global $arWidePages;

  /**
   * @var $USER
   * @var $APPLICATION
   */
?>
  <!DOCTYPE html>
  <html lang="ru">

  <head itemscope itemtype="http://schema.org/WPHeader">
    <?php
      set_include_path($_SERVER["DOCUMENT_ROOT"]);
      $newPatn = get_include_path();
      if (file_exists($newPatn . '/aweb_seo/_meta.php')) include_once($newPatn . '/aweb_seo/_meta.php');
    ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>
      <? if (isset($metaTitle) && !empty($metaTitle)) {
        echo $metaTitle;
      } else {
        $APPLICATION->ShowTitle();
      } ?>
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.png"/>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">


    <meta property="og:title" content="ИСКОНИ - философия своего дома"/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content="https://iskoni.ru/local/templates/iskoni_2019/images/logo_top.svg"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://iskoni.ru/"/>

    <!--
      <link rel="preload" href="https://iskoni.ru/local/templates/iskoni_2019/fonts/MyriadPro/MyriadPro-Regular.woff"
        as="font" type="font/woff" crossorigin="anonymous">
      <link rel="preload" href="https://iskoni.ru/local/templates/iskoni_2019/fonts/MyriadPro/MyriadPro-Cond.woff" as="font"
        type="font/woff" crossorigin="anonymous">
      <link rel="preload" href="https://iskoni.ru/local/templates/iskoni_2019/fonts/MyriadPro/MyriadPro-SemiCn.woff"
        as="font" type="font/woff" crossorigin="anonymous"> -->
    <link rel="preload" href="https://browser.sentry-cdn.com/4.5.2/bundle.min.js" as="script" crossorigin="anonymous">


    <!-- Vendor CSS -->
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/libs/select2/select2.min.css"); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/libs/slick/slick.css"); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/libs/fancybox/jquery.fancybox.min.css"); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/libs/jquery-ui/jquery-ui.min.css"); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style1.min.css"); ?>

    <!-- Vendor JS -->
    <!--script src="<?= SITE_TEMPLATE_PATH ?>/libs/jquery/jquery-3.2.1.min.js"></script-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <?

      /*if (!$USER->IsAuthorized()) {
        CJSCore::Init(array('ajax', 'json', 'ls', 'session', 'jquery', 'popup', 'pull'));
      }*/

      CJSCore::Init(array('ajax'));

      $pageAsset = Bitrix\Main\Page\Asset::getInstance();
      $pageAsset->addCss(SITE_TEMPLATE_PATH . '/css/jquery.arcticmodal-0.3.css');
      $pageAsset->addCss(SITE_TEMPLATE_PATH . '/css/update.css');

      $pageAsset->addJs(SITE_TEMPLATE_PATH . '/js/jquery-3.6.0.min.js');
      $pageAsset->addJs(SITE_TEMPLATE_PATH . '/js/jquery.inputmask.min.js');
      $pageAsset->addJs(SITE_TEMPLATE_PATH . '/js/jquery.arcticmodal-0.3.min.js');
      $pageAsset->addJs(SITE_TEMPLATE_PATH . '/libs/dynamicAdapt.js');
      $pageAsset->addJs(SITE_TEMPLATE_PATH . '/libs/select2/select2.min.js');
      //$pageAsset->addJs(SITE_TEMPLATE_PATH . '/js/jquery.fancybox-1.3.4.js');
      $pageAsset->addJs(SITE_TEMPLATE_PATH . '/js/update.js');
      $pageAsset->addJs(SITE_TEMPLATE_PATH . '/js/script1.js');
      $pageAsset->addJs(SITE_TEMPLATE_PATH . '/js/wb_js.js');

      $APPLICATION->ShowHead();
    ?>
    <? /*$APPLICATION->ShowCSS(); ?>
  <? $APPLICATION->ShowHeadStrings(); ?>
  <? $APPLICATION->ShowHeadScripts(); */ ?>
    <? if (empty($D) || !isset($D)) {
      $APPLICATION->ShowMeta("description");
    } else {
      echo $metaDesc;
    }
      if (empty($K) || !isset($K)) {
        $APPLICATION->ShowMeta("keywords");
      } else {
        echo $metaKey;
      } ?>

    <? $APPLICATION->IncludeComponent(
      "bitrix:main.include",
      "",
      array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_DIR . "local/include/counters_head.php"
      )
    ); ?>

  </head>

<body>
  <div class="substrate"></div>
  <div hidden itemscope itemtype="http://schema.org/Organization">
    <div itemprop="name">ИСКОНИ - философия своего дома</div>
    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
      <img itemprop="contentUrl" src="https://iskoni.ru/local/templates/iskoni_2019/images/logo_top.svg" alt="Logo">
    </div>
    <link itemprop="url" href="https://iskoni.ru/">
    <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
      <span itemprop="postalCode"></span>,
      <span itemprop="addressCountry">Россия</span>,
      <span itemprop="addressRegion">Московская</span>,
      <span itemprop="addressLocality">Москва</span>,
      <span itemprop="streetAddress"> 1ый Басманный переулок, д. 5/20, стр. 2, оф. 35</span>
    </div>
    <div>Телефон: <a itemprop="telephone" href="tel:+74957447899">+7 (495) 744-78-99</a></div>
    <div>Почта: <a itemprop="email" href="mailto:"></a></div>
    <div>Факс: <a itemprop="telephone" href="tel:+74957447899">+7 (495) 744-78-99</a></div>
  </div>

  <div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
  </div>
  <!-- Page Header : start -->

  <div class="page-header-m">

  </div>

  <header class="page-header ">

    <div class="header_fixit">
      <div class="">

        <div class="d-flex align-items-center">
          <!-- fixed-top -->

          <div class="page-header__top container">

            <div class="logo">
              <a class="navbar-brand" href="/">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo_top.svg" alt="Iskoni философия своего дома">
              </a>
              <span data-da=".fixed-top, 480, last" class="logo__desc">
                Дома из клееного бруса с 1995 года
              </span>

            </div>
            <div class="phones">
              <div data-da=".wb__bottom_mob, 768, 1" class="wb__our_production"><a href="/tech/">Наше производство</a>
              </div>
              <div class="wb__phone__inner">
                <a href="tel:<?= \Bitrix\Main\Config\Option::get("grain.customsettings", "PHONE") ?>"
                   class="phone phone_alloka"><?= \Bitrix\Main\Config\Option::get("grain.customsettings", "PHONE") ?>
                  <span class="wb__phone_svg"><svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M21.3208 7.08333C22.7045 7.3533 23.9762 8.03003 24.9731 9.02691C25.97 10.0238 26.6467 11.2955 26.9167 12.6792M21.3208 1.41667C24.1956 1.73603 26.8764 3.02341 28.923 5.06743C30.9696 7.11144 32.2603 9.7906 32.5833 12.665"
                        stroke="#EC6F16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path
                        d="M31.1667 23.97V28.22C31.1683 28.6145 31.0874 29.0051 30.9294 29.3666C30.7713 29.7281 30.5395 30.0526 30.2488 30.3193C29.958 30.586 29.6148 30.7891 29.241 30.9155C28.8673 31.0419 28.4713 31.0888 28.0783 31.0533C23.719 30.5797 19.5316 29.09 15.8525 26.7042C12.4296 24.5291 9.52755 21.6271 7.35249 18.2042C4.95829 14.5084 3.46833 10.3006 3.00332 5.92167C2.96792 5.52991 3.01448 5.13508 3.14003 4.7623C3.26558 4.38953 3.46738 4.04698 3.73257 3.75646C3.99776 3.46595 4.32054 3.23384 4.68036 3.07491C5.04017 2.91597 5.42914 2.8337 5.82249 2.83333H10.0725C10.76 2.82657 11.4265 3.07003 11.9478 3.51834C12.4691 3.96665 12.8096 4.58922 12.9058 5.27C13.0852 6.63009 13.4179 7.96553 13.8975 9.25083C14.0881 9.75789 14.1293 10.309 14.0164 10.8387C13.9034 11.3685 13.6409 11.8548 13.26 12.24L11.4608 14.0392C13.4775 17.5859 16.4141 20.5225 19.9608 22.5392L21.76 20.74C22.1452 20.3591 22.6315 20.0966 23.1612 19.9836C23.691 19.8706 24.2421 19.9119 24.7492 20.1025C26.0345 20.5821 27.3699 20.9148 28.73 21.0942C29.4182 21.1913 30.0466 21.5379 30.4959 22.0681C30.9452 22.5984 31.1839 23.2752 31.1667 23.97Z"
                        fill="#EC6F16"/>
                    </svg></span>
                </a>

              </div>

              <button data-da=".wb__bottom_mob, 768, 2" class="btn__green js-callback">рассчитать смету</button>
            </div>
            <a href="#" class="navbar-toggler">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>

          <div class="page-header__bottom">
            <div class="container d-flex page-header__bottom-top">
              <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "top",
                array(
                  "ALLOW_MULTI_SELECT" => "N",
                  "CHILD_MENU_TYPE" => "left",
                  "DELAY" => "N",
                  "MAX_LEVEL" => "2",
                  "MENU_CACHE_GET_VARS" => array(),
                  "MENU_CACHE_TIME" => "3600",
                  "MENU_CACHE_TYPE" => "A",
                  "MENU_CACHE_USE_GROUPS" => "Y",
                  "ROOT_MENU_TYPE" => "top",
                  "USE_EXT" => "N",
                  "COMPONENT_TEMPLATE" => "top"
                ),
                false
              ); ?>
              <div class="wb__our_production"><a href="/tech/">Наше производство</a></div>
            </div>
          </div>
        </div>
      </div>

      <div class="navbar-nav-mob" id="js-navbar">


        <div class="navbar-nav-inner">

          <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "top",
            array(
              "ALLOW_MULTI_SELECT" => "N",
              "CHILD_MENU_TYPE" => "left",
              "DELAY" => "N",
              "MAX_LEVEL" => "2",
              "MENU_CACHE_GET_VARS" => array(),
              "MENU_CACHE_TIME" => "3600",
              "MENU_CACHE_TYPE" => "A",
              "MENU_CACHE_USE_GROUPS" => "Y",
              "ROOT_MENU_TYPE" => "top",
              "USE_EXT" => "N",
              "COMPONENT_TEMPLATE" => "top"
            ),
            false
          ); ?>

        </div>
        <div class="social">

          <ul class="list-inline">
            <li>
              <a href="https://www.youtube.com/channel/UC2Cu_rdvqLqQBb4TQ10v-RQ" <?= $target ?>>
                <img src="/local/templates/iskoni_2019/images/youtube.svg">
              </a>
            </li>

            <?
              $vk = \Bitrix\Main\Config\Option::get("grain.customsettings", "SOC_VK");

              if (!empty($vk)):
                $target = $vk == 'javascript:return false;' ? '' : 'target="_blank"';
                ?>
                <li>
                  <a href="<?= $vk ?>" <?= $target ?>>
                    <svg class="icon s-icon_vk_color">
                      <use xlink:href="#s-icon_vk_color"></use>
                    </svg>
                  </a>
                </li>
              <? endif ?>

            <?
              $fb = \Bitrix\Main\Config\Option::get("grain.customsettings", "SOC_FB");

              if (!empty($fb)):
                $target = $fb == 'javascript:return false;' ? '' : 'target="_blank"';
                ?>
                <li>
                  <a href="<?= $fb ?>" <?= $target ?>>
                    <svg class="icon s-icon_facebook_color">
                      <use xlink:href="#s-icon_facebook_color"></use>
                    </svg>
                  </a>
                </li>
              <? endif ?>


            <?
              $tg = \Bitrix\Main\Config\Option::get("grain.customsettings", "SOC_TG");

              if (!empty($tg)):
                $target = $tg == 'javascript:return false;' ? '' : 'target="_blank"';
                ?>
                <li>
                  <a href="<?= $tg ?>" <?= $target ?>>
                    <svg class="icon s-icon_telegram_color">
                      <use xlink:href="#s-icon_telegram_color"></use>
                    </svg>
                  </a>
                </li>
              <? endif ?>

            <?
              $wa = \Bitrix\Main\Config\Option::get("grain.customsettings", "SOC_WA");

              if (!empty($wa)):
                $target = $wa == 'javascript:return false;' ? '' : 'target="_blank"';
                ?>
                <li>
                  <a href="<?= $wa ?>" <?= $target ?>>
                    <img class="icon" src="/local/templates/iskoni_2019/images/wa32.png" alt="">
                  </a>
                </li>
              <? endif ?>

            <?
              $inst = \Bitrix\Main\Config\Option::get("grain.customsettings", "SOC_INST");

              if (!empty($inst)):
                $target = $inst == 'javascript:return false;' ? '' : 'target="_blank"';
                ?>
                <li>
                  <a href="<?= $inst ?>" <?= $target ?>>
                    <img class="icon" src="/local/templates/iskoni_2019/images/instagram16-16.svg" alt="">
                  </a>
                </li>
              <? endif ?>

          </ul>
        </div>
      </div>
    </div>
    <div class="wb__bottom_mob"></div>
  </header>
  <!-- Page Header : end -->

  <!-- Main content  : start -->
<? if ($APPLICATION->GetCurPage(false) != SITE_DIR): ?>
  <main class="page-content">

  <?

  if (!in_array($APPLICATION->GetCurDir(), $arWidePages)):

    $APPLICATION->IncludeComponent(
      "bitrix:breadcrumb",
      "template1",
      array(
        "PATH" => "",
        "SITE_ID" => "s1",
        "START_FROM" => "0",
        "COMPONENT_TEMPLATE" => "template1"
      ),
      false
    );

  endif;

if (!defined('NO_PAGE_WRAP') && !in_array($APPLICATION->GetCurDir(), $arWidePages)): ?>

  <div class="section <?= defined('SECTION_CLASS') ? SECTION_CLASS : '' ?>">
  <div class="container">

<? endif ?>

<? endif ?>