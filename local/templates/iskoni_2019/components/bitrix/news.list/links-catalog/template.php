<?

  /**
   * @var array $arParams
   * @var array $arResult
   */

  if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

  $this->setFrameMode(true);
?>
<div class="catalog_new_inner">
  <ul class="catalog_new__items">

      <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <li class="catalog_new__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
          <a class="catalog_new__item--link" href="<?= $arItem['PROPERTIES']['LINK']['VALUE']; ?>">
            <span class="catalog_new__item--img"><img src="<?= $arItem['DETAIL_PICTURE']['SRC']; ?>" alt=""></span>
            <span class="catalog_new__item--title"><?= $arItem['NAME']; ?></span>
          </a>
        </li>

      <? endforeach; ?>
  </ul><!-- /.catalog_new__items -->
</div><!-- /.catalog_new_inner -->