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


<div class="tech-list">
    <? foreach ($arResult['rows'] as $n => $row): ?>
    <div class="tech-item justify-content-<?=$n%2 ? 'start' : 'end' ?>">
        <div class="tech-icon">
            <?=$row['UF_IMG']?>
        </div>
        <div class="tech-text">
            <?=$row['UF_TEXT']?>
        </div>
    </div>
	
    <? endforeach; ?>

</div>
