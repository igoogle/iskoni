<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!empty($arResult['ERROR']))
{
	echo $arResult['ERROR'];
	return false;
}

//$GLOBALS['APPLICATION']->SetTitle('Highloadblock List');
// DBG::pred($arResult);
?>


<div class="advantages _padding">
  <div class="container">
    <div class="section-head">
      <h2 class="section-title">
        Почему мы:
      </h2>
    </div>

    <ul class="advantages-list">


      <? foreach ($arResult['rows'] as $n => $row): ?>
      <li class="">
        <div class="advantages-item">

          <div class="advantages-title">
            <?=$row['UF_NAME']?>
          </div>

          <?if(!empty($row['UF_TEXT']) && $row['UF_TEXT'] != '&nbsp;'):?>
          <div class="advantages-info"><?=$row['UF_TEXT']?></div>
          <?endif?>
        </div>
      </li>

      <? endforeach; ?>

    </ul>
  </div>
</div>