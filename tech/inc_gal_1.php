<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="slides">
	<?
	$galarr = array();
	$dir = dirname(__FILE__);
	$gal_imgs = glob($dir.'/img/gal/*');
	sort($gal_imgs, SORT_NATURAL );
	foreach ($gal_imgs as $n => $img):
		$img = str_replace($dir.'/', '', $img);
		$galarr[] = $img;
		?>
		<div><div style="background: url(<?=$img?>);"></div></div>
	<?endforeach?>
		<!-- <a href="<?=$img?>" data-fancybox="gal-1" data-thumb="<?=$img?>">
		<?if($n==0):?><img src="<?=$img?>" alt="" style="max-height: 250px;width: 100%;"><?endif?>
		</a> -->
</div>

<div class="slides-control">
	<?foreach ($galarr as $img):?>
		<div><div style="background: url(<?=$img?>);"></div></div>
	<?endforeach?>
</div>
<!-- 
			<style>
.gal a:first-child {
	position: relative;
	display: block;
}
.gal a:first-child::after {
    content: '';
    position: absolute;
    top: 50%;
    right: 50%;
    height: 80px;
    width: 80px;
    background: url(/local/templates/iskoni_2019/css/../images/zoom-in.svg) center no-repeat;
    /*background: red;*/
    /*-webkit-mask-image: url(/local/templates/iskoni_2019/css/../images/zoom-in.svg);*/
    /*mask-image: url(/local/templates/iskoni_2019/css/../images/zoom-in.svg);*/
    z-index: 3;
    -webkit-transform: translate(50%,-50%);
    -ms-transform: translate(50%,-50%);
    -o-transform: translate(50%,-50%);
    transform: translate(50%,-50%);
}
			</style>
		</div>
 -->