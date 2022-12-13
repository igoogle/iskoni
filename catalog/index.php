<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
$APPLICATION->SetPageProperty('title',"Каталог");
?>

<?php if ($_SERVER['REQUEST_URI']=='/catalog/'){

echo '<div class="catalog_navigation">

   <div class="catalog_navigation_item"><p class="header">По комнатам</p>

   <div class="navigation_list">
      <a href="/catalog/odnokomnatnyye/" class="item">Однокомнатные</a>
      <a href="/catalog/dvukhkomnatnyye/" class="item">Двухкомнатные</a>
      <a href="/catalog/trekhkomnatnyye/" class="item">Трехкомнатные</a>
      <a href="/catalog/chetyrekhkomnatnyye/" class="item">Четырехкомнатные</a>
      <a href="/catalog/pyatikomnatnyye/" class="item">Пятикомнатные</a>
      <a href="/catalog/shestikomnatnyye/" class="item">Шестикомнатные</a>
   </div></div>

   <div class="two_in_row">

      <div class="catalog_navigation_item">
         <p class="header">Санузлы</p>
         <div class="navigation_list">
            <a href="/catalog/odin-san/" class="item">Один</a>
            <a href="/catalog/dva-san/" class="item">Два</a>
            <a href="/catalog/tri-san/" class="item">Три</a>
         </div>
      </div>

      <div class="catalog_navigation_item">
         <p class="header">Этажность</p>
         <div class="navigation_list">
            <a href="/catalog/odnoetazhnyye/" class="item">Одноэтажные</a>
            <a href="/catalog/dvukhetazhnyye/" class="item">Двухэтажные</a>
         </div>
      </div>

   </div>

   <div class="two_in_row">

      <div class="catalog_navigation_item">
         <p class="header">Дополнительно</p>
         <div class="navigation_list">
            <a href="/catalog/s-kryltsom/" class="item">С крыльцом</a>
            <a href="/catalog/s-mansardoy/" class="item">С мансардой</a>
            <a href="/catalog/s-terassoy/" class="item">С террасой</a>
            <a href="/catalog/doma-iz-brusa/s-garazhom/" class="item">С гаражом</a>
         </div>
      </div>

      <div class="catalog_navigation_item">
         <p class="header">Материал</p>
         <div class="navigation_list">
            <a href="/catalog/profilirovannyy-brus/" class="item">Клееный брус</a>
            <a href="/catalog/profilirovannyy-brus/" class="item">Профилированный брус</a>
            <a href="/catalog/uteplennyy-brus/" class="item">Утепленный брус</a>
         </div>
      </div>

   </div>

   <div class="catalog_navigation_item"><p class="header">Стиль</p>

   <div class="navigation_list">
      <a href="/catalog/barnkhaus/" class="item">Барнхаус</a>
      <a href="/catalog/gostevoy/" class="item">Гостевой</a>
      <a href="/catalog/klassicheskiy/" class="item">Классический</a>
      <a href="/catalog/loft/" class="item">Лофт</a>
      <a href="/catalog/russkiy/" class="item">Русский</a>
      <a href="/catalog/skandinavskiy/" class="item">Скандинавский</a>
      <a href="/catalog/shale/" class="item">Шале</a>
      <a href="/catalog/doma-iz-brusa/fahverk/" class="item">Фахверк</a>
      <a href="/catalog/doma-iz-brusa/panoramnyyi/" class="item">Панорамные дома</a>
   </div>

   </div>


<div class="catalog_navigation_item"><p class="header">Размеры</p>
  <div class="catalog_navigation_item">
    <a href="/catalog/100kv" class="item">100 кв</a>
    <a href="/catalog/150kv" class="item">150 кв</a>
  </div>
</div>



</div>';

}?>


<?$APPLICATION->IncludeComponent(
	"bitrix:catalog",
	"catalog_new",
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "catalog_new",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DETAIL_BRAND_USE" => "N",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => "MAGNIFIER",
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"DETAIL_IMAGE_RESOLUTION" => "16by9",
		"DETAIL_MAIN_BLOCK_PROPERTY_CODE" => "",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
		"DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_SHOW_POPULAR" => "Y",
		"DETAIL_SHOW_SLIDER" => "N",
		"DETAIL_SHOW_VIEWED" => "Y",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "shows",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "desc",
		"ELEMENT_SORT_ORDER2" => "asc",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_HIDE_ON_MOBILE" => "N",
		"FILTER_NAME" => "arrFilter",
		"FILTER_PRICE_CODE" => array(
			0 => "PRICE",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "GARAGE",
			1 => "SIZE_LIVE",
			2 => "EQUIPMENT",
			3 => "SIZE_FULL",
			4 => "FLOORS_SIZE",
			5 => "BATHROOMS",
			6 => "TECH",
			7 => "PRICE",
			8 => "FLOORS2",
			9 => "",
		),
		"FILTER_VIEW_MODE" => "VERTICAL",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_SUBSECTIONS" => "Y",
		"INSTANT_RELOAD" => "N",
		"LABEL_PROP" => "-",
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"LINK_IBLOCK_ID" => "",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_PROPERTY_SID" => "",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_ENLARGE_PRODUCT" => "STRICT",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_META_KEYWORDS" => "-",
		"LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"LIST_PROPERTY_CODE_MOBILE" => "",
		"LIST_SHOW_SLIDER" => "Y",
		"LIST_SLIDER_INTERVAL" => "3000",
		"LIST_SLIDER_PROGRESS" => "N",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "modern",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "10",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"SEARCH_CHECK_DATES" => "Y",
		"SEARCH_NO_WORD_LOGIC" => "Y",
		"SEARCH_PAGE_RESULT_COUNT" => "50",
		"SEARCH_RESTART" => "N",
		"SEARCH_USE_LANGUAGE_GUESS" => "Y",
		"SECTIONS_SHOW_PARENT_NAME" => "Y",
		"SECTIONS_VIEW_MODE" => "LIST",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_TOP_DEPTH" => "3",
		"SEF_FOLDER" => "/catalog/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_TOP_ELEMENTS" => "N",
		"SIDEBAR_DETAIL_POSITION" => "right",
		"SIDEBAR_DETAIL_SHOW" => "N",
		"SIDEBAR_PATH" => "",
		"SIDEBAR_SECTION_POSITION" => "right",
		"SIDEBAR_SECTION_SHOW" => "Y",
		"TEMPLATE_THEME" => "green",
		"TOP_ELEMENT_COUNT" => "30",
		"TOP_ELEMENT_SORT_FIELD" => "sort",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_ORDER2" => "desc",
		"TOP_ENLARGE_PRODUCT" => "STRICT",
		"TOP_LINE_ELEMENT_COUNT" => "3",
		"TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"TOP_SHOW_SLIDER" => "Y",
		"TOP_SLIDER_INTERVAL" => "3000",
		"TOP_SLIDER_PROGRESS" => "N",
		"TOP_VIEW_MODE" => "SECTION",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_COMPARE" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_FILTER" => "Y",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"USE_STORE" => "N",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
			"compare" => "compare.php?action=#ACTION_CODE#",
			"smart_filter" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
);?>


<?php if ($_SERVER['REQUEST_URI']=='/catalog/'){

include $_SERVER['DOCUMENT_ROOT']."/catalog/catalog-blocks.php";

}?>







<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>