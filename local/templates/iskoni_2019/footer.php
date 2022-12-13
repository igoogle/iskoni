<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if ($APPLICATION->GetCurPage(false) != SITE_DIR): ?>


<?
  global $arWidePages;
  if (!defined('NO_PAGE_WRAP') && !in_array($APPLICATION->GetCurDir(), $arWidePages)): ?>
</div>
</div>
<? endif ?>


</main> <!-- Main content  : end -->
<? endif ?>

<div class="s_footer__form">
  <div class="container">
    <div class="footer-form--inner">
      <div class="footer-form--hed">

        <div class="footer-form--title"><span>Снижение цен</span> <br> Расчет актуальной стоимости</div>
        <div class="footer-form--text">В связи со снижением цен на пиломатериал обращайтесь за актуальным расчетом
          стоимости проекта</div>

      </div>
      <div class="footer-form">


        <form action="" class="js-form-footer">
          <div class="form-group">
            <label><span>Ваше имя</span>
              <input type="text" placeholder="Имя" value="" class="form-item--text" name="user-name">
            </label>
          </div>
          <div class="form-group">
            <label><span>Ваш телефон*</span>
              <input type="text" placeholder="Телефон" value="" class="form-item--text js-phone-mask" name="user-phone"
                required="" inputmode="text">
            </label>
          </div>
          <div class="form-group">
            <label><span>Сообщение</span>
              <textarea name="message" class="form-item--textarea" placeholder="Сообщение"></textarea>
            </label>
          </div>
          <div class="form-group">
            <input type="submit" class="form-item--submit" value="Отправить заявку">
          </div>
          <input type="hidden" name="catalog-item-name" value="Клест">
          <input type="hidden" name="catalog-item-link" value="https://iskoni.ru/catalog/doma-iz-brusa/10/">
        </form>
        <span class="footer-form-desc">Нажимая кнопку «Отправить», я даю свое согласие на <a href="#!">обработку моих
            персональных
            данных</a></span>

      </div>
    </div>
  </div>
</div>

<!-- Page Footer : start -->
<footer class="page-footer">
  <div class="container">
    <div class="page-footer__top">
      <div class="">
        <a class="navbar-brand" href="/">
          <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo_footer.svg" alt="Iskoni философия своего дома">
        </a>
      </div>
    </div>

    <div class="page-footer__center">

      <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        array(
          "AREA_FILE_SHOW" => "file",
          "PATH" => SITE_DIR . "local/include/footer_text.php"
        )
      ); ?>

    </div>
    <div class="page-footer__bottom">
      <div class="copyright">
        &copy; <?= date('Y') ?>, <?= \Bitrix\Main\Config\Option::get("grain.customsettings", "COPY") ?>
      </div>

      <div class="page-footer__bottom__link">
        <a href="/rekvizity/" class="link confidential" target="_blank">
          Реквизиты компании
        </a><br>
        <a href="/confidential/" class="link confidential" target="_blank">
          Политика конфиденциальности
        </a>
      </div>
    </div>
  </div>
</footer> <!-- Page Footer : end -->


<!-- Fancybox Modal : start -->
<!-- <a data-fancybox data-src="#callback" href="javascript:;" class="btn btn-success">Перезвоните мне</a> -->
<div id="callback" class="fancy-modal">

  <!-- <form class="form">
            <div class="form-head text-center">
                <h5 class="form-title">
                    Хочу такой дом
                </h5>
                <div class="form-meta">
                    Заполните пожалуйста все поля
                </div>
            </div>

            <div class="form-group">
                <input type="text" name="name" class="form-control" data-rule-required="true" data-msg="Ошибка при заполнении" placeholder="Имя">
            </div>

            <div class="form-group">
                <input type="text" name="email" class="form-control" data-rule-required="true" data-msg="Ошибка при заполнении" placeholder="Email">
            </div>

            <div class="form-group">
                <input type="text" name="phone" class="form-control js-phone" data-rule-required="true" data-msg="Ошибка при заполнении" placeholder="Телефон">
            </div>

            <div class="row text-center">
                <div class="col-12">
                    <input type="submit" value="Cвязаться со мной" class="btn btn-orange">
                </div>
            </div>
        </form> -->

  <!--<div id="_contactForm"></div>-->

</div>

<div id="auth" class="fancy-modal fancy-modal_login">
  <div class="tabs">
    <ul class="tabs__controls d-flex">
      <li class="tabs__controls-item active" data-class="first">
        <a href="#" class="tabs__controls-link">
          Вход
        </a>
      </li>
      <li class="tabs__controls-item" data-class="second">
        <a href="#" class="tabs__controls-link">
          Регистрация
        </a>
      </li>
    </ul>
    <ul class="tab__list">
      <li class="tabs__item active tab__list-first">

        <? $APPLICATION->IncludeComponent(
          "bitrix:main.auth.form",
          ".default",
          array(
            "AUTH_FORGOT_PASSWORD_URL" => "",
            "AUTH_REGISTER_URL" => "",
            "AUTH_SUCCESS_URL" => "/personal/"
          )
        ); ?>

      </li>
      <li class="tabs__item tab__list-second">
        <form class="form">

          <div class="form-group">
            <input type="text" name="reg-email" class="form-control" data-rule-required="true"
              data-msg="Ошибка при заполнении" placeholder="Email">
          </div>

          <div class="form-group form-group_pass">
            <label>
              <input type="password" name="reg-phone" class="form-control" data-rule-required="true"
                data-msg="Ошибка при заполнении" placeholder="Пароль">

              <span class="icon toggle-password"></span>
            </label>
          </div>

          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="reg-Ch">
              <label class="custom-control-label" for="reg-Ch">
                Запомнить меня
              </label>
            </div>
          </div>

          <div class="row text-center align-items-center">
            <div class="col-4">
              <input type="submit" value="Вход" class="btn btn-orange">
            </div>
            <div class="col-8">
              <a href="#" class="form-link">Забыли свой пароль?</a>
            </div>
          </div>
        </form>
      </li>
    </ul>
  </div>
</div>

<!-- <a data-fancybox data-src="#success-form" href="javascript:;">Успешная отправка</a> -->
<div id="success-form" class="fancy-modal">
  <div class="section-meta">
    <p>
      Спасибо за обращение!
    </p>
    <p>
      Мы скоро свяжемся с Вами!
    </p>
  </div>
</div>
<!-- Fancybox Modal : end -->


<? $APPLICATION->IncludeComponent(
  "bitrix:main.include",
  "",
  array(
    "AREA_FILE_SHOW" => "file",
    "PATH" => SITE_DIR . "local/include/svg_elements.php"
  )
); ?>

<!----перенесено из jscore.php--->
<!--script src="/bitrix/js/main/loadext/loadextwithextention.min.js"></script-->
<!--script src="/bitrix/js/main/polyfill/promise/js/promise.min.js"></script-->

<!--script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script--перенесено в script1.js-->


<!--<script src="-->
<? //=SITE_TEMPLATE_PATH?>
<!--/libs/dynamicAdapt.js"></script>-->
<!--<script src="-->
<? //=SITE_TEMPLATE_PATH?>
<!--/libs/select2/select2.min.js"></script>-->
<!--<script src="-->
<? //=SITE_TEMPLATE_PATH?>
<!--/js/script1.js"></script>-->
<!--<script src="-->
<? //=SITE_TEMPLATE_PATH?>
<!--/js/wb_js.js"></script>-->
<!--script src="<?= SITE_TEMPLATE_PATH ?>/libs/fancybox/jquery.fancybox.min.js"></script-->
<!--script src="<?= SITE_TEMPLATE_PATH ?>/libs/validation/jquery.validate.min.js"></script-->
<!--script async src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script-->
<!--script src="<?= SITE_TEMPLATE_PATH ?>/libs/mask/masked.js"></script-->
<!--script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script-->
<!--script src="<?= SITE_TEMPLATE_PATH ?>/libs/jquery-ui/jquery-ui.min.js"></script-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function(m, e, t, r, i, k, a) {
  m[i] = m[i] || function() {
    (m[i].a = m[i].a || []).push(arguments)
  };
  m[i].l = 1 * new Date();
  k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
})
(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

ym(89433193, "init", {
  clickmap: true,
  trackLinks: true,
  accurateTrackBounce: true,
  webvisor: true
});
</script>
<noscript>
  <div><img src="https://mc.yandex.ru/watch/89433193" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->


<?
  //CUtil::InitJSCore( array('ajax' , 'jquery' , 'popup' ));
  //$APPLICATION->SetTitle("PopUp");
  CJSCore::Init(array("popup"));

  if (isset($_GET["PAGEN_1"])) {
    $APPLICATION->AddHeadString('<link href="https://' . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI] . '" rel="canonical" />', true);

    $APPLICATION->SetPageProperty('title', $APPLICATION->GetPageProperty('title') . " | Страница " . $_GET["PAGEN_1"]);
  }
?>

<div class="js-hidden">

  <div class="box-modal" id="form-catalog-item--box">
    <div class="box-modal_close arcticmodal-close">закрыть</div>
    <div class="form-catalog--title">ОБРАТНЫЙ ЗВОНОК</div>
    <div class="form-catalog--text">Укажите ваше имя и контактный телефон. Наш менеджер перезвонит вам в ближайшее
      время
    </div>
    <div class="form-catalog--form">
      <form action="" class="js-form-catalog-item">
        <div class="form-group">
          <input type="text" placeholder="Имя" value="" class="form-item--text" name="user-name" />
        </div>
        <div class="form-group">
          <input type="text" placeholder="Телефон*" value="" class="form-item--text js-phone-mask" name="user-phone"
            required />
        </div>
        <div class="form-group">
          <textarea name="message" class="form-item--textarea" placeholder="Сообщение"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" class="form-item--submit" value="Отправить" />
        </div>
        <input type="hidden" name="catalog-item-name" value="" />
        <input type="hidden" name="catalog-item-link" value="" />
      </form>
    </div>
    <div class="form-catalog--small-text">
      Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с
      Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных в
      Согласии на обработку персональных данных *
    </div>
  </div>

  <div class="box-modal" id="form-callback--box">
    <div class="box-modal_close arcticmodal-close">закрыть</div>
    <div class="form-catalog--title">РАССЧИТАТЬ СМЕТУ</div>
    <div class="form-catalog--text">Укажите ваше имя и контактный телефон. Наш менеджер перезвонит вам в ближайшее
      время
    </div>
    <div class="form-catalog--form">
      <form action="" class="js-form-callback">
        <div class="form-group">
          <input type="text" placeholder="Имя" value="" class="form-item--text" name="user-name" />
        </div>
        <div class="form-group">
          <input type="text" placeholder="Телефон*" value="" class="form-item--text js-phone-mask" name="user-phone"
            required />
        </div>
        <div class="form-group">
          <textarea name="message" class="form-item--textarea" placeholder="Сообщение"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" class="form-item--submit" value="Отправить" />
        </div>
        <input type="hidden" name="where" value="Зеленая кнопка в шапке">
      </form>
    </div>
    <div class="form-catalog--small-text">
      Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с
      Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных в
      Согласии на обработку персональных данных *
    </div>
  </div>

</div>

</body>

</html>