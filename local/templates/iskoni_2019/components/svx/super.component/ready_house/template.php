<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if(!empty($arResult["ITEMS"])):?>


<div class="houses section text-center">
    <div class="container">
        <div class="section-head">
            <h2 class="section-title"><?=$arParams['TITLE']?></h2>
            <?if(!empty($arParams['DESCR'])):?>
            <p class="section-subtitle"><?=$arParams['DESCR']?></p>
            <?endif?>
        </div>

        <div class="houses-slider">

        	<?foreach($arResult["ITEMS"] as $item):?>
            <div class="houses-item">
                <a href="<?=$item['DETAIL_PICTURE']['SRC'] ?>" data-fancybox="h">
                    <img data-lazy="<?=$item['PREVIEW_PICTURE']['SRC'] ?>" alt="" >
                </a>
                <div><?=$item['PREVIEW_TEXT']?></div>
            </div>
            <?endforeach?>

        </div>
    </div>
</div>

<?endif?>