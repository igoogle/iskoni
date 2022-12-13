<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
// DBG::pre($arResult["ITEMS"]);
?>

<?if(!empty($arResult['ITEMS'])):?>
	<?foreach ($arResult['ITEMS'] as $item):?>
	<p class="h3 section-title" style="text-align: center;">
	<?=$item['NAME']?>
	</p>
	<p style="text-align: center;">
		<?=$item['PREVIEW_TEXT']?>
	</p>
	<div class="houses-slider" style="padding-bottom: 50px;">
		<?foreach ($item['SLIDES'] as $img):?>
		<a href="<?=$img['SRC']?>" data-fancybox="rg<?=$item['ID']?>">
			<img src="<?=$img['SRC']?>" alt="">
		</a>
		<?endforeach;?>
	</div>

	<?endforeach;?>
<?endif?>