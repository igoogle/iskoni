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

<?foreach($arResult["ITEMS"] as $arItem):?>
<?if ($arItem["PROPERTIES"]["ACT"]["ACTIV"]=="Y"  ):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

         DBG::pred($arItem);
		?>
        <div class="col-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="card <?=$arItem["DISPLAY_PROPERTIES"]["FEATURE"]["VALUE"]?>">

	  	

                <div class="card-thumb">
<div class="block-akcia "> <div class="akcia "> Акция</div></div>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                    </a>
                </div>

                <div class="card-body">
			<div class="card-date">	<?=$arItem["DISPLAY_ACTIVE_FROM"]?> </div>
                    <div class="card-body-title">
			<h6 class="card-title">
                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                <?=$arItem["NAME"]?>
                            </a>
                        </h6>                        
                   </div>
			<div class="card-b ">

				<?=$arItem["PREVIEW_TEXT"]?>
			</div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center justify-content-between">
                                                      Читать
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