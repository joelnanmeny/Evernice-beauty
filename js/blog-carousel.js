$(document).on('ready', function() {

    $(".post-gallery").owlCarousel({

        navigation: false, // Show next and prev buttons
        slideSpeed: 3000,
        paginationSpeed: 400,
        singleItem: true,
        pagination: true,
        autoPlay: true,
        addClassActive: true
        

        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });

});
$(document).ready(function(){
    $('.images-evernice').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
            pauseOnHover: false,
            responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 2
            }
        }]
    });
});

// la fonction hover sur les accordions

  $(function() {
  $('#accordion .panel, #accordion1 .panel, #accordion2 .panel, #accordion3 .panel').hover(function() {
    // $(this).find(".accordion-toggle .indicator").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");
    $(this).find(".panel-collapse").collapse("show");
  }, function() {
    var $collapse = $(this).find(".panel-collapse");
    // $(this).find(".accordion-toggle .indicator").addClass("glyphicon-chevron-down").removeClass("glyphicon-chevron-up");
    setTimeout(function(){
      $collapse.collapse("hide");
    },400);
  });
})

// $(function() {
// $(".panel-heading").parent('.panel').hover(
//   function() {
//     $(this).children('.collapse').collapse('show');
//   }, function() {
//     $(this).children('.collapse').collapse('hide');
//   }
// );
// })






