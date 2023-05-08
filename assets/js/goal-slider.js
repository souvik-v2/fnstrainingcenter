var goalSlideIndex = 1;
goalSlides(goalSlideIndex);

function goalPlusSlides(n) {
  goalSlides((goalSlideIndex += n));
}

function goalPrevSlides(n) {
  goalSlides((goalSlideIndex -= n));
}

function goalCurrentSlide(n) {
  goalSlides((goalSlideIndex = n));
}

function goalSlides(n) {
  var i;
  var slides = document.getElementsByClassName("gym_feedbacks__text");
  var dots = document.getElementsByClassName("dots");
  if (n > slides.length) {
    goalSlideIndex = 1;
  }
  if (n < 1) {
    goalSlideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[goalSlideIndex - 1].style.display = "block";
  dots[goalSlideIndex - 1].className += " active";
}

window.onload = function () {
  setInterval(function () {
    goalPlusSlides(1);
  }, 3000);
};
