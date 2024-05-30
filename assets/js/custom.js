//***** Sticky Header JS Start Here *****//
window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 50);
});
//***** Sticky Header JS End Here *****//

//***** Banner Down Brands Slider JS Start Here *****//
$('.bandown-brands-item').slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 400,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 520,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }

  ]
});
//***** Banner Down Brands Slider JS End Here *****//

//*****  Award Brands Slider JS Start Here *****//
$('.award-brands-slider').slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 500,
  slidesToShow: 7,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 520,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }

  ]
});
//***** Award Brands Slider JS End Here *****//

//***** Counter Timer JS Start Here *****//
$.fn.jQuerySimpleCounter = function (options) {
  var settings = $.extend({
    start: 0,
    end: 100,
    easing: 'swing',
    duration: 400,
    complete: '',
    point_tag: 0
  }, options);

  var thisElement = $(this);

  $({ count: settings.start }).animate({ count: settings.end }, {
    duration: settings.duration,
    easing: settings.easing,
    point_tag: settings.point_tag,
    step: function () {

      if (settings.point_tag == 1) {

        var mathCount = parseFloat(this.count).toFixed(1);

      } else {

        var mathCount = Math.ceil(this.count);
      }
      thisElement.text(mathCount);

    },
    complete: settings.complete
  });
};

$('#number1').jQuerySimpleCounter({ end: parseFloat($('#number1').text()), duration: 2000, point_tag: 0 });
$('#number2').jQuerySimpleCounter({ end: parseInt($('#number2').text()), duration: 5000, point_tag: 0 });
$('#number3').jQuerySimpleCounter({ end: parseInt($('#number3').text()), duration: 3000, point_tag: 0 });
$('#number4').jQuerySimpleCounter({ end: parseInt($('#number4').text()), duration: 4000, point_tag: 0 });
$('#number5').jQuerySimpleCounter({ end: parseInt($('#number5').text()), duration: 5000, point_tag: 0 });
//***** Counter Timer JS End Here *****//

//***** Popup And Flaot Buttons JS Start Here *****//
// $(window).ready(function () {
//     setTimeout(function () {
//         $("#staticBackdrop").modal("show");
//     }, 5000);
// }),

// $(".float-form-clickbtn").click(function () {
//   $(".float-side-form").toggleClass("active");
// });
//***** Popup And Flaot Buttons JS End Here *****//





