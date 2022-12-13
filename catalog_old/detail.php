<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
define('NO_PAGE_WRAP', true);

?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"house", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "NAME",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => intval($_REQUEST["ELEMENT_ID"]),
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "DETAIL_TEXT",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"FILE_404" => "",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(
			0 => "ACTIONS",
			1 => "SPRICE",
			2 => "GARAGE",
			3 => "SIZE_LIVE",
			4 => "BATHROOMS",
			5 => "BEDROOMS",
			6 => "EQUIPMENT",
			7 => "SIZE_FULL",
			8 => "FLOORS_SIZE",
			9 => "TECH",
			10 => "PRICE",
			11 => "FLOORS",
			12 => "SPRICE",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "house"
	),
	false
);?>


<?$APPLICATION->IncludeComponent(
    "svx:super.component",
    "ready_house",
    Array(
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "TITLE" => "Готовые дома по этому проекту",
        "PROJECT" => $_REQUEST["ELEMENT_ID"],
    )
);?>


<div class="sh section">
    <div class="container">
        <div class="sh-inner">
            <div class="row">
                <div class="col-4">
                    <div class="sh-item">
                        <div class="d-flex align-items-center">
                            <div class="sh-icon">
                                <svg class="icon s-icon_teg_1"><use xlink:href="#s-icon_teg_1"></use></svg>
                            </div>
                            <div class="sh-body">
                                <a href="/catalog/?pt=7">
                                    Проекты домов до 7 млн. руб.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="sh-item">
                        <div class="d-flex align-items-center">
                            <div class="sh-icon">
                                <svg class="icon s-icon_teg_2"><use xlink:href="#s-icon_teg_2"></use></svg>
                            </div>
                            <div class="sh-body">
                                <a href="/catalog/?st=150">
                                    Проекты домов до 150 м²
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="sh-item">
                        <div class="d-flex align-items-center">
                            <div class="sh-icon">
                                <svg class="icon s-icon_teg_3"><use xlink:href="#s-icon_teg_3"></use></svg>
                            </div>
                            <div class="sh-body">
                                <a href="/catalog/?t[2]=2">
                                    Проекты домов из клееного бруса
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script id="bx24_form_button" data-skip-moving="true">
    (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
        (w[b].forms=w[b].forms||[]).push(arguments[0])};
        if(w[b]['forms']) return;
        var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
    })(window,document,'https://iskoni.bitrix24.ru/bitrix/js/crm/form_loader.js','b24form');

    b24form({"id":"8","lang":"ru","sec":"301l6w","type":"button","click":""});
</script>



<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>