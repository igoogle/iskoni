<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<h1 class="text-centr"> Новости </h1>
<!--

	<p>Грамотное расположение дома на участке &ndash; вопрос очень непростой. Особенно, если участок &laquo;с изюминкой&raquo;. При этом необходимо учесть стороны света, наличие или отсутствие деревьев, овраги, ухабы, и еще массу нюансов и мелочей.</p>
<p>Вот один из вариантов. Участок расположен на склоне. По дальней границе &nbsp;участка &ndash; овраг, заросший лесом, причем лесом непроходимым и пока неухоженным. Но зато со склона отрываются великолепные виды на окрестности. Настоящие живописные русские дали.</p>
<p>Вариант, который успешно реализован нашей&nbsp; компанией, - устройство подпорной стены и монолитная утепленная плита с ребрами жесткости. &nbsp;Такой вариант предполагает &laquo;освоение&raquo; участка на нескольких уровнях. На самом верхнем располагается площадка для парковки автомобилей, на следующем, отделенном подпорной стенкой, высотой 1м 20 см,- мы построим дом, который возведем на плитном фундаменте. Количество последующих уровней ограничивается только фантазией собственника участка.</p>
<p>Пока это выглядит очень даже буднично, стенка, плита, разработанный грунт&hellip; но если подойти к краю фундамента и посмотреть вдаль&hellip; Если представить, что на этом же месте, но еще на 2 этажа выше &ndash; вид открывается такой, что поневоле вспоминаются стихи о необъятной России! Какие изумительные здесь будут закаты!</p>
<p>Итак, на ваш суд &ndash; фундаментная плита с подпорной стенкой в исполнении компании &laquo;ИСКОНИ&raquo;.</p> -->

<!-- <div class="imagegridsimple">
	<a href="/images/DSC_0659.JPG" data-fancybox="gallery"><img src="/images/DSC_0659.JPG" alt=""></a>
	<a href="/images/DSC_0661.JPG" data-fancybox="gallery"><img src="/images/DSC_0661.JPG" alt=""></a>
	<a href="/images/DSC_0664.JPG" data-fancybox="gallery"><img src="/images/DSC_0664.JPG" alt=""></a>
	<a href="/images/DSC_0673.JPG" data-fancybox="gallery"><img src="/images/DSC_0673.JPG" alt=""></a>
	<a href="/images/DSC_0676.JPG" data-fancybox="gallery"><img src="/images/DSC_0676.JPG" alt=""></a>
	<a href="/images/DSC_0677.JPG" data-fancybox="gallery"><img src="/images/DSC_0677.JPG" alt=""></a>
</div> -->

<!-- <video controls="controls" width="100%" height="350">
         <source src="/images/whatsapp-video-2021-12-02-at-18.23.55.mp4" type="video/mp4" />
      </video> -->

<div class="ctop  top row">
    <div class="col-8" id="<?=$this->GetEditAreaId($arResult['ITEMS'][0]['ID']);?>">
        <div class="card">
            <div class="card-thumb top">
                <div class="met"> Последняя </div>
                <a href="<?=$arResult['ITEMS'][0]["DETAIL_PAGE_URL"]?>">

                    <img src="<?=$arResult['ITEMS'][0]["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arResult['ITEMS'][0]["PREVIEW_PICTURE"]["ALT"]?>">
                </a>
            </div>

            <div class="card-body">
                <div class="card-date">	<?=$arResult['ITEMS'][0]["DISPLAY_ACTIVE_FROM"]?> </div>
                <div class="card-body-title">

                    <h6 class="card-title top">
                        <a href="<?=$arResult['ITEMS'][0]["DETAIL_PAGE_URL"]?>">
                            <?=$arResult['ITEMS'][0]["NAME"]?>
                        </a>
                    </h6>
                </div>
                <div class="card-b top">
                    <?=$arResult['ITEMS'][0]["PREVIEW_TEXT"]?>
                </div>
                <div class="card-footer">
                    <div class="d-flex align-items-center justify-content-between">
                        Читать
                        <a href="<?=$arResult['ITEMS'][0]["DETAIL_PAGE_URL"]?>" class="card-more">
                            <svg class="icon s-arrow_orange"><use xlink:href="#s-arrow_orange"></use></svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-4 new-v">
        <h2>Видео-обзоры</h2>
        <div class="video-box-wrap-control">
            <div class="video-box-control f01">
                <a href="https://www.youtube.com/watch?v=yYRFCA6Zu1w" data-fancybox class="fancybox iframe" rel="youtube_gal">
                    <img src="/local/templates/iskoni_2019/images/video/main-video-1.jpg" alt="" width="432px">
                    <svg height="48px" version="1.1" viewBox="0 0 68 48" width="68px"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00" fill-opacity="0.8"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                </a>
                <div>Видео-обзор типового проекта Удача+</div>
            </div>
            <div class="video-box-control f02">
                <a href="https://www.youtube.com/watch?v=VxVTDhX4s9Q" data-fancybox class="fancybox iframe" rel="youtube_gal">
                    <img src="/local/templates/iskoni_2019/images/video/main-video-2.jpg" alt="" width="432px">
                    <svg height="48px" version="1.1" viewBox="0 0 68 48" width="68px"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00" fill-opacity="0.8"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                </a>
                <div>Описание технологии утепленного клееного бруса</div>
            </div>

        </div>
    </div>
</div>
</div>
<div class="proj-body container">

    <div class="row ">
        <?$nomer = 1;?>

        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?if ($nomer > 0):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                DBG::pred($arItem);
                ?>
                <div class="col-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="card <?=$arItem["DISPLAY_PROPERTIES"]["FEATURE"]["VALUE"]?>">
                        <div class="card-thumb">
                            <div class="block-akcia "> <div class="akcia "> Акция</div></div>
                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-date">	<?=$arItem["DISPLAY_ACTIVE_FROM"]?> </div>
                            <div class="card-body-title">
                                <h6 class="card-title">
                                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                        <?=$arItem["NAME"]?>
                                    </a>
                                </h6>
                            </div>
                            <div class="card-b ">
                                <?=$arItem["PREVIEW_TEXT"]?>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex align-items-center justify-content-between">
                                    Читать
                                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="card-more">
                                        <svg class="icon s-arrow_orange"><use xlink:href="#s-arrow_orange"></use></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?endif;?>
        <?endforeach;?>

    </div>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br /><center><?=$arResult["NAV_STRING"]?></center>
    <?endif;?>

</div>