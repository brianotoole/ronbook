// Accordion

(function($) {
  "use strict";

  //$('.accordion > .accordion__item:eq(0)').addClass('active').next().slideDown();
  $('.accordion__item').click(function(e) {
      //var dropDown = $(this).closest('.accordion__item').find('.accordion__content');

      //$(this).closest('.accordion').find('.accordion__item').not(dropdown).slideUp();
      $(this).closest('.accordion').find('.accordion__item');

      if ($(this).hasClass('active')) {
          $(this).removeClass('active');
          $(this).find('.accordion__content').removeClass('active');
      } else {
          $(this).addClass('active');
          $(this).closest('.accordion').find('.accordion__item.active > .accordion__content').addClass('active');
      }

      //dropDown.stop(false, true).slideToggle();

      e.preventDefault();
  });



})(jQuery);