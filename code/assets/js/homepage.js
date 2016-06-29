(function($) {

  var datein = new Date();
  var currentMonth = datein.getMonth();
  var currentDate = datein.getDate();
  var currentYear = datein.getFullYear();
  var dateout = new Date();
  dateout.setMonth(dateout.getMonth() + 3);
  var currentMonth1 = dateout.getMonth();
  var currentDate1 = dateout.getDate();
  var currentYear1 = dateout.getFullYear();
/*
  $('.date-check-in').datepicker({
    dateFormat: 'dd/mm/yy',
    minDate: new Date(currentYear, currentMonth, currentDate)
  });
  $('.date-check-out').datepicker({
    dateFormat: 'dd/mm/yy',
    minDate: new Date(currentYear1, currentMonth1, currentDate1)
  });*/
  $('.date-check-in').daterangepicker();
  $('.date-check-out').on('focus', function() {
    $('.date-check-in').trigger('click');
  }),

  $('.date-check-out').on('click', function() {
    $('.date-check-in').trigger('click');
  }),
  
  $('.slider-background  .btn-play').on('click', function() {
    var v = $(this).data('video'),
      src = document.getElementById(v);
    if (src.paused) {
      src.play();
      $('body').removeClass('is-fullscreen');
    } else {
      src.pause();
      $('.slider-player video').trigger('click');
      $('.slider-player').fadeIn();
      $('body').addClass('is-fullscreen');
    }
    return false;
  });

  $('.slider-player  .video-caption ').on('click', function() {
    $('.slider-player video').trigger('click');
  });

  $('.slider-player video').on('click', function() {
    if (this.paused) {
      this.play();
      $('.slider-player .btn-play').fadeOut();
    } else {
      this.pause();
      $('.slider-player .btn-play').fadeIn();
    }
  });

  $('.slider-player .btn-close').on('click', function() {
    $('.slider-player').fadeOut();
    $('body').removeClass('is-fullscreen');
    var fv = document.getElementById('slider-video-player');
    fv.pause();
    var sv = document.getElementById('slider-video-main');
    sv.play();
  });

  $('.control-caret').on('click', function() {
    var t = $(this).parent().parent().find('.sc-item-description'),
      i = $(this).find('i');
    if (i.hasClass('fa-minus')) {
      i.removeClass('fa-minus');
      t.slideUp(500);
    } else {
      i.addClass('fa-minus');
      t.slideDown(500);
    }
  });


  /*EVENT SLIDER*/
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true ,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    asNavFor: '.slider-for',
    dots: false,
    arrows: false,
    centerMode: true,
    focusOnSelect: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
      }
    }, {
      breakpoint: 786,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      }
    }, {
      breakpoint: 500,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    }]
  });

/*Aldum SLIDER*/
  $('.images-slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    asNavFor: '.images-slider-nav'
  });
$('.images-slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    asNavFor: '.images-slider-for',
    dots: false,
    arrows: false,
    centerMode: true,
    focusOnSelect: true });

  $('.slider-category-item').slick({
    dots: false,
  });
  $('.list-testimonials').slick({
    dots: false,
  });
  $('.brands').slick({
    dots: false,
    arrows: false,
    slidesToShow: 7,
    slidesToScroll: 7,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 6,
        infinite: true,
      }
    }, {
      breakpoint: 800,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
      }
    }, {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }, {
      breakpoint: 300,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
  // Show or hide the sticky footer button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 200) {
      $('.backtop').fadeIn(200);
      $('body').addClass('body-scroll');
    } else {
      $('.backtop').fadeOut(200);
      $('body').removeClass('body-scroll');
    }
  });
  $(window).load(function() {
    $(window).trigger('scroll');
  });

  // Animate the scroll to top
  $('.backtop').click(function(event) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, 1000);
  });

  $('.sh-main-navbar >ul >li.dropdown').hover(function() {
    $(this).addClass('open');
  }, function() {
    $(this).removeClass('open');
  });

  $(".dropdown-menu > li > a.sub-menu-item").on("click", function(e) {
    var current = $(this).next();
    var grandparent = $(this).parent().parent();
    if ($(this).hasClass('left-caret') || $(this).hasClass('right-caret'))
      $(this).toggleClass('right-caret left-caret');
    grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
    grandparent.find(".sub-menu:visible").not(current).hide();
    current.toggle();
    e.stopPropagation();
  });
  $(".dropdown-menu > li > a:not(.sub-menu-item)").on("click", function() {
    var root = $(this).closest('.dropdown');
    root.find('.left-caret').toggleClass('right-caret left-caret');
    root.find('.sub-menu:visible').hide();
  });
  new WOW().init();
  

})(jQuery);
 