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
<div class="proj-body container">

    <div class="row ">
        <?$nomer = 1;?>

        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?if ($nomer > 0):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                DBG::pred($arItem);

                $picture = $arItem["PREVIEW_PICTURE"]['SRC'];

                $p = CFile::ResizeImageGet(
                    $arItem["PREVIEW_PICTURE"]["ID"],
                    array(
                        'width' => 315,
                        'height' => 200
                    ),
                    BX_RESIZE_IMAGE_PROPORTIONAL,
                    true,
                    Array(),
                    false,
                    70
                );

                $picture=$p['src'];

                ?>
                <div class="col-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="card <?=$arItem["DISPLAY_PROPERTIES"]["FEATURE"]["VALUE"]?>">
                        <div class="card-thumb">
                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                <img class="lazy" src="<?=$picture?>" data-src="<?=$picture?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-date">	<?=$arItem["DISPLAY_ACTIVE_FROM"]?> </div>
                            <div class="card-body-title">
                                <div class="h6 card-title">
                                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                        <?=$arItem["NAME"]?>
                                    </a>
                                </div>
                            </div>
                            <div class="card-b ">
                                <?=$arItem["PREVIEW_TEXT"]?>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex align-items-center justify-content-between">
                                    ????????????
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

</div>