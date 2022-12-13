<? 
define('SECTION_CLASS', 'tech');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Построенные дома");

$uniqueClass =randString(2);

?>
<div class="section-head text-center">
    <h2 class="section-title">
        Строим дома с 1997 года
    </h2>
</div>

<div class="section-body ">

    <p>
        Компания Искони – московское представительство казанской строительной компании Кедр, работающей на рынке с 1997 года. За это время нами было построено более 500 домов из бруса разных пород дерева (кедр, ель, сосна). Сегодня мы строим дома из качественной древесины средней полосы. При производстве мы используем только экологически чистые материалы, уникальные собственные и передовые немецкие технологии.
    </p>

<div class="row">
           <div class="video-box-wrap-control col-6">
            <div class="video-box-control">
                <a href="https://www.youtube-nocookie.com/embed/NAHSu2vO_jI" data-fancybox class="fancybox iframe" rel="youtube_gal">
                    <img src="/local/templates/iskoni_2019/images/video/main-video-1.jpg" alt="">
                    <svg height="48px" version="1.1" viewBox="0 0 68 48" width="68px"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00" fill-opacity="0.8"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                </a>
                <div class="text-center">Видео-обзор типового проекта дом УДАЧА+</div>
            </div>
</div>
<div class="video-box-wrap-control col-6">
            <div class="video-box-control ">
                <a href="https://www.youtube.com/watch?v=VLNoHxhCOcs" data-fancybox class="fancybox iframe" rel="youtube_gal">
                    <img src="/local/templates/iskoni_2019/images/video/main-video-4.jpg" alt="">
                    <svg height="48px" version="1.1" viewBox="0 0 68 48" width="68px"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00" fill-opacity="0.8"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                </a>
                <div class="text-center">Плитный фундамент для деревянного дома</div>
            </div>
     </div> </div></br>
    <h2 class="section-title text-center my-4">
        Наши лучшие индивидуальные проекты
    </h2>
    <div class="hg">
        <div class="row">
<!--01-->
            <div class="col-6">
                <div class="gallery-item-<?=$arParams['BG_COVER']=="Y"?" bg_cover":""?> <?=$uniqueClass;?>">
<?$APPLICATION->IncludeComponent("svx:super.component", "slider-tech2", Array(
	//"CACHE_TIME" => "3600",	
// Время кеширования (сек.)
//		"CACHE_TYPE" => "A",	// Тип кеширования
		"ID" => "39",	// Слайдер

	),
	false
);?>


                    <div class="gallery-body">
                        <div class="gallery-head text-center">
                            <h3>
                                Индивидуальный проект дома
                            </h3>
                            <h6>
                                Республика Татарстан
                            </h6>
                        </div>
                        <div class="gallery-text">
                            <p>
                                <strong class="text-success">О проекте:</strong> 
Двухэтажный жилой дом по индивидуальному проекту. Общая площадь дома: 190 м2. Год постройки 2018.<br>
Дом выполнен из клееного бруса 180 (высота) х 200 мм<br>
</p><p>Современный просторный дом. Шикарная гостиная с камином и высотой потолков более 4-х метров имеет большие панорамные окна.<br>
В этом проекте, в его реализации удалось совместить связь времен, грандиозный замысел и единение великого и малого. Много света, много тепла. Все вокруг говорит об успешности и умении достигать поставленных рубежей. 
                    </div>

                </div>
            </div>
       </div>
<!--02-->
  <div class="col-6">
                <div class="gallery-item-<?=$arParams['BG_COVER']=="Y"?" bg_cover":""?> <?=$uniqueClass;?>">
<?$APPLICATION->IncludeComponent("svx:super.component", "slider-tech2", Array(
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"ID" => "41",	// Слайдер

	),
	false
);?>


                    <div class="gallery-body">
                        <div class="gallery-head text-center">
                            <h3>
                                Индивидуальный проект дома
                            </h3>
                            <h6>
                                Республика Татарстан
                            </h6>
                        </div>
                        <div class="gallery-text">
                            <p>
                                <strong class="text-success">О проекте:</strong> Двухэтажный жилой дом по индивидуальному проекту, площадь дома 187 м2.<br>
Год постройки 2019<br>
Дом выполнен из клееного бруса 180 х 200 мм<br>
</p><p>Оригинальная планировка, нестандартное решение угловой комнаты, выполненное по типу кремлевской шестистенной башни придают дому особый колорит.<br>
</p><p>Этот проект – воплощение детской мечты для своих детей. А когда человек вырастает в атмосфере сказки, в атмосфере счастья, только тогда он сможет покорить любые вершины.
</p>
                    </div>

                </div>
            </div>
</div>



<!--03-->

       <div class="col-6">
                <div class="gallery-item">
<?$APPLICATION->IncludeComponent("svx:super.component", "slider-tech2", Array(
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"ID" => "40",	// Слайдер
	),
	false
);?>


                    <div class="gallery-body">
                        <div class="gallery-head text-center">
                            <h3>
                                Индивидуальный проект дома
                            </h3>
                            <h6>
                                Республика Татарстан
                            </h6>
                        </div>
                        <div class="gallery-text">
                            <p>
                                <strong class="text-success">О проекте:</strong> 
Двухэтажный жилой дом по проекту «АЗАЛИЯ-ЛЮКС». Общая площадь дома: 207 м2. <br>Год постройки 2012.<br>
Дом выполнен из клееного бруса 180 (высота) х 220 мм<br>
</p><p>Дом построен для многодетной семьи. Комнаты верхнего этажа имеют мансардные окна. Внутренние планировки очень удачно и гармонично продуманы. Нет ничего лишлего, никаких излишеств. Все очень функционально, правильно. Каждая вещь – на своем месте, каждое помещение там, где ему следует быть, каждое пространство такое, как нужно. Этот дом – как раз тот случай, когда все естественно и продумано.
</p>

                    </div>

                </div>
            </div>
</div>


        
<!--04-->



	  <div class="col-6">
                <div class="gallery-item">
<?$APPLICATION->IncludeComponent("svx:super.component", "slider-tech2", Array(
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"ID" => "42",	// Слайдер
	),
	false
);?>


                    <div class="gallery-body">
                        <div class="gallery-head text-center">
                            <h3>
                                Индивидуальный проект дома
                            </h3>
                            <h6>
                                Московская область
                            </h6>
                        </div>
                        <div class="gallery-text">
                            <p>
                                <strong class="text-success">О проекте:</strong> 
Двухэтажный дачный дом по проекту «УДАЧА ПЛЮС». Общая площадь дома 113 м2.<br>
Год посторойки 2018.<br>
Дом выполнен из утепленного клееного бруса 180 х 200 мм.<br> 
</p><p>Идеальное дачное решение для молодой семьи. Всем есть место, и родителям и детям, и гостям. В этом доме можно комфортно проводить и теплые летние вечера, и холодные зимние ночи. Летом будет прохладно, зимой – тепло и тихо.
</p>
                    </div>

                </div>
            </div>
    </div>



<!--05-->









            <div class="col-6">
<?$uniqueClass =randString(5);?>
                <div class="gallery-item <?=$arParams['BG_COVER']=="Y"?"bg_cover":""?> <?=$uniqueClass;?>">
<?$APPLICATION->IncludeComponent("svx:super.component", "slider-tech2", Array(
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"ID" => "37",	// Слайдер
	),
	false
);?>


                    <div class="gallery-body">
                        <div class="gallery-head text-center">
                            <h3>
                                Индивидуальный проект дома
                            </h3>
                            <h6>
                                Республика Татарстан
                            </h6>
                        </div>
                        <div class="gallery-text">
                            <p>
                                <strong class="text-success">О проекте:</strong>
Двухэтажный жилой дом по индивидуальному проекту. Общая площадь дома: 180 м2. Год постройки 2018.<br>
Дом выполнен из клееного бруса 180 (высота) х 240 мм<br>
Одновременно были построены баня и летняя кухня (клееный брус 180 х 160 мм)<br>
</p><p>Этот дом для молодой семьи, на момент постройки был один маленький ребенок, для которого родителями созданы все условия для гармоничного развития. Очевидно, что недалек тот день, когда у этого ребенка появятся младшие братья или сестры: пространства всем хватит.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
<!--06-->	

    <div class="col-6">
                <div class="gallery-item">
<?$APPLICATION->IncludeComponent("svx:super.component", "slider-tech2", Array(
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"ID" => "38",	// Слайдер
	),
	false
);?>


                    <div class="gallery-body">
                        <div class="gallery-head text-center">
                            <h3>
                                Индивидуальный проект дома
                            </h3>
                            <h6>
                                Республика Татарстан
                            </h6>
                        </div>
                        <div class="gallery-text">
                            <p>
                                <strong class="text-success">О проекте:</strong> 
Описание: Двухэтажный жилой дом по индивидуальному проекту. Общая площадь дома: 200 м2. Год постройки 2017.<br>
Дом выполнен из клееного бруса 180 (высота) х 160 мм<br>
</p><p>Дом построен на живописном берегу водоема на склоне. В проекте удалось с максимальной эффективностью использовать особенности природного ландшафта. <br>
Планировка участка и сопутствующие постройки делают этот дом центром маленького уютного мира на берегу великой русской реки. Все вокруг как бы говорит о том, что наш мир создан для счастья.
                            </p>
                        </div>
                    </div>

                </div>
            </div>






<!--07-->

  <div class="col-6">
	
                <div class="gallery-item">
<?$APPLICATION->IncludeComponent("svx:super.component", "slider-tech2", Array(
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"ID" => "36",	// Слайдер
	),
	false
);?>		
                    <div class="gallery-body">
                        <div class="gallery-head text-center">
                            <h3>
                                Индивидуальный проект дома
                            </h3>
                            <h6>
                                Республика Татарстан
                            </h6>
                        </div>
                        <div class="gallery-text">
                            <p>
                                <strong class="text-success">О проекте:</strong> 
Двухэтажный жилой дом по индивидуальному проекту. Общая площадь дома: 232 м2. Год постройки 2009.<br>
Дом выполнен из клееного бруса 140 (высота) х 200 мм<br>
Годом позже были построены баня (клееный брус 140 х 160 мм)<br>
и летняя кухня (клееный брус 140 х 129 мм)<br>
</p><p>Дом был построен для большой семьи. Вместительная гостиная позволяет собираться на семейные торжества большому числу гостей. Были праздники, когда собиралось более 50 человек. В дни обычные у каждого члена семьи есть свой уютный уголок, Детям можно спокойно делать уроки, студентам – свои проекты, а главе семейства – отдыхать и наслаждаться семейным счастьем.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

</div>

<?php $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_DIR."local/include/zaygallery.php"
    )
);
?>
    
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>