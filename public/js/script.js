$(document).ready(function () {
  let registerUser = $("#registeredUsers");
  let registerCart = new Chart(registerUser, {
    type: "line",
    data: {
      label: ["", "", "", "", "", ""],
      datasets: [
        {
          data: [15333, 21555, 18496, 24200, 10600, 15600],
          backgroundColor: "transparent",
          borderColor: "#fff",
          borderWidth: 2,
          pointBackgroundColor: "#fff",
        },
      ],
    },
    options: {
      layout: {
        padding: {
          left: 5,
          right: 5,
        },
      },
      scales: {
        yAxes: [
          {
            display: false,
          },
        ],
        xAxes: [
          {
            display: false,
          },
        ],
      },
      legend: {
        display: false,
      },
    },
  });
});

var swiper = new Swiper('.swiper', {
    slidesPerView: 3,
    direction: getDirection(),
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    on: {
        resize: function () {
            swiper.changeDirection(getDirection());
        },
    },
});

function getDirection() {
    var windowWidth = window.innerWidth;
    var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

    return direction;
}

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
            nav:true,
            loop:false
        },
        1200:{
            items:3,
            nav:true,
            loop:false,
        },
        1400:{
            items:4,
            nav:true,
            loop:false

        }
    }
})
