<?

  /**
   * @var $arResult
   */

  if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
  $this->setFrameMode(true);
?>

<div class="project_sl">
  <?
    foreach ($arResult['ITEMS'] as $k => $arItem):

      $fileSm = CFile::ResizeImageGet(
        $arItem['PREVIEW_PICTURE']['ID'],
        [
          'width' => 32,
          'height' => 99
        ],
        BX_RESIZE_IMAGE_PROPORTIONAL
      )['src'];

      $file = CFile::ResizeImageGet(
        $arItem['PREVIEW_PICTURE']['ID'],
        [
          'width' => 320,
          'height' => 999
        ],
        BX_RESIZE_IMAGE_PROPORTIONAL
      )['src'];

      ?>
    <div class="card__inner">
      <div class="card">
        <div class="card-thumb">

          <?if(is_array($arItem['PROPERTIES']['ACTIONS']['VALUE'])):?>
            <div class="card-thumb_prom">
              <?foreach($arItem['PROPERTIES']['ACTIONS']['VALUE'] as $c => $color):?>
                <div class="hit" style="background-color: #<?=$color;?>">
                  <?=$arItem['PROPERTIES']['ACTIONS']['DESCRIPTION'][$c];?>
                </div>
              <?endforeach;?>
            </div>
          <?endif;?>

          <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>">
            <img class="lazy" src="<?=$fileSm;?>"
                 data-src="<?=$file;?>" alt="<?= $arItem['NAME']; ?>"
            >
          </a>
          <div class="card-meta"><?=$arItem['PROPERTIES']['S']['VALUE'];?> м²</div>
        </div>
        <div class="card-body">
          <div class="card-head">
            <div class="h6 card-title">
              <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>"><?= $arItem['NAME']; ?></a>
              <?if($arItem['PREVIEW_TEXT']):?>
                <div class="card-text">
                  <?=$arItem['PREVIEW_TEXT'];?>
                </div>
              <?endif;?>
            </div>
            <div class="card-price">
              <span class="card-price__price"><?=$arItem['PROPERTIES']['PRICE']['VALUE'];?></span>
              <!-- <span class="card-price_no">Цена по запросу</span> -->

              <?if($arItem['PROPERTIES']['HINT']['VALUE']):?>
                <i class="card-price__desc"><?=$arItem['PROPERTIES']['HINT']['VALUE'];?>
                  <?if($arItem['PROPERTIES']['HINT']['DESCRIPTION']):?>
                  <i class="card-price__prompt">
                    <b> ⓘ
                      <span class="card-price__prompt_text">
                          <p><?=$arItem['PROPERTIES']['HINT']['DESCRIPTION'];?></p>
                        </span>
                    </b>
                  </i>
                  <?endif;?>
                </i>
              <?endif;?>

            </div>
          </div>
          <div class="card-footer">
            <a class="btn btn-orange callback" href="#!">рассчитайте смету</a>
          </div>
        </div>
      </div>
    </div>
  <? endforeach; ?>
</div>