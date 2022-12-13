<?

  /**
   * @var $arResult
   */

  if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
  $this->setFrameMode(true);
?>

<div class="environmental__galery">
  <?

    $arItems = array_chunk($arResult['ITEMS'], 2);

    foreach ($arItems as $arColumn):
      ?>
      <div class="environmental__colum">
        <?
          foreach ($arColumn as $arItem):

            $this->AddEditAction(
              $arItem['ID'],
              $arItem['EDIT_LINK'],
              CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT")
            );

            $this->AddDeleteAction(
              $arItem['ID'],
              $arItem['DELETE_LINK'],
              CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
              array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))
            );

            $file = CFile::ResizeImageGet(
              $arItem['PREVIEW_PICTURE']['ID'],
              [
                'width' => 320,
                'height' => 999
              ],
              BX_RESIZE_IMAGE_PROPORTIONAL
            )['src'];

            ?>

            <div>
              <a data-fancybox="gallery"
                 href="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>"
              >
                <img class="lazy" src="<?=$file;?>"
                     data-src="<?=$file;?>"
                     alt="<?=$arItem['NAME'];?>"
                >
              </a>
            </div>

          <? endforeach; ?>
      </div>
    <? endforeach; ?>
</div>
