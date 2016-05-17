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

  $('.date-check-in').datepicker({
    dateFormat: 'dd/mm/yy',
    minDate: new Date(currentYear, currentMonth, currentDate)
  });
  $('.date-check-out').datepicker({
    dateFormat: 'dd/mm/yy',
    minDate: new Date(currentYear1, currentMonth1, currentDate1)
  });


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
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    arrows: false,
    centerMode: true,
    focusOnSelect: true
  });

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
  });
  // Show or hide the sticky footer button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 200) {
      $('.backtop').fadeIn(200);
    } else {
      $('.backtop').fadeOut(200);
    }
  });
  $(window).load(function() {
    if ($(this).scrollTop() > 200) {
      $('.backtop').fadeIn(200);
    } else {
      $('.backtop').fadeOut(200);
    }
  });

  // Animate the scroll to top
  $('.backtop').click(function(event) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, 1000);
  });

  new WOW().init();
})(jQuery);

$.fn.extend({
  animateCss: function(animationName) {
    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    $(this).addClass('animated ' + animationName).one(animationEnd, function() {
      $(this).removeClass('animated ' + animationName);
    });
  }
});
