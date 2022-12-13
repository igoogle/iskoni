<div class="about- section text-center">
  <div class="text-left">

    <?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.list",
	"feature",
	Array(
		"BLOCK_ID" => "2",
		"CHECK_PERMISSIONS" => "N",
		"COMPONENT_TEMPLATE" => "feature",
		"DETAIL_URL" => "",
		"FILTER_NAME" => "",
		"PAGEN_ID" => "",
		"ROWS_PER_PAGE" => "",
		"SORT_FIELD" => "UF_SORT",
		"SORT_ORDER" => "ASC"
	)
);?>
    <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."local/include/main_slider.php"
	)
);?>
    <div class="row preim-line">
      <div class="col-6 preim-item">
        <div class="row">
          <div class="col-3">
            <img src="/about/img/preim-about-1.png" class="img-responsive">
          </div>
          <div class="col-9">
            <div class="table-cell">
              строим дома из клееного бруса с 2008 года
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 preim-item">
        <div class="row">
          <div class="col-3">
            <img src="/about/img/preim-about-2.png" class="img-responsive">
          </div>
          <div class="col-9">
            <div class="table-cell">
              стоимость наших домов в среднем ниже на 10% чем у конкурентов за счет внедрения инновационных технологий
              утепленного бруса и собственного производства
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 preim-item">
        <div class="row">
          <div class="col-3">
            <img src="/about/img/preim-about-3.png" class="img-responsive">
          </div>
          <div class="col-9">
            <div class="table-cell">
              личный контроль руководства компании за ходом строительства каждого объекта
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 preim-item">
        <div class="row">
          <div class="col-3">
            <img src="/about/img/preim-about-4.png" class="img-responsive">
          </div>
          <div class="col-9">
            <div class="table-cell">
              семейные ценности и традиции для нас превыше всего. За счет этого мы построим самый лучший, теплый и
              уютный дом для вас и вашей семьи!
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="about- section text-center">
  <div class="container">
    <div class="section-body">
      <div id="mainPageForm">
      </div>
      <script id="bx24_form_inline" data-skip-moving="true">
      setTimeout(function() {
        b24form({
          "id": "8",
          "lang": "ru",
          "sec": "301l6w",
          "type": "inline",
          "node": document.getElementById('mainPageForm')
        });
      }, 6000);
      </script>
    </div>
  </div>
</div>
<br>