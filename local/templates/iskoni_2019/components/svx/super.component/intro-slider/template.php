<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? if(!empty($arResult["ITEMS"])): 
    $AUTOPLAYSPEED = 3000;
    if(!empty($arParams['AUTOPLAYSPEED']) && $arParams['AUTOPLAYSPEED'] > 0){
        $AUTOPLAYSPEED = intval($arParams['AUTOPLAYSPEED']);
    }


    $is_mobile = check_mobile_device();
?>

<div class="intro">
  <div class="intro-slider" data-autoplayspeed="<?=$AUTOPLAYSPEED?>">
    <? $i=0; foreach ($arResult["ITEMS"] as $item): ?>

    <div class="intro-item">

      <?php

            $defpicture = $picture = $item['DETAIL_PICTURE']['SRC'];

            $use_wp = 0;

            if($is_mobile) {
                $mobile_image = CFile::ResizeImageGet(
                    $item["DETAIL_PICTURE"]["ID"],
                    array(
                        'width' => 400,
                        'height' => 380
                    ),
                    BX_RESIZE_IMAGE_EXACT,
                    true,
                    Array(),
                    false,
                    100
                );

                $picture=$mobile_image['src'];
            }
            else{
                $p = CFile::ResizeImageGet(
                    $item["DETAIL_PICTURE"]["ID"],
                    array(
                        'width' => 1600,
                        'height' => 700
                    ),
                    BX_RESIZE_IMAGE_PROPORTIONAL,
                    true,
                    Array(),
                    false,
                    100
                );

                //---------проверяем webp-----

                $ext = end(explode('.',$picture));
                 $wp = str_replace('.'.$ext,'.webp',$picture);


                if(file_exists($_SERVER["DOCUMENT_ROOT"].$wp)){
                    $use_wp = 1;
                    $defpicture = $picture;
                    $picture = $wp;
                }
                //else $picture=$p['src'];
            }

            $i++;
            ?>

      <?php if($use_wp==1) {
                ?>

      <picture>
        <source srcset="<?=$picture?>" type="image/webp">
        <img srcset="<?=$defpicture?>">
      </picture>

      <?php
            }
            else{

                ?>
      <img class="lazy" src="<?=$picture?>" data-src="<?=$picture?>" data-mobile-src="<?=$picture?>" alt="">
      <?php

            }?>

      <div class="container">
        <div class="intro-inner">
          <div class="intro-title">
            <?=$item['~NAME']?>
          </div>

          <div class="intro-meta">
            <?=$item['DETAIL_TEXT']?>
          </div>

          <?if($item['PREVIEW_TEXT']):?>
          <div class="wb__intro-inner__list">
            <?=$item['PREVIEW_TEXT'];?>
          </div>
          <?endif;?>

          <?if(
                        !empty($item['PROPERTY_BTNTEXT_VALUE']) &&
                        !empty($item['PROPERTY_BTNLINK_VALUE'])
                    ):?>
          <a href="<?=$item['PROPERTY_BTNLINK_VALUE']?>" class="btn btn-orange"><?=$item['PROPERTY_BTNTEXT_VALUE']?></a>
          <?endif?>

          <?if(!empty($item['PROPERTY_SUBMETA_VALUE']['TEXT'])):?>
          <div class="intro-submeta">
            <?=$item['~PROPERTY_SUBMETA_VALUE']['TEXT']?>
          </div>
          <?endif?>

        </div>
      </div>
    </div>
    <? endforeach ?>

  </div>
  <div class="small-banner">
    <div class="container">
      <div class="banner-content">

        <div class="description">
          <div class="title">СНИЖЕНИЕ ЦЕН! </div>
          <span class="small-banner__desc">обращайтесь за актуальным расчетом стоимости проекта</span>
        </div>
        <div class="wrapper-button">
          <button class="btn__green js-callback">рассчитайте смету</button>
        </div>

        <!-- <div class="close-wrapper">
          <div class="close">
            &#8855;
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>

<? endif ?>