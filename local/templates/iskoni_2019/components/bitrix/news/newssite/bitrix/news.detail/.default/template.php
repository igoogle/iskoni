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
?><div class="row">
<div class="col-8">
<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>

		<h1 class="h3"><?=$arResult["NAME"]?></h1>
<?endif;?>

<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
<?endif;?>


		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"/>
		<?echo $arResult["DETAIL_TEXT"];?>

</div>
 

<div class="col-4">
<h3 class="text-centr">Рекомендуем</h3>

<!-- новости -->
<? 

//echo "<pre>Template arParams: "; print_r($arParams); echo "</pre>";
//echo "<pre>Template arResult: "; print_r($arResult); echo "</pre>";
//exit();

$arSelect = Array("FILE_NAME","SUBDIR","ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_ACT","DETAIL_PAGE_URL","DISPLAY_ACTIVE_FROM","PREVIEW_TEXT",'PREVIEW_PICTURE');//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arFilter = Array("IBLOCK_ID"=>"4", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");

$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>2), $arSelect);
while($ob = $res->GetNextElement()){ 

 $arFields = $ob->GetFields();  ?>
     <div class="" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
<div class="card <?=$arFields["DISPLAY_PROPERTIES"]["FEATURE"]["VALUE"]?>">
<div class="card-thumb">

<?
$pj=CFile::GetByID($arFields['PREVIEW_PICTURE']);
$arFile = $pj->Fetch();

$ppic = "/upload/".$arFile['SUBDIR']."/".$arFile['FILE_NAME'];
   //  echo '<img  src="'.$ppic.'"/>';
?>


		                    <a href="/news/<?=$arFields["ID"]?>"> 
		                       <img  src="<?=$ppic ?> " alt="<?=$arField["ALT"] ?>">
		                    </a>

		                </div>
<?
//print_r($arFile['FILE_NAME']);
?>

<div class="card-body"><??>
<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
		
	<div class="card-date">	<?=$arFields["DISPLAY_ACTIVE_FROM"]?> </div>
                    <div class="card-body-title">
			<h6 class="card-title">
                            <a href="/news/<?=$arField["ID"]?>"> 
                                <?=$arFields["NAME"]?>
                            </a>
                        </h6>                        
                   </div>
			<div class="card-b ">

				<?=$arFields["PREVIEW_TEXT"]?>
			</div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center justify-content-between">
                                                      Читать
                            <a href="/news/<?=$arFields["ID"]?>/" class="card-more">
                                <svg class="icon s-arrow_orange"><use xlink:href="#s-arrow_orange"></use></svg>
                            </a>
                        </div>
                    </div>
                </div>
</div>
</div>
<? //print_r($arFields);

// $arProps = $ob->GetProperties();

//print_r($arProps);

}
?>


<!-- /новости -->

	




</div>
</div>
<div class="row">
<div class="col-12">
</div>

	
	<div style="clear:both"></div>
	<br />
<?
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>

<div class="row">
<div class="col-5 hoch">Хочу поделиться новостью: 
<a href="#" property="og:url" onclick="share.vk();"><img src="/upload/dop/icon_vk_color.jpg"></a>
<a href="#" property="og:url" onclick="share.fb();"><img src="/upload/dop/icon_fb_color.jpg"></a> 
<a href="http://instagram.com/iskoni_wood/?ref=badge" property="og:url" onclick="share.insta();"><img src="/upload/dop/icon_in_color.png" style="
    height: 36px;
    margin-top: -10px;
"></a> 


</div>
<div class="col-8 ii">
<div class="bottom-navigation">

<?$rs=CIBlockElement::GetList(array("active_from" => "desc"), array("ACTIVE"=>"Y", "IBLOCK_ID"=>$arResult["IBLOCK_ID"]), false, array("nElementID"=>$arResult["ID"], "nPageSize"=>1), array("ID"));

while($ar=$rs->GetNext())

{ $page[] = $ar["ID"]; }?>

<?if (count($page) == 2 && $arResult["ID"] == $page[0]):?>

<a class="card-more bblogBox__link blogBox__link_type_next"  href="/news/">
<svg class="icon s-arrow_orange"><use xlink:href="#s-arrow_orange"></use></svg>к списку новостей</a>
<a class="card-more blogBox__link blogBox__link_type_do"  href="/news/<?=$page[1]?>/">
<svg class="icon s-arrow_orange"><use xlink:href="#s-arrow_orange"></use></svg>предыдущая запись</a>

<?elseif (count($page) == 3):?>

<a class="card-more blogBox__link blogBox__link_type_next" href="/news/<?=$page[0]?>/"> 
следующая запись<svg class="icon s-arrow_orange"><use xlink:href="#s-arrow_orange"></use></svg></a>
<a class="card-more blogBox__link blogBox__link_type_do"  href="/news/<?=$page[2]?>/">
<svg class="icon s-arrow_orange"><use xlink:href="#s-arrow_orange"></use></svg>предыдущая запись</a>

<?elseif (count($page) == 2 && $arResult["ID"] == $page[1]):?>

<a class="card-more blogBox__link blogBox__link_type_next" href="/news/<?=$page[0]?>/">
 следующая запись<svg class="icon s-arrow_orange"><use xlink:href="#s-arrow_orange"></use></svg></a>
<a class="card-more blogBox__link blogBox__link_type_do"  href="/news/<?=$page[1]?>/">
<svg class="icon s-arrow_orange"><use xlink:href="#s-arrow_orange"></use></svg>к списку новостей</a>

<?endif;?>  

</div>
</div>
</div

</div>
<div class="col-12 new-v">
<h2>Видео-обзоры</h2>
        <div class="video-box-wrap-control row">
            <div class="video-box-control f01 col-4">
                <a href="https://www.youtube-nocookie.com/embed/NAHSu2vO_jI" data-fancybox class="fancybox iframe" rel="youtube_gal">
                    <img src="/local/templates/iskoni_2019/images/video/main-video-1.jpg" alt="" width="432px">
                    <svg height="48px" version="1.1" viewBox="0 0 68 48" width="68px"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00" fill-opacity="0.8"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                </a>
                <div>Видео-обзор типового проекта Удача+</div>
            </div>
            <div class="video-box-control f02  col-4">
                <a href="https://www.youtube-nocookie.com/embed/6kCAI_lWp5g" data-fancybox class="fancybox iframe" rel="youtube_gal">
                    <img src="/local/templates/iskoni_2019/images/video/main-video-2.jpg" alt="" width="432px">
                    <svg height="48px" version="1.1" viewBox="0 0 68 48" width="68px"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00" fill-opacity="0.8"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                </a>
                <div>Описание технологии утепленного клееного бруса</div>
            </div>
<div class="video-box-control f02  col-4">
                <a href="https://www.youtube-nocookie.com/embed/i8Olkv7IuMw" data-fancybox class="fancybox iframe" rel="youtube_gal">
                    <img src="/local/templates/iskoni_2019/images/video/main-video-3.jpg" alt="" width="432px">
                    <svg height="48px" version="1.1" viewBox="0 0 68 48" width="68px"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00" fill-opacity="0.8"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg>
                </a>
                <div>Описание технологии утепленного клееного бруса</div>
            </div>
</div>

	</div>