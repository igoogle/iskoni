<?

  /**
   * @var array $arParams
   * @var array $arResult
   */

  if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

  $this->setFrameMode(true);
?>

<div class="nav__category__top _padding">
  <div class="container">
    <div class="nav__category__top__inner">
      <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <a href="<?= $arItem['PROPERTIES']['LINK']['VALUE']; ?>"
           class="nav__category__top__item"
           id="<?= $this->GetEditAreaId($arItem['ID']); ?>"
        >
          <div class="nav__category__top--title"><?= $arItem['NAME']; ?></div>
          <div class="nav__category__top--img"><img src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" alt=""></div>
        </a>
      <? endforeach; ?>
    </div>
  </div>
</div>

