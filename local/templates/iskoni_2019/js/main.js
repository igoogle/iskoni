'use strict';

/*console.log('Не работает')
    setTimeout(function(){

    document.querySelector('.openline').onclick = () => {
        console.log('Работает')
        document.querySelectorAll('.crm-webform-header')[0].innerHTML = "Заполните форму, и наш менеджер свяжется с вами в ближайшее время."
        console.log(document.querySelectorAll('.crm-webform-header')[0])
    }

    }, 3000)*/


function is_mobile() {
    return (window.innerWidth <= 820 && window.innerHeight <= 600);
}

function is_touch_device() {
    return !!('ontouchstart' in window);
}

function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
}


$(document).ready(function () {


    $(document).on('click', '.modal-close', function () {
        $('.modal').remove();
    });

    if (window.location.href != "https://iskoni.ru/") {
        $('.modal').remove()
    }


    // Img in Bg
    function imgBackground() {
        var imgs = $('.img-bg');
        imgs.each(function () {
            var item = $(this).closest('.img-bg-wrap');
            item.css({
                'background-image': 'url(' + $(this).attr('src') + ')',
                'background-position': 'center center',
                '-webkit-background-size': 'cover',
                'background-size': 'cover',
            });
            $(this).hide();
        });
    }
    imgBackground();


    // Mobile Menu
    $('.navbar-toggler').on('click', function (e) {
        e.preventDefault();

        var $this = $(this),
            toggler = $('.navbar-toggler'),
            nav = $('#js-navbar');


        if (!toggler.hasClass('in')) {
            toggler.addClass('in');
            nav.show();
            $('body').addClass('colllapse');
        } else {
            toggler.removeClass('in');
            nav.hide();
            $('body').removeClass('colllapse');
        }

    });

    if (screen.width <= 820) {
        $('.navbar-nav .nav-link[href="/tech/"]').removeAttr('href');
    }


    // const $menu = $('#js-sidebar');

    // $(document).mouseup(function (e) {
    //      if (!$menu.is(e.target) 
    //      && $menu.has(e.target).length === 0) 
    //     {
    //        $menu.removeClass('show');
    //        $('.filter-toggler').removeClass('in');
    //     }
    // });

    // Mobile Filter
    $('.filter-toggler').on('click', function (e) {
        e.preventDefault();

        var $this = $(this),
            toggler = $('.filter-toggler'),
            nav = $('#js-sidebar');


        if (!toggler.hasClass('in')) {
            toggler.addClass('in');
            nav.addClass('show');
            $('body').addClass('colllapse');
        } else {
            toggler.removeClass('in');
            nav.removeClass('show');
            $('body').removeClass('colllapse');
        }

    });



    // Filter Up
    $('.filter-up').on('click', function (e) {
        e.preventDefault();

        var $this = $(this),
            toggler = $('.filter-toggler'),
            nav = $('#js-sidebar');


        $('#js-sidebar').animate({ scrollTop: 0 }, 800);
        return false;

    });

    // 
    var $window = $(window);
    if ($(window).width() > 768) {
        $window.on('load resize', function () {
            $('.navbar-toggler').removeClass('in');
            $('.filter-toggler').removeClass('in');
            $('#js-navbar').hide();
            $('#js-sidebar').removeClass('show');
        });
    }


    // Password Field
    $(".toggle-password").click(function () {

        var $this = $(this),
            group = $this.closest('.form-group'),
            input = group.find('input');


        if (input.attr("type") == "password") {
            input.attr("type", "text");
            $this.addClass('x');
        } else {
            input.attr("type", "password");
            $this.removeClass('x');
        }
    });


    // Tabs 
    $('.tabs__controls-link').on('click', function (e) {
        e.preventDefault();


        var item = $(this).closest('.tabs__controls-item'),
            contentItem = $('.tabs__item'),
            itemPos = item.data('class');

        contentItem.filter('.tab__list-' + itemPos)
            .add(item)
            .addClass('active')
            .siblings()
            .removeClass('active');
    });


    /*-----------------------------------------------------------------*/
    /*  PLUGINS */
    /*-----------------------------------------------------------------*/

    /*=========== WOW animation ===========*/

    if (isMobileDevice() || is_mobile()) {
        console.log('disable wow on mob');
        $('.wow').removeClass('wow fadeInRight');
    }

    if ($('.wow').length) {

        function wowAnimation() {
            new WOW({
                offset: 100,
                mobile: false
            }).init()
        }
        wowAnimation();
    }


    // ---------------------------------- Range slider jq ui
    $('.filter-slider-element').each(function () {
        var $this = $(this),
            container = $this.closest('.filter-slider'),
            min = parseFloat($this.data('min')),
            max = parseFloat($this.data('max')),
            step = parseFloat($this.data('step')),
            minDef = parseFloat($this.data('min-def')),
            maxDef = parseFloat($this.data('max-def')),
            from = container.find('.filter-slider-input-from'),
            to = container.find('.filter-slider-input-to');

        // from.change(function() {
        //     $this.slider('values', 0, from.val());
        // });

        // to.change(function() {
        //     $this.slider('values', 1, to.val());
        // });


        from.on('keyup keypress', function (e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) {
                $(this).change();
                e.preventDefault();
                return false;
            }
        });


        to.on('keyup keypress', function (e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) {
                $(this).change();
                e.preventDefault();
                return false;
            }
        });

        $this.slider({
            range: true,
            min: min,
            max: max,
            step: (step || 1),
            values: [minDef, maxDef],
            slide: function (event, ui) { // При каждом перемещении
                var values = $(this).slider('option', 'values');
                from.val(ui.values[0]);
                to.val(ui.values[1]);

                $('.filter_amount-1 span').html(ui.values[0] + '₽');
                $('.filter_amount-2 span').html(ui.values[1] + '₽');

                console.log(ui.values[0] + '₽');
            },
            change: function (event, ui) { // В конце перетаскивания    
                //console.log('change');
            },
            create: function () { // При создании виджета
                var values = $(this).slider('option', 'values');
                from.val(values[0]);
                to.val(values[1]);

                $('.filter_amount-1 span').html(values[0] + '₽');
                $('.filter_amount-2 span').html(values[1] + '₽');

                console.log(values[1]);
            },
            stop: function (event, ui) { // При завершении перетаскивания

            }
        });
    });


    // ---- Select2
    if ($('.select').length) {
        $('.select').select2({
            // closeOnSelect : false,
            // allowHtml: true,
            // allowClear: true,
            // placeholder: function(){
            //     $(this).data('placeholder');
            // }
        });
    }


    // ---- Fancybox
    $('[data-fancybox="gallery"]').fancybox({

        buttons: [
            'slideShow',
            'share',
            'zoom',
            'fullScreen',
            'download',
            'close'
        ],
        touch: false,
        infobar: false,
        // toolbar : false,
        // buttons : false,
        loop: true,
        //arrows: true,
        //infobar: true,
        smallBtn: true,
        toolbar: false,
        protect: true,
        modal: true,
        arrows: function (instance, current) {

            if (instance.length > 1 && current.$content) {


                current.$content.append('<a data-fancybox-next class="button-next" href="javascript:;"></a><a data-fancybox-prev class="button-previous" href="javascript:;"></a>');

            }
            current.$content.append(instance.translate(current, '<div class="fc-toolbar">' + current.opts.btnTpl.close + '</div>'));
        }

        /*    afterShow : function(instance, current) {
                
                if ( instance.group.length > 1 && current.$content ) {
    
    
                    current.$content.append('<a data-fancybox-next class="button-next" href="javascript:;"></a><a data-fancybox-prev class="button-previous" href="javascript:;"></a>');
                
    }
                current.$content.append(instance.translate(current, '<div class="fc-toolbar">' +  current.opts.btnTpl.close + '</div>'));
            }
    */
    });





    /*=========== Phone Mask ===========*/
    $('.js-phone').mask("+7(999)999-9999");

    /*=========== Slick Slider ===========*/

    if ($('.video-box').length > 1) {
        $('.video-box-wrap').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            infinite: true,
            touchMove: true,
            draggable: true,
            lazyLoad: 'ondemand',
            // prevArrow:'<button class="button-prev"></button>',
            // nextArrow:'<button class="button-next"></button>',
            fade: true,
        });
    }

    if ($('.intro-item').length) {
        $('.intro-slider').each(function () {

            var $this = $(this);

            $this.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                infinite: true,
                touchMove: true,
                draggable: true,
                autoplay: true,
                autoplaySpeed: ($this.data('autoplayspeed') || 3000),
                pauseOnHover: false,
                lazyLoad: 'ondemand',
                prevArrow: '<button class="slick-prev"></button>',
                nextArrow: '<button class="slick-next"></button>',
                fade: true,
            });

        });
    }

    if ($('.slider').length) {
        $('.slider').each(function () {

            var $this = $(this);

            $this.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                infinite: true,
                touchMove: true,
                draggable: true,
                lazyLoad: 'ondemand',
                prevArrow: '<button class="slick-prev"></button>',
                nextArrow: '<button class="slick-next"></button>',
                fade: true,
                //autoplay: true,
                autoplaySpeed: 8000,
                easing: 'swing',
                // centerMode: true,
                // variableWidth: true,
                // responsive: [                        
                //     {
                //       breakpoint: 992,
                //       settings: {
                //         slidesToShow: 2,
                //       }
                //     },
                //     {
                //       breakpoint: 520,
                //       settings: {
                //         slidesToShow: 1,
                //       }
                //     }
                // ]
            });

        });
    }


    if ($('.houses-slider').length) {
        $('.houses-slider').each(function () {

            var $this = $(this);

            $this.slick({
                slidesToShow: ($this.data("inrow") || 3),
                slidesToScroll: 1,
                dots: false,
                infinite: true,
                touchMove: true,
                draggable: true,
                lazyLoad: 'ondemand',
                prevArrow: '<button class="slick-prev"><svg class="icon s-arrow_gray_right"><use xlink:href="#s-arrow_gray_right"></use></svg></button>',
                nextArrow: '<button class="slick-next"><svg class="icon s-arrow_gray_left"><use xlink:href="#s-arrow_gray_left"></use></svg></button>',
                //autoplay: true,
                autoplaySpeed: 8000,
                easing: 'swing',
                // centerMode: true,
                // variableWidth: true,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });

        });
    }


    var numSlick = 0;
    $('.char-slider-win').each(function () {
        numSlick++;
        $(this).addClass('s' + numSlick).slick({
            arrows: false,
            asNavFor: '.char-slider-control.s' + numSlick,
            fade: true,
            slidesToScroll: 1,
            slidesToShow: 1,
        });
    });
    var numSlick = 0;
    $('.char-slider-control').each(function () {
        numSlick++;
        $(this).addClass('s' + numSlick).slick({
            arrow: false,
            asNavFor: '.char-slider-win.s' + numSlick,
            focusOnSelect: true,
            slidesToScroll: 1,
            arrows: false,
            slidesToShow: 4,
            responsive: [
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 3,
                    }
                }
            ]
        });
    });

    //------



    // fix header position with bx admin panel
    var ph = $("#bx-panel").height();
    var header = $(".page-header.fixed-top");

    $(".page-content, .intro").css("margin-top", Math.max(parseInt(header.outerHeight()), 50) + 10);

    if (ph > 0) {
        header.css("top", ph);

        $(window).on("scroll", function () {
            if ($(window).scrollTop() == 0) {
                header.css("top", ph);
            }
            else {
                header.css("top", 0);
            }
        });
    }

    $("#bx-panel-hider, #bx-panel-expander").on("click", function () {
        ph = $("#bx-panel").height();
        header.css("top", ph);
    });


    function animateCSS(element, animationName, callback) {
        const node = document.querySelector(element)
        node.classList.add('animated', animationName)

        function handleAnimationEnd() {
            node.classList.remove('animated', animationName)
            node.removeEventListener('animationend', handleAnimationEnd)

            if (typeof callback === 'function') callback()
        }

        node.addEventListener('animationend', handleAnimationEnd)
    }

    /*if($(window).width() > 768 && $('.advantages-item').length ){
        $window.on('load resize', function(){

            window.addEventListener("scroll", Animation);
            function Animation()
            {
                console.log('addEventListener Animation');
                console.log($('.advantages-item').length);

                $('.advantages-item').each(function(i,e){
                    $(e).addClass('fadeInRight').css("animation-delay",(i/2)+"s");
                    console.log('step '+i);
                });
                // $(".advantages-item:visible").addClass("animated slideInRight delay-1s");
                window.removeEventListener("scroll", Animation);
            }

            // animateCSS('.advantages-item', 'fadeInRight', function(){
            //     console.log('remove class fadeInRight');
            // });

        });
    }*/

    $(document).on('click', '.video-you .cloze', function () {
        $('.video-you').remove();
    });


});


$(window).on('load', function () {


});