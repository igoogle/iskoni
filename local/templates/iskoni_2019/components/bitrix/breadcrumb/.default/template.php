<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';


$strReturn .= '<nav class="breadcrumb" itemprop="http://schema.org/breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList"><div class="container"><ol>';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	$active = '';
	$aria = '';
	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1){
		$active = 'active';
		$aria = 'aria-current="page"';
	}

	$strReturn .= '
	<li class="breadcrumb-item '.$active.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" '.$aria.'>
		<a href="'.$arResult[$index]["LINK"].'" itemprop="url"><span itemprop="name" title="'.$title.'">'.$title.'</span></a>
		<meta itemprop="position" content="'.($index + 1).'" />
	</li>';

}

$strReturn .= '</ol></div></nav>';

return $strReturn;
