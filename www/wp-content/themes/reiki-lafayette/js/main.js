/**
 * File main.js.
 *
 * Theme main script.
 *
 * Contains all theme custom features.
 */
var rl;
(function ($) {
    rl = {
        init: function () {
            this.img();
            this.nav();
            this.form();
            this.misc();
            this.slider();
            this.gallery();
        },
        ie: function () {
            try {
                if (
                    /MSIE (\d+\.\d+);/.test(navigator.userAgent) ||
                    !!navigator.userAgent.match(/Trident.*rv\:11\./)
                ) {
                    $("body").addClass("ie-user");
                    return true;
                }
            } catch (err) {
                console.log(err);
            }
            return false;
        },
        img: function (context) {
            if (!context) context = $("body");
            context.find('.bg-cover,[data-fix="image"]').each(function () {
                var wrap = $(this),
                    image = wrap.find(">img");
                if (image.attr("src")) {
                    if (wrap.data("fix") != "image") {
                        image.hide();
                        wrap.css({
                            "background-image": "url('" + image.attr("src") + "')",
                        });
                    } else {
                        wrap.find(".svg.img-fluid").css({
                            "background-image": "url('" + image.attr("src") + "')",
                        });
                    }
                }
                if (ss.ie()) {
                    wrap.find(".svg").removeClass("img-fluid");
                }
            });
        },
        nav: function () {

            //sticky-header
            function stickyHeader() {
                var scroll = $(window).scrollTop();
                if (scroll >= 10) {
                    jQuery(".site-header").addClass("sticky-header");
                } else {
                    jQuery(".site-header").removeClass("sticky-header");
                }
            }
            stickyHeader();
            $(window).scroll(stickyHeader);
            $(window).resize(stickyHeader);

            function marginEl() {
                var header = $(".site-header");
                var headerHeight = header.innerHeight();
                var marginElm = $(".site-content");
                marginElm.css("margin-top", headerHeight);
            }
            marginEl();

            $(window).resize(function () {
                marginEl();
            });

            //dropdown toggle
            $(".navbar .menu-item-has-children .caret").on(
                "click",
                function () {
                    $(this).next(".dropdown-menu").slideToggle();
                }
            );

            function menuState() {
                let winWidth = $(window).innerWidth();

                if (winWidth > 991) {
                    $('body').removeClass('menuOpen');
                    $('.navbar-collapse').removeClass('show');
                    $('.navbar-toggler').addClass('collapsed');
                }

                $('.navbar .navbar-toggler').on('click', function () {
                    $('body').toggleClass('menuOpen');
                });
            }

            menuState();

            $(window).on('resize', menuState);


        },
        form: function () {
            try {
                $(".input-text.qty").each(function () {
                    var elm = $(this);
                    $(
                        '<span class="qty-des"><i class="icon-angle-left"></i></span>'
                    ).insertBefore($(this));
                    $(
                        '<span class="qty-ins"><i class="icon-angle-right"></i></span>'
                    ).insertAfter($(this));
                    elm.prev(".qty-des").on("click", function () {
                        var val = parseInt(elm.val());
                        if (val > 1) {
                            elm.val(val - 1);
                        }
                    });
                    elm.next(".qty-ins").on("click", function () {
                        var val = parseInt(elm.val());
                        elm.val(val + 1);
                    });
                });
            } catch (err) {
                console.log(err);
            }
        },
        misc: function () {
            try {
                //sticky-header
                function stickyHeader() {
                    var scroll = $(window).scrollTop();

                    if (scroll >= 10) {
                        jQuery(".site-header").addClass("sticky-header");
                    } else {
                        jQuery(".site-header").removeClass("sticky-header");
                    }
                }
                stickyHeader();

                function marginEl() {
                    var header = $('.site-header');
                    var headerHeight = header.innerHeight();
                    //console.log(headerHeight);
                    var marginElm = $('.banner, inner-banner');
                    marginElm.css('margin-top', (headerHeight));
                }

                marginEl();
                setInterval(function () {
                    marginEl();
                }, 100);

                $(window).scroll(stickyHeader);
                $(window).resize(stickyHeader);

                //match-height
                // $('[data-fix="height"]').matchHeight();

                // toggle active
                $(".faq-accordion .btn").on("click", function () {
                    $(this).parents(".card").toggleClass("active");
                    $(".faq-accordion .btn")
                        .not(this)
                        .parents(".card")
                        .removeClass("active");
                });

                //collapse-acc
                $(".collapse-acc__head.active").next().slideDown();
                $(".collapse-acc__head").on("click", function () {
                    if ($(this).hasClass('active')) {
                        $(this).removeClass("active").next().slideUp();
                    } else {
                        $(".collapse-acc__head.active").removeClass("active").next(".collapse-acc__content").slideUp();
                        $(this).addClass('active').next('.collapse-acc__content').slideDown();
                    }
                });
            } catch (err) {
                console.log(err);
            }
        },
        slider: function () {
            // slider-col-1
            $(".slider-col-1").slick({
                dots: true,
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: true,
                speed: 800,
            });

            // slider-col-2
            $(".slider-col-2").slick({
                dots: true,
                infinite: false,
                slidesToShow: 2,
                slidesToScroll: 1,
                speed: 800,
                responsive: [{
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        adaptiveHeight: true,
                    },
                }, ],
            });

            // slider-col-3
            $(".slider-col-3").slick({
                dots: true,
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                speed: 800,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            adaptiveHeight: true,
                        },
                    },
                ],
            });

            // slider-col-4
            $(".slider-col-4").slick({
                dots: true,
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                speed: 800,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            adaptiveHeight: true,
                        },
                    },
                ],
            });

            // slider-col-5
            $(".slider-col-5").slick({
                dots: true,
                arrow: true,
                infinite: false,
                slidesToShow: 5,
                slidesToScroll: 1,
                speed: 800,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4,
                        },
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 1,
                            adaptiveHeight: true,
                        },
                    },
                ],
            });

            // verticalSlider-col-1
            $(".verticalSlider-col-1").slick({
                dots: true,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: true,
                autoplay: true,
                autoplaySpeed: 10000,
                speed: 1000,
                vertical: true,
                verticalSwiping: true,
            });
        },
        gallery: function () {
            try {
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none",
                });
            } catch (err) {
                console.log(err);
            }
            try {
                var fix = function () {
                    var t = $(".woocommerce-product-gallery__trigger"),
                        h = t.next(".flex-viewport").outerHeight() - 16;
                    t.height(h);
                };
                $(window).bind("load resize", fix);
                $(".woocommerce-product-gallery .flex-control-nav li").on(
                    "click",
                    function () {
                        setTimeout(fix, 500);
                    }
                );
            } catch (err) {
                console.log(err);
            }
        },
    };
    $(function () {
        rl.init();

        //Counter Init
        // jQuery(".counter").counterUp({
        //     delay: 10,
        //     time: 1000,
        // });
    });
})(jQuery);