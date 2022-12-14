<?
define('SECTION_CLASS', 'tech');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Построенные дома");

$uniqueClass =randString(2);

?>
<div class="section__progects">
  <div class="section-head">
    <h1 class="section-title">
      Строим дома с 1998 года </h1>
  </div>
  <div class="section-body">
    <div class="progects__text_top">
      <p>
        Компания Искони – московское представительство казанской строительной компании Кедр, работающей на рынке с 1998
        года. Нами было построено более 500 <a class="linelink" href="/catalog/doma-iz-brusa/">домов из бруса</a> разных
        пород дерева (кедр, ель, сосна). Мы используем только экологически чистые материалы, уникальные собственные и
        передовые зарубежные технологии.
      </p>
    </div>

    <h2 class="section-title">
      Наши лучшие индивидуальные проекты </h2>
    <div class="hg">
      <div class="progects__inner">

        <div class="col progects__item">
          <div class="gallery-item">
            <?$APPLICATION->IncludeComponent(
                "svx:super.component",
                "slider-tech2",
                Array(
                  "CACHE_TIME" => "3600",
                  "CACHE_TYPE" => "A",
                  "ID" => "38"
                )
              );?>

          </div>
          <div class="progects__content">
            <div class="progects__title">Двухэтажный жилой дом по индивидуальному <a class="progects__title--video"
                href="#!"><span></span></a></div>
            <ul class="progects__table">
              <li>Год постройки:<strong>2017.</strong></li>
              <li>Местоположение:<strong>Республика Татарстан</strong></li>
              <li>Технология строительства:<strong>Клееный брус 180х160 мм.</strong></li>
              <li>Общая площадь дома:<strong>200 м2</strong></li>
            </ul>
            <div class="progects__desc">
              <span class="progects__desc--title">Описание:</span>
              <p>
                Дом построен на живописном берегу водоема на склоне. В проекте удалось с максимальной эффективностью
                использовать особенности природного ландшафта. <br>
                Планировка участка и сопутствующие постройки делают этот дом центром маленького уютного мира на берегу
                великой русской реки. Все вокруг как бы говорит о том, что наш мир создан для счастья.
              </p>
            </div>

          </div><!-- /.progects__content -->
        </div><!-- /.progects__item -->

        <div class="col progects__item">
          <div class="gallery-item">
            <?$APPLICATION->IncludeComponent(
                "svx:super.component",
                "slider-tech2",
                Array(
                  "CACHE_TIME" => "3600",
                  "CACHE_TYPE" => "A",
                  "ID" => "38"
                )
              );?>

          </div>
          <div class="progects__content">
            <div class="progects__title">Двухэтажный жилой дом по индивидуальному <span><a href="#!"></a></span></div>
            <ul class="progects__table">
              <li>Год постройки:<strong>2017.</strong></li>
              <li>Местоположение:<strong>Республика Татарстан</strong></li>
              <li>Технология строительства:<strong>Клееный брус 180х160 мм.</strong></li>
              <li>Общая площадь дома:<strong>200 м2</strong></li>
            </ul>
            <div class="progects__desc">
              <span class="progects__desc--title">Описание:</span>
              <p>
                Дом построен на живописном берегу водоема на склоне. В проекте удалось с максимальной эффективностью
                использовать особенности природного ландшафта. <br>
                Планировка участка и сопутствующие постройки делают этот дом центром маленького уютного мира на берегу
                великой русской реки. Все вокруг как бы говорит о том, что наш мир создан для счастья.
              </p>
            </div>

          </div><!-- /.progects__content -->
        </div><!-- /.progects__item -->






        <div class="row">
          <div class="video-box-wrap-control col-6">
            <div class="video-box-control">
              <a href="https://youtu.be/yYRFCA6Zu1w" data-fancybox="" class="fancybox iframe" rel="youtube_gal"> <img
                  src="/local/templates/iskoni_2019/images/video/main-video-1.jpg" alt=""> </a>
              <div class="text-center">
                Видео-обзор типового проекта дом УДАЧА+
              </div>
            </div>
          </div>
          <div class="video-box-wrap-control col-6">
            <div class="video-box-control ">
              <a href="https://youtu.be/SMDq3GW4NCw" data-fancybox="" class="fancybox iframe" rel="youtube_gal"> <img
                  src="/local/templates/iskoni_2019/images/video/main-video-4.jpg" alt=""> </a>
              <div class="text-center">
                Плитный фундамент для деревянного дома
              </div>
            </div>
          </div>
          <div class="video-box-wrap-control col-6">
            <div class="video-box-control ">
              <a href="https://youtu.be/KSrUBvnotXY" data-fancybox="" class="fancybox iframe" rel="youtube_gal"> <img
                  src="/catalog/ready/img/1.png" alt=""> </a>
              <div class="text-center">
                Обзор дома ВЕЛИЙ
              </div>
            </div>
          </div>
        </div>
      </div>
      <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
          "",
          Array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_DIR."local/include/zaygallery.php"
          )
        );?>
    </div>
  </div>
</div><!-- /section__progects -->
<br>
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>