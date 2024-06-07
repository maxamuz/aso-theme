jQuery(document).ready(function () {
  var multipleCardCarousel = document.querySelector("#carouselExampleControls");
  if (window.matchMedia("(min-width: 576px)").matches) {
    var carousel = new bootstrap.Carousel(multipleCardCarousel, {
      interval: false,
      wrap: false,
    });
    var carouselWidth = jQuery(".carousel-inner")[0].scrollWidth;
    var cardWidth = jQuery("#carouselExampleControls .carousel-item").width();
    var scrollPosition = 0;
    jQuery("#carouselExampleControls .carousel-control-next").on(
      "click",
      function () {
        if (scrollPosition < carouselWidth - cardWidth * 3) {
          scrollPosition += cardWidth;
          jQuery("#carouselExampleControls .carousel-inner").animate(
            { scrollLeft: scrollPosition },
            600
          );
        }
      }
    );
    jQuery("#carouselExampleControls .carousel-control-prev").on(
      "click",
      function () {
        if (scrollPosition > 1) {
          scrollPosition -= cardWidth;
          jQuery("#carouselExampleControls .carousel-inner").animate(
            { scrollLeft: scrollPosition },
            600
          );
        }
      }
    );
  } else {
    jQuery(multipleCardCarousel).addClass("slide");
  }
});
