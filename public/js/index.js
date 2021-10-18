$("#menu-icon").click(function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $("header nav").slideUp(300);
    } else {
      $(this).addClass("active");
      $("header nav").slideDown(300);
    }
  });

  $("*").each(function () {
    $(this).click(function () {
      var target = $(this).attr("data-goto-target");
      if (target != undefined) {
        // var dur = $(this).attr("data-goto-duration");
        var top = $(target).offset().top - 100;
        $("html,body").animate({ scrollTop: top }, parseInt(300));
        if($(window).width()<=768){
          $("#menu-icon").removeClass("active");
          $("header nav").slideUp(300);
        }
      }
    });
  });

var swiper = new Swiper(".RSwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    breakpoints: {
        576:{
            slidesPerView: 2,
        }
   },
  });