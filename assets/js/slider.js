// Training page custom slider code

const sliderViewport = document.getElementsByClassName("training-services")[0];
const sliderContainer = document.querySelectorAll(".training");
const numOfSliderImages = sliderContainer.length;

let slideOffset = 0;

const moveSlides = (offset) => {
  sliderContainer.forEach((box) => {
    const imgWidth = box.offsetWidth;
    box.style.transform = `translateX(-${offset * imgWidth}px)`;
  });
};

let timer;

const setTimer = () => {
    timer = setInterval(() => {
        slideOffset = slideOffset < numOfSliderImages - 1 ? slideOffset + 1 : 0;
        moveSlides(slideOffset);
      }, 4000);
};

setTimer();

sliderViewport.addEventListener("mouseenter", () => {
    clearInterval(timer);
});

sliderViewport.addEventListener("mouseleave", () => {
    setTimer();
});

const nextButton = document.querySelectorAll(".next");
nextButton.forEach((box) => {
  box.addEventListener("click", () => {
    slideOffset = slideOffset < numOfSliderImages - 1 ? slideOffset + 1 : 0;
    moveSlides(slideOffset);
  });
});
