    let menuBurger = document.querySelector('.burger');
    let menu = document.querySelector('.nav');
    let menuItem = document.querySelectorAll('.items-link');

    menuBurger.addEventListener('click', function () {
        menuBurger.classList.toggle('active');
        menu.classList.toggle('active');
    })


    menuItem.forEach(function (menuItem) {
        menuItem.addEventListener('click', function () {
            menuBurger.classList.toggle('active');
            menu.classList.toggle('active');
        })
    })

;
