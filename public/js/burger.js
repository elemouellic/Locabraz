let menuBurger = document.querySelector('.burger');
let menu = document.querySelector('.nav');
let menuItem = document.querySelectorAll('.items-link');
let homeForm = document.querySelector('.home-form');

menuBurger.addEventListener('click', function () {
    menuBurger.classList.toggle('active');
    menu.classList.toggle('active');

    // Vérifier si la classe active a été ajoutée
    if (menu.classList.contains('active')) {
        // Masquer home-form après 0.4 seconde pour correction de bug Firefox
        // Le calendar picker apparaissait au dessus de la nav
        setTimeout(function() {
            homeForm.style.visibility = "hidden";
        }, 400);
    } else {
        // Afficher home-form immédiatement
        homeForm.style.visibility = "visible";
    }
});

menuItem.forEach(function (menuItem) {
    menuItem.addEventListener('click', function () {
        menuBurger.classList.toggle('active');
        menu.classList.toggle('active');
        
        // Vérifier si la classe `active` a été ajoutée
        if (menu.classList.contains('active')) {
            // Masquer home-form après 1 seconde
            setTimeout(function() {
                homeForm.style.visibility = "hidden";
            }, 1000);
        } else {
            // Afficher home-form immédiatement
            homeForm.style.visibility = "visible";
        }
    })
})
