//Affichage de la div [type=checkbox] du formulaire de recherche page index
$(document).ready(function () {

    $('#service').on('click', function () {

        $('#service_contenu').toggleClass('active');
    });
});

//Affichage de la div [type=range] du formulaire de recherche page index
$(document).ready(function () {

    $('#price').on('click', function () {

        $('#prix_Chalet').toggleClass('active');
    });
});

//Affichage de la div [type=checkbox] du formulaire d'ajout de chalet page addCatalogueChalet
$(document).ready(function () {

    $('#addService').on('click', function () {

        $('#addService_contenu').toggleClass('active');
    });
});

//affichage du formulaire d'ajout de commentaire
$(document).ready(function () {

    $('#commentPlus').on('click', function () {

        $('#formComment').toggleClass('active');
    });
});

//script de navigation secondaire de la page detailChalet
var navShow = function () {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector('.nav_liens');
    const navLinks = document.querySelectorAll('.nav_liens li');
    burger.addEventListener('click', function () {
        nav.classList.toggle('nav-active');

        navLinks.forEach((link, index) => {
            link.style.animation = `navlinkFade 0.5s ease forwards ${index / 7 + 1.5}s`;

        });
        burger.classList.toggle('toggle');

    });
}
navShow();

