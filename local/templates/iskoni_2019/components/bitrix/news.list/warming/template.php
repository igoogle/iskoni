<?

  /**
   * @var $arResult
   */

  if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
  $this->setFrameMode(true);
?>
<div class="single__inner">
  <div class="container single__servis__inner">
    <? foreach ($arResult['ITEMS'] as $k => $arItem):

      $this->AddEditAction(
        $arItem['ID'],
        $arItem['EDIT_LINK'],
        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT")
      );

      $this->AddDeleteAction(
        $arItem['ID'],
        $arItem['DELETE_LINK'],
        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))
      );

      $file = CFile::ResizeImageGet(
        $arItem['PREVIEW_PICTURE']['ID'],
        [
          'width' => 370,
          'height' => 999
        ],
        BX_RESIZE_IMAGE_PROPORTIONAL
      )['src'];

      if ($arItem['PROPERTIES']['ALT_NAME']['VALUE'])
        $arItem['NAME'] = $arItem['PROPERTIES']['ALT_NAME']['~VALUE'];

      ?>

      <div
        class="single__servis <? if (count($arResult['ITEMS']) == $k + 1):?>single__advans advans__blue<? endif; ?> <? if (count($arResult['ITEMS']) == $k):?>single__advans<? endif; ?>">
        <div class="single__servis__hed">
          <div class="single__servis__title">
            <h2><?= $arItem['NAME']; ?></h2>
          </div>
          <div class="single__servis__text boreder-dashed">
            <?= $arItem['PREVIEW_TEXT']; ?>
          </div>

          <div class="single__servis__advans">

            <? if ($arItem['PROPERTIES']['TITLE']['VALUE']):?>
              <div class="single__servis__advans-title"><?= $arItem['PROPERTIES']['TITLE']['VALUE']; ?></div>
            <? endif; ?>

            <ul class="page-promo__list boreder-dashed">
              <? foreach ($arItem['PROPERTIES']['LIST']['VALUE'] as $text): ?>
                <li><?= $text; ?></li>
              <? endforeach; ?>
            </ul>
          </div>

          <? if ($arItem['PROPERTIES']['TEXT_WITH_BOTTOM']['VALUE']):?>
            <div class="single__servis__bottom">
              <button type="submit" class="btn callback">рассчитать смету</button>
              <span class="single__servis__bottom-servis"><?= $arItem['PROPERTIES']['TEXT_WITH_BOTTOM']['~VALUE']; ?></span>
            </div>
          <? endif; ?>

        </div><!-- ./single__servis__hed -->

        <div class="single__servis__img _bgi">
          <img src="<?= $file; ?>" alt="">
        </div>
      </div><!-- /.single__servis -->

    <? endforeach; ?>


  </div><!-- /.single__servis__inner -->
</div><!-- /.container d-flex -->





