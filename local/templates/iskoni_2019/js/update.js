$(function() {

  $('.js-phone-mask').inputmask({"mask": "8(999) 999-99999999999999"});

  $('[name="obshchaya-ploshchad"]').change(function () {
    if ($(this).val() == "unique") {
      $('.unique_area').removeClass("hidden");
    } else {
      $('.unique_area').toggleClass('hidden');
    }
  });

  // $('#calculate').submit(function (e) {
  //   e.preventDefault();
  //   let name = $('#calculate [name="name"]').val(),
  //     phone = $('#calculate [name="tel"]').val(),
  //     email = $('#calculate [name="email"]').val(),
  //     validate = false;
  //   if (name.length < 2) {
  //     $('[name="name"]').addClass("error");
  //     validate = false;
  //   } else {
  //     $('[name="name"]').removeClass("error");
  //     validate = true;
  //   }
  //   if (phone.length < 11) {
  //     $('[name="tel"]').addClass("error");
  //     validate = false;
  //   } else {
  //     $('[name="tel"]').removeClass("error");
  //     validate = true;
  //   }
  //   if (email.length < 5) {
  //     $('[name="email"]').addClass("error");
  //     validate = false;
  //   } else {
  //     $('[name="email"]').removeClass("error");
  //     validate = true;
  //   }
  //
  //   if (validate) {
  //     let form_data = new FormData(this),
  //       totalfiles = document.getElementById('plan').files.length;
  //     if (totalfiles > 2) {
  //       $('.form-result').html(
  //         '<div class="col-12 error">Ошибка. Для загрузки доступно не более двух планировок</div>');
  //     } else {
  //       $.ajax({
  //         type: 'post',
  //         url: '/post.php',
  //         data: form_data,
  //         cache: false,
  //         contentType: false,
  //         processData: false,
  //         success: function (data) {
  //           if (data.success) {
  //             $('.form-result').html(data.success);
  //             $('#calculate')[0].reset();
  //             $('.unique_area').toggleClass('hidden');
  //           } else {
  //             $('.form-result').html(data.error);
  //           }
  //           //$('#result').html(answ);
  //         }
  //       });
  //     }
  //   }
  // });

});

$(document).on('submit', '.js-warming-form', function(z) {

  let $form = $(this);
  let $btn = $('input[type="submit"]', $form);

  $.ajax({
    url: '/local/templates/iskoni_2019/ajax/warming/form-callback.php',
    type: 'post',
    dataType: 'json',
    data: $form.serialize(),
    beforeSend: function () {

    }
  }).done(function (res) {

    $btn.val('Сообщение отправлено');
    $btn.prop('disabled', true);
    ym(89433193,'reachGoal','order-sent')

  });

  z.preventDefault();

});

$(document).on('submit', '.js-big-form', function(z) {

  let $form = $(this);
  let $btn = $('input[type="submit"]', $form);

  $.ajax({
    url: '/local/templates/iskoni_2019/ajax/warming/form-big.php',
    type: 'post',
    dataType: 'json',
    data: $form.serialize(),
    beforeSend: function () {

    }
  }).done(function (res) {

    $btn.val('Сообщение отправлено');
    $btn.prop('disabled', true);
    ym(89433193,'reachGoal','order-sent')

  });

  z.preventDefault();

});

$(document).on('submit', '.js-form-catalog-item', function(z) {

  let $form = $(this);
  let $btn = $('input[type="submit"]', $form);

  $.ajax({
    url: '/local/templates/iskoni_2019/ajax/warming/form-form-catalog-item.php',
    type: 'post',
    dataType: 'json',
    data: $form.serialize(),
    beforeSend: function () {

    }
  }).done(function (res) {

    $btn.val('Сообщение отправлено');
    $btn.prop('disabled', true);
    ym(89433193,'reachGoal','order-sent')

  });

  z.preventDefault();

});

$(document).on('submit', '.js-form-set', function(z) {

  let $form = $(this);
  let $btn = $('button', $form);

  $.ajax({
    url: '/local/templates/iskoni_2019/ajax/warming/form-form-set.php',
    type: 'post',
    dataType: 'json',
    data: $form.serialize(),
    beforeSend: function () {

    }
  }).done(function (res) {

    $btn.html('Сообщение отправлено');
    $btn.prop('disabled', true);
    ym(89433193,'reachGoal','order-sent')

  });

  z.preventDefault();

});

$(document).on('submit', '.js-form-callback', function(z) {

  let $form = $(this);
  let $btn = $('input[type="submit"]', $form);

  $.ajax({
    url: '/local/templates/iskoni_2019/ajax/warming/form-form-catalog.php',
    type: 'post',
    dataType: 'json',
    data: $form.serialize(),
    beforeSend: function () {

    }
  }).done(function (res) {

    $btn.val('Сообщение отправлено');
    $btn.prop('disabled', true);
    ym(89433193,'reachGoal','order-sent')

  });

  z.preventDefault();

});

$(document).on('click', '.js-callback-with-house', function(z) {

  let $this = $(this);

  $('input[name="catalog-item-name"]').val($this.data('catalog-item-name'));
  $('input[name="catalog-item-link"]').val($this.data('catalog-item-link'));

  $('#form-catalog-item--box').arcticmodal();

  z.preventDefault();
});

$(document).on('click', '.js-callback', function(z) {

  $('#form-callback--box').arcticmodal();

  ym(89433193,'reachGoal','order-form-open');

  z.preventDefault();
});

$(document).on('click', '.footer-form--inner', function(z) {
  ym(89433193,'reachGoal','order-form-open');
});

// $(function() {
//
//   $('[data-fancybox="gallery"]').fancybox({
//     buttons : [
//       'slideShow',
//       'share',
//       'zoom',
//       'fullScreen',
//       'download',
//       'close'
//     ],
//     touch: false,
//     infobar : false,
//     // toolbar : false,
//     // buttons : false,
//     loop : true,
//     //arrows: true,
//     //infobar: true,
//     smallBtn: true,
//     toolbar: false,
//     protect: true,
//     modal: true,
//     arrows: function(instance, current) {
//       if ( instance.length > 1 && current.$content ) {
//         current.$content.append('<a data-fancybox-next class="button-next" href="javascript:;"></a><a data-fancybox-prev class="button-previous" href="javascript:;"></a>');
//       }
//       current.$content.append(instance.translate(current, '<div class="fc-toolbar">' +  current.opts.btnTpl.close + '</div>'));
//     }
//   });
//
// });

$(document).on('submit', '.js-form-footer', function(z) {

  let $form = $(this);
  let $btn = $('input[type="submit"]', $form);

  $.ajax({
    url: '/local/templates/iskoni_2019/ajax/warming/form-form-footer.php',
    type: 'post',
    dataType: 'json',
    data: $form.serialize(),
    beforeSend: function () {

    }
  }).done(function (res) {

    $btn.val('Сообщение отправлено');
    $btn.prop('disabled', true);
    ym(89433193,'reachGoal','order-sent')

  });

  z.preventDefault();

});