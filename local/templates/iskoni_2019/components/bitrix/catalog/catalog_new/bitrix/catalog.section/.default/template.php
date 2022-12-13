<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

  DBG::pred(count($arResult["ITEMS"]));

  $is_mobile = check_mobile_device();

?>

<div class="project__list">

  <?
    foreach ($arResult["ITEMS"] as $arItem):

      $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
      $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
      ?>
      <div class="card__inner" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
        <div class="card">
          <div class="card-thumb">

            <? if ($arItem['PROPERTIES']['STICKER']['VALUE']):?>
              <div class="card-thumb_prom">
                <div class="hit" style="background-color: #<?= $arItem['PROPERTIES']['STICKER']['VALUE_XML_ID']; ?>">
                  <?= $arItem['PROPERTIES']['STICKER']['VALUE']; ?>
                </div>
              </div>
            <? endif; ?>
            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
              <?php
                if ($is_mobile) {
                  $mobile_image = CFile::ResizeImageGet(
                    $arItem["PREVIEW_PICTURE"]["ID"],
                    [
                      'width' => 380,
                      'height' => 200
                    ],
                    BX_RESIZE_IMAGE_PROPORTIONAL,
                    true,
                    [],
                    false,
                    70
                  );
                  $mobile_image = $mobile_image['src'];
                } else $mobile_image = '';
              ?>
              <img class="lazy" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                   data-mobile-src="<?= $mobile_image ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
            </a>
            <div class="card-meta">
              <?= $arItem["PROPERTIES"]['SIZE_FULL']['VALUE'] ?> м&sup2;
            </div>
          </div>
          <div class="card-body">
            <div class="card-head">
              <div class="h6 card-title">
                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                  <?= $arItem["NAME"] ?>
                </a>
                <div class="card-text">
                  Современный проект, удобная планировка, 3 спальни
                </div>
              </div>
              <div class="card-price">
            <span class="card-price__price">
              <? //=number_format($arItem["PROPERTIES"]['PRICE']['VALUE'], 0, '.', '&nbsp;')
              ?>
              <!--руб.-->
            </span>

                <? if ($arItem['PROPERTIES']['PRICE_WITH_ASK']['VALUE'] == 'Да'):?>
                  <span class="card-price_no">Цена по запросу</span>
                <? elseif ($arItem['PROPERTIES']['PRICE_1']['VALUE']):?>
                  <span
                    class="card-price_no">от <?= getPriceFormat($arItem['PROPERTIES']['PRICE_1']['VALUE']); ?> р./м²</span>
                <? endif; ?>

                <? if ($arItem['PROPERTIES']['PRICE_I']['DESCRIPTION'] && $arItem['PROPERTIES']['PRICE_I']['VALUE']['TEXT']):?>
                  <i class="card-price__desc"><?= $arItem['PROPERTIES']['PRICE_I']['DESCRIPTION'] ?>
                    <i class="card-price__prompt">
                      <b> ⓘ
                        <span class="card-price__prompt_text">
                      <?= $arItem['PROPERTIES']['PRICE_I']['~VALUE']['TEXT']; ?>
                    </span>
                      </b>
                    </i>
                  </i>
                <? endif; ?>

                <? if ($arItem['PROPERTIES']['PRICE_2']['VALUE'] && $arItem['PROPERTIES']['PRICE_2']['DESCRIPTION']):?>
                  <div class="additional-price">
                    <span><?= $arItem['PROPERTIES']['PRICE_2']['DESCRIPTION']; ?></span>
                    от <?= getPriceFormat($arItem['PROPERTIES']['PRICE_2']['VALUE']); ?> р.
                  </div>
                <? endif; ?>

                <? if ($arItem['PROPERTIES']['PRICE_3']['VALUE'] && $arItem['PROPERTIES']['PRICE_3']['DESCRIPTION']):?>
                  <div class="additional-price">
                    <span><?= $arItem['PROPERTIES']['PRICE_3']['DESCRIPTION']; ?></span>
                    от <?= getPriceFormat($arItem['PROPERTIES']['PRICE_3']['VALUE']); ?> р.
                  </div>
                <? endif; ?>

                <? if ($arItem['PROPERTIES']['PRICE_DESCRIPTION']['VALUE']['TEXT']):?>
                  <div class="price-description">
                    <?= $arItem['PROPERTIES']['PRICE_DESCRIPTION']['~VALUE']['TEXT']; ?>
                  </div>
                <? endif; ?>

              </div>
            </div>
            <div class="card-footer">

              <a class="btn btn-orange js-callback-with-house"
                 href="#"
                 data-catalog-item-name="<?= $arItem['NAME']; ?>"
                 data-catalog-item-link="<?= $arItem['DETAIL_PAGE_URL']; ?>"
              >рассчитать смету</a>
              <!-- <a class="btn btn-orange callback" href="#!">Узнать цену</a> -->

            </div>
          </div>
        </div>
      </div>

    <? endforeach; ?>
</div>

<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
  <?= $arResult['NAV_STRING'] ?>
<? endif; ?>
<div class="text-center">
  <a href="/catalog/" class="btn-more">
    Все проекты
  </a>
</div>