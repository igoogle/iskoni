<?
  if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

  if (!empty($arResult['ERROR'])) {
    echo $arResult['ERROR'];
    return false;
  }

?>
<? #DBG::pred($arResult);?>
<div class="eq section modify eq__form">
  <div class="container">
    <div class="section-head text-center">
      <h2 class="section-title">
        В комплектацию дома входит:
      </h2>
    </div>

    <div class="row eq-list">
      <? foreach ($arResult['rows'] as $row): ?>
        <div class="col-4">
          <div class="eq-item">
            <div class="eq-head">
              <div class="eq-icon">
                <?= $row['UF_FILE'] ?>
              </div>

              <div class="eq-title">
                <?= $row['UF_NAME'] ?>
              </div>
            </div>

            <div class="eq-body">
              <ul>
                <li>
                  <?= str_replace(PHP_EOL, "</li>\n<li>", $row['UF_FULL_DESCRIPTION']) ?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      <? endforeach; ?>

    </div>

    <div class="eq__form__inner">
      <div class="eq__form__hed">Хотите такой дом?</div>

      <form method="post" class="js-form-set">

        <div class="d-flex eq__form__input">
          <input name="user-name" type="text" class="" placeholder="Имя*" title="" required />
          <input name="user-phone" type="text" class="" placeholder="Телефон*" title="" required />
          <button type="submit" class="btn btn-orange">Отправить заявку</button>
        </div>

      </form>

      <span class="eq__form__polisy">Нажимая кнопку «Отправить заявку», я даю свое согласие на <a href="#!">обработку
          моих персональных
          данных</a> </span>

    </div>

    <div class="text-center">
      <!-- 
        <a data-fancybox="" data-src="#callback" href="javascript:;" class="btn btn-orange">
                Хочу такой дом
            </a> 
            <button class="b24-web-form-popup-btn-54 btn btn-orange">Хочу такой дом</button>
        -->
    </div>
  </div>
</div>