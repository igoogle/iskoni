<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult['rows'] as &$r) {
// DBG::pred(htmlspecialchars($r['UF_IMG']),($src));
	if(strpos($r['UF_IMG'], 'a href' ) ){
		preg_match('#\<a href\=\"(.*)\" title\=\"Скачать файл\">(.*)\<\/a\>#', $r['UF_IMG'], $src);
		$r['UF_IMG'] = '<img src="'.$src[1].'" border="0">';
	}
}
