<div class="sort_header">
  <!--noindex-->



  <div class="sort_filter">
    <div class="sort_filter__mob">
      <div class="card__catalog__filter">Фильтер</div>
      <select name="select" class="select">
        <option value="value1" selected>по пулярности</option>
        <option value="value2">цене</option>
        <option value="valu3">хит продаж</option>
      </select>
    </div>





    <div class="sort__inner">
      <span class="sort_btn">Сортировать по:</span>
      <?
			$arAvailableSort = array();
			$arSorts = array("POPULARITY", "PROPERTY_PRICE", "PROPERTY_HIT");
			if(in_array("POPULARITY", $arSorts)){
				$arAvailableSort["SHOWS"] = array("SHOWS", "asc");
			}
			if(in_array("NAME", $arSorts)){
				$arAvailableSort["NAME"] = array("NAME", "asc");
			}
            if(in_array("PROPERTY_PRICE", $arSorts)){
                $arAvailableSort["PROPERTY_PRICE"] = array("PROPERTY_PRICE", "asc");
            }
            if(in_array("PROPERTY_HIT", $arSorts)){
                $arAvailableSort["PROPERTY_HIT"] = array("PROPERTY_HIT", "asc");
            }
			//$sort = "SHOWS";
			$sort = "ID";
			if((array_key_exists("sort", $_REQUEST) && array_key_exists(ToUpper($_REQUEST["sort"]), $arAvailableSort)) || (array_key_exists("sort", $_SESSION) && array_key_exists(ToUpper($_SESSION["sort"]), $arAvailableSort)) || $arParams["ELEMENT_SORT_FIELD"]){
				if($_REQUEST["sort"]){
					$sort = ToUpper($_REQUEST["sort"]);
					$_SESSION["sort"] = ToUpper($_REQUEST["sort"]);
				}
				elseif($_SESSION["sort"]){
					$sort = ToUpper($_SESSION["sort"]);
				}
				else{
					$sort = ToUpper($arParams["ELEMENT_SORT_FIELD"]);
				}
			}
			$sort_order=$arAvailableSort[$sort][1];
			if((array_key_exists("order", $_REQUEST) && in_array(ToLower($_REQUEST["order"]), Array("asc", "desc"))) || (array_key_exists("order", $_REQUEST) && in_array(ToLower($_REQUEST["order"]), Array("asc", "desc")) ) || $arParams["ELEMENT_SORT_ORDER"]){
				if($_REQUEST["order"]){
					$sort_order = $_REQUEST["order"];
					$_SESSION["order"] = $_REQUEST["order"];
				}
				elseif($_SESSION["order"]){
					$sort_order = $_SESSION["order"];
				}
				else{
					$sort_order = ToLower($arParams["ELEMENT_SORT_ORDER"]);
				}
			}
			?>
      <?foreach($arAvailableSort as $key => $val):?>
      <?$newSort = $sort_order == 'desc' ? 'asc' : 'desc';
				$current_url = $APPLICATION->GetCurPageParam('sort='.$key.'&order='.$newSort, 	array('sort', 'order'));
				$url = str_replace('+', '%2B', $current_url);?>
      <a href="<?=$url;?>" class="sort_btn <?=($sort == $key ? 'current' : '')?> <?=$sort_order?> <?=$key?>"
        rel="nofollow">
        <i class="icon" title="<?=GetMessage('SECT_SORT_'.$key)?>"></i><span><?=GetMessage('SECT_SORT_'.$key)?></span>
        <i data-role="prop_angle" class="fa <?if($sort_order == " asc"):?>fa-angle-up
          <?else:?>fa-angle-down
          <?endif;?>">
        </i>
      </a>
      <?endforeach;?>
      <?
			if($sort == "PRICE"){
				$sort = $arAvailableSort["PRICE"][0];
			}
			if($sort == "CATALOG_AVAILABLE"){
				$sort = "CATALOG_QUANTITY";
			}
			?>

    </div>
  </div>
  <div class="clearfix"></div>
  <!--/noindex-->
</div>