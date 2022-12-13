<?
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
  $APPLICATION->SetTitle("Утепление");
?><div class="page-promo">
  <img alt="Утепление всего дома под ключ"
    src="https://iskoni.ru/local/templates/iskoni_2019/images/wb_new/DSC_0731-2.jpg" class="page-promo-bg">

  <div class="container page-promo__container">
    <div class="page-promo__inner">
      <div class="page-promo__hed">
        <div class="page-promo__title title">
          <h1>
            <?
                $APPLICATION->IncludeFile(
                  SITE_TEMPLATE_PATH . '/texts/warming/top-promo-block/h1.php',
                  array(),
                  array(
                    'SHOW_BORDER' => true,
                    'NAME' => 'Заголовок H1',
                    'MODE' => 'text',
                    'TEMPLATE' => 'block',
                  )
                );
              ?>
          </h1>
          <div class="page-promo__title-desc">
            <?
                $APPLICATION->IncludeFile(
                  SITE_TEMPLATE_PATH . '/texts/warming/top-promo-block/title.php',
                  array(),
                  array(
                    'SHOW_BORDER' => true,
                    'NAME' => 'Заголовок',
                    'MODE' => 'text',
                    'TEMPLATE' => 'block',
                  )
                );
              ?>
          </div>
        </div>
        <?
            $APPLICATION->IncludeFile(
              SITE_TEMPLATE_PATH . '/texts/warming/top-promo-block/list.php',
              array(),
              array(
                'SHOW_BORDER' => true,
                'NAME' => 'Список',
                'MODE' => 'html',
                'TEMPLATE' => 'block',
              )
            );
          ?>
      </div>
      <div class="page-promo__form bg-line">
        <div class="page-promo__form-title">
          <?
              $APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . '/texts/warming/top-promo-block/text-1.php',
                array(),
                array(
                  'SHOW_BORDER' => true,
                  'NAME' => 'Текст №1',
                  'MODE' => 'text',
                  'TEMPLATE' => 'block',
                )
              );
            ?>
          <?
              $APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . '/texts/warming/top-promo-block/text-2.php',
                array(),
                array(
                  'SHOW_BORDER' => true,
                  'NAME' => 'Текст №1',
                  'MODE' => 'text',
                  'TEMPLATE' => 'block',
                )
              );
            ?>
        </div>
        <form action="" class="page-promo__form-form js-warming-form">
          <label for="">Ваше имя</label> <input type="text" placeholder="Имя" name="user_name" required="" title="">
          <label for="">Ваш телефон</label> <input type="text" placeholder="Телефон" name="user_phone" required=""
            title="" class="js-phone-mask"> <input type="submit" class="btn" value="рассчитать стоимость"> <span
            class="form__polisy">
            Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных </span> <input
            type="hidden" name="from_where" value="Верхний промо-блок"> <input type="hidden" name="user_email"
            value="Не указан">
        </form>
      </div>
    </div>
    <!-- data-da=".single-content, 768" -->
    <ul class="page-promo__advans">
      <li> <span class="page-promo-icon"><img alt="icon"
            src="https://iskoni.ru/local/templates/iskoni_2019/images/wb_new/flag_g.svg"></span> <span
          class="page-promo-advans__inner"> <span class="page-promo-advans-hed">Произведено в Германии</span> <span
            class="page-promo-advans-text">сертифицированный в ЕС эко-материал</span> </span> </li>
      <li> <span class="page-promo-icon"><img alt="icon"
            src="https://iskoni.ru/local/templates/iskoni_2019/images/wb_new/natures.svg"></span> <span
          class="page-promo-advans__inner"> <span class="page-promo-advans-hed">100% натурально</span> <span
            class="page-promo-advans-text">без боратов и фунгицидов </span> </span> </li>
      <li> <span class="page-promo-icon"><img alt="icon"
            src="https://iskoni.ru/local/templates/iskoni_2019/images/wb_new/garant.svg"></span> <span
          class="page-promo-advans__inner"> <span class="page-promo-advans-hed">гарантия 10 лет</span> <span
            class="page-promo-advans-text">на материал и качество утепления</span> </span> </li>
    </ul>
  </div>
</div>
<div class="single-content">
  <div class="container d-flex">
    <div class="single__hed">
      <div class="single__title">
        <h2 class="section-title">
          <?
              $APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . '/texts/warming/natural-material-block/h2.php',
                array(),
                array(
                  'SHOW_BORDER' => true,
                  'NAME' => 'Заголовок H2',
                  'MODE' => 'text',
                  'TEMPLATE' => 'block',
                )
              );
            ?>
        </h2>
      </div>
      <ul class="single__list">
        <li>
          <?
              $APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . '/texts/warming/natural-material-block/single-list.php',
                array(),
                array(
                  'SHOW_BORDER' => true,
                  'NAME' => 'Текст',
                  'MODE' => 'text',
                  'TEMPLATE' => 'block',
                )
              );
            ?>
        </li>
      </ul>
    </div>
    <div class="single__text">
      <?
          $APPLICATION->IncludeFile(
            SITE_TEMPLATE_PATH . '/texts/warming/natural-material-block/text.php',
            array(),
            array(
              'SHOW_BORDER' => true,
              'NAME' => 'Текст',
              'MODE' => 'html',
              'TEMPLATE' => 'block',
            )
          );
        ?>
    </div>
  </div>
  <!-- /.container d-flex -->
  <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"natural-material-block",
	Array(
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
		"COMPONENT_TEMPLATE" => "natural-material-block",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "12",
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
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
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
);?>
  <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"warming",
	Array(
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
		"COMPONENT_TEMPLATE" => "warming",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "13",
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
		"PROPERTY_CODE" => array(0=>"ALT_NAME",1=>"TITLE",2=>"LIST",3=>"TEXT_WITH_BOTTOM",4=>"",),
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
);?>
</div>
<!-- /.single-content -->
<div class="calculate single__calculate">
  <div class="container">
    <div class="single__calculate__wrapper bg-line_form ">
      <div class="single__servis__title">
        <h3>Убедитесь лично: получите 2 расчета сметы утепления</h3>
      </div>
      <div class="calculate__material-inner d-flex">
        <div class="calculate__material-block d-flex">
          <div class="calculate__material-icon">
            <img alt="icon" src="https://iskoni.ru/local/templates/iskoni_2019/images/wb_new/icon_material_2.svg">
          </div>
          <div class="calculate__material__content">
            <div class="calculate__material-name">
              <!-- Или изображение логотипа компании или текст --> <img alt="Эко-вата"
                src="https://iskoni.ru/local/templates/iskoni_2019/images/wb_new/icon_material_1.svg">
              <!-- <span>Эко-вата</span> -->
            </div>
            <ul class="calculate__material-list page-promo__list">
              <li>100% натурально из древесины</li>
              <li>без боратов и фунгицидов<br>
              </li>
              <li>не горит</li>
              <li>гипоаллергенно<br>
              </li>
            </ul>
            <div class="calculate__material-format">
              Рекомендованная плотность для стен: <b>от 32 кг/м³</b>
            </div>
          </div>
        </div>
        <div class="calculate__material-block d-flex">
          <div class="calculate__material-icon">
            <img alt="icon" src="https://iskoni.ru/local/templates/iskoni_2019/images/wb_new/icon_material_3.svg">
          </div>
          <div class="calculate__material__content">
            <div class="calculate__material-name">
              <!-- Или изображение логотипа компании или текст -->
              <!-- <img src="https://iskoni.ru/local/templates/iskoni_2019/images/wb_new/icon_material_1.svg"
                    alt="Эко-вата"> --> Эко-вата
            </div>
            <ul class="calculate__material-list page-promo__list red_list">
              <li>из макулатуры<br>
              </li>
              <li>с добавлением боратов и фунгицидов<br>
              </li>
            </ul>
            <div class="calculate__material-format">
              Рекомендованная плотность для стен: <b>от 55 кг/</b>м³
            </div>
          </div>
        </div>
      </div>
      <!-- /.calculate__material-inner -->
      <form action="" id="calculate" method="post" class="js-big-form">
        <div class="checkbox__inner">
          <div class="row__checkbox__inner">
            <div class="form-checkbox__title">
              выбор этажности
            </div>
            <div class="custom__input__wrp">
              <span class="row__checkbox-hed">Этажность</span>
              <div class="custom__input__inner">
                <!-- Если надо простой чексбок, поменяй type на checkbox --> <input type="radio" name="floor" id="1"
                  class="custom__input" value="1 этажный"> <label for="1">1 этажный</label>
              </div>
              <div class="custom__input__inner">
                <input type="radio" name="floor" id="2" class="custom__input" value="2 этажный"> <label for="2">2
                  этажный</label>
              </div>
              <div class="custom__input__inner">
                <input type="radio" name="floor" id="3" class="custom__input" value="3 этажный"> <label for="3">3
                  этажный</label>
              </div>
              <div class="custom__input__inner">
                <input type="radio" name="floor" id="4" class="custom__input" value="4 этажный"> <label for="4">4
                  этажный</label>
              </div>
            </div>
            <div class="custom__input__wrp">
              <span class="row__checkbox-hed">Дополнительно</span>
              <div class="custom__input__inner">
                <input type="checkbox" name="mansarda" id="5" class="custom__input"> <label for="5">Мансардный
                  этаж</label>
              </div>
            </div>
          </div>
          <!-- /.form-group -->
          <div class="row__checkbox__inner">
            <div class="form-checkbox__title">
              выбор размеров
            </div>
            <div class="custom__input__wrp input-text_wrp">
              <span class="row__checkbox-hed">Размеры дома</span>
              <div class="input-text__item first-child__input">
                <label> <input type="number" name="house_size_x" value="" placeholder="Укажите длину (в метрах)">
                  длина (м.) </label>
              </div>
              <div class="input-text__item last-child__input">
                <label> <input type="number" name="house_size_y" value="" placeholder="Укажите ширину (в метрах)">
                  ширина (м.) </label>
              </div>
            </div>
          </div>
          <div class="row__checkbox__inner checkbox__construction">
            <div class="form-checkbox__title">
              типы конструкций и толщина утепления
            </div>
            <div class="custom__input__wrp ">
              <span class="row__checkbox-hed">Cтены (мм)</span>
              <div class="custom__input__inner">
                <!-- Если надо простой чексбок, поменяй type на checkbox --> <input type="radio" name="walls" id="6"
                  class="custom__input" value="не утеплять"> <label for="6">не утеплять</label>
              </div>
              <div class="custom__input__inner">
                <input type="radio" name="walls" id="7" class="custom__input" value="150"> <label for="7">150</label>
              </div>
              <div class="custom__input__inner">
                <input type="radio" name="walls" id="8" class="custom__input" value="200"> <label for="8">200</label>
              </div>
              <div class="custom__input__inner">
                <input type="radio" name="walls" id="9" class="custom__input" value="250"> <label for="9">250</label>
              </div>
              <div class="custom__input__inner">
                <input type="radio" name="walls" id="10" class="custom__input" value="300"> <label for="10">300</label>
              </div>
              <div class="input__text__last">
                <input type="text" name="walls_custom" placeholder="0" value="">
              </div>
            </div>
            <div class="custom__input__wrp ">
              <span class="row__checkbox-hed">Перекрытия (мм)</span>
              <div class="custom__input__inner">
                <!-- Если надо простой чексбок, поменяй type на checkbox --> <input type="radio" name="overlappings"
                  id="11" class="custom__input" value="не утеплять"> <label for="11">не утеплять</label>
              </div>
              <div class="custom__input__inner">
                <input type="radio" name="overlappings" id="12" class="custom__input" value="150"> <label
                  for="12">150</label>
              </div>
              <div class="custom__input__inner">
                <input type="radio" name="overlappings" id="13" class="custom__input" value="200"> <label
                  for="13">200</label>
              </div>
              <div class="custom__input__inner">
                <input type="radio" name="overlappings" id="14" class="custom__input" value="250"> <label
                  for="14">250</label>
              </div>
              <div class="custom__input__inner">
                <input type="radio" name="overlappings" id="15" class="custom__input" value="300"> <label
                  for="15">300</label>
              </div>
              <div class="input__text__last">
                <input type="text" name="overlappings_custom" placeholder="0" value="">
              </div>
            </div>
            <div class="custom__input__wrp ">
              <span class="row__checkbox-hed">Кровля (мм)</span>

              <div class="custom__input__inner">
                <input type="radio" name="roof" id="16" class="custom__input" value="не утеплять">
                <label for="16">не утеплять</label>
              </div>
              <div class="custom__input__inner">
                <input type="radio" name="roof" id="17" class="custom__input" value="150">
                <label for="17">150</label>
              </div>
              <div class="custom__input__inner">
                <input type="radio" name="roof" id="18" class="custom__input" value="200">
                <label for="18">200</label>
              </div>
              <div class="custom__input__inner">
                <input type="radio" name="roof" id="19" class="custom__input" value="250">
                <label for="19">250</label>
              </div>
              <div class="custom__input__inner">
                <input type="radio" name="roof" id="20" class="custom__input" value="300">
                <label for="20">300</label>
              </div>
              <div class="input__text__last">
                <input type="text" name="roof_custom" placeholder="0" value="">
              </div>
            </div>
          </div>
          <!-- /.checkbox__construction -->
        </div>
        <div class="row__checkbox__inner row__submit_bottom">
          <div class="form-group">
            <div class="form-checkbox__title">
              контактные данные
            </div>
            <div class="row__sumbit__inner">
              <div class="form-group">
                <div class="form-group__hed">
                  Ваше имя
                </div>
                <input class="form-control" type="text" name="user_name" placeholder="Введите имя" required="">
              </div>
              <div class="form-group">
                <div class="form-group__hed">
                  Ваш телефон
                </div>
                <input class="form-control crm-webform-input-phone js-phone-mask" type="text" name="user_phone"
                  placeholder="Введите телефон" required="">
              </div>
              <div class="form-group">
                <div class="form-group__hed">
                  Ваш email
                </div>
                <input class="form-control" type="email" name="user_email" placeholder="Введите email">
              </div>
              <div class="form-group">
                <input class="btn btn-orange" type="submit" id="send_form" name="send_form" value="Отправить">
              </div>
            </div>
          </div>
        </div>
        <span class="policy">Нажимая кнопку «Отправить», я даю свое согласие на <a href="#!">обработку моих персональных
            данных</a></span>
      </form>
      <div class="row form-result text-center">
      </div>
    </div>
  </div>
</div>
<div class="about_material">
  <div class="container">
    <div class="single__servis single__advans">
      <div class="single__servis__hed">
        <div class="single__servis__title">
          <h2>
            <?
                $APPLICATION->IncludeFile(
                  SITE_TEMPLATE_PATH . '/texts/warming/about-block/h2.php',
                  array(),
                  array(
                    'SHOW_BORDER' => true,
                    'NAME' => 'Заголовок H2',
                    'MODE' => 'text',
                    'TEMPLATE' => 'block',
                  )
                );
              ?>
          </h2>
        </div>
        <div class="single__servis__text boreder-dashed">
          <?
              $APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . '/texts/warming/about-block/text.php',
                array(),
                array(
                  'SHOW_BORDER' => true,
                  'NAME' => 'Текст',
                  'MODE' => 'html',
                  'TEMPLATE' => 'block',
                )
              );
            ?>
        </div>
        <div class="single__servis__advans">
          <?
              $APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . '/texts/warming/about-block/list.php',
                array(),
                array(
                  'SHOW_BORDER' => true,
                  'NAME' => 'Текст',
                  'MODE' => 'html',
                  'TEMPLATE' => 'block',
                )
              );
            ?>
        </div>
      </div>
      <!-- ./single__servis__hed -->
      <div class="single__servis__img _bgi">
        <?$APPLICATION->IncludeComponent(
				"iskoni:image.view",
				".default",
				Array(
					"COMPONENT_TEMPLATE" => ".default",
					"FILE_PATH" => "/local/templates/iskoni_2019/images/wb_new/servis_6.jpg"
				)
			);?>
      </div>
    </div>
    <br>
    <!-- /.single__servis -->
  </div>
</div>
<div class="environmental_material">
  <div class="container">
    <div class="environmental__hed">
      <div class="environmental__title">
        <h2>
          <?
              $APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . '/texts/warming/clear-block/h2.php',
                array(),
                array(
                  'SHOW_BORDER' => true,
                  'NAME' => 'Заголовок H2',
                  'MODE' => 'text',
                  'TEMPLATE' => 'block',
                )
              );
            ?>
        </h2>
      </div>
      <?
          $APPLICATION->IncludeFile(
            SITE_TEMPLATE_PATH . '/texts/warming/clear-block/list.php',
            array(),
            array(
              'SHOW_BORDER' => true,
              'NAME' => 'Текст',
              'MODE' => 'html',
              'TEMPLATE' => 'block',
            )
          );
        ?>
    </div>
    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"photo",
	Array(
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
		"COMPONENT_TEMPLATE" => "photo",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "14",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "50",
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
		"PROPERTY_CODE" => array(0=>"",1=>"",),
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
);?>
  </div>
</div>
<div class="specifications">
  <div class="container">
    <div class="specifications__title title">
      <h2>
        <?
            $APPLICATION->IncludeFile(
              SITE_TEMPLATE_PATH . '/texts/warming/properties-block/h2.php',
              array(),
              array(
                'SHOW_BORDER' => true,
                'NAME' => 'Заголовок H2',
                'MODE' => 'text',
                'TEMPLATE' => 'block',
              )
            );
          ?>
      </h2>
    </div>
    <div class="specifications__list">
      <div class="specifications__item">
        <div class="specifications__name">
          Ширина х длина х высота мешка
        </div>
        <div class="specifications__meta">
          400 х 800 х 330 мм
        </div>
      </div>
      <div class="specifications__item">
        <div class="specifications__name">
          Вес мешка
        </div>
        <div class="specifications__meta">
          15кг
        </div>
      </div>
      <div class="specifications__item">
        <div class="specifications__name">
          Стандартная палета
        </div>
        <div class="specifications__meta">
          21 мешок
        </div>
      </div>
      <div class="specifications__item">
        <div class="specifications__name">
          λ
        </div>
        <div class="specifications__meta">
          0,040 (Вт/мК)
        </div>
      </div>
      <div class="specifications__item">
        <div class="specifications__name">
          λD
        </div>
        <div class="specifications__meta">
          0,039 (Вт/мК)
        </div>
      </div>
      <div class="specifications__item">
        <div class="specifications__name">
          Коэф. сопротивл. диффузии вод. пара µ
        </div>
        <div class="specifications__meta">
          1-2
        </div>
      </div>
      <div class="specifications__item">
        <div class="specifications__name">
          Плотность при монтаже:
        </div>
        <div class="specifications__meta">
          29-50 (кг/м³)
        </div>
      </div>
      <div class="specifications__item">
        <div class="specifications__name">
          горизонтальном (открытом) (кг/м3)
        </div>
        <div class="specifications__meta">
          25-50 (кг/м³)
        </div>
      </div>
      <div class="specifications__item">
        <div class="specifications__name">
          закрытом
        </div>
        <div class="specifications__meta">
          29-50 (кг/м³)
        </div>
      </div>
      <div class="specifications__item">
        <div class="specifications__name">
          Огнестойкость по EN 13501-1 / РФ
        </div>
        <div class="specifications__meta">
          Е/Г4
        </div>
      </div>
      <div class="specifications__item">
        <div class="specifications__name">
          Допуск
        </div>
        <div class="specifications__meta">
          ЕТА-12/0181
        </div>
      </div>
    </div>
    <!-- /.specifications__list -->
  </div>
  <!-- /.container -->
</div>
<!-- /.specifications -->
<div class="single__table _da-padding">
  <div class="container">
    <div class="table__title title">
      <h2>Таблица плотности</h2>
    </div>
    <div class="table__inner">
      <table class="table">
        <tbody>
          <tr>
            <th>
              Толщина слоя/Конструкция
            </th>
            <th>
              до 18 см
            </th>
            <th>
              от 19 до 24
            </th>
            <th>
              от 25 до 30
            </th>
            <th>
              от 31 до 40
            </th>
          </tr>
          <tr>
            <td>
              Крыша/перекрытие от 0° до 45°
            </td>
            <td>
              32 - 35 кг/м³
            </td>
            <td>
              32 - 35 кг/м³
            </td>
            <td>
              32 - 35 кг/м³
            </td>
            <td>
              32 - 35 кг/м³
            </td>
          </tr>
          <tr>
            <td>
              Крыша от 45° до 60°
            </td>
            <td>
              32 - 35 кг/м³
            </td>
            <td>
              32 - 35 кг/м³
            </td>
            <td>
              32 - 35 кг/м³
            </td>
            <td>
              32 - 35 кг/м³
            </td>
          </tr>
          <tr>
            <td>
              Максимальная длина*
            </td>
            <td>
              6,00 м
            </td>
            <td>
              6,00 м
            </td>
            <td>
              6,00 м
            </td>
            <td>
              6,00 м
            </td>
          </tr>
          <tr>
            <td>
              Крыша/стена от 60° до 90°
            </td>
            <td>
              32 - 35 кг/м³
            </td>
            <td>
              32 - 35 кг/м³
            </td>
            <td>
              32 - 35 кг/м³
            </td>
            <td>
              32 - 35 кг/м³
            </td>
          </tr>
          <tr>
            <td>
              Максимальная длина*
            </td>
            <td>
              3,50 м
            </td>
            <td>
              3,50 м
            </td>
            <td>
              3,50 м
            </td>
            <td>
              3,50 м
            </td>
          </tr>
          <tr>
            <td>
              Цеховой монтаж с транспортировкой
            </td>
            <td>
              38 кг/м³
            </td>
            <td>
              38 кг/м³
            </td>
            <td>
              38 кг/м³
            </td>
            <td>
              38 кг/м³
            </td>
          </tr>
          <tr>
            <td>
              Открытый монтаж**
            </td>
            <td>
              25 кг/м³
            </td>
            <td>
              25 кг/м³
            </td>
            <td>
              25 кг/м³
            </td>
            <td>
              25 кг/м³
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="s_mounting _da-padding conteiner">
  <div class="container">
    <div class="mounting__title title">
      <h2>
        <?
            $APPLICATION->IncludeFile(
              SITE_TEMPLATE_PATH . '/texts/warming/mounting-block/h2.php',
              array(),
              array(
                'SHOW_BORDER' => true,
                'NAME' => 'Заголовок H2',
                'MODE' => 'text',
                'TEMPLATE' => 'block',
              )
            );
          ?>
      </h2>
    </div>
    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"mounting-steps",
	Array(
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
		"COMPONENT_TEMPLATE" => "mounting-steps",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "15",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "50",
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
		"PROPERTY_CODE" => array(0=>"",1=>"",),
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
);?>
    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"mounting-photo",
	Array(
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
		"COMPONENT_TEMPLATE" => "mounting-photo",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "16",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "50",
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
		"PROPERTY_CODE" => array(0=>"",1=>"",),
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
);?> <br>
  </div>
</div>
<div class="s_equipment _da-padding">
  <div class="container">
    <div class="equipment__title title">
      <h2>
        <?
            $APPLICATION->IncludeFile(
              SITE_TEMPLATE_PATH . '/texts/warming/equipment-block/h2.php',
              array(),
              array(
                'SHOW_BORDER' => true,
                'NAME' => 'Заголовок H2',
                'MODE' => 'text',
                'TEMPLATE' => 'block',
              )
            );
          ?>
      </h2>
    </div>
    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"equipment",
	Array(
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
		"COMPONENT_TEMPLATE" => "equipment",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "17",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "50",
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
		"PROPERTY_CODE" => array(0=>"VALUE",1=>"",),
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
);?>
    <div class="equipment__inner">
      <div class="equipment__item">
        <?$APPLICATION->IncludeComponent(
	"iskoni:image.view",
	"equipment",
	array(
		"COMPONENT_TEMPLATE" => "equipment",
		"FILE_PATH" => "/local/templates/iskoni_2019/images/wb_new/4.jpg",
		"TITLE" => "измельчитель + 3 турбины"
	),
	false
);?>
      </div>
      <div class="equipment__item">
        <?$APPLICATION->IncludeComponent(
	"iskoni:image.view",
	"equipment",
	Array(
		"COMPONENT_TEMPLATE" => "equipment",
		"FILE_PATH" => "/local/templates/iskoni_2019/images/wb_new/3.jpg",
		"TITLE" => "Идеальное распушение материала"
	)
);?>
      </div>
      <div class="equipment__item">
        <div class="equipment__form">
          <div class="page-promo__form bg-line">
            <div class="page-promo__form-title">
              Утепление всего дома за 1 день
            </div>
            <form action="" class="page-promo__form-form js-warming-form">
              <label for="">Ваше имя</label> <input type="text" placeholder="Имя" name="user_name" required="" title="">
              <label for="">Ваш телефон</label> <input type="text" placeholder="Телефон" name="user_phone" required=""
                title="" class="js-phone-mask"> <input type="submit" class="btn" value="Отправить"> <span
                class="form__polisy">Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных
                данных</span> <input type="hidden" name="from_where" value="Блок Оборудование"> <input type="hidden"
                name="user_email" value="Не указан">
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.equipment__inner -->
  </div>
</div>
<div class="s_completed-objects _da-padding">
  <div class="container">
    <div class="completed__title title">
      <h2>
        <?
            $APPLICATION->IncludeFile(
              SITE_TEMPLATE_PATH . '/texts/warming/objects-block/h2.php',
              array(),
              array(
                'SHOW_BORDER' => true,
                'NAME' => 'Заголовок H2',
                'MODE' => 'text',
                'TEMPLATE' => 'block',
              )
            );
          ?>
      </h2>
    </div>
    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"objects",
	Array(
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
		"COMPONENT_TEMPLATE" => "objects",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "18",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "50",
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
		"PROPERTY_CODE" => array(0=>"PROPS",1=>"TITLE",2=>"",),
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
);?>
  </div>
</div>
<div class="faq _da-padding">
  <div class="container">
    <div class="faq__title title">
      <h2>
        <?
            $APPLICATION->IncludeFile(
              SITE_TEMPLATE_PATH . '/texts/warming/objects-block/faq.php',
              array(),
              array(
                'SHOW_BORDER' => true,
                'NAME' => 'Заголовок H2',
                'MODE' => 'text',
                'TEMPLATE' => 'block',
              )
            );
          ?>
      </h2>
    </div>
    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"faq",
	Array(
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
		"COMPONENT_TEMPLATE" => "faq",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "19",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "50",
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
		"PROPERTY_CODE" => array(0=>"",1=>"",),
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
);?>
  </div>
</div>
<div class="why_are_we _da-padding">
  <div class="container">
    <div class="why_are_we_top why_are_we_bg">
      <div class="why_are_we_top__content">
        <div class="why_are_we_top__hed">
          <?
              $APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . '/texts/warming/production-block/h2.php',
                array(),
                array(
                  'SHOW_BORDER' => true,
                  'NAME' => 'Заголовок H2',
                  'MODE' => 'text',
                  'TEMPLATE' => 'block',
                )
              );
            ?>
        </div>
        <ul class="why_are_we_top__list">
          <?
              $APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . '/texts/warming/production-block/text.php',
                array(),
                array(
                  'SHOW_BORDER' => true,
                  'NAME' => 'Текст',
                  'MODE' => 'html',
                  'TEMPLATE' => 'block',
                )
              );
            ?>
        </ul>
        <div class="why_are_we_top__btn">
          <a class="btn btn-orange" href="#!">Подробнее</a>
        </div>
      </div>
      <div class="why_are_we_top__img">
        <img src="https://iskoni.ru/local/templates/iskoni_2019/images/why_are_we_1.png">
      </div>
    </div>
    <!-- /.why_are_we_top -->
  </div>
</div>
<!-- /.why_are_we -->
<div class="s_project _da-padding">
  <div class="container">
    <div class="project__title title">
      <h2>
        <?
            $APPLICATION->IncludeFile(
              SITE_TEMPLATE_PATH . '/texts/warming/projects-block/h2.php',
              array(),
              array(
                'SHOW_BORDER' => true,
                'NAME' => 'Заголовок H2',
                'MODE' => 'text',
                'TEMPLATE' => 'block',
              )
            );
          ?>
      </h2>
    </div>
    <?

      global $arHousesFilter;

      $arHousesFilter = [
        'PROPERTY_SHOW_ALL_VALUE' => 'Да'
      ];

      $APPLICATION->IncludeComponent(
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
        "FILTER_NAME" => "arHousesFilter",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "1",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "30",
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
<div class="form_boottom bg_line_1920">
  <div class="container">
    <div class="page-promo__form">
      <div class="page-promo__form__hed">
        <div class="page-promo__form-title">
          Утепление всего дома за 1 день
        </div>
        <div class="page-promo__form-title__desc">
          Ответим в течение 15 минут
        </div>
      </div>
      <form action="" class="page-promo__form-form js-warming-form">
        <div class="form_item">
          <label for="">Ваше имя</label> <input type="text" placeholder="Имя" name="user_name" required="" title="">
        </div>
        <div class="form_item">
          <label for="">Ваш телефон</label> <input type="text" placeholder="Телефон" name="user_phone" required=""
            title="" class="js-phone-mask">
        </div>
        <div class="form_item">
          <label for="">Ваш email</label> <input type="email" placeholder="Email" name="user_email" required=""
            title="">
        </div>
        <div class="form_item">
          <input type="submit" class="btn" value="Отправить">
        </div>
        <input type="hidden" name="from_where" value="Нижняя форма">
      </form>
      <span class="form__polisy">Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных
        данных</span>
    </div>
  </div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>