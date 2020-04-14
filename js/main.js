jQuery(document).ready(function ($) {

//rangeslider
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

// Click function
    $('#tabs-nav li').click(function () {
        $('#tabs-nav li').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').hide();

        var activeTab = $(this).find('a').attr('href');
        $(activeTab).fadeIn();
        return false;
    });



}); //main.js



//CodeMirror js

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

