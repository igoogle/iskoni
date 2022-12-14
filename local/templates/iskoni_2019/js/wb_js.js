
document.addEventListener('DOMContentLoaded', function () {

  // jQuery(window).on("scroll", function () {
  //   $(this).scrollTop() > 60 ? $("body").addClass("_active_scroll") : $("body").removeClass("_active_scroll")
  // });
  $('.one_progects__sl__inner').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    infinite: true,
    touchMove: true,
    draggable: true,
    lazyLoad: 'ondemand',
    fade: true,
  });



  if (screen.width > 767) { }

  var lastScrollTop = 0;
  jQuery(window).scroll(function (event) {
    var st = $(this).scrollTop();
    if (screen.width > 767) {

      if (st > lastScrollTop) {
        //$('.page-header__bottom').fadeOut();
        $('.header_fixit').addClass('_hidden');
      } else {
        //$('.page-header__bottom').fadeIn();
        $('.header_fixit').removeClass('_hidden');
      }
    }
    lastScrollTop = st;
  });




  $(".substrate").click(function () {
    $("body").removeClass('colllapse');
    $(".navbar-toggler").removeClass('in');
    $(".navbar-nav-mob").css('display', 'none');
  });

  $(".card__catalog__filter").click(function () {
    $("html").addClass('_lock');
    $(".project-sidebar").addClass('_active');
  });

  $(".substrate").click(function () {
    $("html").removeClass('_lock');
    $(".project-sidebar").removeClass('_active');
  });

  $(".input__text__last input:text").click(function () {
    $(this).closest('.custom__input__wrp').find('input:radio').prop('checked', false);
  });
  $(".custom__input__inner").click(function () {
    $(this).closest('.custom__input__wrp').find('.input__text__last input:text').val('');
  });


  $('.houses__sl, .mounting_slider, .project_sl').slick({
    infinite: false,
    speed: 900,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    prevArrow: '<button class="slick-prev"><span></span></button>',
    nextArrow: '<button class="slick-next"><span></span></button>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 590,
        settings: {
          slidesToShow: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          arrows: false,
          infinite: true,
        }
      }
    ]
  });




  // табы
  const tabsBtn = document.querySelectorAll(".tabs__nav-btn");
  const tabsItems = document.querySelectorAll(".tabs__item");

  tabsBtn.forEach(onTabClick);

  function onTabClick(item) {
    item.addEventListener("click", function () {
      let currentBtn = item;
      let tabId = currentBtn.getAttribute("data-tab");
      let currentTab = document.querySelector(tabId);

      if (!currentBtn.classList.contains('active')) {
        tabsBtn.forEach(function (item) {
          item.classList.remove('active');
        });

        tabsItems.forEach(function (item) {
          item.classList.remove('active');
        });

        currentBtn.classList.add('active');
        currentTab.classList.add('active');
      }
    });
  }

  //document.querySelector('.tabs__nav-btn').click();
  // END табы
  // =========================================================================================================




});

