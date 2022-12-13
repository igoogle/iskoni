<?

  /**
   * @var $arResult
   */

  if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
  $this->setFrameMode(true);
?>
<ul class="mounting__list d-flex">
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

    ?>
    <li><?= $arItem['NAME']; ?></li>
  <? endforeach; ?>
</ul>