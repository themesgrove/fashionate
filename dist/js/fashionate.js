! function(a) {
    "use strict";
    a(function() {
        jQuery(".sticky-post-thumbnail").owlCarousel({
            pagination: !0,
            dots: !1,
            loop: !0,
            items: 1,
            nav: !0,
            navClass: ["owl-carousel-left", "owl-carousel-right"],
            navText: ['<i class="fa fa-angle-left fa-fw""></i>', '<i class="fa fa-angle-right fa-fw"></i>'],
            margin: 10,
            autoplay: !0,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1e3: {
                    items: 1
                }
            }
        }), jQuery(".format-gallery .gallery").addClass("owl-carousel").owlCarousel({
            pagination: !0,
            dots: !1,
            loop: !0,
            items: 1,
            nav: !0,
            navClass: ["owl-carousel-left", "owl-carousel-right"],
            navText: ['<i class="fa fa-angle-left fa-fw""></i>', '<i class="fa fa-angle-right fa-fw"></i>'],
            margin: 10,
            autoplay: !0,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1e3: {
                    items: 1
                }
            }
        }), a("ul.nav li.dropdown, ul.nav li.dropdown-submenu").hover(function() {
            a(this).find(" > .dropdown-menu").stop(!0, !0).delay(200).fadeIn()
        }, function() {
            a(this).find(" > .dropdown-menu").stop(!0, !0).delay(200).fadeOut()
        })
    })
}(jQuery);