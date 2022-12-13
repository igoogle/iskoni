<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?#DBG::pre($arResult)?>

<?if(!empty($arResult["ITEMS"])):?>

<div class="material-list">

	<?foreach ($arResult['ITEMS'] as $item):?>

    <div class="h2 material-title"><?=$item['NAME']?></div>

    <div class="material-item-tech">
        <div class="material-img">
            <img src="<?=$item['PREVIEW_PICTURE']?>" alt="<?=$item['NAME']?>">
        </div>

        <div class="material-body">
            <div class="d-flex">
                <div class="col-4 material-col">
                    <div class="material-head">
                        Преимущества
                    </div>

                    <div class="material-text">
                        <?=$item['PROPERTY_PLUS_VALUE']?>
                    </div>
                </div>
                <div class="col-4 material-col">
                    <div class="material-head">
                        Недостатки
                    </div>

                    <div class="material-text">
                        <?=$item['PROPERTY_MINUS_VALUE']?>
                    </div>
                </div>
                <div class="col-4 material-col">
                    <div class="material-head">
                        Стоимость за м³
                    </div>

                    <div class="material-text">
                        <strong>от <?=number_format($item['PROPERTY_PRICE_VALUE'],0,',',' ')?> р *</strong>
                    </div>
                </div>
            </div>

            <button class="btn b24-web-form-popup-btn-6">Узнать подробнее   </button>
        </div>
    </div>
    <?endforeach?>
</div>
<?endif?>
