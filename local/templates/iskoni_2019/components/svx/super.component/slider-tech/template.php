<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
// DBG::pre($arResult['IMAGES']);
// DBG::pre($arResult['ID']);
?>

<?if(!empty($arResult['IMAGES'])):?>
<div class="char-slider"  >
    <div class="char-slider-win">
    	<?foreach ($arResult['IMAGES'] as $img):?>


        <div>
            <a href="<?=$img['SRC']?>" data-fancybox="ch">
 

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
