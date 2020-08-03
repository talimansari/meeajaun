 $(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 90) {
            $(".header-section").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".header-section").removeClass("active");
        }
    });
});
  