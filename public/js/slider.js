const slider = document.querySelector(".slider");

const images = ["public/img/slider/slider2.jpg", "public/img/slider/slider3.jpg", "public/img/slider/slider4.jpg", "public/img/slider/slider5.jpg"];

let i = 0;

setInterval(() => {
  slider.classList.remove("active");
  setTimeout(() => {
    slider.style.backgroundImage = `linear-gradient(180deg,rgba(31,31,38,0.88) 0%,rgba(31,31,38,0.24) 100%),url(${images[i]})`;
    slider.classList.add("active");
    i++;
    if (i == images.length) {
      i = 0;
    }
  }, 1000);
}, 5000);
