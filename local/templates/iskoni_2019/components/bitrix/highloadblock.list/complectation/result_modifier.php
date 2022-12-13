<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult['rows'] as &$r) {
// DBG::pred(htmlspecialchars($r['UF_FILE']),($src));
	if(strpos($r['UF_FILE'], 'a href' ) ){
		preg_match('#\<a href\=\"(.*)\" title\=\"Скачать файл\">(.*)\<\/a\>#', $r['UF_FILE'], $src);
		$r['UF_FILE'] = '<img src="'.$src[1].'" alt="" width="90" height="90" border="0">';
	}
}
