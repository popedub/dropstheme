export default {
  init() {
    // JavaScript to be fired on the single page
    $('.single-gallery').slick({
      nextArrow: $('.next'),
      prevArrow: $('.prev'),
    })
    $('.menu-item-type-taxonomy').addClass('current-menu-item');
  },
  finalize() {
    // JavaScript to be fired on the single page, after the init JS
  },
};
