<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
define('NO_PAGE_WRAP', true);
?><div class="section">
<div class="container">
	<h1 class="page-title">Контакты</h1>
	<p>
		<b>г. Москва</b><br>
		Метро Комсомольская<br>
		Адрес: 1ый Басманный переулок, д. 5/20, стр. 2, оф. 35.<br>
		Охраняемая парковка на территории.<br>
		8-495-744-78-99<br>
		8-800-222-35-77<br>
		Пн-Пт с 10:00 до 19:00.
	</p>
	<p>
		Мы всегда рады Вас видеть в нашем офисе, с удовольствием покажем Вам выставочные образцы и проконсультируем по технологиям строительства, а также угостим самым вкусным чаем и кофе, но убедительно просим предварительно согласовать Ваш визит.
	</p>
	<div class="map" id="map_0" data-addr="Москва 1-й Басманный переулок, д. 5/20, стр. 2">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8ec577da332324c21faa3da542e590551c25d450c4edb6f0b49aba0493c655c1&amp;width=600&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>	</div>
</div></div>
<!-- <div class="container">
	<p>
		<b>Республика Крым </b><br>
		г. Севастополь<br>
		Адрес: ул. Фиолентовское ш., д. 1/1<br>
		8-800-222-35-77<br>
		8-978-954-50-44
	</p>
	<div class="map" id="map_1" data-addr="Севастополь ул. Фиолентовское ш., д. 1/1"></div>
	<hr>
</div> -->
<div class="container">
	<p>
		<b>Татарстан</b><br>
		Производство компании «Кедр»<br>
		Адрес: г. Казань, ул. Гладилова, д. 27, оф. 426<br>
		8-800-222-35-77<br>
	</p>
	<div class="map" id="map_1" data-addr="Казань, ул. Гладилова, д. 27">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A155cbb9d8ad925777a72f9b8115baf777caf91d31c6577b53fadd44c4a792db5&amp;width=600&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script></div>
</div></div>
<script src="https://api-maps.yandex.ru/2.0-stable/?apikey=12123123load=package.standard&amp;lang=ru-RU" type="text/javascript"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/libs/ymap/ymapContacts.js"></script> 

<div id="contactPageForm"></div>
<!-- <script id="bx24_form_inline" data-skip-moving="true">
	(function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
		(w[b].forms=w[b].forms||[]).push(arguments[0])};
		if(w[b]['forms']) return;
		var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
		var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
	})(window,document,'https://b24-m1rqwv.bitrix24.ru/bitrix/js/crm/form_loader.js','b24form');

	b24form({"id":"7","lang":"ru","sec":"e83a3n","type":"inline","node": document.getElementById('contactPageForm')});
</script> -->
<script id="bx24_form_inline" data-skip-moving="true">
	(function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
		(w[b].forms=w[b].forms||[]).push(arguments[0])};
		if(w[b]['forms']) return;
		var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
		var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
	})(window,document,'https://iskoni.bitrix24.ru/bitrix/js/crm/form_loader.js','b24form');

	b24form({"id":"50","lang":"ru","sec":"0psfjw","type":"inline","node": document.getElementById('contactPageForm')});
</script>

<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>