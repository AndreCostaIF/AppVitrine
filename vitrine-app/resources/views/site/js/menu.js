jQuery(document).ready(function ($) {
    //FIXED HEADER
    window.onscroll = function () {
      if (window.pageYOffset > 200) {
        $("header").addClass("active bg-light");
       
      } else if (window.pageYOffset < 50) {
        $("header").removeClass("active bg-light");
      
      }
    };
});