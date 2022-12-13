<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? #DBG::pred($arResult); ?>
<div class="sub-page">
  <div class="container">
    <h1 class="page-title">
      <?echo $arResult["NAME"];?>
    </h1>
    <div class="product">
      <div class="d-flex">
        <div class="product-gallery">
          <? if(!empty($arResult['PROPERTIES']['HIT'])): ?>
          <div class="badges">
            <?if($arResult["PROPERTIES"]["HIT"]["VALUE"]):?>
            <div class="product-badge orange">
              ХИТ
            </div>
            <?endif;?>
          </div>
          <?endif?>
          <div class="product-slider">
            <div class="slider">
              <? if(!empty($arResult['DETAIL_PICTURE']['SRC'])): ?>
              <div class="item">
                <a href="<?=$arResult['DETAIL_PICTURE']['SRC']?>" data-fancybox="gallery"> <img
                    src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt=""> </a>
              </div>
              <?endif?>
              <? 
                            foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $k => $v) :
                                $src = CFile::GetPath($v);
                                ?>
              <div class="item">
                <a href="<?=$src?>" data-fancybox="gallery"> <img
                    alt="<?=$arResult['PROPERTIES']['GALLERY']['DESCRIPTION'][$k]?>" src="<?=$src?>
								 "> </a>
              </div>
              <? endforeach ?>
            </div>
          </div>

        </div>
        <div class="product-info">
          <?$APPLICATION->IncludeComponent(
	"svx:super.component",
	"sharebtns",
	Array(
		"CACHE_TIME" => "360000",
		"CACHE_TYPE" => "A"
	)
);?>
          <? if(!empty($arResult['DETAIL_PICTURE']['SRC'])): ?>
          <script>
          document.addEventListener("DOMContentLoaded", function() {
            share.photo = encodeURIComponent("<?=$arResult['DETAIL_PICTURE']['SRC']?>");
          });
          </script>
          <? endif ?>
          <div class="option">
            <div class="row">
              <? if(!empty($arResult['PROPERTIES']['SIZE_FULL']['VALUE'])): ?>
              <div class="col-6">
                <div class="option-item">
                  <div class="d-flex">
                    <div class="option-icon">
                    </div>
                    <div class="option-body">
                      <strong><?=$arResult['PROPERTIES']['SIZE_FULL']['VALUE']?> м²</strong>
                      метраж
                    </div>
                  </div>
                </div>
                <? endif ?>
              </div>
              <? if(!empty($arResult['PROPERTIES']['BATHROOMS']['VALUE'])): ?>
              <div class="col-6">
                <div class="option-item">
                  <div class="d-flex">
                    <div class="option-icon">
                    </div>
                    <div class="option-body">
                      <strong><?=$arResult['PROPERTIES']['BATHROOMS']['VALUE']?></strong> санузла
                    </div>
                  </div>
                </div>
              </div>
              <? endif ?>
              <? if(!empty($arResult['PROPERTIES']['FLOORS']['VALUE'])): ?>
              <div class="col-6">
                <div class="option-item">
                  <div class="d-flex">
                    <div class="option-icon">
                    </div>
                    <div class="option-body">
                      <strong><?=$arResult['PROPERTIES']['FLOORS']['VALUE']?></strong> этажа
                    </div>
                  </div>
                </div>
              </div>
              <? endif ?>
              <? if(!empty($arResult['PROPERTIES']['TERRACE']['VALUE'])): ?>
              <div class="col-6">
                <div class="option-item">
                  <div class="d-flex">
                    <div class="option-icon">
                    </div>
                    <div class="option-body">
                      <strong><?=$arResult['PROPERTIES']['TERRACE']['VALUE']?></strong> терраса
                    </div>
                  </div>
                </div>
              </div>
              <? endif ?>
              <? if(!empty($arResult['PROPERTIES']['BEDROOMS']['VALUE'])): ?>
              <div class="col-6">
                <div class="option-item">
                  <div class="d-flex">
                    <div class="option-icon">
                    </div>
                    <div class="option-body">
                      <strong><?=$arResult['PROPERTIES']['BEDROOMS']['VALUE']?></strong> комнаты
                    </div>
                  </div>
                </div>
              </div>
              <? endif ?>
              <? if(!empty($arResult['PROPERTIES']['BALCONY']['VALUE'])): ?>
              <div class="col-6">
                <div class="option-item">
                  <div class="d-flex">
                    <div class="option-icon">
                    </div>
                    <div class="option-body">
                      <strong><?=$arResult['PROPERTIES']['BALCONY']['VALUE']?></strong> балкон
                    </div>
                  </div>
                </div>
              </div>
              <? endif ?>
            </div>
          </div>
          <!--Start Des -->
          <div class="tabs">
            <ul class="tabs__caption">
              <li class="p01 active">Утепленный клееный брус</li>
              <li class="p02">Клееный брус</li>
            </ul>
            <div class="p01 tabs__content active">
              <div class="price-info">
                * Цена может увеличиться или уменьшиться в зависимости от выбранных материалов
              </div>
              <table>
                <tbody>
                  <tr>
                    <td rowspan="2">
                      <div class="icon1">
                        <img src="/local/templates/iskoni_2019/images/icon1.svg" alt="">
                      </div>
                    </td>
                    <td>
                      200х180(h)
                    </td>
                    <td>
                      <b><?=number_format($arResult["PROPERTIES"]['PRICE']['VALUE'], 0, '.', '&nbsp;')?> руб.*</b>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      220х180(h)
                    </td>
                    <td>
                      <button class="b24-web-form-popup-btn-8 btn" id="aclick_test">Узнать цену</button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <br>
              <div class="product-btns">
                <? if(!empty($arResult['PROPERTIES']['PRESENTATION']['VALUE']) && false): ?> <a
                  href="<?=$arResult['PROPERTIES']['PRESENTATION']['VALUE']?>" target="_blank" class="btn btn-success">
                  Презентация дома </a>
                <?endif?> <button class="btn btn-orange js-callback">Получить смету</button> <a id="click_test"
                  class="btn btn-orange" href="javascript:void(0);">Комплектация</a>
              </div>
            </div>
            <style>
            .icon1 {
              margin: 5px 20px;
            }

            .icon2 {
              margin: 5px 20px;
            }

            table img {
              height: 38px;
              width: 41.3px;
            }

            .price-info {
              font-size: 11px;
              line-height: 13px;
              margin-bottom: 16px;
              padding: 5px;
            }

            table,
            .price {
              font-size: 13px;
              font-weight: 600;
              letter-spacing: -0.23px;
              line-height: 13px;
            }

            tr {
              height: 24px;
              margin: 6px;
              background-color: #E0E0E0;
            }

            tr:before {
              margin: 5px;
            }

            td {
              padding: 5px;
            }

            #aclick_test {
              box-sizing: border-box;
              height: 18px;
              width: 82px;
              border-radius: 2px;
              border: 1px solid #97B220;
              font-size: 11px;
              line-height: 11px;
              color: #97B220;
              padding: 3px 0px;
            }

            .tabs__caption {
              height: 24px;
            }

            li.p01,
            li.p02 {
              display: block;
              width: 50%;
              float: left;
              height: 56px;
              padding: 4px 25px;
              font-size: 15px;
              line-height: 15px;
              text-align: center;
            }


            li.p01.active,
            li.p01 {
              float: left;
            }

            li.p02.active,
            li.p02 {
              float: right;
            }

            li.p01.active,
            li.p02.active {
              background-color: rgba(224, 224, 224, 0.5);
            }

            .tabs__content.active {
              display: block;
            }

            #list .p01,
            #list .p02 {
              width: 50%;
              background-color: rgba(224, 224, 224, 0.5);
              text-align: center;

              height: 100px;
            }

            #list .p0 {
              float: left;
            }

            #list .p02 {
              float: right;
            }

            .activ {
              width: 50%;
              float: right;
            }

            div.p01,
            div.p02 {
              background-color: rgba(224, 224, 224, 0.5);
              padding: 5px;
            }

            div.p01,
            div.p02 {
              display: none;
              margin-top: 32px;
            }
            </style>
            <div class="p02 tabs__content">
              <div class="price-info">
                * Цена может увеличиться или уменьшиться в зависимости от выбранных материалов
              </div>
              <table>
                <tbody>
                  <tr>
                    <td rowspan="3">
                      <div class="icon1">
                        <img src="/local/templates/iskoni_2019/images/icon2.svg" alt="">
                      </div>
                    </td>
                    <td>
                      160х180(h)
                    </td>
                    <td>
                      <b><?=number_format($arResult["PROPERTIES"]['SPRICE']['VALUE'], 2, '.', '&nbsp;')?> млн.руб.*</b>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      220х180(h)
                    </td>
                    <td>
                      <button class="b24-web-form-popup-btn-8 btn" id="aclick_test">Узнать цену</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      220х180(h)
                    </td>
                    <td>
                      <button class="b24-web-form-popup-btn-8 btn" id="aclick_test">Узнать цену</button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <br>
              <div class="product-btns">
                <? if(!empty($arResult['PROPERTIES']['PRESENTATION']['VALUE']) && false): ?> <a
                  href="<?=$arResult['PROPERTIES']['PRESENTATION']['VALUE']?>" target="_blank" class="btn btn-success">
                  Презентация дома </a>
                <?endif?> <button class="b24-web-form-popup-btn-8 btn btn-orange">Получить смету</button> <a
                  id="click_test_1" class="btn btn-orange" href="javascript:void(0);">Комплектация</a>
              </div>
            </div>
            <!--/End Des-->
          </div>
        </div>
      </div>
      <?if($arResult["PROPERTIES"]["DETAIL_RELINK"]["VALUE"]):?>
      <?
                    $rekink_elements =  array(
                        "=ID"=>$arResult["PROPERTIES"]["DETAIL_RELINK"]["VALUE"],
                    );

                    $GLOBALS['RELINK_ELEMENTS'] = array($rekink_elements);
                    ?>

      <?$APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "relink_list",
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
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "N",
                            "DISPLAY_PREVIEW_TEXT" => "N",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "RELINK_ELEMENTS",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "11",
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "N",
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
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
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
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => "relink_list"
                        ),
                        false
                    );?>
      <?endif;?>
      <? if(!empty($arResult["DETAIL_TEXT"])): ?>

      <div class="single__small-banner">
        <div class="small-banner">
          <div class="container">
            <div class="banner-content">

              <div class="description">
                <div class="title">СНИЖЕНИЕ ЦЕН! </div>
                <span class="small-banner__desc">обращайтесь за актуальным расчетом стоимости проекта</span>
              </div>
              <div class="wrapper-button">
                <button class="btn__green js-callback">рассчитать смету</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="desc">
        <div class="section-head text-center">
          <h2 class="section-title">
            <!-- Заголовок легенды дома --> <?=$arResult['NAME']?>
          </h2>
        </div>
        <div class="section-body">
          <p>
            <?=$arResult["DETAIL_TEXT"];?>
          </p>
        </div>
      </div>
      <? endif ?>
      <? if(!empty($arResult['PROPERTIES']['PLANS']['VALUE'][0])): ?>
      <div class="plan text-center">
        <div class="section-head">
          <h2 class="section-title">
            Планировка </h2>
        </div>
        <div class="row ">
          <? foreach ($arResult['PROPERTIES']['PLANS']['VALUE'] as $k => $v): 
                    $src = CFile::GetPath($v); ?>
          <div class="col-6">
            <div class="plan-thumb">
              <a href="<?=$src?>" data-fancybox="plan"> <img src="<?=$src?>" alt=""> </a>
            </div>
            <? if(!empty($arResult['PROPERTIES']['FLOORS_SIZE']['DESCRIPTION'][$k]) && !empty($arResult['PROPERTIES']['FLOORS_SIZE']['VALUE'][$k])): ?>
            <div class="plan-body">
              <?=$arResult['PROPERTIES']['FLOORS_SIZE']['DESCRIPTION'][$k]?>
              <div class="plan-sq">
                <?=$arResult['PROPERTIES']['FLOORS_SIZE']['VALUE'][$k]?> м²
              </div>
            </div>
            <?endif?>
          </div>
          <? endforeach ?>
        </div>
      </div>
      <?endif?>
    </div>
  </div>
  <? #DBG::pred($arResult['PROPERTIES']['EQUIPMENT']); ?>
  <? if(!empty($arResult['PROPERTIES']['EQUIPMENT']['VALUE'][0])): 
    $hlFilter = array('UF_XML_ID' => $arResult['PROPERTIES']['EQUIPMENT']['VALUE']);
?>
  <div id="hideBlock" class="mo">
    <div id="ajax-add-answer">
      <?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.list",
	"complectation",
	Array(
		"BLOCK_ID" => "1",
		"CHECK_PERMISSIONS" => "N",
		"DETAIL_URL" => "",
		"FILTER_NAME" => "hlFilter",
		"PAGEN_ID" => "page",
		"ROWS_PER_PAGE" => "",
		"SEF_MODE" => "N",
		"SORT_FIELD" => "UF_SORT",
		"SORT_ORDER" => "ASC"
	)
);?>
    </div>
  </div>
  <?
//var_dump($arResult["PROPERTIES"]);
$similar =  array(
        "!ID"=>$arResult["ID"],
        array(
            "LOGIC" => "OR",
            "PROPERTY_ADDITIONALLY_VALUE" => $arResult["PROPERTIES"]["ADDITIONALLY"]["VALUE"][0],
            "PROPERTY_stil_VALUE" => $arResult["PROPERTIES"]["stil"]["VALUE"],
        ),
);

$GLOBALS['SIMILAR_PRODUCTS'] = array($similar);
?>
  <style>
  .mo {
    display: none;
  }
  </style>
  <?endif?>
</div>
<br>