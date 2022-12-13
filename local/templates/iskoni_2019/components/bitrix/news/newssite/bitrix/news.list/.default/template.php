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

 <div class="ctop  top row">

 </div>
 </div>
 <div class="proj-body container">

   <div class="news__inner">
     <?$nomer = 1;?>

     <?foreach($arResult["ITEMS"] as $arItem):?>
     <?if ($nomer > 0):?>
     <?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

         DBG::pred($arItem);
		?>
     <div class="news__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
       <div class="news__card <?=$arItem["DISPLAY_PROPERTIES"]["FEATURE"]["VALUE"]?>">
         <div class="news__img">
           <div class="block-akcia ">
             <div class="akcia"> Акция</div>
           </div>
           <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
             <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
           </a>
           <div class="news__date"> <?=$arItem["DISPLAY_ACTIVE_FROM"]?> </div>
         </div>


         <div class="card-body news__body">

           <div class="card-body-title">
             <div class="card-title h6">
               <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                 <?=$arItem["NAME"]?>
               </a>
             </div>
           </div>
           <div class="news--text">
             <?=$arItem["PREVIEW_TEXT"]?>
           </div>
           <div class="card-footer">
             <div class="news_btn">
               <a class="btn btn-orange" href="<?=$arItem["DETAIL_PAGE_URL"]?>"
                 class="card-more"><span>Читать</span></a>
             </div>
           </div>
         </div>
       </div>
     </div>

     <?endif;?>
     <?endforeach;?>

   </div>

<?/*?>
   <div class="pages pages__news">
     <il class="pages__inner">
       <li class="pages__item pages--first">Начало</li>
       <li class="pages__item pages--active"><a href="#!">1</a></li>
       <li class="pages__item"><a href="#!">2</a></li>
       <li class="pages__item"><a href="#!">3</a></li>
       <li class="pages__item"><a href="#!">...</a></li>
       <li class="pages__item pages--last"><a href="#!">Конец</a></li>
     </il>
   </div>
<?*/?>
   <!-- <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
   <div class="pages pages__news"><?=$arResult["NAV_STRING"]?></div>
   <?endif;?> -->





   <h2>Видео-обзоры</h2>
   <div class="row">

     <!--        <div class="col-4 new-v">-->

     <!--            <div class="video-box-wrap-control">-->
     <div class="col-4 new-v">
       <div class="video-box-control f01">
         <a href="https://www.youtube.com/watch?v=yYRFCA6Zu1w" data-fancybox class="fancybox iframe" rel="youtube_gal">
           <img src="/local/templates/iskoni_2019/images/video/main-video-1.jpg" alt="" width="432px">
           <svg height="48px" version="1.1" viewBox="0 0 68 48" width="68px">
             <path class="ytp-large-play-button-bg"
               d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
               fill="#f00" fill-opacity="0.8"></path>
             <path d="M 45,24 27,14 27,34" fill="#fff"></path>
           </svg>
         </a>
         <div>Видео-обзор типового проекта Удача+</div>
       </div>
     </div>
     <div class="col-4 new-v">
       <div class="video-box-control f02">
         <a href="https://www.youtube.com/watch?v=VxVTDhX4s9Q" data-fancybox class="fancybox iframe" rel="youtube_gal">
           <img src="/local/templates/iskoni_2019/images/video/main-video-2.jpg" alt="" width="432px">
           <svg height="48px" version="1.1" viewBox="0 0 68 48" width="68px">
             <path class="ytp-large-play-button-bg"
               d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
               fill="#f00" fill-opacity="0.8"></path>
             <path d="M 45,24 27,14 27,34" fill="#fff"></path>
           </svg>
         </a>
         <div>Описание технологии утепленного клееного бруса</div>
       </div>
     </div>
   </div>

 </div>