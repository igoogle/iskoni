<?

  /**
   * @var $arResult
   */

  if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
  $this->setFrameMode(true);
?>
<div class="mounting_slider">
  <? foreach ($arResult['ITEMS'] as $k => $arItem):

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
        'width' => 332,
        'height' => 999
      ],
      BX_RESIZE_IMAGE_PROPORTIONAL
    )['src'];

    ?>

    <img src="<?=$file;?>" alt="<?=$arItem['NAME'];?>">

  <? endforeach; ?>
</div>