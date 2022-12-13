<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>


<div class="section">
	<div class="container">
		<h1>404 страница не найдена</h1>
		<p>
			Запрошенная страница не найдена
		</p>
	</div>
</div>



<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>