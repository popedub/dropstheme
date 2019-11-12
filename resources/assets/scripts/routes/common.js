export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $('.share').click(function(){
      $(this).next().toggle('fast', function(){
        if ($(this).is(':visible'))
          $(this).css('display', 'inline-block');
      });
    })
  },
};
