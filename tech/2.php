<?
define('SECTION_CLASS', 'tech');

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Производство");
?>  


<div class="section-head text-center">
    <h2 class="section-title">Уникальные технологии</h2>
</div>

<div class="section-body ">
    <p>
        При производстве домов из клееного бруса строительная компания Iskoni использует собственные запатентованные, а также самые передовые немецкие технологии, что позволяет нам гарантировать высокое качество по выгодным ценам.
    </p>

    <p>
        Компания Iskoni является московским представительством строительно-производственной компании «Кедр» (Республика Марий Эл). <br>
        "Кедр"- это семейная фабрика с 25-летним опытом деревянного домостроительства.
    </p>

    <h2 class="section-title text-center my-4_">Производство компании "Кедр"</h2>

    


<!--<iframe width="700" height="394" src="https://www.youtube.com/embed/lZc_kRk9AYc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
-->

<div class="video main-video section text-center">
    <div class="container">
        <div class="video-box-wrap-control">
            <div class="video-box-control">
                <a href="https://www.youtube-nocookie.com/embed/lZc_kRk9AYc" data-fancybox class="fancybox iframe" rel="youtube_gal">
                    <img src="https://img.youtube.com/vi/lZc_kRk9AYc/mqdefault.jpg" alt="">
                    <svg height="48px" version="1.1" viewBox="0 0 68 48" width="68px"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00" fill-opacity="0.8"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                </a>
                <div>Производство компании "Кедр"</div>
            </div>
        </div>

    </div>
</div>




    <h2 class="section-title text-center my-4_">Особенности производства</h2>
    
	<?$APPLICATION->IncludeComponent(
		"bitrix:highloadblock.list",
		"TechFeatures",
		Array(
			"BLOCK_ID" => "3",
			"CHECK_PERMISSIONS" => "N",
			"DETAIL_URL" => "",
			"FILTER_NAME" => "",
			"PAGEN_ID" => "",
			"ROWS_PER_PAGE" => "",
			"SORT_FIELD" => "SORT",
			"SORT_ORDER" => "ASC"
		)
	);?>


    <h2 class="section-title text-center my-4_">Инновационная запатентованная технология</h2>

    <iframe width="700" height="394" src="https://www.youtube.com/embed/FL32Rw_L10E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mb-4"></iframe>

    <p>
        Это уникальная запатентованная разработка нашей производственной компании! Наша разработка является будущим деревянного домостроение, которое уже наступило!
Утепленный клееный брус - это инновационная разновидность клееного бруса, пространство между внешними ламелями которого заполняется специальным утеплителем. Объем утеплителя рассчитан с учетом сохранения прочности конструкции.

</p>
<p>
Применяемые утеплители имеют более низкий коэффициент теплопроводности, по сравнению с деревом. Процесс утепления, как правило, производится на стройплощадке, но, в зависимости от вида утеплителя, может быть осуществлен и в заводских условиях. Конструкция утепленного клееного бруса позволяет производить утепление различными видами материалов: от экономичных (Эковата), среднего сегмента (GUTEX (Германия)) до утеплителей премиум-класса (кора пробкового дуба). Технологии сборки обеспечивают повышенные эксплуатационные свойства домов, построенных из этого материала.

    </p>


    <div class="char">
    	<div class="row">
    		<div class="col-6">
    			<?$APPLICATION->IncludeComponent("svx:super.component", "slider-tech2", Array(
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"ID" => "28",	// Слайдер
	),
	false
);?>
			</div>

			<div class="col-6">
				<h5 class="char-title">
					Характеристики:
				</h5>

				<div class="char-body">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_DIR."local/include/tech_chars.php"
						)
					);?>
				</div>
			</div>
		</div>
	</div>


    <p>
        Стена из клееного бруса с утеплителем обладает всеми преимуществами клееного бруса: практически нет усадки, нет коробления и растрескивается. При этом угловой замок получается абсолютно непродуваемым и звукоизолирующим.
    </p>

    <p>
        Утеплитель Эковата или Gutex является хорошим антисептиком, защищающим брус от болезней и грызунов изнутри.
    </p>

    <p>
        Нет необходимости сверлить отверстия для коммуникаций: все трубы и провода можно свободно монтировать даже после возведения стен и крыши, даже после укладки утеплителя.
    </p>

    <p>
        Кроме того, при строительстве домов из утепленного бруса стоимость домокомплекта по сравнению с классическим клееным брусом выгоднее на 30%, что приводит к 10% экономии на стоимости всего проекта.
    </p>



    <h2 class="section-title text-center my-4_">
        Используемые материалы в строительстве
    </h2>

    <p>
        При строительстве домов из бруса мы используем следующие виды материалов из сосны и ели.
    </p>

	<div class="materials">
		<?$APPLICATION->IncludeComponent(
			"svx:super.component",
			"materials",
			Array(
				"CACHE_TIME" => "3600",
				"CACHE_TYPE" => "A"
			)
		);?>

	    <div class="material-info">
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."local/include/material_info.php"
				)
			);?>
	    </div>
	</div>


    <div class="cbx">
        <!-- <h3 class="cbx-title">
            Оставьте заявку на консультацию по технологиям строительства
        </h3> -->

		<div id="readyPageForm"></div>
		<script id="bx24_form_inline" data-skip-moving="true">
			(function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
				(w[b].forms=w[b].forms||[]).push(arguments[0])};
				if(w[b]['forms']) return;
				var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
				var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
			})(window,document,'https://iskoni.bitrix24.ru/bitrix/js/crm/form_loader.js','b24form');

			b24form({"id":"36","lang":"ru","sec":"z17rcj","type":"inline","node": document.getElementById('readyPageForm')});
		</script>

    </div>

</div>





<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>