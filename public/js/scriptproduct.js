$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false,
            loop:false
        },
  
        770:{
            items:2,
            nav:false,
            loop:false
        },
        1200:{
          items:3,
          nav:false,
         loop:false,
        },
        1400:{
          items:6,
          nav:false,
          loop:false
  
        }
    }
  })
//   // Rating Initialization
// $(document).ready(function() {
//   $('#rateMe1').mdbRate();
// });