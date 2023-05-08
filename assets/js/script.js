(function ($) {
  $(".navbar-wrapper__menu")
    .find(".dropdown > a")
    .on("click", function (e) {
      $("li > navbar-wrapper__dropdown").hide();
      $(this).parent().children(".navbar-wrapper__dropdown").toggle();
    });
  $(document).mouseup(function (e) {
    var container = $(".navbar-wrapper__dropdown");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      container.hide();
    }
  });
	let scrollToTop = document.getElementById("scrollToTop");
  window.scroll = function () {
    if (
      document.body.scrollTop > 50 ||
      document.documentElement.scrollTop > 50
    ) {
      scrollToTop.style.display = "block";
    } else {
      scrollToTop.style.display = "none";
    }
  };

  $("#scrollToTop").on("click", function (e) {
    window.scroll({
      top: 0,
      left: 0,
      behavior: "smooth",
    });
  });

  $("#bookSlider").multislider({
    duration: 750,
    interval: 3000
  });

  $(".book_services__slider-right").on("click", function (e) {
    $('#bookSlider').multislider('next');
  });
  $(".book_services__slider-left").on("click", function (e) {
    $('#bookSlider').multislider('prev');
  });


})(jQuery);