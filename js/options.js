! function(e) {
    "use strict";

    function t(t) {
        var a = t[0].getBoundingClientRect(),
            n = e(window).height(),
            o = n - (a.bottom - a.height),
            i = n + a.height;
        return o > 0 && i > o ? !0 : !1
    }

    function a(e) {
        e = e || window.event, e.preventDefault && e.preventDefault(), e.returnValue = !1
    }

    function n(e) {
        return s[e.keyCode] ? (a(e), !1) : void 0
    }

    function o() {
        window.addEventListener && window.addEventListener("DOMMouseScroll", a, !1), window.onwheel = a, window.onmousewheel = document.onmousewheel = a, window.ontouchmove = a, document.onkeydown = n
    }

    function i() {
        window.removeEventListener && window.removeEventListener("DOMMouseScroll", a, !1), window.onmousewheel = document.onmousewheel = null, window.onwheel = null, window.ontouchmove = null, document.onkeydown = null
    }
    e.fn.hasAttr = function(e) {
        var t = this;
        return void 0 !== t.attr(e) ? !0 : !1
    };
    var s = {
            37: 1,
            38: 1,
            39: 1,
            40: 1
        },
        r = {
            init: function() {
                this.checkInputsForValue(), this.pageNavigation(), this.nrOnlyInputs(), this.slickInit(), this.parallaxInit(), this.animatedCounters(), this.toggles(), this.tabsInit(), this.countDownInit(), this.googleMaps()
            },
            checkInputsForValue: function() {
                e(document).on("focusout", ".check-value", function() {
                    var t = e(this).val();
                    "" === t || "" === t.replace(/^\s+|\s+$/g, "") ? e(this).removeClass("has-value") : e(this).addClass("has-value")
                })
            },
            pageNavigation: function() {
                function a() {
                    e(".main-nav li").removeClass("high-lighted"), e(".main-nav li.active").addClass("high-lighted"), n(), e(window).on("resize", function() {
                        n()
                    })
                }

                function n() {
                    e(".active-indicator").css({
                        width: e(".main-nav li.active").width(),
                        left: e(".main-nav li.active").offset().left - e(".main-nav").offset().left + "px"
                    })
                }
                var o, i = [],
                    s = e(".section").length,
                    r = !0;
                a(), e(window).on("scroll", function() {
                    var n = e(this).scrollTop();
                    n > e(".main-header").height() ? e(".main-header").addClass("smaller") : e(".main-header").removeClass("smaller"), i = [];
                    for (var l = 0; s > l; l++) t(e(".section").eq(l)) && i.push(l);
                    o = Math.max.apply(Math, i), o != -(1 / 0) && s > 1 && (e(".main-nav li a").parent().removeClass("active"), e('.main-nav li a[href="#' + e(".section").eq(o).attr("id") + '"]').parent().addClass("active")), r && a()
                }), e(".main-nav li a").on("click", function() {
                    var t = e(this);
                    if (e(window).width() > 1200 && location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
                        var n = e(this.hash);
                        if (n = n.length ? n : e("[name=" + this.hash.slice(1) + "]"), n.length) return r = !1, e("html, body").animate({
                            scrollTop: n.offset().top - e(".main-header").height() / 2
                        }, 1e3), setTimeout(function() {
                            e(".main-nav li a").parent().removeClass("active"), t.parent().addClass("active"), a(), r = !0
                        }, 1100), !1
                    }
                })
            },
            nrOnlyInputs: function() {
                e(".nr-only").keypress(function(e) {
                    return 8 !== e.which && 0 !== e.which && (e.which < 48 || e.which > 57) ? !1 : void 0
                })
            },
            slickInit: function() {
                var t = e(".tt-carousel"),
                    a = e(".tt-slider");
                t.each(function() {
                    var t = e(this),
                        a = t.find(".carousel-items");
                    a.slick({
                        focusOnSelect: !0,
                        speed: t.hasAttr("data-speed") ? t.data("speed") : 600,
                        slidesToShow: t.hasAttr("data-items-desktop") ? t.data("items-desktop") : 4,
                        arrows: t.hasAttr("data-arrows") ? t.data("arrows") : !0,
                        dots: t.hasAttr("data-dots") ? t.data("dots") : !0,
                        infinite: t.hasAttr("data-infinite") ? t.data("infinite") : !1,
                        slidesToScroll: t.hasAttr("data-items-to-slide") ? t.data("items-to-slide") : 1,
                        initialSlide: t.hasAttr("data-start") ? t.data("start") : 0,
                        asNavFor: t.hasAttr("data-as-nav-for") ? t.data("as-nav-for") : "",
                        centerMode: t.hasAttr("data-center-mode") ? t.data("center-mode") : "",
                        vertical: t.hasAttr("data-vertical") ? t.data("vertical") : !1,
                        responsive: [{
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: t.hasAttr("data-items-small-desktop") ? t.data("items-small-desktop") : 3,
                                slidesToScroll: t.hasAttr("data-items-small-desktop") ? t.data("items-small-desktop") : 3
                            }
                        }, {
                            breakpoint: 800,
                            settings: {
                                slidesToShow: t.hasAttr("data-items-tablet") ? t.data("items-tablet") : 2,
                                slidesToScroll: t.hasAttr("data-items-tablet") ? t.data("items-tablet") : 2
                            }
                        }, {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: t.hasAttr("data-items-phone") ? t.data("items-phone") : 2,
                                slidesToScroll: t.hasAttr("data-items-phone") ? t.data("items-phone") : 2
                            }
                        }]
                    })
                }), a.each(function() {
                    var t = e(this),
                        a = t.find(".slides-list");
                    a.slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        focusOnSelect: !0,
                        autoplay: t.hasAttr("data-autoplay") ? t.data("autoplay") : !1,
                        autoplaySpeed: t.hasAttr("data-autoplay-speed") ? t.data("autoplay-speed") : 2e3,
                        pauseOnHover: t.hasAttr("data-pause-on-hover") ? t.data("pause-on-hover") : !0,
                        fade: t.hasAttr("data-fade") ? t.data("fade") : !1,
                        dots: t.hasAttr("data-dots") ? t.data("dots") : !0,
                        speed: t.hasAttr("data-speed") ? t.data("speed") : 500,
                        arrows: t.hasAttr("data-arrows") ? t.data("arrows") : !0,
                        infinite: t.hasAttr("data-infinite") ? t.data("infinite") : !1,
                        initialSlide: t.hasAttr("data-start") ? t.data("start") : 0,
                        asNavFor: t.hasAttr("data-as-nav-for") ? t.data("as-nav-for") : ""
                    })
                })
            },
            parallaxInit: function() {
                var e = jQuery("[data-parallax-bg]");
                e.length && e.each(function(t) {
                    function a() {
                        var a = e[t],
                            o = a.getBoundingClientRect(),
                            i = jQuery(window).height(),
                            s = i - (o.bottom - o.height),
                            r = n.find(".box-img"),
                            l = i + o.height,
                            d = s / l;
                        s > 0 && l > s && r.css({
                            transform: "translateY(" + 100 * d + "px)"
                        })
                    }
                    var n = e.eq(t),
                        o = n.data("parallax-bg"),
                        i = n.find(".box-img > span");
                    i.css({
                        "background-image": 'url("' + o + '")'
                    }), a(), jQuery(window).scroll(function() {
                        a()
                    })
                })
            },
            animatedCounters: function() {
                function a() {
                    e(".counter-box").each(function() {
                        var a = e(this);
                        if (t(a) && "0" === a.attr("data-state")) {
                            a.attr("data-state", "1");
                            var n = 2500;
                            e({
                                Counter: 0
                            }).animate({
                                Counter: parseInt(a.data("counter-value"), 10)
                            }, {
                                duration: n,
                                easing: "swing",
                                step: function(e) {
                                    a.find(".value-container").text(Math.ceil(e))
                                }
                            })
                        }
                    })
                }
                a(), e(window).on("scroll", function() {
                    a()
                })
            },
            toggles: function() {
                var t, a, n;
                setTimeout(function() {
                    t = e(".video-wrapper").outerHeight(!0), e(".video-wrapper").css({
                        height: t + "px"
                    })
                }, 300), e(".video-btn-toggle").on("click", function() {
                    e(".video-wrapper").css({
                        height: "100vh"
                    }), e(".main-header").addClass("hide-top"), n = e(window).scrollTop(), e("html, body").animate({
                        scrollTop: e(".video-wrapper").offset().top + "px"
                    }, "swing"), e(".video-wrapper").addClass("show-video"), a = e(".video-wrapper .video-container").html(), e(".video-wrapper .video-container iframe")[0].src += "?autoplay=1", o()
                }), e(document).on("click", ".video-close-bar .close-btn", function() {
                    e(".video-wrapper").css({
                        height: t + "px"
                    }), e(".main-header").removeClass("hide-top"), e(".video-wrapper").removeClass("show-video"), e(".video-wrapper .video-container").html(a), i(), e("html, body").animate({
                        scrollTop: n + "px"
                    }, "swing")
                }), e(".mobile-nav-toggle").on("click", function() {
                    return e("body").toggleClass("mobile-navigation-visible"), e("body").hasClass("mobile-navigation-visible") ? e(".main-header").css({
                        "-webkit-transform": "translateY(" + e(".main-nav").outerHeight(!0) + "px)",
                        transform: "translateY(" + e(".main-nav").outerHeight(!0) + "px)"
                    }) : e(".main-header").css({
                        "-webkit-transform": "translateY(0px)",
                        transform: "translateY(0px)"
                    }), !1
                }), e(".main-nav").on("click", function(t) {
                    e(window).width() < 1200 && t.stopPropagation()
                }), e(document).on("click", function() {
                    e(".content-wrapper, .main-header").css({
                        "-webkit-transform": "translateY(0px)",
                        transform: "translateY(0px)"
                    })
                }), e(window).on("scroll resize", function() {
                    e("body").hasClass("mobile-navigation-visible") && (e("body").removeClass("mobile-navigation-visible"), e(".content-wrapper, .main-header").css({
                        "-webkit-transform": "translateY(0px)",
                        transform: "translateY(0px)"
                    }))
                }), e(".main-nav .menu-item-has-children > a").on("click", function(t) {
                    var a = e(this);
                    e(window).width() < 1200 && (t.preventDefault(), a.next().slideToggle(200), setTimeout(function() {
                        e(".main-header").css({
                            "-webkit-transform": "translateY(" + e(".main-nav").outerHeight(!0) + "px)",
                            transform: "translateY(" + e(".main-nav").outerHeight(!0) + "px)"
                        })
                    }, 200))
                }), e(".register-image-wrapper").one("click", function() {
                    e(".register-area-wrapper").addClass("show-form")
                }), e(".custom-select").each(function() {
                    var t = e(this);
                    t.find(".select-option").on("click", function() {
                        t.find(".select-option").removeClass("active-option"), e(this).addClass("active-option"), t.find(".select-value").addClass("has-value").attr("value", e(this).text())
                    })
                }), e(".top-tickets, .pricing-table .buy-btn").on("click", function(t) {
                    t.preventDefault(), e(".page-popup").addClass("open"), e(".page-popup .popup-overlay").css({
                        top: t.clientY,
                        left: t.clientX,
                        opacity: .95,
                        width: 2 * (window.innerWidth + window.innerHeight),
                        height: 2 * (window.innerWidth + window.innerHeight)
                    })
                }), e(".page-popup .close-popup-btn").on("click", function() {
                    e(".page-popup .popup-overlay").css({
                        width: 0,
                        height: 0
                    }), setTimeout(function() {
                        e(".page-popup").removeClass("open"), e(".page-popup .popup-overlay").css({
                            opacity: ".2",
                            left: "auto",
                            top: "auto"
                        })
                    }, 410)
                })
            },
            tabsInit: function() {
                var t = e(".tabed-content");
                t.each(function() {
                    var a = e(this),
                        n = a.find(".tabs-header .tab-link"),
                        o = a.find(".tab-item");
                    n.on("click", function() {
                        var i = e(this);
                        i.hasClass("current") || (n.removeClass("current"), i.addClass("current"), t.hasClass("gallery-tabs") ? (a.addClass("switching"), setTimeout(function() {
                            o.removeClass("current"), e("#" + i.data("tab-link")).addClass("current"), t.removeClass("switching")
                        }, 1795)) : (o.removeClass("current"), e("#" + i.data("tab-link")).addClass("current")))
                    })
                })
            },
            accordionInit: function() {
                var t = e(".accordion-group");
                t.each(function() {
                    var t = e(this).find(".accordion-box");
                    t.each(function() {
                        var t = e(this),
                            a = e(this).find(".box-header h4"),
                            n = e(this).find(".box-body");
                        a.on("click", function() {
                            t.hasClass("open") ? n.velocity("slideUp", {
                                duration: 150,
                                complete: function() {
                                    t.removeClass("open")
                                }
                            }) : (t.addClass("open"), n.velocity("slideDown", {
                                duration: 195
                            }))
                        })
                    })
                })
            },
            countDownInit: function() {
                var t = jQuery(".countdown-timmer").attr("data-duedate"),
                    a = (new Date).getTime(),
                    n = new Date(t).getTime();
                e(".countdown-timmer").countdown(t, function(t) {
                    var o = e(this),
                        i = Math.round(Math.abs(a - n) / 864e5),
                        s = {
                            seconds: 60,
                            minutes: 60,
                            hours: 24
                        },
                        r = null;
                    switch (t.type) {
                        case "seconds":
                        case "minutes":
                        case "hours":
                        case "days":
                        case "weeks":
                        case "daysLeft":
                            o.find("." + t.type).html(t.value), r = "days" === t.type ? 100 * (i - t.value) / i : 100 / s[t.type] * (s[t.type] - t.value);
                            break;
                        case "finished":
                            o.hide()
                    }
                })
            },
            googleMaps: function() {
                function a(a) {
                    var o = {
                            center: new google.maps.LatLng(a.map_center.lat, a.map_center.lon),
                            zoom: parseInt(a.zoom),
                            scrollwheel: !1,
                            disableDefaultUI: !0,
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                            styles: [{
                                featureType: "all",
                                elementType: "labels.text.fill",
                                stylers: [{
                                    saturation: 36
                                }, {
                                    color: "#000000"
                                }, {
                                    lightness: 40
                                }]
                            }, {
                                featureType: "all",
                                elementType: "labels.text.stroke",
                                stylers: [{
                                    visibility: "on"
                                }, {
                                    color: "#000000"
                                }, {
                                    lightness: 16
                                }]
                            }, {
                                featureType: "all",
                                elementType: "labels.icon",
                                stylers: [{
                                    visibility: "off"
                                }]
                            }, {
                                featureType: "administrative",
                                elementType: "geometry.fill",
                                stylers: [{
                                    color: "#000000"
                                }, {
                                    lightness: 20
                                }]
                            }, {
                                featureType: "administrative",
                                elementType: "geometry.stroke",
                                stylers: [{
                                    color: "#000000"
                                }, {
                                    lightness: 17
                                }, {
                                    weight: 1.2
                                }]
                            }, {
                                featureType: "landscape",
                                elementType: "geometry",
                                stylers: [{
                                    color: "#000000"
                                }, {
                                    lightness: 20
                                }]
                            }, {
                                featureType: "poi",
                                elementType: "geometry",
                                stylers: [{
                                    color: "#000000"
                                }, {
                                    lightness: 21
                                }]
                            }, {
                                featureType: "road.highway",
                                elementType: "geometry.fill",
                                stylers: [{
                                    color: "#000000"
                                }, {
                                    lightness: 17
                                }]
                            }, {
                                featureType: "road.highway",
                                elementType: "geometry.stroke",
                                stylers: [{
                                    color: "#000000"
                                }, {
                                    lightness: 29
                                }, {
                                    weight: .2
                                }]
                            }, {
                                featureType: "road.arterial",
                                elementType: "geometry",
                                stylers: [{
                                    color: "#000000"
                                }, {
                                    lightness: 18
                                }]
                            }, {
                                featureType: "road.local",
                                elementType: "geometry",
                                stylers: [{
                                    color: "#000000"
                                }, {
                                    lightness: 16
                                }]
                            }, {
                                featureType: "transit",
                                elementType: "geometry",
                                stylers: [{
                                    color: "#000000"
                                }, {
                                    lightness: 19
                                }]
                            }, {
                                featureType: "water",
                                elementType: "geometry",
                                stylers: [{
                                    color: "#000000"
                                }, {
                                    lightness: 17
                                }]
                            }]
                        },
                        i = new google.maps.Map(e("#map-canvas")[0], o),
                        s = new google.maps.Marker({
                            map: i,
                            position: new google.maps.LatLng(a.marker_coord.lat, a.marker_coord.lon),
                            animation: google.maps.Animation.DROP,
                            icon: a.marker
                        });
                    n.open(i, s), e(window).on("scroll", function() {
                        t(e(".map-wrapper")) ? setTimeout(function() {
                            e(".map-wrapper").addClass("show-popup")
                        }, 750) : e(".map-wrapper").removeClass("show-popup")
                    })
                }
                if (e("#contact-popup").length) var n = new InfoBox({
                    content: document.getElementById("contact-popup"),
                    closeBoxURL: ""
                });
                if (e("#map-canvas").length) {
                    var o = e("#map-canvas").data("options");
                    google.maps.event.addDomListener(window, "load", a(o))
                }
            }
        };
    e(document).ready(function() {
        r.init(), setTimeout(function() {
            e("body").addClass("dom-ready")
        }, 300)
    })
}(jQuery);