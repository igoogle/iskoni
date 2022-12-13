<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>


<div class="section">
	<div class="container">
		<h1>404 страница не найдена</h1>
		<p>
			Запрошенная страница не найдена
		</p>
	</div>
</div>

<?
/*
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Строящиеся объекты");
?>
<div style="text-align: justify;">
	<h1>Строящиеся объекты</h1>
	<p>В настоящее время на территории Москвы и Московской области мы заканчиваем или ведем строительство 3х объектов. Ниже вы можете ознакомиться с ходом строительных работ.</p>

	<p class="h3" style="text-align: center;">Московская область, Новорижское шоссе, 15 км от МКАД. <br>Индивидуальный проект 190 кв. м. </p>
	<p style="text-align: center;">27 июня 2019 г.</p>
	<img src="/upload/catalog/image1.jpeg" alt="">
	<br>
	<br>
	<p style="text-align: center;">3 июля 2019 г.</p>
	<img src="/upload/catalog/image2.jpeg" alt="">
	<br>
	<br>

    <div id="readyPageForm"></div>
	<script id="bx24_form_inline" data-skip-moving="true">
        (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
                (w[b].forms=w[b].forms||[]).push(arguments[0])};
                if(w[b]['forms']) return;
                var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://b24-m1rqwv.bitrix24.ru/bitrix/js/crm/form_loader.js','b24form');

        b24form({"id":"9","lang":"ru","sec":"cf5kbq","type":"inline","node": document.getElementById('readyPageForm')});
	</script>

</div>
<?*/ require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>