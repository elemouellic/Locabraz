// Récupérer tous les conteneurs d'images
const imgContainers = document.querySelectorAll('.article-img-container');

// Pour chaque conteneur d'images, initialiser l'index à 0
imgContainers.forEach(imgContainer => {
    let i = 0;

    // Récupérer les images du conteneur
    const images = imgContainer.querySelectorAll('img');

    // Masquer toutes les images sauf la première
    images.forEach((image, index) => {
        if (index !== 0) {
            image.style.display = 'none';
        }
    });

    // Ajouter un clic sur le conteneur d'images
    imgContainer.addEventListener('click', () => {
        // Masquer l'image actuelle
        images[i].style.display = 'none';

        // Si l'index de l'image actuelle est égal au nombre total d'images moins un, alors l'index est augmenté pour passer à l'image suivante. 
        if (i === images.length - 1) {
            i = 0;
         // Sinon si l'index est égal au nombre total d'images, l'index est réinitialisé à zéro pour revenir à la première image
        } else {
            i = i + 1;
        }


        // Afficher la nouvelle image
        images[i].style.display = 'block';
    });
});
