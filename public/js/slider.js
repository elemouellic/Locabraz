// Récupérer tous le conteneur slider
const slider = document.querySelector(".slider");

// Récupérer les images sous forme de tableau
const images = ["public/img/slider/slider2.jpg", "public/img/slider/slider3.jpg", "public/img/slider/slider4.jpg", "public/img/slider/slider5.jpg"];

// Initialiser l'index à 0
let i = 0;

// Boucle toutes les 5 secondes avec setInterval
setInterval(() => {
  // Retirer la classe "active" du conteneur
  slider.classList.remove("active");
  // Utiliser setTimeout pour synchroniser l'animation CSS
  setTimeout(() => {
    // Changer l'image de fond du conteneur 
    slider.style.backgroundImage = `linear-gradient(180deg,rgba(31,31,38,0.88) 0%,rgba(31,31,38,0.24) 100%),url(${images[i]})`;
    // Ajouter la classe "active" au conteneur
    slider.classList.add("active");
    // Afficher l'image suivante
    i++;
    // Si i est égal au nombre total d'images, revenir à zéro pour afficher la première image
    if (i == images.length) {
      i = 0;
    }
  }, 1000);
}, 5000);
