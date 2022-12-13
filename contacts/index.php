<?
define('SECTION_CLASS', 'tech');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
define('NO_PAGE_WRAP', true);

?><h1 class="section-title text-center">
Контакты </h1>
<div class="row">
	<div class="section-body material">
		<div class="col-6 col-left">
			<h2 class="page-title text-center">г. Москва</h2>
			 Метро Комсомольская<br>
			 Адрес: 1ый Басманный переулок, д. 5/20, стр. 2, оф. 35.<br>
			 Охраняемая парковка на территории.<br>
 <br>
 <a class="phone_alloka" href="tel:+74957447899">+7 (495) 744-78-99</a><br>
 <a href="mailto:info@iskoni.ru">info@iskoni.ru</a><br>
			 <!--a href="tel:88002223577">8-800-222-35-77</a><br--><br>
			 Пн-Пт с 10:00 до 19:00.<br>
 <br>
			 Мы всегда рады Вас видеть в нашем офисе, с удовольствием покажем Вам выставочные образцы и проконсультируем по технологиям строительства, а также угостим самым вкусным чаем и кофе, но убедительно просим предварительно согласовать Ваш визит. <br>
			<p>
			</p>
			<div class="map" id="map_0" data-addr="Москва 1-й Басманный переулок, д. 5/20, стр. 2">
				 <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8ec577da332324c21faa3da542e590551c25d450c4edb6f0b49aba0493c655c1&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
			</div>
			<p>
			</p>
		</div>
		<div class="col-6 col-right">
			<h2 class="page-title text-center">г. Казань</h2>
			 Представительство компании «Кедр»<br>
			 Адрес: г. Казань, ул. Гладилова, д. 27, оф. 426<br>
 <br>
 <br>
 <br>
 <br>
			 <!--a href="tel:88002223577">8-800-222-35-77</a><br><br><br--> Пн-Пт с 10:00 до 19:00<br>
 <br>
 <br>
 <br>
			<br>
			<br>
			<br>
 <br>
 <br>
			<p>
			</p>
			<div class="map" id="map_1" data-addr="Казань, ул. Гладилова, д. 27">
				 <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A155cbb9d8ad925777a72f9b8115baf777caf91d31c6577b53fadd44c4a792db5&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
			</div>
		</div>
		<p>
		</p>
	</div>
	 <script src="https://api-maps.yandex.ru/2.0-stable/?apikey=12123123load=package.standard&amp;lang=ru-RU" type="text/javascript"></script> <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/libs/ymap/ymapContacts.js"></script>
</div>
<div id="contactPageForm">
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."local/include/zaycontacts.php"
	)
);?>
<style>
.page-title {
    margin: 0px 0 40px;
}
.col-left {
float:left;
}
.col-right {
float:right;
}
</style>



<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>