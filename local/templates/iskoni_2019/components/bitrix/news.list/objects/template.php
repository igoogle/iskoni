<?

  /**
   * @var $arResult
   */

  if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
  $this->setFrameMode(true);
?>
<div class="completed__sl">


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
        'width' => 320,
        'height' => 999
      ],
      BX_RESIZE_IMAGE_PROPORTIONAL
    )['src'];

    ?>

    <div class="completed__item">
      <div class="completed__img _bgi">
        <a href="#!"><img src="<?= $file; ?>" alt="<?= $arItem['NAME']; ?>"></a>
        <div class="card-meta"><?= $arItem['PROPERTIES']['TITLE']['~VALUE']; ?></div>
      </div>
      <div class="completed__content">
        <div class="completed__name"> <a href="#!"><?= $arItem['NAME']; ?></a></div>
        <div class="completed__list">
          <div class="completed__list_name"><?= $arItem['PREVIEW_TEXT']; ?></div>
          <ul class="completed__meta d-flex">
            <? foreach ($arItem['PROPERTIES']['PROPS']['~VALUE'] as $p => $value):?>
              <li><?= $value; ?>: <span><?= $arItem['PROPERTIES']['PROPS']['DESCRIPTION'][$p]; ?></span></li>
            <? endforeach; ?>
          </ul>
        </div>
      </div>
    </div>

  <? endforeach; ?>

</div>