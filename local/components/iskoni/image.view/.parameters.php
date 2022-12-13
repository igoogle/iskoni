<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arComponentParameters = array(
	"PARAMETERS" => array(
		"FILE_PATH" => Array(
			"NAME" => "Файл изображения",
			"TYPE" => "FILE",
			"FD_TARGET" => "Y",
			"PARENT" => "BASE",
      "FD_EXT" => "png,gif,jpg,jpeg",
      "FD_UPLOAD" => true,
      "FD_USE_MEDIALIB" => true,
      "FD_MEDIALIB_TYPES" => Array(
        'image',
      ),
      "DEFAULT" => ""
		),
		"TITLE" => Array(
			"NAME" => "Заголовок",
			"TYPE" => "STRING",
      "DEFAULT" => ""
		),
	)
);