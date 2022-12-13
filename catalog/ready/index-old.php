<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Построенные дома");
?><div>
	<h1 class="page-title">Строим дома с 1997 года</h1>
	<p>
		 Компания Искони – московское представительство казанской строительной компании Кедр, работающей на рынке с 1997 года. За это время нами было построено более 500 домов из бруса разных пород дерева (кедр, ель, сосна). Сегодня мы строим дома из качественной древесины средней полосы. При производстве мы используем только экологически чистые материалы, уникальные собственные и передовые немецкие технологии.
	</p>
	<p>
		 Предлагаем вашему вниманию несколько лучших индивидуальных проектов, построенных нашей компанией.
	</p>
	
	<?$APPLICATION->IncludeComponent(
		"svx:super.component",
		"ready_houses",
		Array(
			"CACHE_TIME" => "3600",
			"CACHE_TYPE" => "A"
		)
	);?>

	<div id="readyPageForm"></div>
	<script id="bx24_form_inline" data-skip-moving="true">
		(function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
			(w[b].forms=w[b].forms||[]).push(arguments[0])};
			if(w[b]['forms']) return;
			var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
			var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
		})(window,document,'https://iskoni.bitrix24.ru/bitrix/js/crm/form_loader.js','b24form');

		b24form({"id":"46","lang":"ru","sec":"hcv4vl","type":"inline","node": document.getElementById('readyPageForm')});
	</script>

</div>
 <br><? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>