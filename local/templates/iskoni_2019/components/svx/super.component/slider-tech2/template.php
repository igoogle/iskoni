<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
//DBG::pre($arResult['IMAGES']);
$uniqueClass =randString(2);
?>



<?if(!empty($arResult['IMAGES'])):?>
<div class="char-slier">
  <div class="char-slider-win">
    <?foreach ($arResult['IMAGES'] as $img):?>
    <div class="pregects__img">
      <a href="<?=$img['SRC']?>" data-fancybox="ch gallery<?=$uniqueClass?> <?=$arParams['ID']?>">
        <img src="<?=$img['SRC']?>" alt="">
      </a>
    </div>
    <?endforeach?>
  </div>

  <div class="char-slider-control">
    <?foreach ($arResult['IMAGES'] as $img):?>
    <div>
      <img src="<?=$img['SRC']?>" alt="">
    </div>
    <?endforeach?>
  </div>
</div>



<?endif?>
<style>
.fancybox-navigation .fancybox-button--arrow_left,
.fancybox-navigation .fancybox-button--arrow_right {
  display: inline-block;
}

.fancybox-button .fancybox-button--close {
  box-sizing: border-box;
  display: inline-block;
  top: 15%;
  right: 45%;
}
</style>