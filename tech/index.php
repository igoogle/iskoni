<?
define('SECTION_CLASS', 'tech');

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Производство Искони");
$APPLICATION->SetPageProperty("description", "Производство ISKONI - это семейная фабрика «КЕДР» с более чем 20-летним опытом работы.");
$APPLICATION->SetTitle("Производство");
?><h1 class="section-title text-center my-4_">Производство ISKONI </h1>
<div class="section-body ">
	<p>
		 Производство ISKONI находится в республике Марий Эл.
	</p>
	 Производство ISKONI - это семейная фабрика «КЕДР» с более чем 20-летним опытом работы. Благодаря своему географическому расположению в производстве может быть задействована древесина из республики Марий Эл, Кировской области и Пермского края. Природа этих мест богата лесами, а климатические и погодные условия для растущих там лесов способствуют высокому качеству исходного сырья.
	<p>
	</p>
    <div style="max-width:690px;margin:0 auto;">
		
<div class="row">
	<div class="video-box-wrap-control">
		<div class="video-box-control ">
			<a href="https://youtu.be/cQVo-AOob4c" data-fancybox="" class="fancybox iframe" rel="youtube_gal"> <img src="/catalog/ready/img/2.png" alt=""> </a>
			<div class="text-center"></div>
		</div>
	</div>
</div>
    
		</div>
        <br>

	<h2 class="section-title text-center my-4_">Производство ISKONI это:</h2>
	<p>
	</p>
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
	<p>
		 Линейка продукции ISKONI – большой выбор материала для строительства домокомплекта из клееного бруса, включая инновацонный продукт – утепленный клееный брус, сухого профилированного бруса и оцилиндрованного бревна, а также бруса, подготовленного для возведения дома по каркасной технологии.
	</p>
	<p>
		 Каждый из этих материалов может быть выполнен из сосны, ели, кедра или любого другого материала по вашему выбору.
	</p>
	<div class="char">
		<div class="row">
			<div class="col-6">
				 <?$APPLICATION->IncludeComponent(
	"svx:super.component",
	"slider-tech2",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"ID" => "28"
	)
);?>
			</div>
			<div class="col-6">
				<h5 class="char-title">
				Характеристики: </h5>
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
	Используемые материалы в строительстве </h2>
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
 <article id="technology-plus">
	<!--	<br><br>
    <div class="section-head text-center"><h2>Преимущества и недостатки профилированного бруса</h2></div>
    <h4 class="text-center">Полый клееный брус</h4>
    <div class="box1">
        <div class="green bold text-center">Плюсы</div>
        Внешне ничем не отличается от стандартного клееного бруса, но в три раза теплее. Улучшенная шумоизоляция стен, не нужно высверливать каналы в стене под электрику. Привлекательная цена.
    </div>
    <div class="box2">
        <div class="red bold text-center" >Минусы</div>
        Сложность производства, в остальном минусов нет.
    </div>

    <h4 class="text-center">Клееный брус</h4>
    <div class="box1">
        <div class="green bold text-center">Плюсы</div>
        Минимальная усадка, практически отсутствие трещин, не требуется конопатка. Минимальное изменение геометрии материала. Пороки древесины вырезаются на этапе производства.
    </div>
    <div class="box2">
        <div class="red bold text-center">Минусы</div>
        Стоимость 1 куб.м. клееного бруса дороже остальных материалов для деревянного дома, однако минимальные затраты при последующей эксплуатации, компенсируют кажущуюся дороговизну.
    </div>

    <h4 class="text-center">Профилированный сухой брус</h4>
    <div class="box1">
        <div class="green bold text-center">Плюсы</div>
        В отличие от бревна, не требует конопатки, более легкая шлифовка, не нужно откладывать отделочные работы на год из-за усадки.
    </div>
    <div class="box2">
        <div class="red bold text-center">Минусы</div>
        Подвержен деформациям, вертикальность стен не идеальна. Гораздо больше трещин по сравнению с клееным брусом. При производстве не вырезаются выпадные сучки и дефекты древесины.
    </div>

    <h4 class="text-center">Каркасные дома</h4>
    <div class="box1">
        <div class="green bold text-center">Плюсы</div>
        Быстровозводимое, относительно дешевое жильё.
        </div>
    <div class="box2">
        <div class="red bold text-center">Минусы</div>
        <p>В борьбе за снижением стоимости строительства зачастую не соблюдаются технологии, и применяются дешевые материалы. Доску используют не сухую, не обработанную антисептиком, уменьшают количество стоек в стене, используют плохие паро и гидроизоляционные пленки
</p>    
</div>

    <h4 class="text-center">Оцилиндрованное бревно</h4>
    <div class="box1">
        <div class="green bold text-center" >Плюсы</div>
        Кажущаяся дешевизна на начальном этапе.
    </div>
    <div class="box2">
        <div class="red bold text-center">Минусы</div>
        Нельзя приступать к отделочным работам около года пока сруб не даст усадку, очень сильно трескается, требует в дальнейшем серьёзных затрат на конопатку и шлифовку, тепловой шов равен только половине диаметра бревна.
    </div>
</div>
--> </article>
	<div class="cbx">
		 <!-- <h3 class="cbx-title">
            Оставьте заявку на консультацию по технологиям строительства
        </h3> -->
		<div id="readyPageForm">
		</div>

	</div>
</div>
<style>
.box1, .box2 {
display: inline-block;
    width: 48%;
    padding: 3% 5%;
    vertical-align: top;
    background: rgba(220,226,201,0.2);
    min-height: 215px;
    font-size: .875rem;
    line-height: 20px;
    letter-spacing: -.85px;
}
 .box2 {
    margin-left: 3.5%;background: rgba(226, 201, 201, 0.2);
}
h4 {
	margin: 40px 0 20px;
}

.table .col-20p,
.table .col-4 {
    /*border: 1px solid #ccc;*/
    padding: 5px;
}
.table td {
    font-size: 1rem;
    line-height: 1.5rem;
    padding: 5px;
    border-bottom: 1px solid #bbb;
}
.table tr td:first-child {
    text-align: left;
}

.bold {
    font-weight: bold;
}
.plus, .green {
    color: #65af53;
    font-size: 1.3em;padding: 0 0 15px 0;
}
.minus, .red {
    color: #d22020;
    font-size: 1.3em;padding: 0 0 15px 0;
}

@media (max-width: 530px) {
    .table .th {
        display: none;
    }
    .table .row .col-20p:last-child {
        margin-bottom: 20px;
    }
	.box1, .box2 {
		display: block;
    width: 100%;
    padding: 25px;
    margin: 15px 0 10px 0;

	}
}
</style><? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>