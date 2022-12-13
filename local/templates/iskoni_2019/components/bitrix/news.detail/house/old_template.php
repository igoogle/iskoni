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
        <h1 class="page-title"><?echo $arResult["NAME"];?></h1>
        
        <div class="product">
            <div class="d-flex">
                <div class="product-gallery">
                    <? if(!empty($arResult['DISPLAY_PROPERTIES']['ACTIONS'])): ?>
                    <div class="badges">
                        <? foreach ($arResult['DISPLAY_PROPERTIES']['ACTIONS']['DESCRIPTION'] as $k => $text): ?>
                        <div class="product-badge" style="background-color: #<?=$arResult['DISPLAY_PROPERTIES']['ACTIONS']['VALUE'][$k]?>;">
                            <?=$text?>
                        </div>
                        <? endforeach ?>
                    </div>
                    <?endif?>
                    <div class="product-slider">
                        <div class="slider">
                            <? if(!empty($arResult['DETAIL_PICTURE']['SRC'])): ?>
                            <div class="item">
                                <a href="<?=$arResult['DETAIL_PICTURE']['SRC']?>" data-fancybox="gallery">
                                    <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="">
                                </a>
                            </div>
                            <?endif?>
                            <? 
                            foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $k => $v) :
                                $src = CFile::GetPath($v);
                                ?>
                            <div class="item">
                                <a href="<?=$src?>" data-fancybox="gallery">
                                    <img src="<?=$src?>" alt="<?=$arResult['PROPERTIES']['GALLERY']['DESCRIPTION'][$k]?>">
                                </a>
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
                            "CACHE_TYPE" => "A",
                            // "AJAX_MODE" => "Y"
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
                            <? if(!empty($arResult['DISPLAY_PROPERTIES']['SIZE_FULL']['VALUE'])): ?>
                            <div class="col-6">
                                <div class="option-item">
                                    <div class="d-flex">
                                        <div class="option-icon">
                                            <svg class="icon s-icon_measure"><use xlink:href="#s-icon_measure"></use></svg>
                                        </div>

                                        <div class="option-body">
                                            <strong><?=$arResult['DISPLAY_PROPERTIES']['SIZE_FULL']['VALUE']?> м&sup2;</strong>
                                            метраж
                                        </div>
                                    </div>
                                </div>
                                <? endif ?>
                            </div>

                            <? if(!empty($arResult['DISPLAY_PROPERTIES']['BATHROOMS']['VALUE'])): ?>
                            <div class="col-6">
                                <div class="option-item">
                                    <div class="d-flex">
                                        <div class="option-icon">
                                            <svg class="icon s-icon_WC"><use xlink:href="#s-icon_WC"></use></svg>
                                        </div>

                                        <div class="option-body">
                                            <strong><?=$arResult['DISPLAY_PROPERTIES']['BATHROOMS']['VALUE']?></strong> санузла
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <? endif ?>

                            <? if(!empty($arResult['DISPLAY_PROPERTIES']['FLOORS']['VALUE'])): ?>
                            <div class="col-6">
                                <div class="option-item">
                                    <div class="d-flex">
                                        <div class="option-icon">
                                            <svg class="icon s-icon_floors"><use xlink:href="#s-icon_floors"></use></svg>
                                        </div>

                                        <div class="option-body">
                                            <strong><?=$arResult['DISPLAY_PROPERTIES']['FLOORS']['VALUE']?></strong> этажа
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <? endif ?>

                            <? if(!empty($arResult['DISPLAY_PROPERTIES']['TERRACE']['VALUE'])): ?>
                            <div class="col-6">
                                <div class="option-item">
                                    <div class="d-flex">
                                        <div class="option-icon">
                                            <svg class="icon s-icon_terrace"><use xlink:href="#s-icon_terrace"></use></svg>
                                        </div>

                                        <div class="option-body">
                                            <strong><?=$arResult['DISPLAY_PROPERTIES']['TERRACE']['VALUE']?></strong> терраса
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <? endif ?>

                            <? if(!empty($arResult['DISPLAY_PROPERTIES']['BEDROOMS']['VALUE'])): ?>
                            <div class="col-6">
                                <div class="option-item">
                                    <div class="d-flex">
                                        <div class="option-icon">
                                            <svg class="icon s-icon_rooms"><use xlink:href="#s-icon_rooms"></use></svg>
                                        </div>

                                        <div class="option-body">
                                            <strong><?=$arResult['DISPLAY_PROPERTIES']['BEDROOMS']['VALUE']?></strong> комнаты
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <? endif ?>

                            <? if(!empty($arResult['DISPLAY_PROPERTIES']['BALCONY']['VALUE'])): ?>
                            <div class="col-6">
                                <div class="option-item">
                                    <div class="d-flex">
                                        <div class="option-icon">
                                            <svg class="icon s-icon_balcony"><use xlink:href="#s-icon_balcony"></use></svg>
                                        </div>

                                        <div class="option-body">
                                            <strong><?=$arResult['DISPLAY_PROPERTIES']['BALCONY']['VALUE']?></strong> балкон
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <? endif ?>
                        </div>
                    </div>

                    <div class="price">
                        <?=number_format($arResult["PROPERTIES"]['PRICE']['VALUE'], 2, '.', '&nbsp;')?> млн.руб.*
                    </div>

                    <div class="price-info">
                        * Цена может увеличиться или уменьшиться в зависимости от выбранных материалов
                    </div>

                    <div class="material">
                        <div class="d-flex justify-content-between">
                            <div class="material-item">
                                <div class="material-icon">
                                    <svg class="icon s-icon_wood1"><use xlink:href="#s-icon_wood1"></use></svg>
                                </div>
                                <div class="material-body">
                                    <div class="material-key">
                                        220х180(h)
                                    </div>
                                    <!-- <div class="material-val">
                                        7,77 млн. руб.
                                    </div> -->
                                </div>
                            </div>

                            <div class="material-item">
                                <div class="material-icon">
                                    <svg class="icon s-icon_wood2"><use xlink:href="#s-icon_wood2"></use></svg>
                                </div>
                                <div class="material-body">
                                    <div class="material-key">
                                        200х180(h)
                                    </div>
                                    <!-- <div class="material-val">
                                        7,77 млн. руб.
                                    </div> -->
                                </div>
                            </div>

                            <div class="material-item">
                                <div class="material-icon">
                                    <svg class="icon s-icon_wood3"><use xlink:href="#s-icon_wood3"></use></svg>
                                </div>
                                <div class="material-body">
                                    <div class="material-key">
                                        160х180(h)
                                    </div>
                                    <!-- <div class="material-val">
                                        /7,77 млн. руб.
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-btns">
                        <? if(!empty($arResult['DISPLAY_PROPERTIES']['PRESENTATION']['VALUE'])): ?>
                        <a href="<?=$arResult['DISPLAY_PROPERTIES']['PRESENTATION']['VALUE']?>" target="_blank" class="btn btn-success">
                            Презентация дома
                        </a>
                        <?endif?>
			<button class="btn btn-orange">Комплектация</button>
                        <!--<a data-fancybox="" data-src="#callback" href="javascript:;" class="btn btn-orange">Комплектация</a>-->
                        <button class="b24-web-form-popup-btn-8 btn btn-orange">Хочу такой дом</button>
                    </div>
                </div>
            </div>
        </div>

        <? if(!empty($arResult["DETAIL_TEXT"])): ?>
        <div class="desc">
            <div class="section-head text-center">
                <h2 class="section-title">
                    <!-- Заголовок легенды дома -->
                    <?=$arResult['NAME']?>
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
                    Планировка
                </h2>
            </div>
            
            <div class="row ">

                <? foreach ($arResult['PROPERTIES']['PLANS']['VALUE'] as $k => $v): 
                    $src = CFile::GetPath($v); ?>
                <div class="col-6">
                    <div class="plan-thumb">
                        <a href="<?=$src?>" data-fancybox="plan">
                            <img src="<?=$src?>" alt="">
                        </a>
                    </div>
                    <? if(!empty($arResult['DISPLAY_PROPERTIES']['FLOORS_SIZE']['DESCRIPTION'][$k]) && !empty($arResult['DISPLAY_PROPERTIES']['FLOORS_SIZE']['VALUE'][$k])): ?>
                    <div class="plan-body">
                        <?=$arResult['DISPLAY_PROPERTIES']['FLOORS_SIZE']['DESCRIPTION'][$k]?>

                        <div class="plan-sq">
                            <?=$arResult['DISPLAY_PROPERTIES']['FLOORS_SIZE']['VALUE'][$k]?> м&sup2;
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
        "SORT_FIELD" => "UF_SORT",
        "SORT_ORDER" => "ASC"
    )
);?>
<?endif?>

