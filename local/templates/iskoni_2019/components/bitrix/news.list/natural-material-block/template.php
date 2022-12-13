<?

  /**
   * @var $arResult
   */

  if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
  $this->setFrameMode(true);
?>

<div class="container single__galery">
  <? foreach ($arResult["ITEMS"] as $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

    $file = CFile::ResizeImageGet(
      $arItem['PREVIEW_PICTURE']['ID'],
      [
        'width' => 320,
        'height' => 999
      ],
      BX_RESIZE_IMAGE_PROPORTIONAL
    )['src'];

    ?>
    <div class="single__galery _bgi" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
      <img src="<?=$file;?>" alt="">
    </div>
  <? endforeach; ?>
</div><!-- /.container single__galery -->





