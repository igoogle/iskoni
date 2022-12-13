<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
//$APPLICATION->SetPageProperty('Каталог домов', 'Page Title');
//$APPLICATION->SetTitle("Каталог домов");
define('NO_PAGE_WRAP', true);

?><div class="project section">
	<div class="container">
		<div class="section-head text-center">
			<h1 class="section-title">
			Проекты домов из бруса</h1>
		</div>
		<p align="justify">
			 На данной странице вы можете ознакомиться с нашими типовыми проектами домов из бруса.
		</p>
		<p align="justify">
			 Цена деревянного дома из бруса зависит от нескольких факторов:
		</p>
		<p align="justify">
			 - <b>площадь дома</b>. Как правило определяется возможностями вашего участка. Часто также заказчики выбирают конкретный проект дома, который им нравится и уже с учетом этого покупают участок;
		</p>
		<p align="justify">
			 - <b>тип фундамента</b>. Мы рекомендуем перед строительством дома осуществлять геологические исследования почвы, на основании которых даются рекомендацию к типу фундамента;
		</p>
		<p align="justify">
			 - <b>количество этажей</b>, наличия цокольного этажа. Здесь следует отметить, что стоимость квадратного метра одноэтажного дома будет выше, чем стоимость двухэтажного дома или дома с цоколем;
		</p>
		<p align="justify">
			 - <b>тип бруса</b>. В качестве домокомплекта можно использовать оцилиндрованное бревно, профилированный брус или клееный брус. Также мы можем предложить для вас нашу инновационную технологий – утепленный брус с экологически чистыми утеплителями. Такой брус в 3 раза теплее и тише обычного клееного бруса;
		</p>
		<p align="justify">
			 - <b>применяемых материалов кровли, внутренней отделки, инженерных коммуникаций</b>. Мы сотрудничаем с самыми крупными и передовыми компаниями по производству строительных материалов для домов ИЖС;
		</p>
		<p align="justify">
			 - <b>наличия мансарды, навеса для авто, веранды</b> и других вещей.
		</p>
		<p align="justify">
			 У нас в наличии более 30 проектов деревянных домов с различными решениями, которые могут удовлетворить большинство ваших пожеланий. Также мы можем построить дом по вашему проекту.
		</p>
		 <?
        DBG::pred($_GET);

        $GLOBALS['catalogFilter'] = array();

        if(!empty($_GET['t'])){
        	$GLOBALS['catalogFilter']['PROPERTY_TECH'] = $_GET['t'];
        }

        if(!empty($_GET['pf']) && !empty($_GET['pt'])){
	        $GLOBALS['catalogFilter'][] = array(
	        	'>=PROPERTY_PRICE' => $_GET['pf'],
	        	'<=PROPERTY_PRICE' => $_GET['pt'],
	        );
	    }

        if(!empty($_GET['sf']) && !empty($_GET['st'])){
	        $GLOBALS['catalogFilter'][] = array(
	        	'>=PROPERTY_SIZE_FULL' => $_GET['sf'],
	        	'<=PROPERTY_SIZE_FULL' => $_GET['st'],
	        );
	    }

        if(!empty($_GET['f'])){
	        $GLOBALS['catalogFilter']['PROPERTY_FLOORS'] = $_GET['f'];
	    }
	    
        if(!empty($_GET['br'])){
        	switch ($_GET['br']) {
        		case '1':
        			$GLOBALS['catalogFilter']['<PROPERTY_BEDROOMS'] = 3;
        			break;
        		case '3':
			        $GLOBALS['catalogFilter'][] = array(
			        	'>=PROPERTY_BEDROOMS' => 3,
			        	'<PROPERTY_BEDROOMS' => 5,
			        );
        			break;
        		case '5':
			        $GLOBALS['catalogFilter'][] = array(
			        	'>=PROPERTY_BEDROOMS' => 5,
			        	'<PROPERTY_BEDROOMS' => 8,
			        );
        			break;
        		
        		default:
        			break;
        	}
	    }

        if(!empty($_GET['su'])){
        	switch ($_GET['su']) {
        		case '1':
        			$GLOBALS['catalogFilter']['<PROPERTY_BATHROOMS'] = 2;
        			break;
        		case '2':
			        $GLOBALS['catalogFilter'][] = array(
			        	'>=PROPERTY_BATHROOMS' => 3,
			        	'<PROPERTY_BATHROOMS' => 4,
			        );
        			break;
        		case '4':
			        $GLOBALS['catalogFilter'][] = array(
			        	'>=PROPERTY_BATHROOMS' => 4,
			        	'<PROPERTY_BATHROOMS' => 6,
			        );
        			break;
        		
        		default:
        			break;
        	}
	    }


        if(!empty($_GET['tr'])){
	        $GLOBALS['catalogFilter']['!PROPERTY_TERRACE'] = false;
	    }
        if(!empty($_GET['g'])){
	        $GLOBALS['catalogFilter']['PROPERTY_GARAGE'] = $_GET['g'];
	    }
        if(!empty($_GET['cp'])){
	        $GLOBALS['catalogFilter']['!PROPERTY_CARPORT'] = false;
	    }
        if(!empty($_GET['pti'])){
	        $GLOBALS['catalogFilter']['!PROPERTY_PATIO'] = false;
	    }
        if(!empty($_GET['bbq'])){
	        $GLOBALS['catalogFilter']['!PROPERTY_BBQ'] = false;
	    }

	    DBG::pred($GLOBALS['catalogFilter']);

        ?>
		<div class="d-flex">
			 <?$APPLICATION->IncludeComponent(
	"svx:super.component",
	"cat_filter",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "N",
		"COMPONENT_TEMPLATE" => "cat_filter"
	)
);?> <?/*$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR."local/include/catalog_filter.php"
                )
            );*/?> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"houses",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "houses",
		"DETAIL_URL" => "/catalog/#ELEMENT_ID#",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"ID",1=>"NAME",2=>"PREVIEW_PICTURE",3=>"",),
		"FILTER_NAME" => "catalogFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "200",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Каталог",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"SIZE_FULL",1=>"PRICE",2=>"SPRICE",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
		</div>
		<div class="container">
			<p align="justify">
				Наша политика – это открытые сметы и космическая точность расчетов. Здесь вы можете узнать стоимость деревянного дома из бруса под ключ, а также оценить цену каждого этапа строительства. Стоит отметить, что нашим преимуществом является гарантия, что стоимость проекта не вырастет на этапе стройки. Заключая с нами договор, вы можете быть спокойны и уверены, что цена вашего дома не вырастет ни на рубль после заключения с нами договора на строительства дома вашей мечты!
			</p>

<p align="justify">Брусовые дома отличаются своей универсальностью. Таком дом наша компания может выполнить в любом стиле:</p>
<ul>
<li> - альпийский дом в стиле шале, в котором вы можете окунуться в атмосферу и уют горных курортов;</li>
<li> - классический скандинавский стиль, как правило это очень теплые и уютные дома, в которых эффективно используется каждый квадратный метр площади;</li>
<li> - современный шведский стиль – барнхаус идеально подойдет для тех, кто следит за модой и следит за тенденциями;</li>
<li> - модерн и хайтек для тех, кто уже сегодня смотрит в завтрашний день именно мы поможем внедрить классические технологии деревянного домостроение в инновационные решения и сделать проект вашего дома из бруса уникальным!</li>
<li> - классический русский стиль, дом, в котором вы провели детские годы и сможете окунуться в приятные воспоминания.</li>
</ul>

<p align="justify">Стоимость проекта деревянного дома также зависит от индивидуальных пожеланий заказчиков, часто нетривиальных и интересных решений.</p>

<p align="justify">Позвоните нам или оставьте заявку и наш менеджер поможет подобрать лучший дом вашей мечты, проконсультирует по технологиям строительства и сориентирует по цене типовых и индивидуальных проектов домов из бруса.</p>

		</div>
		<div class="col-12">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."local/include/zaycatalog.php"
	)
);?>
		</div>
	</div>
</div><? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>