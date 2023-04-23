// Récupérer tous le conteneur slider
const slider = document.querySelector(".slider");

// Récupérer les images sous forme de tableau
const images = ["public/img/slider/slider2-min.jpg", "public/img/slider/slider3-min.jpg", "public/img/slider/slider4-min.jpg", "public/img/slider/slider5-min.jpg"];

// Initialiser l'index à 0
let i = 0;

// Précharger les images en initialisant un tableau vide
const arrayBufferPictures = [];
// Boucle pour parcourir chaque image du tableau
for (let j = 0; j < images.length; j++) {
// Création d'un objet pour chaque images dans le tableau
const img = new Image();
// Définir la source de l'image sur la valeur de l'élément j
img.src = images[j];
// Déclenchement quand le navigateur a chargé l'objet
img.onload = () => {
// Stocke les objets Image préchargés dans un tableau pour accès rapide ultérieur
arrayBufferPictures[j] = img;
};
}

// Boucle toutes les 5 secondes avec setInterval
setInterval(() => {
// Retirer la classe "active" du conteneur
slider.classList.remove("active");
// Utiliser setTimeout pour synchroniser l'animation CSS
setTimeout(() => {
// Changer l'image de fond du conteneur en utilisant l'image préchargée
slider.style.backgroundImage = `linear-gradient(180deg,rgba(31,31,38,0.88) 0%,rgba(31,31,38,0.24) 100%),url(${arrayBufferPictures[i].src})`;
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