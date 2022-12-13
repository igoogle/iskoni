<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="footer-item">
  <div class="footer-title">Москва</div>
  <div class="footer-body">
    <?=nl2br( \Bitrix\Main\Config\Option::get("grain.customsettings","ADDR_MSK") ) ?>
  </div>
</div>


<div class="footer-item">
  <div class="footer-title"> Казань</div>
  <div class="footer-body">
    <?=nl2br( \Bitrix\Main\Config\Option::get("grain.customsettings","ADDR_KAZ") ) ?>
  </div>
</div>

<div class="footer-item">
  <div class="footer-title"><a href="tel:+74957447899">+7 (495) 744-78-99</a></div>
  <div class="footer-body">Офис в Москве</div>
</div>

<div class="footer-item">
  <div class="footer-title"><a href="mailto:info@iskoni.ru">info@iskoni.ru</a></div>
</div>