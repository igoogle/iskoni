<?
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
  $APPLICATION->SetPageProperty("description", "Строительство домов из бруса под ключ. Брусовые дома под ключ ПО ДОСТУПНЫМ ЦЕНАМ. Заказать деревянный дом из бруса НЕДОРОГО в компании «Искони» по телефону в Москве: 8-495-744-78-99 и по России: 8-800-222-35-77.");
  $APPLICATION->SetPageProperty("title", "Дома из бруса под ключ | Строительство деревянных домов из бруса - цены в Москве");
  $APPLICATION->SetTitle("Строительство домов из клееного бруса под ключ");
?><? $APPLICATION->IncludeComponent(
  "svx:super.component",
  "intro-slider",
  array(
    "AUTOPLAYSPEED" => "6000",
    "CACHE_TIME" => "36000",
    "CACHE_TYPE" => "A",
    "COMPONENT_TEMPLATE" => "intro-slider"
  )
); ?> <!-- Новый блок категорий --> <? $APPLICATION->IncludeComponent(
  "bitrix:news.list",
  "links-main",
  array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",
    "ADD_SECTIONS_CHAIN" => "N",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "N",
    "CACHE_FILTER" => "N",
    "CACHE_GROUPS" => "N",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "CHECK_DATES" => "Y",
    "COMPONENT_TEMPLATE" => "links-main",
    "DETAIL_URL" => "",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "DISPLAY_DATE" => "Y",
    "DISPLAY_NAME" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "FIELD_CODE" => array(0 => "", 1 => "",),
    "FILTER_NAME" => "",
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
    "IBLOCK_ID" => "21",
    "IBLOCK_TYPE" => "content",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "INCLUDE_SUBSECTIONS" => "Y",
    "MESSAGE_404" => "",
    "NEWS_COUNT" => "20",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => ".default",
    "PAGER_TITLE" => "",
    "PARENT_SECTION" => "",
    "PARENT_SECTION_CODE" => "",
    "PREVIEW_TRUNCATE_LEN" => "",
    "PROPERTY_CODE" => array(0 => "LINK", 1 => "",),
    "SET_BROWSER_TITLE" => "N",
    "SET_LAST_MODIFIED" => "N",
    "SET_META_DESCRIPTION" => "N",
    "SET_META_KEYWORDS" => "N",
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "N",
    "SHOW_404" => "N",
    "SORT_BY1" => "ACTIVE_FROM",
    "SORT_BY2" => "SORT",
    "SORT_ORDER1" => "DESC",
    "SORT_ORDER2" => "ASC",
    "STRICT_SECTION_CHECK" => "N"
  )
); ?> <!-- Блок преимущест --> <? $APPLICATION->IncludeComponent(
  "bitrix:highloadblock.list",
  "feature",
  array(
    "BLOCK_ID" => "2",
    "CHECK_PERMISSIONS" => "N",
    "COMPONENT_TEMPLATE" => "feature",
    "DETAIL_URL" => "",
    "FILTER_NAME" => "",
    "PAGEN_ID" => "",
    "ROWS_PER_PAGE" => "",
    "SORT_FIELD" => "UF_SORT",
    "SORT_ORDER" => "ASC"
  )
); ?> <!--  -->
  <div class="project- section- main-projects _padding">
    <div class="container">
      <div class="section-head text-center">
        <h2 class="section-title text-center">Проекты домов</h2>
        <? $APPLICATION->IncludeComponent(
          "bitrix:news.list",
          "houses",
          array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "N",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array("ID", "NAME", "PREVIEW_PICTURE", ""),
            "FILTER_NAME" => "catalogFilter",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "1",
            "IBLOCK_TYPE" => "content",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "21",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array("SIZE_FULL", "PRICE", ""),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "SORT",
            "SORT_BY2" => "ID",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N"
          )
        ); ?>
      </div>
    </div>
    <div class="d-flex">
    </div>
  </div>
<? /*?>
<section class="houses__look">
  <div class="container">
    <h2>С этими домами также смотрят</h2>
    <div class="houses__sl">


      <div class="card__inner">
        <div class="card">
          <div class="card-thumb">
            <a href="#!"> <img src="/bitrix/images/1.gif" class="lazy"
                data-src="/upload/iblock/596/59691338ed759f197721b5b330442479.jpg" alt=""> </a>
          </div>
          <div class="card-body">
            <div class="h6 card-title">
              <a href="#!">Дома из </a>
            </div>
            <div class="card-footer">
              <a class="btn btn-orange" href="/catalog/doma-iz-brusa/9/">Перпейти</a>
            </div>
          </div>
        </div>
      </div>


      <div class="card__inner">
        <div class="card">
          <div class="card-thumb">
            <a href="#!"> <img src="/bitrix/images/1.gif" class="lazy"
                data-src="/upload/iblock/596/59691338ed759f197721b5b330442479.jpg" alt=""> </a>
          </div>
          <div class="card-body">
            <div class="h6 card-title">
              <a href="#!">Дома из утепленного бруса</a>
            </div>
            <div class="card-footer">
              <a class="btn btn-orange" href="/catalog/doma-iz-brusa/9/">Перпейти</a>
            </div>
          </div>
        </div>
      </div>


      <div class="card__inner">
        <div class="card">
          <div class="card-thumb">
            <a href="#!"> <img src="/bitrix/images/1.gif" class="lazy"
                data-src="/upload/iblock/596/59691338ed759f197721b5b330442479.jpg" alt=""> </a>
          </div>
          <div class="card-body">
            <div class="h6 card-title">
              <a href="#!">Дома из утепленного бруса</a>
            </div>
            <div class="card-footer">
              <a class="btn btn-orange" href="/catalog/doma-iz-brusa/9/">Перпейти</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card__inner">
        <div class="card">
          <div class="card-thumb">
            <a href="#!"> <img src="/bitrix/images/1.gif" class="lazy"
                data-src="/upload/iblock/596/59691338ed759f197721b5b330442479.jpg" alt=""> </a>
          </div>
          <div class="card-body">
            <div class="h6 card-title">
              <a href="#!">Дома из утепленного бруса</a>
            </div>
            <div class="card-footer">
              <a class="btn btn-orange" href="/catalog/doma-iz-brusa/9/">Перпейти</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card__inner">
        <div class="card">
          <div class="card-thumb">
            <a href="#!"> <img src="/bitrix/images/1.gif" class="lazy"
                data-src="/upload/iblock/596/59691338ed759f197721b5b330442479.jpg" alt=""> </a>
          </div>
          <div class="card-body">
            <div class="h6 card-title">
              <a href="#!">Дома из утепленного бруса</a>
            </div>
            <div class="card-footer">
              <a class="btn btn-orange" href="/catalog/doma-iz-brusa/9/">Перпейти</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.houses__sl -->
    <div class="list__filter__inner">
      <div class="list__filter__item">
        <div class="list__filter__hed">
          Дома из клееного бруса
        </div>
        <ul class="list__filter__list">
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/odnoetazhnye/">Одноэтажные под ключ</a></li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/s-garazhom">С гаражом</a></li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/panoramnyyi">Панорамный</a></li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/additionally-is-c-krylcom/apply/">С крыльцом</a>
          </li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/additionally-is-s-mansardoy/apply/">С
              мансардой</a></li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/additionally-is-s-terassoy/apply/">С
              верандой</a>
          </li>
        </ul>
      </div>
      <!-- /.list__filter__item -->
      <div class="list__filter__item">
        <div class="list__filter__hed">
          Комнаты
        </div>
        <ul class="list__filter__list">
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/bedrooms-is-1/apply/">1 комната</a></li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/bedrooms-is-2/apply/">2 комнаты</a></li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/bedrooms-is-3/apply/">3 комнаты</a></li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/bedrooms-is-4/apply/">4 комнаты</a></li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/bedrooms-is-5/apply/">5 комнат</a></li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/bedrooms-is-6/apply/">6 комнат</a></li>
        </ul>
      </div>
      <!-- /.list__filter__item -->
      <div class="list__filter__item">
        <div class="list__filter__hed">
          Этажность
        </div>
        <ul class="list__filter__list">
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/floors2-is-odnoehtazhnye/apply/">Одноэтажные
              дома
              из бруса</a></li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/floors2-is-dvukhehtazhnye/apply/">Двухэтажные
              дома
              из бруса</a></li>
        </ul>
      </div>
      <!-- /.list__filter__item -->
      <div class="list__filter__item">
        <div class="list__filter__hed">
          Материал
        </div>
        <ul class="list__filter__list">
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/material2-is-kleenyy-brus/apply/">Дома из
              клееного
              бруса</a></li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/material2-is-profilirovannyy-brus/apply/">Дома
              из
              профилированного бруса</a></li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/material2-is-uteplennyy-brus/apply/">Дома из
              утепленного бруса</a></li>
        </ul>
      </div>
      <!-- /.list__filter__item -->
      <div class="list__filter__item">
        <div class="list__filter__hed">
          Стили
        </div>
        <ul class="list__filter__list">
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/stil-is-barnhaus/apply/">Барнхаус</a></li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/stil-is-gostevoy/apply/">Гостевой</a></li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/stil-is-klassicheskiy/apply/">Классический</a>
          </li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/stil-is-loft/apply/">Лофт</a></li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/filter/clear/apply/">Русский</a></li>
          <li><a href="#!">Шале</a></li>
          <li><a href="https://iskoni.ru/catalog/doma-iz-brusa/fahverk/">Фахверк</a></li>
        </ul>
      </div>
      <!-- /.list__filter__item -->
    </div>
    <!-- /.list__filter__inner -->
  </div>
</section>
<?*/ ?>
  <div class="calculate">
    <div class="container">
      <div class="form-wrapper">
        <h2>Рассчитать стоимость строительства</h2>
        <form action="" id="calculate" method="post">
          <div class="row__custom__input">
            <div class="form-group row__custom__inner">
              <div class="custom-control custom-radio">
                <input type="radio" checked="" class="custom-control-input" value="Утепленный клееный брус"
                       name="material" id="material-one"> <label class="custom-control-label__img" for="material-one">
                  <div class="bx-filter-input-checkbox ">
                    <img alt="Утепленный клееный брус" src="/upload/temp_form/1.svg"> <span class="bx-filter-param-text"
                                                                                            title="1">Утепленный клееный брус (200х180)</span>
                  </div>
                </label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" value="Клееный брус" name="material" id="material-two">
                <label class="custom-control-label__img" for="material-two">
                  <div class="bx-filter-input-checkbox ">
                    <img alt="Клееный брус" src="/upload/temp_form/2.svg"> <span class="bx-filter-param-text" title="1">Клееный брус (200х180)</span>
                  </div>
                </label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" value="Профилированный сухой брус" name="material"
                       id="material-three"> <label class="custom-control-label__img" for="material-three">
                  <div class="bx-filter-input-checkbox ">
                    <img alt="Профилированный сухой брус" src="/upload/temp_form/3.svg"> <span
                      class="bx-filter-param-text" title="1">Профилированный сухой брус (140х190)</span>
                  </div>
                </label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" value="другой материал" name="material"
                       id="material-five"> <label class="custom-control-label__img" for="material-five">
                  <div class="bx-filter-input-checkbox ">
                    <img alt="другой материал" src="/upload/temp_form/4.svg"> <span class="bx-filter-param-text"
                                                                                    title="2">Другой материал</span>
                  </div>
                </label>
              </div>
            </div>
            <div class="row__choice__inner">
              <div class="form-group">
                <div class="form-group__hed">
                  Этажность
                </div>
                <select name="ehtazhnost" class="form-control select">
                  <option value="одноэтажный">Одноэтажный</option>
                  <option selected="" value="двухэтажный">Двухэтажный</option>
                  <option value="одноэтажный с мансардой">Одноэтажный с мансардой</option>
                </select>
              </div>
              <div class="form-group">
                <div class="form-group__hed">
                  Тип кровли
                </div>
                <select name="tip-krovli" class="form-control select">
                  <option selected="" value="металлочерепица">Металлочерепица</option>
                  <option value="мягкая кровля">Мягкая кровля</option>
                  <option value="керамическая черепица">Керамическая черепица</option>
                </select>
              </div>
              <div class="form-group">
                <div class="form-group__hed">
                  Тип фундамента
                </div>
                <select name="tip-fundamenta" class="form-control select">
                  <option selected="" value="ленточный">Ленточный</option>
                  <option value="свайный">Свайный</option>
                  <option value="монолитная плита">Монолитная плита</option>
                </select>
              </div>
              <div class="form-group">
                <div class="form-group__hed">
                  Площадь
                </div>
                <input class="form-control" type="text" name="unique_area" placeholder="до 100 кв. м">
                <!-- <select name="obshchaya-ploshchad" class="form-control select">
                  <option selected="" value="до 100 кв. м">до 100 кв. м</option>
                  <option value="более 100 кв. м">более 100 кв. м</option>
                  <option value="более 200 кв. м">более 200 кв. м</option>
                  <option value="unique">Свой вариант</option>
                </select> -->
              </div>
            </div>
            <div class="form-group">
              <div>
                Планировка
              </div>
              <label class="form-control js-lFile__inner"> <input class="form-control" type="file" name="plan[]"
                                                                  id="plan" placeholder="Прикрепите файл"
                                                                  style="display: none;">
                <button class="js-labelFile"><span class="js-fileName">Прикрепить файл</span></button>
              </label>
            </div>
            <!-- <div class="form-group">
             <div>
               <div>
                 Планировка
               </div>
               <label><input class="type__file select" type="file" id="plan" name="plan[]" value="2" multiple="">Не более
                 двух
                 изображений</label>
             </div>
           </div> -->
            <div class="row__sumbit__inner">
              <div class="form-group">
                <div class="form-group__hed">
                  Ваше имя
                </div>
                <input class="form-control" type="text" name="name" placeholder="Введите имя">
              </div>
              <div class="form-group">
                <div class="form-group__hed">
                  Ваш телефон
                </div>
                <input class="form-control crm-webform-input-phone" type="tel" name="tel" placeholder="Введите телефон">
              </div>
              <div class="form-group">
                <div class="form-group__hed">
                  Ваш email
                </div>
                <input class="form-control" type="email" name="email" placeholder="Введите email">
              </div>
              <div class="form-group">
                <input class="btn btn-orange" type="submit" id="send_form" name="send_form" value="Отправить">
              </div>
            </div>
            <span class="policy">Нажимая кнопку «Отправить», я даю свое согласие на <a href="#!">обработку моих персональных данных</a></span>
            <!-- <div class="form-group">
              <div>
                <div>
                  Планировка
                </div>
                <label><input class="type__file" type="file" id="plan" name="plan[]" value="2" multiple="">Не более двух
                  изображений</label>
              </div>
            </div> -->
          </div>
        </form>
        <div class="row form-result text-center">
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function () {

      $(function () {
        $('input[type=file]').each(function () {
          var $input = $(this),
            $label = $input.next('.js-labelFile'),
            labelVal = $label.html();

          $input.hide();
          $input.on('change', function (element) {
            var fileName = '';
            if (element.target.value) fileName = element.target.value.split('\\').pop();
            fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass(
              'has-file').html(labelVal);
          });
        });
      });


      $('[name="obshchaya-ploshchad"]').change(function () {
        if ($(this).val() == "unique") {
          $('.unique_area').removeClass("hidden");
        } else {
          $('.unique_area').toggleClass('hidden');
        }
      });
      $('#calculate').submit(function (e) {
        e.preventDefault();
        let name = $('#calculate [name="name"]').val(),
          phone = $('#calculate [name="tel"]').val(),
          email = $('#calculate [name="email"]').val(),
          validate = false;
        if (name.length < 2) {
          $('[name="name"]').addClass("error");
          validate = false;
        } else {
          $('[name="name"]').removeClass("error");
          validate = true;
        }
        if (phone.length < 11) {
          $('[name="tel"]').addClass("error");
          validate = false;
        } else {
          $('[name="tel"]').removeClass("error");
          validate = true;
        }
        if (email.length < 5) {
          $('[name="email"]').addClass("error");
          validate = false;
        } else {
          $('[name="email"]').removeClass("error");
          validate = true;
        }

        if (validate) {
          let form_data = new FormData(this),
            totalfiles = document.getElementById('plan').files.length;
          if (totalfiles > 2) {
            $('.form-result').html(
              '<div class="col-12 error">Ошибка. Для загрузки доступно не более двух планировок</div>');
          } else {
            $.ajax({
              type: 'post',
              url: '/post.php',
              data: form_data,
              cache: false,
              contentType: false,
              processData: false,
              success: function (data) {
                if (data.success) {
                  $('.form-result').html(data.success);
                  $('#calculate')[0].reset();
                  $('.unique_area').toggleClass('hidden');
                } else {
                  $('.form-result').html(data.error);
                }
                //$('#result').html(answ);
              }
            });
          }
        }
      });
    });
  </script>
  <style>
      [name="unique_area"] {
          width: 100%;
      }

      .error {
          color: red;
      }

      .success {
          color: green;
      }
  </style>
  <div class="section _padding">
    <div class="container">
      <div class="section-head">
        <h1 class="section-title"><?= $APPLICATION->GetTitle() ?></h1>
      </div>
      <p>
        Наша компания занимается строительством домов из бруса под ключ. У нас свое производство клееного бруса и мы
        строим деревянные дома уже больше 20 лет.
      </p>
      <p>
        Многие считают, что строительство дома – это сложная и трудновыполнимая задача. Наша цель сделать стройку дома
        простым, понятным и приятным для вас занятием. Вы будете удивлены, насколько это легко - построить дом из
        клееного бруса!
      </p>
      <p>
        Пожалуй, главным опасением большинства заказчиков является то, что строительные компании используют при
        строительстве дома самые дешевые материалы и не показывают окончательную смету и цену деревянного дома. Мы
        изначально пошли по другому пути и указываем стоимость строительства под ключ. Наши сметы и цены на деревянные
        дома отличаются прозрачностью и точностью расчетов. В расчетах мы показываем типы применяемых материалов и их
        объемы. При этом по части позиций мы можем работать на ваших строительных материалах, на что многие строительные
        компании идут с большой неохотой!
      </p>
      <p>
        Основа нашего дела и главным преимуществом Iskoni является собственное производство. То есть, заключая с нами
        контракт на строительство деревянного дома, вы можете купить клееный брус от производителя, на который мы даем
        расширенные гарантии и полностью отвечаем за качество.
      </p>
      <p>
        Преимуществом деревянного дома из клееного бруса является высокая экологичность такого дома. Искони люди строили
        и жили в домах из дерева. Также деревянные дома очень теплые и уютные. Представьте себе свежий запах выпечки,
        как он сочетается с приятными хвойными ароматами дома из сосны или кедра! Вы полюбите такой дом с первого
        взгляда, с первого вздоха, обретете здесь уют, спокойствие и крепкое семейное счастье!
      </p>
      <p>
        Так в нашей компании вы можете построить дом из утепленного клееного бруса (его еще называют «полый» клееный
        брус). В качестве утеплителя мы используем экологически чистые материалы, которые повторяют структуру дерева.
        Такой дом в 3 раза теплее и тише дома из обычного бруса. У нас также есть премиальный утеплитель – кора
        пробкового дома. Нам есть чем вас удивить! Уверены, что вы еще никогда не были в доме из пробкового бруса!
      </p>
      <p>
        Напишите или позвоните нам и мы с удовольствием ответим на все вопросы о деревянном доме и поможем подобрать
        подходящий проект дома из бруса.
      </p>
    </div>
  </div>
  <div class="why_are_we">
    <div class="container">
      <div class="why_are_we_top why_are_we_bg">
        <div class="why_are_we_top__content">
          <div class="why_are_we_top__hed">
            Утепленный брус<br>
            в 3 раза теплее
          </div>
          <ul class="why_are_we_top__list">
            <li>100% экологичный материал</li>
            <li>тёплый дышащий деревяный дом</li>
          </ul>
          <div class="why_are_we_top__btn">
            <a class="btn btn-orange" href="/tech/uteplenny-kleeny-brus/">Подробнее</a>
          </div>
        </div>
        <div class="why_are_we_top__img">
          <img src="/local/templates/iskoni_2019/images/why_are_we_1.png">
        </div>
      </div>
      <!-- /.why_are_we_top -->
      <div class="why_are_we_top why_are_we_bg _left_br">
        <div class="why_are_we_top__content">
          <div class="why_are_we_top__hed">
            Высокое качество бруса
          </div>
          <ul class="why_are_we_top__list">
            <li>немецкое оборудование</li>
            <li>отборное сырье</li>
            <li>экологические современные материалы</li>
            <li>строгий контроль качества</li>
            <li>гарантия 10 лет</li>
          </ul>
          <div class="why_are_we_top__btn">
            <a class="btn btn-orange" href="/tech/">Подробнее</a>
          </div>
        </div>
        <div class="why_are_we_top__img">
          <img src="/local/templates/iskoni_2019/images/why_are_we_2.png">
          <div class="why_are_we_top__img_fon">
            <img src="/local/templates/iskoni_2019/images/why_are_we_fon_2.png">
          </div>
        </div>
      </div>
      <div class="why_are_we_top why_are_we_bg _position_abs">
        <div class="why_are_we_top__content">
          <div class="why_are_we_top__hed">
            Безусловная гарантия 10 лет на весь конструктив, качество сборки и утепления
          </div>
          <div class="why_are_we_top__hed__desc">
            С нами Вы забудете о:
          </div>
          <ul class="why_are_we_top__list">
            <li>рассыхание</li>
            <li>щелях</li>
            <li>продувании</li>
            <li>необходимости конопатить</li>
          </ul>
          <div class="why_are_we_top__btn">
            <a class="btn btn-orange" href="/catalog/">Выбрать свой проект</a>
          </div>
        </div>
        <div class="why_are_we_top__img">
          <img src="/local/templates/iskoni_2019/images/why_are_we_3.png">
          <div class="why_are_we_top__img__behind">
            <img src="/local/templates/iskoni_2019/images/why_are_we_fon_5.png">
          </div>
          <div class="why_are_we_top__img__garant">
            <img src="/local/templates/iskoni_2019/images/garant.png">
          </div>
          <div class="why_are_we_top__img__face">
            <img src="/local/templates/iskoni_2019/images/why_are_we_fon_6.png">
          </div>
        </div>
      </div>
      <div class="why_are_we_top why_are_we_bg _left_br _left_br_bottom">
        <div class="why_are_we_top__content">
          <div class="why_are_we_top__hed">
            Клееный брус
          </div>
          <ul class="why_are_we_top__list">
            <li>немецкое оборудование</li>
            <li>отборное сырье</li>
            <li>экологические современные материалы</li>
            <li>строгий контроль качества</li>
            <li>гарантия 10 лет</li>
          </ul>
          <a class="btn btn-orange" href="/tech/">Подробнее</a> <br>
        </div>
        <div class="why_are_we_top__img">
          <img src="/local/templates/iskoni_2019/images/why_are_we_4.png">
          <div class="why_are_we_top__img_fon">
            <img src="/local/templates/iskoni_2019/images/why_are_we_fon_2.png">
          </div>
        </div>
      </div>
      <div class="why_are_we_top why_are_we_bg _position_abs">
        <div class="why_are_we_top__content">
          <div class="why_are_we_top__hed">
            Фахверк
          </div>
          <div class="why_are_we_top__hed__desc">
            Роскошные тёплые деревянные дома:
          </div>
          <ul class="why_are_we_top__list">
            <li>современный дизайн</li>
            <li>панорамное остекление<br>
            </li>
            <li>высококачественные клееные балки</li>
            <li>без усадки и щелей<br>
            </li>
            <li>идеальное утепление</li>
            <li>любые варианты цельнодеревянных стен заполнения <br>
            </li>
            <li>любые варианты отделки<br>
            </li>
          </ul>
          <div class="why_are_we_top__btn">
            <a class="btn btn-orange" href="/catalog/">Выбрать свой проект</a>
          </div>
        </div>
        <div class="why_are_we_top__img">
          <img src="/local/templates/iskoni_2019/images/why_are_we_5.png">
          <div class="why_are_we_top__img__behind">
            <img src="/local/templates/iskoni_2019/images/why_are_we_fon_5.png">
          </div>
          <div class="why_are_we_top__img__garant">
            <img src="/local/templates/iskoni_2019/images/garant.png">
          </div>
          <div class="why_are_we_top__img__face">
            <img src="/local/templates/iskoni_2019/images/why_are_we_fon_6.png">
          </div>
        </div>
      </div>
      <div style="height: 346px;" class="why_are_we_top why_are_we_bg _left_br _left_br_bottom">
        <div class="why_are_we_top__content">
          <div class="why_are_we_top__hed">
            CLT-панели
          </div>
          <div class="why_are_we_top__hed__desc">
            Композитные цельнодеревянные стеновые панели
          </div>
          <ul class="why_are_we_top__list">
            <li>безусадочные стеновые панели</li>
            <li>тёплая дышащая стена</li>
            <li>без щелей и усадки</li>
            <li>эко-утеплители</li>
            <li>запатентованная технология</li>
            <li>заводское изготовление<br>
            </li>
            <li>строгий контроль качества<br>
            </li>
            <li>быстрая сборка<br>
            </li>
            <li>гарантия 30 лет</li>
          </ul>
          <div class="why_are_we_top__btn">
            <a class="btn btn-orange" href="/tech/">Подробнее</a>
          </div>
        </div>
        <div class="why_are_we_top__img" style="background-image: none;">
          <img src="/local/templates/iskoni_2019/images/clt.png">
        </div>
      </div>
    </div>
  </div>
  <!-- /.why_are_we -->
  <div class="video main-video section text-center">
    <div class="container">
      <div class="video-box-wrap-control">
        <div class="video-box-control">
          <a href="https://youtu.be/yYRFCA6Zu1w" data-fancybox="" class="fancybox iframe" rel="youtube_gal"> <img
              src="/local/templates/iskoni_2019/images/video/main-video-1.jpg" class="lazy"
              data-src="/local/templates/iskoni_2019/images/video/main-video-1.jpg"
              data-mobile-src="/local/templates/iskoni_2019/images/video/main-video-1.jpg" alt=""> </a>
          <div>
            Видео-обзор типового проекта Удача+
          </div>
        </div>
        <div class="video-box-control">
          <a href="https://www.youtube.com/watch?v=VxVTDhX4s9Q&t=3s" data-fancybox="" class="fancybox iframe"
             rel="youtube_gal"> <img src="/local/templates/iskoni_2019/images/video/main-video-2.jpg" class="lazy"
                                     data-src="/local/templates/iskoni_2019/images/video/main-video-2.jpg"
                                     data-mobile-src="/local/templates/iskoni_2019/images/video/main-video-2.jpg"
                                     alt=""> </a>
          <div>
            Описание технологии утепленного клееного бруса
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="about- section text-center">
    <div class="container">
      <div class="section-body">
        <div id="mainPageForm">
        </div>
        <script id="bx24_form_inline" data-skip-moving="true">
          setTimeout(function () {
            b24form({
              "id": "8",
              "lang": "ru",
              "sec": "301l6w",
              "type": "inline",
              "node": document.getElementById('mainPageForm')
            });
          }, 6000);
        </script>
      </div>
    </div>
  </div>
  <div class="container news-main">
    <div class="row">
      <? $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "news-main",
        array(
          "ACTIVE_DATE_FORMAT" => "d.m.Y",
          "ADD_SECTIONS_CHAIN" => "N",
          "AJAX_MODE" => "N",
          "AJAX_OPTION_ADDITIONAL" => "",
          "AJAX_OPTION_HISTORY" => "N",
          "AJAX_OPTION_JUMP" => "N",
          "AJAX_OPTION_STYLE" => "Y",
          "CACHE_FILTER" => "N",
          "CACHE_GROUPS" => "Y",
          "CACHE_TIME" => "36000000",
          "CACHE_TYPE" => "A",
          "CHECK_DATES" => "Y",
          "DETAIL_URL" => "/news/#ELEMENT_ID#/",
          "DISPLAY_BOTTOM_PAGER" => "Y",
          "DISPLAY_DATE" => "Y",
          "DISPLAY_NAME" => "Y",
          "DISPLAY_PICTURE" => "Y",
          "DISPLAY_PREVIEW_TEXT" => "Y",
          "DISPLAY_TOP_PAGER" => "N",
          "FIELD_CODE" => array(0 => "", 1 => "",),
          "FILTER_NAME" => "",
          "HIDE_LINK_WHEN_NO_DETAIL" => "N",
          "IBLOCK_ID" => "4",
          "IBLOCK_TYPE" => "content",
          "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
          "INCLUDE_SUBSECTIONS" => "Y",
          "MESSAGE_404" => "",
          "NEWS_COUNT" => "3",
          "PAGER_BASE_LINK_ENABLE" => "N",
          "PAGER_DESC_NUMBERING" => "N",
          "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
          "PAGER_SHOW_ALL" => "N",
          "PAGER_SHOW_ALWAYS" => "N",
          "PAGER_TEMPLATE" => ".default",
          "PAGER_TITLE" => "Новости",
          "PARENT_SECTION" => "",
          "PARENT_SECTION_CODE" => "",
          "PREVIEW_TRUNCATE_LEN" => "",
          "PROPERTY_CODE" => array(0 => "", 1 => "",),
          "SET_BROWSER_TITLE" => "N",
          "SET_LAST_MODIFIED" => "N",
          "SET_META_DESCRIPTION" => "N",
          "SET_META_KEYWORDS" => "N",
          "SET_STATUS_404" => "N",
          "SET_TITLE" => "N",
          "SHOW_404" => "N",
          "SORT_BY1" => "ACTIVE_FROM",
          "SORT_BY2" => "SORT",
          "SORT_ORDER1" => "DESC",
          "SORT_ORDER2" => "ASC",
          "STRICT_SECTION_CHECK" => "N"
        )
      ); ?>
    </div>
  </div>
  <div class="container">
    <h2 class="section-title text-center">
      Строительство деревянного дома состоит из нескольких этапов: </h2>
    <ul>
      <li style="list-style-type: none; margin-top: 5px; margin-left: 30px; line-height: 20px;"> - выбор и утверждение
        проекта дома;
      </li>
      <li style="list-style-type: none; margin-top: 5px; margin-left: 30px; line-height: 20px;"> - выбор и мотаж
        фундамента;
      </li>
      <li style="list-style-type: none; margin-top: 5px; margin-left: 30px; line-height: 20px;"> - возведение
        домокомплекта;
      </li>
      <li style="list-style-type: none; margin-top: 5px; margin-left: 30px; line-height: 20px;"> - монтаж балок
        перекрытий пола и потолка;
      </li>
      <li style="list-style-type: none; margin-top: 5px; margin-left: 30px; line-height: 20px;"> - монтаж стропильной
        системы, утепление кровли;
      </li>
      <li style="list-style-type: none; margin-top: 5px; margin-left: 30px; line-height: 20px;"> - внутренняя и внешняя
        отделка;
      </li>
      <li style="list-style-type: none; margin-top: 5px; margin-left: 30px; line-height: 20px;"> - внутренние и внешние
        инженерные коммуникации.
      </li>
    </ul>
    <p style="font-size: 16px; line-height: 20px;" align="justify">
      Наша компания осуществляет полный цикл работ по строительству брусового дома под ключ.
    </p>
  </div>
<? $APPLICATION->IncludeComponent(
  "bitrix:main.include",
  "",
  array(
    "AREA_FILE_SHOW" => "file",
    "PATH" => SITE_DIR . "local/include/main_slider.php"
  )
); ?>
  <div class="container">
    <h3 class="section-title">Дома из бруса можно разделить по следующим критериям:</h3>
    <ul>
      <li style="list-style-type: none; margin-top: 5px; margin-left: 30px; line-height: 20px;"> - размер дома и площадь
        пятна застройки;
      </li>
      <li style="list-style-type: none; margin-top: 5px; margin-left: 30px; line-height: 20px;"> - этажность;</li>
      <li style="list-style-type: none; margin-top: 5px; margin-left: 30px; line-height: 20px;"> - наличия цоколя и
        мансардного этажа;
      </li>
      <li style="list-style-type: none; margin-top: 5px; margin-left: 30px; line-height: 20px;"> - назначение дома
        (дачный деревянный дом или дом для постоянного проживания).
      </li>
    </ul>
  </div>
<? $APPLICATION->IncludeComponent(
  "bitrix:news.list",
  "main-review",
  array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",
    "ADD_SECTIONS_CHAIN" => "N",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "CACHE_FILTER" => "N",
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "CHECK_DATES" => "Y",
    "DETAIL_URL" => "",
    "DISPLAY_BOTTOM_PAGER" => "Y",
    "DISPLAY_DATE" => "Y",
    "DISPLAY_NAME" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "FIELD_CODE" => array(0 => "", 1 => "",),
    "FILTER_NAME" => "",
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
    "IBLOCK_ID" => "10",
    "IBLOCK_TYPE" => "content",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "INCLUDE_SUBSECTIONS" => "Y",
    "MESSAGE_404" => "",
    "NEWS_COUNT" => "20",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => ".default",
    "PAGER_TITLE" => "Новости",
    "PARENT_SECTION" => "",
    "PARENT_SECTION_CODE" => "",
    "PREVIEW_TRUNCATE_LEN" => "",
    "PROPERTY_CODE" => array(0 => "DATE_REVIEW", 1 => "",),
    "SET_BROWSER_TITLE" => "N",
    "SET_LAST_MODIFIED" => "N",
    "SET_META_DESCRIPTION" => "N",
    "SET_META_KEYWORDS" => "N",
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "N",
    "SHOW_404" => "N",
    "SORT_BY1" => "ACTIVE_FROM",
    "SORT_BY2" => "SORT",
    "SORT_ORDER1" => "DESC",
    "SORT_ORDER2" => "ASC",
    "STRICT_SECTION_CHECK" => "N"
  )
); ?>
  <div class="section- text-center">
    <div class="container">
      <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        array(
          "AREA_FILE_SHOW" => "file",
          "PATH" => SITE_DIR . "local/include/zay.php"
        )
      ); ?>
    </div>
  </div><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>