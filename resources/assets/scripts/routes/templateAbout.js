export default {
  init() {
    // JavaScript to be fired on the about us page
    $('.slide-support').slick({
      nextArrow: $('.next'),
    })
    $(window).load(function () {
    $('.slide-team').slick({
      nextArrow: $('.next-team'),
      prevArrow: $('.prev-team'),
      slidesToShow: 3,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    })

    });
    $(window).load(function () {
    var stHeight = $('.slide-team').height();
    $('.item-slide-team').css('height', stHeight + 'px');
    })

  },
};
