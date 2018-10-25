/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

(function($){   
    
  "use strict" ;  
  
   $(document).ready(function(){

    //$('#testimonials').find('.carousel-item').first().addClass('active');
 
    $(".jumbotron").css({ height: $(window).height() + "px" });

    $(window).on("resize", function() {
      $(".jumbotron").css({ height: $(window).height() + "px" });
    });

    // Custom function which toggles between sticky class (is-sticky)
    var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
      var stickyHeight = sticky.outerHeight();
      var stickyTop = stickyWrapper.offset().top;
      if (scrollElement.scrollTop() >= stickyTop) {
          stickyWrapper.height(stickyHeight);
          sticky.addClass("is-sticky");
      }
      else {
          sticky.removeClass("is-sticky");
          stickyWrapper.height('auto');
      }
  };

  // Find all data-toggle="sticky-onscroll" elements
  $('[data-toggle="sticky-onscroll"]').each(function () {
      var sticky = $(this);
      var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
      sticky.before(stickyWrapper);
      sticky.addClass('sticky');

      // Scroll & resize events
      $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
          stickyToggle(sticky, stickyWrapper, $(this));
      });

      // On page load
      stickyToggle(sticky, stickyWrapper, $(window));
  });

  $('.scrollup').click(function(){
    $("html,body").animate({
            scrollTop:0
    },600);
    return false;
});

$(window).on('scroll',function(){

  if($(this).scrollTop() >250){
          $('.scrollup').fadeIn();
  }else{
          $('.scrollup').fadeOut();
  }

});

    
   });
   
})(jQuery);
