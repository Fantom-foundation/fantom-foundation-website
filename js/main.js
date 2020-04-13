jQuery(document).ready(function ($) {

<<<<<<< HEAD
//rangeslider
=======
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
>>>>>>> 30e8c6840d067caaaad03dda5c3e424ecce5acfc
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
<<<<<<< HEAD
=======

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

>>>>>>> 30e8c6840d067caaaad03dda5c3e424ecce5acfc

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

