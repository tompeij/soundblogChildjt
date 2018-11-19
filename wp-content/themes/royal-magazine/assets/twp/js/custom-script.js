(function (e) {
    "use strict";
    var n = window.TWP_JS || {};
    n.stickyMenu = function () {
        e(window).scrollTop() > 350 ? e("#masthead").addClass("nav-affix") : e("#masthead").removeClass("nav-affix")
    },
        n.mobileMenu = {
            init: function () {
                this.toggleMenu(), this.menuMobile(), this.menuArrow()
            },
            toggleMenu: function () {
                e('#masthead').on('click', '.toggle-menu', function(event) {
                    var ethis = e('.main-navigation .menu .menu-mobile');
                    if (ethis.css('display') == 'block') {
                        ethis.slideUp('300');
                    } else {
                        ethis.slideDown('300');
                    }
                    e('.ham').toggleClass('exit');
                });
                e('#masthead .main-navigation ').on('click', '.menu-mobile a i', function(event) {
                    event.preventDefault();
                    var ethis = e(this),
                        eparent = ethis.closest('li'),
                        esub_menu = eparent.find('> .sub-menu');
                    if (esub_menu.css('display') == 'none') {
                        esub_menu.slideDown('300');
                        ethis.addClass('active');
                    } else {
                        esub_menu.slideUp('300');
                        ethis.removeClass('active');
                    }
                    return false;
                });
            },
            menuMobile: function () {
                if (e('.main-navigation .menu > ul').length) {
                    var ethis = e('.main-navigation .menu > ul'),
                        eparent = ethis.closest('.main-navigation'),
                        pointbreak = eparent.data('epointbreak'),
                        window_width = window.innerWidth;
                    if (typeof pointbreak == 'undefined') {
                        pointbreak = 991;
                    }
                    if (pointbreak >= window_width) {
                        ethis.addClass('menu-mobile').removeClass('menu-desktop');
                        e('.main-navigation .toggle-menu').css('display', 'block');
                    } else {
                        ethis.addClass('menu-desktop').removeClass('menu-mobile').css('display', '');
                        e('.main-navigation .toggle-menu').css('display', '');
                    }
                }
            },
            menuArrow: function () {
                if (e('#masthead .main-navigation div.menu > ul').length) {
                    e('#masthead .main-navigation div.menu > ul .sub-menu').parent('li').find('> a').append('<i class="ion-ios-arrow-down">');
                }
            }
        },

        n.TwpReveal = function () {
            e('.icon-search').on('click', function(event) {
                e('body').toggleClass('reveal-search');
            });
            e('.close-popup').on('click', function(event) {
                e('body').removeClass('reveal-search reveal-social');
            });
        },

        n.DataBackground = function () {
            var pageSection = e(".data-bg");
            pageSection.each(function (indx) {

                if (e(this).attr("data-background")) {
                    e(this).css("background-image", "url(" + e(this).data("background") + ")");
                }
            });

            e('.bg-image').each(function () {
                var src = e(this).children('img').attr('src');
                e(this).css('background-image', 'url(' + src + ')').children('img').hide();
            });
        },

        n.InnerBanner = function () {
            var pageSection = e(".data-bg");
            pageSection.each(function (indx) {
                if (e(this).attr("data-background")) {
                    e(this).css("background-image", "url(" + e(this).data("background") + ")");
                }
            });
        },

        /* Slick Slider */
        n.SlickCarousel = function () {
            e(".mainbanner-jumbotron").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                autoplay: true,
                autoplaySpeed: 8000,
                infinite: true,
                dots: false,
                nextArrow: '<i class="twp-icon slide-icon slide-next ion-ios-arrow-right alt-bgcolor"></i>',
                prevArrow: '<i class="twp-icon slide-icon slide-prev ion-ios-arrow-left alt-bgcolor"></i>',
                asNavFor: '.slider-nav'
            });

            e('.slider-nav').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.mainbanner-jumbotron',
                dots: false,
                arrows: false,
                focusOnSelect: true,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true
                        }
                    }
                ]
            });
        },

        n.TwpMarquee = function () {
            e('.marquee').marquee({
                direction: 'left',
                speed: 1500,
                pauseOnHover: true
            });
        },

        n.twp_preloader = function () {
            e(window).load(function(){
                e("body").addClass("page-loaded");
            });
        },

        n.InnerBanner = function () {
            var pageSection = e(".data-bg");
            pageSection.each(function (indx) {
                if (e(this).attr("data-background")) {
                    e(this).css("background-image", "url(" + e(this).data("background") + ")");
                }
            });
        },

        n.twp_matchheight = function () {
            jQuery('.theiaStickySidebar', 'body').parent().theiaStickySidebar({
                additionalMarginTop: 30
            });
        },

        // SHOW/HIDE SCROLL UP //
        n.show_hide_scroll_top = function () {
            if (e(window).scrollTop() > e(window).height() / 2) {
                e("#scroll-up").fadeIn(300);
            } else {
                e("#scroll-up").fadeOut(300);
            }
        },

        // SCROLL UP //
        n.scroll_up = function () {
            e("#scroll-up").on("click", function () {
                e("html, body").animate({
                    scrollTop: 0
                }, 800);
                return false;
            });

            if( e('.cd-stretchy-nav').length > 0 ) {
                var stretchyNavs = e('.cd-stretchy-nav');

                stretchyNavs.each(function(){
                    var stretchyNav = e(this),
                        stretchyNavTrigger = stretchyNav.find('.cd-nav-trigger');

                    stretchyNavTrigger.on('click', function(event){
                        event.preventDefault();
                        stretchyNav.toggleClass('nav-is-visible');
                    });
                });

                e(document).on('click', function(event){
                    ( !e(event.target).is('.cd-nav-trigger') && !e(event.target).is('.cd-nav-trigger span') ) && stretchyNavs.removeClass('nav-is-visible');
                });
            }


        },

        e(document).ready(function () {
            n.mobileMenu.init(), n.TwpReveal(), n.DataBackground(), n.InnerBanner(), n.SlickCarousel(), n.TwpMarquee(), n.twp_preloader(), n.twp_matchheight(), n.scroll_up();
        }), e(window).scroll(function () {
        n.stickyMenu(), n.show_hide_scroll_top();
    }), e(window).resize(function () {
        n.mobileMenu.menuMobile();
    })
})(jQuery);