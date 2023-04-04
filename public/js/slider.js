const slider = document.querySelector(".slider");

const images = ["public/img/appt1quimperle/20220521_172648.jpg", "public/img/appt1quimperle/20220525_193503.jpg", "public/img/appt1quimperle/20220525_193513.jpg"];

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
