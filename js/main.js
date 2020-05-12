jQuery(document).ready(function ($) {


    /**
     * @desc Currency Format
     * @date 10 April 2020
     * @author Catalyst
     */

    function formatMoney(amount, decimalCount = 0, decimal = ".", thousands = ",") {
        try {
            decimalCount = Math.abs(decimalCount);
            decimalCount = isNaN(decimalCount) ? 0 : decimalCount;

            const negativeSign = amount < 0 ? "-" : "";

            let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
            let j = (i.length > 3) ? i.length % 3 : 0;

            return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
        } catch (e) {
            console.log(e)
    }
    }
    /**
     * @desc Staked page input field on keypress function
     * @date 10 April 2020
     * @author Catalyst
     */
    $(".staking-form #fname").keypress(function (e) {
        $(this).attr('placeholder', 'Enter FTM');
        //if the letter is not digit then display error and don't type anything
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            //display error message
            $("#errmsg").html("Digits Only").show().fadeOut("slow");
            return false;
        }
        var maxLength = 10;
        var sliderVal = $(this).val();
        $(this).val(sliderVal.substring(0, maxLength))

    });
    var totalStaked = $('#totalStaked').val();
    var totalStakedValue = parseInt(totalStaked, 16) / 1e18;
    var stakedValue = Math.round(totalStakedValue) / 31750000;
    var stakedValuePercantage = stakedValue.toFixed(2);
    $('#totalStakedpercentage').text(stakedValuePercantage + "%");
    $(".staking-form #fname").keyup(function (e) {
        var number = $(this).val();
        var charLength = $(this).val().length;
        var sliderVal = Number(number.replace(/[^0-9.-]+/g, ""));

        var maxLength = 10;
        var convertedValue = formatMoney(sliderVal);
        var rewardPercantage = $('#rewardpercentageYearly').val();
        var YearlyRewards = parseFloat(sliderVal) * parseFloat(rewardPercantage) / 100;
        $('#yearReward').text(formatMoney(YearlyRewards) + " FTM");

        var rewardPercantageMonthly = $('#rewardpercentagemonthly').val();
        var monthlyRewards = parseFloat(sliderVal) * parseFloat(rewardPercantageMonthly) / 100;
        $('#monthlyReward').text(formatMoney(monthlyRewards) + " FTM");
        // $(this).val(sliderVal.substring(0, maxLength))
    });

    /**
     * @desc Staked page input field change input to currency format on blur
     * @date 10 April 2020
     * @author Catalyst
     */
    $('.staking-form #fname').on('blur', function () {
        const value = this.value.replace(/,/g, '');
        if (value != '') {
            this.value = parseFloat(value).toLocaleString('en-US', {
                style: 'decimal',
                maximumFractionDigits: 0,
                minimumFractionDigits: 0
            });
        }
    });

    /**
     * @desc Reward rangeslider home page
     * @date 10 April 2020
     * @author Catalyst
     */
    $(function () {
        $('input[type="range"]').rangeslider({
            polyfill: false,
            onInit: function () {
                var sliderVal = $('input[type="range"]').val();
                var convertedValue = formatMoney(sliderVal);
                $('.you-stake-wrapper .text-blue').text(convertedValue.toString() + " FTM");
                var rewardPercantage = $('#rewardpercentage').val();
                var YearlyRewards = parseFloat(sliderVal) * parseFloat(rewardPercantage) / 100;

                $('.rewards-wrapper > .text-blue').text(formatMoney(YearlyRewards) + " FTM");

            },
            onSlide: function (position, value) {
                $('.you-stake-wrapper .text-blue').text(formatMoney(value) + " FTM");
                var rewardPercantage = $('#rewardpercentage').val();
                var YearlyRewards = parseFloat(value) * parseFloat(rewardPercantage) / 100;

                $('.rewards-wrapper > .text-blue').text(formatMoney(YearlyRewards) + " FTM");

            },
        });
    });

    /**
     * @desc Mobile menu toggle function
     * @date 15 April 2020
     * @author Catalyst
     */
    $('.menu-toggle').click(function () {
        if ($('body').hasClass('menu-open')) {
            $('body').removeClass('active');
            setTimeout(function () {
                $('body').removeClass('menu-open');
            }, );
        } else {
            $('body').addClass('menu-open');
            setTimeout(function () {
                $('body').addClass('active');

            }, );

        }
    });

    /**
     * @desc Hide Header on on scroll down
     * @date 18 April 2020
     * @author Catalyst
     */


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


    //accordion tab
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


//tab active section
    var sections = $('section'), nav = $('nav.pagenav'), nav_height = nav.outerHeight();

    $(window).on('scroll', function () {
        var cur_pos = $(this).scrollTop();

        sections.each(function () {
            var top = $(this).offset().top,
                    bottom = top + $(this).outerHeight();
            if (cur_pos >= top - 80 && cur_pos <= bottom) {
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
            scrollTop: $(id).offset().top - 50
        }, 500);

        return false;
    });

//add class
    $(window).scroll(function (event) {
        if ($('div').hasClass('pagenav-section-wrapper')) {
            var scroll = $(window).scrollTop();
            $('#pagenav').toggleClass('fixed', scroll >= $('#container-wrapper').offset().top);
        }
    });


    $(".targetDiv").hide();
    jQuery('#div2').show();


//show/hide Fantom wallet section

    jQuery('.showSingle').click(function () {
        jQuery('.targetDiv').fadeOut('.cnt');
        jQuery('#div' + $(this).attr('target')).fadeIn('100');

    });



    $(".showSingle").click(function () {
        $(".showSingle").removeClass("active");
        var targetid = $(this).attr('target');
        $('.wallet-section a').each(function () {
            var targetidInner = $(this).attr('target');
            if (targetid === targetidInner) {
                $(this).addClass("active");
            } else {
                $(this).removeClass("active");
            }
        })
    });


//medium-blog-carouse
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

//faq sub Title slow function
    $('.myTag').on('click', function () {
        var target = $(this).attr('rel');
        $("." + target).show('slow').siblings("div").hide('slow');
    });

//add Image data-action
    $('.page-id-451 div#container-wrapper img , .page-id-474 div#container-wrapper img , .page-id-494 div#container-wrapper img ').attr('data-action', 'zoom');

//Image zoom js

    +function ($) {
        "use strict";

        /**
         * The zoom service
         */
        function ZoomService() {
            this._activeZoom =
                    this._initialScrollPosition =
                    this._initialTouchPosition =
                    this._touchMoveListener = null

            this._$document = $(document)
            this._$window = $(window)
            this._$body = $(document.body)

            this._boundClick = $.proxy(this._clickHandler, this)
        }

        ZoomService.prototype.listen = function () {
            this._$body.on('click', '[data-action="zoom"]', $.proxy(this._zoom, this))
        }

        ZoomService.prototype._zoom = function (e) {
            var target = e.target

            if (!target || target.tagName != 'IMG')
                return

            if (this._$body.hasClass('zoom-overlay-open'))
                return

            if (e.metaKey || e.ctrlKey)
                return window.open(e.target.src, '_blank')

            if (target.width >= (window.innerWidth - Zoom.OFFSET))
                return

            this._activeZoomClose(true)

            this._activeZoom = new Zoom(target)
            this._activeZoom.zoomImage()

            this._$window.on('scroll.zoom', $.proxy(this._scrollHandler, this))

            this._$document.on('keyup.zoom', $.proxy(this._keyHandler, this))
            this._$document.on('touchstart.zoom', $.proxy(this._touchStart, this))

            document.addEventListener('click', this._boundClick, true)

            e.stopPropagation()
        }

        ZoomService.prototype._activeZoomClose = function (forceDispose) {
            if (!this._activeZoom)
                return

            if (forceDispose) {
                this._activeZoom.dispose()
            } else {
                this._activeZoom.close()
            }

            this._$window.off('.zoom')
            this._$document.off('.zoom')

            document.removeEventListener('click', this._boundClick, true)

            this._activeZoom = null
        }

        ZoomService.prototype._scrollHandler = function (e) {
            if (this._initialScrollPosition === null)
                this._initialScrollPosition = window.scrollY
            var deltaY = this._initialScrollPosition - window.scrollY
            if (Math.abs(deltaY) >= 40)
                this._activeZoomClose()
        }

        ZoomService.prototype._keyHandler = function (e) {
            if (e.keyCode == 27)
                this._activeZoomClose()
        }

        ZoomService.prototype._clickHandler = function (e) {
            e.stopPropagation()
            e.preventDefault()
            this._activeZoomClose()
        }

        ZoomService.prototype._touchStart = function (e) {
            this._initialTouchPosition = e.touches[0].pageY
            $(e.target).on('touchmove.zoom', $.proxy(this._touchMove, this))
        }

        ZoomService.prototype._touchMove = function (e) {
            if (Math.abs(e.touches[0].pageY - this._initialTouchPosition) > 10) {
                this._activeZoomClose()
                $(e.target).off('touchmove.zoom')
            }
        }
        /**
         * The zoom object
         */
        function Zoom(img) {
            this._fullHeight =
                    this._fullWidth =
                    this._overlay =
                    this._targetImageWrap = null

            this._targetImage = img

            this._$body = $(document.body)

            this._transitionDuration = 300
        }

        Zoom.OFFSET = 80 //margins

        Zoom.prototype.zoomImage = function () {
            var img = document.createElement('img')
            img.onload = $.proxy(function () {
                this._fullHeight = Number(img.height)
                this._fullWidth = Number(img.width)
                this._zoomOriginal()
            }, this)
            img.src = this._targetImage.src
        }

        Zoom.prototype._zoomOriginal = function () {
            this._targetImageWrap = document.createElement('div')
            this._targetImageWrap.className = 'zoom-img-wrap'

            this._targetImage.parentNode.insertBefore(this._targetImageWrap, this._targetImage)
            this._targetImageWrap.appendChild(this._targetImage)

            $(this._targetImage)
                    .addClass('zoom-img')
                    .attr('data-action', 'zoom-out')

            this._overlay = document.createElement('div')
            this._overlay.className = 'zoom-overlay'

            document.body.appendChild(this._overlay)

            this._calculateZoom()
            this._triggerAnimation()
        }

        Zoom.prototype._calculateZoom = function () {
            this._targetImage.offsetWidth // repaint before animating

            var originalFullImageWidth = this._fullWidth
            var originalFullImageHeight = this._fullHeight

            var scrollTop = window.scrollY

            var viewportHeight = (window.innerHeight - Zoom.OFFSET)
            var viewportWidth = (window.innerWidth - Zoom.OFFSET)

            var viewportAspectRatio = viewportWidth / viewportHeight

            var imageAspectRatio = originalFullImageWidth / originalFullImageHeight
            var imageTargetAspectRatio = this._targetImage.width / this._targetImage.height

            this._trueHeight = this._targetImage.height
            this._trueWidth = this._targetImage.width

            if (imageAspectRatio < imageTargetAspectRatio) {
                this._trueHeight = (this._fullHeight * this._targetImage.width) / this._fullWidth

            } else {
                this._trueWidth = (this._fullWidth * this._targetImage.height) / this._fullHeight
            }

            var maxScaleFactor = originalFullImageWidth / this._trueWidth

            if (originalFullImageWidth < viewportWidth && originalFullImageHeight < viewportHeight) {
                this._imgScaleFactor = maxScaleFactor

            } else if (imageAspectRatio < viewportAspectRatio) {
                this._imgScaleFactor = (viewportHeight / originalFullImageHeight) * maxScaleFactor

            } else {
                this._imgScaleFactor = (viewportWidth / originalFullImageWidth) * maxScaleFactor
            }
        }

        Zoom.prototype._triggerAnimation = function () {
            this._targetImage.offsetWidth // repaint before animating

            var imageOffset = $(this._targetImage).offset()
            var scrollTop = $(window).scrollTop()

            var viewportY = scrollTop + (window.innerHeight / 2)
            var viewportX = (window.innerWidth / 2)

            var imageCenterY = imageOffset.top + (this._trueHeight / 2)
            var imageCenterX = imageOffset.left + (this._trueWidth / 2)

            this._translateY = viewportY - imageCenterY
            this._translateX = viewportX - imageCenterX

            $(this._targetImage).velocity({
                scale: this._imgScaleFactor,
                height: this._trueHeight,
                width: this._trueWidth,
            }, this._transitionDuration);

            $(this._targetImageWrap).velocity({
                translateX: this._translateX,
                translateY: this._translateY,
                translateZ: 0,
            }, this._transitionDuration);


            this._$body.addClass('zoom-overlay-open')

        }

        Zoom.prototype.close = function () {
            this._$body
                    .removeClass('zoom-overlay-open')
                    .addClass('zoom-overlay-transitioning')

            $(this._targetImage).velocity('reverse', {duration: this._transitionDuration});

            var myself = this

            $(this._targetImageWrap).velocity(
                    {
                        translateX: 0,
                        translateY: 0,
                    },
                    {
                        duration: this._transitionDuration,
                        complete: function (elements) {
                            myself.dispose() // should probably use proxy here
                        }
                    });

        }

        Zoom.prototype.dispose = function () {
            if (this._targetImageWrap && this._targetImageWrap.parentNode) {
                $(this._targetImage)
                        .removeClass('zoom-img')
                        .attr('data-action', 'zoom')
                        .css({'width': '', 'height': '', 'transform': ''})

                this._targetImageWrap.parentNode.replaceChild(this._targetImage, this._targetImageWrap)
                this._overlay.parentNode.removeChild(this._overlay)

                this._$body.removeClass('zoom-overlay-transitioning')
            }
        }

        // wait for dom ready (incase script included before body)
        $(function () {
            new ZoomService().listen()
        })
    }(jQuery)


// enterprise case study slider

    $('.enterprise-case-study-carousel').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        adaptiveHeight: true,
        draggable: false
    });

    function sliderAnimatedHeader() {

        var caseHeight = jQuery(".enterprise-case-study-carousel article.slick-active .case-study--header").outerHeight();
        jQuery(".case-study--animated-header").height(caseHeight);
        jQuery(".enterprise-case-study-carousel article.slick-active").addClass("animate-active");

    }

    sliderAnimatedHeader()

    // On before slide change
    $('.enterprise-case-study-carousel').on('afterChange', function (event, slick, currentSlide, nextSlide) {
        sliderAnimatedHeader()
    });
    // On before slide change
    $('.enterprise-case-study-carousel').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        jQuery(".enterprise-case-study-carousel article").removeClass("animate-active");
    });

    // Add smooth scrolling to links
    $("a.link-wrapper , section#going-to-do a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            // Store hash
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        } // End if
    });




}); //main.js
//CodeMirror js
if (jQuery('div').hasClass('code-container')) {
    var htmlEditor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        mode: 'htmlmixed',
        // theme: 'default',
        tabMode: 'indent',
        lineWrapping: true,
        autoCloseTags: true,
        styleActiveLine: true,
//    matchBrackets: true,
//    readOnly: 'nocursor',

    });
    var htmlEditor = CodeMirror.fromTextArea(document.getElementById("code1"), {
        lineNumbers: true,
        mode: 'htmlmixed',
        // theme: 'default',
        tabMode: 'indent',
        lineWrapping: true,
        autoCloseTags: true,
        styleActiveLine: true,
//    matchBrackets: true,
//    readOnly: 'nocursor',
    });
}


