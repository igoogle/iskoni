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
<!--Start Des --> 
<div class="tabs">

  		<ul class="tabs__caption">
			<li class="p01 active">Утепленный клееный брус</li>
			<li class="p02">Клееный брус</li>
			
		</ul>
		<div class="p01 tabs__content active">
                    <div class="price-info">
                        * Цена может увеличиться или уменьшиться в зависимости от выбранных материалов
                    </div>
			<table>
			    <tr>
			        <td rowspan="2">
					<div class="icon1">
                   				 <img src="<?=SITE_TEMPLATE_PATH?>/images/icon1.svg" alt="">
                			</div>
				</td>
			        <td> 200х180(h)</td>
			        <td> <b><?=number_format($arResult["PROPERTIES"]['PRICE']['VALUE'], 2, '.', '&nbsp;')?> млн.руб.*</b> </td>
			    </tr>
			    <tr>
			        <td> 220х180(h)</td>
			        <td><button class="b24-web-form-popup-btn-54 btn"  id="aclick_test">Узнать цену</button></td>
			    </tr>
			</table><br>
                        <div class="product-btns">
	                        <? if(!empty($arResult['DISPLAY_PROPERTIES']['PRESENTATION']['VALUE'])): ?>
	                        <a href="<?=$arResult['DISPLAY_PROPERTIES']['PRESENTATION']['VALUE']?>" target="_blank" class="btn btn-success">
	                            Презентация дома
	                        </a>
	                        <?endif?>
	                        <button class="b24-web-form-popup-btn-54 btn btn-orange s1">Получить смету</button>
				<a id="click_to_complect" class="btn btn-orange local-ref" href="#complectBlock">Комплектация</a>

                        </div>
		</div>

<style>
.icon1 {
    margin: 5px 20px;
}
.icon2 {
    margin: 5px 20px;
}
table img {
  height: 38px;
  width: 41.3px;
}

.price-info {
    font-size: 11px;
    line-height: 13px;
    margin-bottom: 16px;
    padding: 5px;
}

table, .price {
  font-size: 13px;
  font-weight: 600;
  letter-spacing: -0.23px;
  line-height: 13px;}
tr{
    height: 24px;
    margin: 6px;
    background-color: #E0E0E0;
}
tr:before{
margin: 5px;
}
td {
    padding: 5px;
}
#aclick_test{
  box-sizing: border-box;
  height: 18px;
  width: 82px;
  border-radius: 2px;
  border: 1px solid #97B220;
font-size: 11px;
    line-height: 11px;
    color: #97B220;    padding: 3px 0px;
}

.tabs__caption{
    height: 24px;
}
li.p01,li.p02{
    display: block;
    width: 50%;
    float: left;
    height: 56px;
    padding: 4px 25px;
    font-size: 15px;
    line-height: 15px;
    text-align: center;
}


li.p01.active,li.p01{float:left;}
li.p02.active,li.p02{float: right;}
li.p01.active,li.p02.active{
    background-color: rgba(224,224,224,0.5);}
.tabs__content.active {
    display: block;
}
#list .p01,#list .p02 {
    width: 50%;
    background-color: rgba(224,224,224,0.5);
    text-align: center;
    
    height: 100px;
}
#list .p0{float: left;}
#list .p02 {float: right;}

.activ {
    width: 50%;
    float: right;
}
div.p01, div.p02{ background-color: rgba(224,224,224,0.5);
    padding: 5px;
}
div.p01,div.p02{
display: none;
margin-top: 32px;
}
</style>
                        
		<div class="p02 tabs__content">
			<div class="price-info">
                        * Цена может увеличиться или уменьшиться в зависимости от выбранных материалов
                    </div>
			<table>
			    <tr>
			        <td rowspan="3"><div class="icon1">
                   				 <img src="<?=SITE_TEMPLATE_PATH?>/images/icon2.svg" alt="">
                			</div></td>
			        <td> 160х180(h)</td>
			        <td> <b><?=number_format($arResult["PROPERTIES"]['SPRICE']['VALUE'], 2, '.', '&nbsp;')?> млн.руб.*</b> </td>
			    </tr>
			    <tr>
			        <td> 220х180(h)</td>
			        <td><button class="b24-web-form-popup-btn-54 btn"  id="aclick_test">Узнать цену</button></td>
			    </tr>
			    <tr>
			        <td> 220х180(h)</td>
			        <td><button class="b24-web-form-popup-btn-54 btn"  id="aclick_test">Узнать цену</button></td>
			    </tr>	
			</table><br>
                        <div class="product-btns">
	                        <? if(!empty($arResult['DISPLAY_PROPERTIES']['PRESENTATION']['VALUE'])): ?>
	                        <a href="<?=$arResult['DISPLAY_PROPERTIES']['PRESENTATION']['VALUE']?>" target="_blank" class="btn btn-success">
	                            Презентация дома
	                        </a>
	                        <?endif?>
	                        <button class="b24-web-form-popup-btn-54 btn btn-orange s2">Получить смету</button>
				<a id="click_to_complect" class="btn btn-orange local-ref" href="#complectBlock">Комплектация</a>
                        </div>                    
		
		</div>
		
<!--/End Des-->
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

<div id="complectBlock" class="mo"><div id="ajax-add-answer-block">
<?$APPLICATION->IncludeComponent(
    "bitrix:highloadblock.list",
    "complectation",
    Array(
        "BLOCK_ID" => "1",
        "CHECK_PERMISSIONS" => "N",
"SEF_MODE" => "N",
        "DETAIL_URL" => "",
        "FILTER_NAME" => "hlFilter",
        "PAGEN_ID" => "page",
        "ROWS_PER_PAGE" => "",
        "SORT_FIELD" => "UF_SORT",
        "SORT_ORDER" => "ASC"
    )
);?>
</div></div>
<?endif?>