<?php
$arUrlRewrite=array (
  10 => 
  array (
    'CONDITION' => '#^/catalog/([0-9]+)#',
    'RULE' => 'ELEMENT_ID=$1',
    'ID' => 'bitrix:house.detail',
    'PATH' => '/catalog/detail.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/news/([0-9]+)#',
    'RULE' => 'ELEMENT_ID=$1',
    'ID' => 'bitrix:news.detail',
    'PATH' => '/news/detail.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/catalog/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/news.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/catalog/inwork/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/404.php',
    'SORT' => 150,
  ),
);
