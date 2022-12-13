<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<ul class="navbar-nav">

  <?
// DBG::pred($arResult);
foreach($arResult as $arItem):
	// if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
	// 	continue;
?>

  <li class="nav-item <?=($arItem["SELECTED"] ? 'active' : '')?>" aria-hidden="true">
    <a class="nav-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>

    <?if(!empty($arItem['SUBMENU'])):?>
    <ul itemscope itemtype="http://schema.org/SiteNavigationElement">
      <?foreach ($arItem['SUBMENU'] as $k => $subItem):?>

      <li class="sub-nav-item <?=($subItem["SELECTED"] ? 'active' : '')?>">
        <a itemprop="url" class="nav-link" href="<?=$subItem["LINK"]?>"><?=$subItem["TEXT"]?></a>
      </li>
      <?endforeach?>
    </ul>
    <?endif?>
  </li>

  <?endforeach?>

</ul>
<?endif?>
<script>
if (screen.width <= 820) {
  $('.navbar-nav .nav-link[href="/tech/"]').removeAttr('href');
}
</script>