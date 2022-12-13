<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult['rows'] as &$r) {
// DBG::pred(htmlspecialchars($r['UF_PIC']),($src));
	if(strpos($r['UF_PIC'], 'a href' ) ){
		preg_match('#\<a href\=\"(.*)\" title\=\"Скачать файл\">(.*)\<\/a\>#', $r['UF_PIC'], $src);
		$r['UF_PIC'] = '<img src="'.$src[1].'" alt="" width="90" height="90" border="0">';
	}
}
