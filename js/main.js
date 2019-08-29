AOS.init();

var moveForce = 30; // max popup movement in pixels
var rotateForce = 20; // max popup rotation in deg

$(function () {
    $(document).on('mousemove', function (e) {
        $('.bgshan').css({
            transaction: '.9s',
            left: -e.pageX / 10,
            top: -e.pageY / 10
        });
        $('.second').css({
            left: e.pageX / 50 + 200,
            top: e.pageY / 50 + 200
        });
    });
});

function onClickFormModal(title, idTitle, location, idLocation) {
    document.getElementById(idTitle).innerText = title;
    document.getElementById(idLocation).value = location;
}

$(".smooth-anchor").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    } // End if
});

const handleClick = (e) => {
    const hamList = document.getElementById('hamListId');
    const ham = document.getElementById('mainNavBarToggleId');
    const childrensHamMenu = [...hamList.childNodes];
    if (childrensHamMenu.includes(e.target) || childrensHamMenu.includes(e.target)) {
        return;
    }
    if (hamList.classList.contains('show')) {
        ham.click();
    }
};

document.addEventListener('mousedown', handleClick, false);

$(".slider").slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true,
    prevArrow: '<button class="arrow-slider prev-arrow"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="arrow-slider next-arrow"><i class="fas fa-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            }
        }
    ],
});

$(".team-slider").slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 5,
    slidesToScroll: 5,
    adaptiveHeight: true,
    prevArrow: '<button class="arrow-slider prev-arrow"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="arrow-slider next-arrow"><i class="fas fa-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 1500,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
            }
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ],
});

$(".video-slider").slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true,
    arrows: false,
});

$(".sent-slider-gallery").slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: false,
    arrows: false,
    prevArrow: '<button class="arrow-slider prev-arrow"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="arrow-slider next-arrow"><i class="fas fa-chevron-right"></i></button>',
});

$(".list-slider").slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true,
    prevArrow: '<button class="arrow-slider prev-arrow"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="arrow-slider next-arrow"><i class="fas fa-chevron-right"></i></button>',
});

$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});

$('.slider-for-second').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});

$('.slider-nav').slick({
    slidesToShow: 8,
    slidesToScroll: 8,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    focusOnSelect: true,
    arrows: false,
    prevArrow: '<button class="arrow-slider prev-arrow"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="arrow-slider next-arrow"><i class="fas fa-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 1500,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 6,
            }
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 469,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
            }
        },
    ],
});

$('.slider-nav-second').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    asNavFor: '.slider-for-second',
    dots: true,
    centerMode: true,
    focusOnSelect: true,
    arrows: false,
    prevArrow: '<button class="arrow-slider prev-arrow"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="arrow-slider next-arrow"><i class="fas fa-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 469,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
            }
        },
    ],
});

$(".list-min-slider").slick({
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 500,
    slidesToShow: 7,
    slidesToScroll: 7,
    adaptiveHeight: true,
    arrows: false,
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 399,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
    ],
});

$(".list-min-slider-2").slick({
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 4,
    adaptiveHeight: true,
    arrows: false,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 399,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
    ],
});

$(".company-slider").slick({
    dots: false,
    infinite: true,
    autoplay: true,
    speed: 1000,
    slidesToShow: 6,
    slidesToScroll: 6,
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 5,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: false,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            }
        }
    ],
});

$(document).ready(function() {

    $('.zoom-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
            titleSrc: function(item) {
                return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">Ссылка на изображение</a>';
            }
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function(element) {
                return element.find('img');
            }
        }

    });

    $('.zoom-gallery-secondary').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
            titleSrc: function(item) {
                return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">Ссылка на изображение</a>';
            }
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function(element) {
                return element.find('img');
            }
        }

    });

    $('.zoom-gallery-2').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
            titleSrc: function(item) {
                return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">Ссылка на изображение</a>';
            }
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function(element) {
                return element.find('img');
            }
        }

    });

    $('.zoom-min-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
            titleSrc: function(item) {
                return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">Ссылка на изображение</a>';
            }
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function(element) {
                return element.find('img');
            }
        }

    });

    $('.zoom-min-gallery-2').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
            titleSrc: function(item) {
                return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">Ссылка на изображение</a>';
            }
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function(element) {
                return element.find('img');
            }
        }

    });
});

$('.telegram').submit(function (e) {
    e.preventDefault();
    const orderLoader = document.getElementById('pageLoaderId');
    orderLoader.classList.remove('d-none');
    $.ajax({
        type: 'POST',
        url: '/ovitta/wp-content/themes/real-estate/api-telegram.php',
        data: $(this).serialize()
    }).done(() => {
        window.location = '/';
        setTimeout(() => orderLoader.classList.add('d-none'), 0);
    });
});




