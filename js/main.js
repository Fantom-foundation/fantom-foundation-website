jQuery(document).ready(function ($) {

// Range-slider

// First let's set the colors of our sliders
    const settings = {
        fill: '#1abc9c',
        background: '#d7dcdf'
    }

// First find all our sliders
    const sliders = document.querySelectorAll('.range-slider');

// Iterate through that list of sliders
// ... this call goes through our array of sliders [slider1,slider2,slider3] and inserts them one-by-one into the code block below with the variable name (slider). We can then access each of wthem by calling slider
    Array.prototype.forEach.call(sliders, (slider) => {
        // Look inside our slider for our input add an event listener
//   ... the input inside addEventListener() is looking for the input action, we could change it to something like change
        slider.querySelector('input').addEventListener('input', (event) => {
            // 1. apply our value to the span
            slider.querySelector('span').innerHTML = event.target.value;
            // 2. apply our fill to the input
            applyFill(event.target);
        });
        // Don't wait for the listener, apply it now!
        applyFill(slider.querySelector('input'));
    });

// This function applies the fill to our sliders by using a linear gradient background
    function applyFill(slider) {
        // Let's turn our value into a percentage to figure out how far it is in between the min and max of our input
        const percentage = 100 * (slider.value - slider.min) / (slider.max - slider.min);
        // now we'll create a linear gradient that separates at the above point
        // Our background color will change here
        const bg = `linear-gradient(90deg, ${settings.fill} ${percentage}%, ${settings.background} ${percentage + 0.1}%)`;
        slider.style.background = bg;
    }

    /*! rangeslider.js - v2.1.1 | (c) 2016 @andreruffert | MIT license | https://github.com/andreruffert/rangeslider.js */
    !function (a) {
        "use strict";
        "function" == typeof define && define.amd ? define(["jquery"], a) : "object" == typeof exports ? module.exports = a(require("jquery")) : a(jQuery)
    }(function (a) {
        "use strict";
        function b() {
            var a = document.createElement("input");
            return a.setAttribute("type", "range"), "text" !== a.type
        }
        function c(a, b) {
            var c = Array.prototype.slice.call(arguments, 2);
            return setTimeout(function () {
                return a.apply(null, c)
            }, b)
        }
        function d(a, b) {
            return b = b || 100, function () {
                if (!a.debouncing) {
                    var c = Array.prototype.slice.apply(arguments);
                    a.lastReturnVal = a.apply(window, c), a.debouncing = !0
                }
                return clearTimeout(a.debounceTimeout), a.debounceTimeout = setTimeout(function () {
                    a.debouncing = !1
                }, b), a.lastReturnVal
            }
        }
        function e(a) {
            return a && (0 === a.offsetWidth || 0 === a.offsetHeight || a.open === !1)
        }
        function f(a) {
            for (var b = [], c = a.parentNode; e(c); )
                b.push(c), c = c.parentNode;
            return b
        }
        function g(a, b) {
            function c(a) {
                "undefined" != typeof a.open && (a.open = a.open ? !1 : !0)
            }
            var d = f(a), e = d.length, g = [], h = a[b];
            if (e) {
                for (var i = 0; e > i; i++)
                    g[i] = d[i].style.cssText, d[i].style.setProperty ? d[i].style.setProperty("display", "block", "important") : d[i].style.cssText += ";display: block !important", d[i].style.height = "0", d[i].style.overflow = "hidden", d[i].style.visibility = "hidden", c(d[i]);
                h = a[b];
                for (var j = 0; e > j; j++)
                    d[j].style.cssText = g[j], c(d[j])
            }
            return h
        }
        function h(a, b) {
            var c = parseFloat(a);
            return Number.isNaN(c) ? b : c
        }
        function i(a) {
            return a.charAt(0).toUpperCase() + a.substr(1)
        }
        function j(b, e) {
            if (this.$window = a(window), this.$document = a(document), this.$element = a(b), this.options = a.extend({}, n, e), this.polyfill = this.options.polyfill, this.orientation = this.$element[0].getAttribute("data-orientation") || this.options.orientation, this.onInit = this.options.onInit, this.onSlide = this.options.onSlide, this.onSlideEnd = this.options.onSlideEnd, this.DIMENSION = o.orientation[this.orientation].dimension, this.DIRECTION = o.orientation[this.orientation].direction, this.DIRECTION_STYLE = o.orientation[this.orientation].directionStyle, this.COORDINATE = o.orientation[this.orientation].coordinate, this.polyfill && m)
                return!1;
            this.identifier = "js-" + k + "-" + l++, this.startEvent = this.options.startEvent.join("." + this.identifier + " ") + "." + this.identifier, this.moveEvent = this.options.moveEvent.join("." + this.identifier + " ") + "." + this.identifier, this.endEvent = this.options.endEvent.join("." + this.identifier + " ") + "." + this.identifier, this.toFixed = (this.step + "").replace(".", "").length - 1, this.$fill = a('<div class="' + this.options.fillClass + '" />'), this.$handle = a('<div class="' + this.options.handleClass + '" />'), this.$range = a('<div class="' + this.options.rangeClass + " " + this.options[this.orientation + "Class"] + '" id="' + this.identifier + '" />').insertAfter(this.$element).prepend(this.$fill, this.$handle), this.$element.css({position: "absolute", width: "1px", height: "1px", overflow: "hidden", opacity: "0"}), this.handleDown = a.proxy(this.handleDown, this), this.handleMove = a.proxy(this.handleMove, this), this.handleEnd = a.proxy(this.handleEnd, this), this.init();
            var f = this;
            this.$window.on("resize." + this.identifier, d(function () {
                c(function () {
                    f.update(!1, !1)
                }, 300)
            }, 20)), this.$document.on(this.startEvent, "#" + this.identifier + ":not(." + this.options.disabledClass + ")", this.handleDown), this.$element.on("change." + this.identifier, function (a, b) {
                if (!b || b.origin !== f.identifier) {
                    var c = a.target.value, d = f.getPositionFromValue(c);
                    f.setPosition(d)
                }
            })
        }
        Number.isNaN = Number.isNaN || function (a) {
            return"number" == typeof a && a !== a
        };
        var k = "rangeslider", l = 0, m = b(), n = {polyfill: !0, orientation: "horizontal", rangeClass: "rangeslider", disabledClass: "rangeslider--disabled", horizontalClass: "rangeslider--horizontal", verticalClass: "rangeslider--vertical", fillClass: "rangeslider__fill", handleClass: "rangeslider__handle", startEvent: ["mousedown", "touchstart", "pointerdown"], moveEvent: ["mousemove", "touchmove", "pointermove"], endEvent: ["mouseup", "touchend", "pointerup"]}, o = {orientation: {horizontal: {dimension: "width", direction: "left", directionStyle: "left", coordinate: "x"}, vertical: {dimension: "height", direction: "top", directionStyle: "bottom", coordinate: "y"}}};
        return j.prototype.init = function () {
            this.update(!0, !1), this.onInit && "function" == typeof this.onInit && this.onInit()
        }, j.prototype.update = function (a, b) {
            a = a || !1, a && (this.min = h(this.$element[0].getAttribute("min"), 0), this.max = h(this.$element[0].getAttribute("max"), 100), this.value = h(this.$element[0].value, Math.round(this.min + (this.max - this.min) / 2)), this.step = h(this.$element[0].getAttribute("step"), 1)), this.handleDimension = g(this.$handle[0], "offset" + i(this.DIMENSION)), this.rangeDimension = g(this.$range[0], "offset" + i(this.DIMENSION)), this.maxHandlePos = this.rangeDimension - this.handleDimension, this.grabPos = this.handleDimension / 2, this.position = this.getPositionFromValue(this.value), this.$element[0].disabled ? this.$range.addClass(this.options.disabledClass) : this.$range.removeClass(this.options.disabledClass), this.setPosition(this.position, b)
        }, j.prototype.handleDown = function (a) {
            if (this.$document.on(this.moveEvent, this.handleMove), this.$document.on(this.endEvent, this.handleEnd), !((" " + a.target.className + " ").replace(/[\n\t]/g, " ").indexOf(this.options.handleClass) > -1)) {
                var b = this.getRelativePosition(a), c = this.$range[0].getBoundingClientRect()[this.DIRECTION], d = this.getPositionFromNode(this.$handle[0]) - c, e = "vertical" === this.orientation ? this.maxHandlePos - (b - this.grabPos) : b - this.grabPos;
                this.setPosition(e), b >= d && b < d + this.handleDimension && (this.grabPos = b - d)
            }
        }, j.prototype.handleMove = function (a) {
            a.preventDefault();
            var b = this.getRelativePosition(a), c = "vertical" === this.orientation ? this.maxHandlePos - (b - this.grabPos) : b - this.grabPos;
            this.setPosition(c)
        }, j.prototype.handleEnd = function (a) {
            a.preventDefault(), this.$document.off(this.moveEvent, this.handleMove), this.$document.off(this.endEvent, this.handleEnd), this.$element.trigger("change", {origin: this.identifier}), this.onSlideEnd && "function" == typeof this.onSlideEnd && this.onSlideEnd(this.position, this.value)
        }, j.prototype.cap = function (a, b, c) {
            return b > a ? b : a > c ? c : a
        }, j.prototype.setPosition = function (a, b) {
            var c, d;
            void 0 === b && (b = !0), c = this.getValueFromPosition(this.cap(a, 0, this.maxHandlePos)), d = this.getPositionFromValue(c), this.$fill[0].style[this.DIMENSION] = d + this.grabPos + "px", this.$handle[0].style[this.DIRECTION_STYLE] = d + "px", this.setValue(c), this.position = d, this.value = c, b && this.onSlide && "function" == typeof this.onSlide && this.onSlide(d, c)
        }, j.prototype.getPositionFromNode = function (a) {
            for (var b = 0; null !== a; )
                b += a.offsetLeft, a = a.offsetParent;
            return b
        }, j.prototype.getRelativePosition = function (a) {
            var b = i(this.COORDINATE), c = this.$range[0].getBoundingClientRect()[this.DIRECTION], d = 0;
            return"undefined" != typeof a["page" + b] ? d = a["client" + b] : "undefined" != typeof a.originalEvent["client" + b] ? d = a.originalEvent["client" + b] : a.originalEvent.touches && a.originalEvent.touches[0] && "undefined" != typeof a.originalEvent.touches[0]["client" + b] ? d = a.originalEvent.touches[0]["client" + b] : a.currentPoint && "undefined" != typeof a.currentPoint[this.COORDINATE] && (d = a.currentPoint[this.COORDINATE]), d - c
        }, j.prototype.getPositionFromValue = function (a) {
            var b, c;
            return b = (a - this.min) / (this.max - this.min), c = Number.isNaN(b) ? 0 : b * this.maxHandlePos
        }, j.prototype.getValueFromPosition = function (a) {
            var b, c;
            return b = a / (this.maxHandlePos || 1), c = this.step * Math.round(b * (this.max - this.min) / this.step) + this.min, Number(c.toFixed(this.toFixed))
        }, j.prototype.setValue = function (a) {
            (a !== this.value || "" === this.$element[0].value) && this.$element.val(a).trigger("input", {origin: this.identifier})
        }, j.prototype.destroy = function () {
            this.$document.off("." + this.identifier), this.$window.off("." + this.identifier), this.$element.off("." + this.identifier).removeAttr("style").removeData("plugin_" + k), this.$range && this.$range.length && this.$range[0].parentNode.removeChild(this.$range[0])
        }, a.fn[k] = function (b) {
            var c = Array.prototype.slice.call(arguments, 1);
            return this.each(function () {
                var d = a(this), e = d.data("plugin_" + k);
                e || d.data("plugin_" + k, e = new j(this, b)), "string" == typeof b && e[b].apply(e, c)
            })
        }, "rangeslider.js is available in jQuery context e.g $(selector).rangeslider(options);"
    });
    $(function () {
        $('input[type="range"]').rangeslider({
            polyfill: false,
            onInit: function () {
                $('.header .pull-right').text($('input[type="range"]').val() + '%');
            },
            onSlide: function (position, value) {
                //console.log('onSlide');
                //console.log('position: ' + position, 'value: ' + value);
                $('.header .pull-right').text(value + '%');
            },
            onSlideEnd: function (position, value) {
                //console.log('onSlideEnd');
                //console.log('position: ' + position, 'value: ' + value);
            }
        });
    });

//TTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT
//
//mobile menu

    $('.menu-toggle').click(function () {
        if ($('body').hasClass('menu-open')) {
            $('body').removeClass('active');
            setTimeout(function () {
                $('body').removeClass('menu-open');
            }, 200);
        } else {
            $('body').addClass('menu-open');
            setTimeout(function () {
                $('body').addClass('active');

            }, 400);

        }
    });

// Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = 0;

    $(window).scroll(function (event) {
        didScroll = true;
    });
    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);
    function hasScrolled() {
        var st = $(this).scrollTop();
        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll Down
            $('.globalNav , .mobile-row-sec-wrapper').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $('.globalNav , .mobile-row-sec-wrapper').removeClass('nav-up').addClass('nav-down');
            }
        }
        lastScrollTop = st;
    }

//accordion
    $(window).scroll();//ensure if you're in current position when page is refreshed  
//        accordion section

    var Accordion = function (el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.link');
        // Evento
        links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
    }

    Accordion.prototype.dropdown = function (e) {
        var $el = e.data.el;
        $this = $(this),
                $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $el.find('.accordion-content').not($next).slideUp().parent().removeClass('open');
        }
        ;
    }

    var accordion = new Accordion($('#accordion'), false);


//    tttttttest
    //accordion
    $(window).scroll();//ensure if you're in current position when page is refreshed  
//        accordion section

    var Accordion = function (el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.links');
        // Evento
        links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
    }

    Accordion.prototype.dropdown = function (e) {
        var $el = e.data.el;
        $this = $(this),
                $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('opens');

        if (!e.data.multiple) {
            $el.find('.accordion-contents').not($next).slideUp().parent().removeClass('opens');
        }
        ;
    }

    var accordion = new Accordion($('#accordions'), false);


//ttttt
//tab active section
    var sections = $('section')
            , nav = $('nav.pagenav')
            , nav_height = nav.outerHeight();

    $(window).on('scroll', function () {
        var cur_pos = $(this).scrollTop();

        sections.each(function () {
            var top = $(this).offset().top,
                    bottom = top + $(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                nav.find('a').removeClass('active');
                sections.removeClass('active');

                $(this).addClass('active');
                nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
            }
        });
    });

    nav.find('a').on('click', function () {
        var $el = $(this)
                , id = $el.attr('href');

        $('html, body').animate({
            scrollTop: $(id).offset().top
        }, 500);

        return false;
    });

//add class
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        $('#pagenav').toggleClass('fixed',
                //add 'ok' class when div position match or exceeds else remove the 'ok' class.
                scroll >= $('#container-wrapper').offset().top
                );
    });

    jQuery(document).ready(function () {
        $(".targetDiv").hide();
        jQuery('#div2').show();
    });

//show/hide Fantom wallet section
    jQuery(function () {
        jQuery('.showSingle').click(function () {
            jQuery('.targetDiv').hide('.cnt');
            jQuery('#div' + $(this).attr('target')).slideToggle();

        });
    });

    $(document).ready(function () {
        $(".showSingle").click(function () {
            $(".showSingle").removeClass("active");
            // $(".tab").addClass("active"); // instead of this do the below 
            $(this).addClass("active");
        });
    });

//medium-blog-carouse
    jQuery(document).ready(function () {
        jQuery('.menu-toggle').click(function () {
            jQuery('.site-nav').toggleClass('site-nav--open', 500);
            jQuery(this).toggleClass('open');
        });
        jQuery('#medium-blog-carousel').owlCarousel({
            loop: true,
            items: 1,
            margin: 5,
            // nav: false,
            //dots: true,
            autoplay: false,
            smartSpeed: 900,
            responsive: {
                0: {
                    items: 1,
                    //nav: false,
                    //dots: true,
                },
                600: {
                    items: 1
                },
                768: {
                    items: 1
                },
            }
        })
    });

//Developer friendly Tab section
// Show the first tab and hide the rest
    $('#tabs-nav li:first-child').addClass('active');
    $('.tab-content').hide();
    $('.tab-content:first').show();

// Click function
    $('#tabs-nav li').click(function () {
        $('#tabs-nav li').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').hide();

        var activeTab = $(this).find('a').attr('href');
        $(activeTab).fadeIn();
        return false;
    });
    
    
    
    
//  ttttt

    
    
}); //main.js



//header animation js
/**
 * Header
 */

function globalNavDropdowns(e) {
    var t = this;
    this.container = document.querySelector(e), this.root = this.container.querySelector(".navRoot"), this.primaryNav = this.root.querySelector(".navSection.primary"), this.primaryNavItem = this.root.querySelector(".navSection.primary .rootLink:last-child"), this.secondaryNavItem = this.root.querySelector(".navSection.secondary .rootLink:first-child"), this.checkCollision(), window.addEventListener("load", this.checkCollision.bind(this)), window.addEventListener("resize", this.checkCollision.bind(this)), this.container.classList.add("noDropdownTransition"), this.dropdownBackground = this.container.querySelector(".dropdownBackground"), this.dropdownBackgroundAlt = this.container.querySelector(".alternateBackground"), this.dropdownContainer = this.container.querySelector(".dropdownContainer"), this.dropdownArrow = this.container.querySelector(".dropdownArrow"), this.dropdownRoots = Strut.queryArray(".hasDropdown", this.root), this.dropdownSections = Strut.queryArray(".dropdownSection", this.container).map(function (e) {
        return {
            el: e,
            name: e.getAttribute("data-dropdown"),
            content: e.querySelector(".dropdownContent")
        }
    });
    var n = window.PointerEvent ? {
        end: "pointerup",
        enter: "pointerenter",
        leave: "pointerleave"
    } : {
        end: "touchend",
        enter: "mouseenter",
        leave: "mouseleave"
    };
    this.dropdownRoots.forEach(function (e, r) {
        e.addEventListener(n.end, function (n) {
            n.preventDefault(), n.stopPropagation(), t.toggleDropdown(e)
        }), e.addEventListener(n.enter, function (n) {
            if (n.pointerType == "touch")
                return;
            t.stopCloseTimeout(), t.openDropdown(e)
        }), e.addEventListener(n.leave, function (e) {
            if (e.pointerType == "touch")
                return;
            t.startCloseTimeout()
        })
    }), this.dropdownContainer.addEventListener(n.end, function (e) {
        e.stopPropagation()
    }), this.dropdownContainer.addEventListener(n.enter, function (e) {
        if (e.pointerType == "touch")
            return;
        t.stopCloseTimeout()
    }), this.dropdownContainer.addEventListener(n.leave, function (e) {
        if (e.pointerType == "touch")
            return;
        t.startCloseTimeout()
    }), document.body.addEventListener(n.end, function (e) {
        Strut.touch.isDragging || t.closeDropdown()
    })
}

function globalNavPopup(e) {
    var t = this,
            n = Strut.touch.isSupported ? "touchend" : "click";
    this.activeClass = "globalPopupActive", this.root = document.querySelector(e), this.link = this.root.querySelector(".rootLink"), this.popup = this.root.querySelector(".popup"), this.closeButton = this.root.querySelector(".popupCloseButton"), this.link.addEventListener(n, function (e) {
        e.stopPropagation(), t.togglePopup()
    }), this.popup.addEventListener(n, function (e) {
        e.stopPropagation()
    }), this.closeButton && this.closeButton.addEventListener(n, function (e) {
        t.closeAllPopups()
    }), document.body.addEventListener(n, function (e) {
        Strut.touch.isDragging || t.closeAllPopups()
    }, !1)
}
(function () {
    window.$ && window.$.ajaxPrefilter && $(function () {
        return $.ajaxPrefilter(function (e, t, n) {
            var r, i;
            return i = $("meta[name=csrf-token]"), r = i ? i.attr("content") : "", n.setRequestHeader("x-stripe-csrf-token", r)
        })
    })
}).call(this),
        function () {
            function i(e, t, n) {
                if (!("Analytics" in window))
                    return;
                n ? window.Analytics[e](t, {
                    source: n
                }) : window.Analytics[e](t)
            }

            function s(e, t, n, r) {
                e.addEventListener("click", function (e) {
                    i(t, n, r)
                })
            }

            function o() {
                var n = document.querySelectorAll("[" + e + "]");
                [].slice.call(n).forEach(function (n) {
                    s(n, "action", n.getAttribute(e), n.getAttribute(t))
                })
            }

            function u(e) {
                var t = document.querySelectorAll("[" + n + "]");
                [].slice.call(t).forEach(function (e) {
                    s(e, "modal", e.getAttribute(n), e.getAttribute(r))
                })
            }
            var e = "data-analytics-action",
                    t = "data-action-source",
                    n = "data-analytics-modal",
                    r = "data-modal-source";
            document.addEventListener("DOMContentLoaded", function () {
                o(), u()
            })
        }(), "use strict";
var Strut = {
    random: function (e, t) {
        return Math.random() * (t - e) + e
    },
    arrayRandom: function (e) {
        return e[Math.floor(Math.random() * e.length)]
    },
    interpolate: function (e, t, n) {
        return e * (1 - n) + t * n
    },
    rangePosition: function (e, t, n) {
        return (n - e) / (t - e)
    },
    clamp: function (e, t, n) {
        return Math.max(Math.min(e, n), t)
    },
    queryArray: function (e, t) {
        return t || (t = document.body), Array.prototype.slice.call(t.querySelectorAll(e))
    },
    ready: function (e) {
        document.readyState !== "loading" ? e() : document.addEventListener("DOMContentLoaded", e)
    }
};
Strut.isRetina = window.devicePixelRatio > 1.3, Strut.mobileViewportWidth = 670, Strut.isMobileViewport = window.innerWidth < Strut.mobileViewportWidth, window.addEventListener("resize", function () {
    Strut.isMobileViewport = window.innerWidth < Strut.mobileViewportWidth
}), Strut.touch = {
    isSupported: "ontouchstart" in window || navigator.maxTouchPoints,
    isDragging: !1
}, document.addEventListener("DOMContentLoaded", function () {
    document.body.addEventListener("touchmove", function () {
        Strut.touch.isDragging = !0
    }), document.body.addEventListener("touchstart", function () {
        Strut.touch.isDragging = !1
    })
}), Strut.load = {
    images: function (e, t) {
        typeof e == "string" && (e = [e]);
        var n = -e.length;
        e.forEach(function (e) {
            var r = new Image;
            r.src = e, r.onload = function () {
                n++, n === 0 && t && t()
            }
        })
    },
    css: function (e, t) {
        var n = document.createElement("link"),
                r = window.readConfig("strut_files") || {},
                i = r[e];
        if (!i)
            throw new Error('CSS file "' + e + '" not found in strut_files config');
        n.href = i, n.rel = "stylesheet", document.head.appendChild(n), t && (n.onload = t)
    },
    js: function (e, t) {
        var n = document.createElement("script"),
                r = window.readConfig("strut_files") || {},
                i = r[e];
        if (!i)
            throw new Error('Javascript file "' + e + '" not found in strut_files config');
        n.src = i, document.head.appendChild(n), t && (n.onload = t)
    }
}, Strut.supports = {
    es6: function () {
        try {
            return new Function("(a = 0) => a"), !0
        } catch (e) {
            return !1
        }
    }(),
    pointerEvents: function () {
        var e = document.createElement("a").style;
        return e.cssText = "pointer-events:auto", e.pointerEvents === "auto"
    }(),
    positionSticky: function () {
        var e = "position:",
                t = "sticky",
                n = document.createElement("a"),
                r = n.style,
                i = " -webkit- -moz- -o- -ms- ".split(" ");
        return r.cssText = e + i.join(t + ";" + e).slice(0, -e.length), r.position.indexOf(t) !== -1
    }(),
    masks: function () {
        return !/MSIE|Trident|Edge/i.test(navigator.userAgent)
    }()
}, globalNavDropdowns.prototype.checkCollision = function () {
    var e = this;
    if (Strut.isMobileViewport)
        return;
    if (e.compact == 1) {
        var t = document.body.clientWidth,
                n = e.primaryNav.getBoundingClientRect();
        n.left + n.width / 2 > t / 2 && (e.container.classList.remove("compact"), e.compact = !1)
    } else {
        var r = e.primaryNavItem.getBoundingClientRect(),
                i = e.secondaryNavItem.getBoundingClientRect();
        r.right > i.left && (e.container.classList.add("compact"), e.compact = !0)
    }
}, globalNavDropdowns.prototype.openDropdown = function (e) {
    var t = this;
    if (this.activeDropdown === e)
        return;
    this.container.classList.add("overlayActive"), this.container.classList.add("dropdownActive"), this.activeDropdown = e, this.dropdownRoots.forEach(function (e, t) {
        e.classList.remove("active")
    }), e.classList.add("active");
    var n = e.getAttribute("data-dropdown"),
            r = "left",
            i, s, o;
    this.dropdownSections.forEach(function (e) {
        e.el.classList.remove("active"), e.el.classList.remove("left"), e.el.classList.remove("right"), e.name == n ? (e.el.classList.add("active"), r = "right", i = e.content.offsetWidth, s = e.content.offsetHeight, o = e.content) : e.el.classList.add(r)
    });
    var u = 520,
            a = 400,
            f = i / u,
            l = s / a,
            c = e.getBoundingClientRect(),
            h = c.left + c.width / 2 - i / 2;
    h = Math.round(Math.max(h, 10)), clearTimeout(this.disableTransitionTimeout), this.enableTransitionTimeout = setTimeout(function () {
        t.container.classList.remove("noDropdownTransition")
    }, 50), this.dropdownBackground.style.transform = "translateX(" + h + "px) scaleX(" + f + ") scaleY(" + l + ")", this.dropdownContainer.style.transform = "translateX(" + h + "px)", this.dropdownContainer.style.width = i + "px", this.dropdownContainer.style.height = s + "px";
    var p = Math.round(c.left + c.width / 2);
    this.dropdownArrow.style.transform = "translateX(" + p + "px) rotate(45deg)";
    var d = o.children[0].offsetHeight / l;
    this.dropdownBackgroundAlt.style.transform = "translateY(" + d + "px)"
}, globalNavDropdowns.prototype.closeDropdown = function () {
    var e = this;
    if (!this.activeDropdown)
        return;
    this.dropdownRoots.forEach(function (e, t) {
        e.classList.remove("active")
    }), clearTimeout(this.enableTransitionTimeout), this.disableTransitionTimeout = setTimeout(function () {
        e.container.classList.add("noDropdownTransition")
    }, 50), this.container.classList.remove("overlayActive"), this.container.classList.remove("dropdownActive"), this.activeDropdown = undefined
}, globalNavDropdowns.prototype.toggleDropdown = function (e) {
    this.activeDropdown === e ? this.closeDropdown() : this.openDropdown(e)
}, globalNavDropdowns.prototype.startCloseTimeout = function () {
    var e = this;
    e.closeDropdownTimeout = setTimeout(function () {
        e.closeDropdown()
    }, 50)
}, globalNavDropdowns.prototype.stopCloseTimeout = function () {
    var e = this;
    clearTimeout(e.closeDropdownTimeout)
}, globalNavPopup.prototype.togglePopup = function () {
    var e = this.root.classList.contains(this.activeClass);
    this.closeAllPopups(!0), e || this.root.classList.add(this.activeClass)
}, globalNavPopup.prototype.closeAllPopups = function (e) {
    var t = document.getElementsByClassName(this.activeClass);
    for (var n = 0; n < t.length; n++)
        t[n].classList.remove(this.activeClass)
}, Strut.supports.pointerEvents || Strut.load.css("v3/shared/navigation_ie10.css"), Strut.ready(function () {
    new globalNavDropdowns(".globalNav"), new globalNavPopup(".globalNav .navSection.mobile"), new globalNavPopup(".globalFooterNav .select.country"), new globalNavPopup(".globalFooterNav .select.language")
});





//ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt


//tttttttttttttttttttttttttttttttttttttt

var htmlEditor = CodeMirror.fromTextArea(document.getElementById("code"), {
   lineNumbers: true,
    mode: 'htmlmixed',
    // theme: 'default',
    tabMode: 'indent',
    lineWrapping: true,
    autoCloseTags: true,
    styleActiveLine: true,
    matchBrackets: true,
    readOnly: 'nocursor',
    
});
var htmlEditor = CodeMirror.fromTextArea(document.getElementById("code1"), {
    lineNumbers: true,
    mode: 'htmlmixed',
    // theme: 'default',
    tabMode: 'indent',
    lineWrapping: true,
    autoCloseTags: true,
    styleActiveLine: true,
    matchBrackets: true,
    readOnly: 'nocursor',
});

//trrrrrrrrrrrrrrrrrrrrrrrrrrrrr

