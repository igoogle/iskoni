<?

  /**
   * @var $arResult
   */

  if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
  $this->setFrameMode(true);
?>

<div class="faq__inner">
  <div class="tabs">
    <div class="tabs__nav">
      <? foreach ($arResult['ITEMS'] as $k => $arItem): ?>
        <span class="tabs__nav-btn <?if($k == 0):?>active<?endif;?>" data-tab="#tab_<?=$k+1;?>"><?= $arItem['NAME']; ?></span>
      <? endforeach; ?>
    </div>
    <div class="tabs__content">
      <? foreach ($arResult['ITEMS'] as $k => $arItem): ?>
        <div class="tabs__item <?if($k == 0):?>active<?endif;?>" id="tab_<?=$k+1;?>">
          <div class="tabs__item__title"><?= $arItem['NAME']; ?></div>
          <?= $arItem['PREVIEW_TEXT']; ?>
        </div>
      <? endforeach; ?>
    </div>
  </div>
</div>
