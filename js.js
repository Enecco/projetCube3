let formRecherche = document.querySelector('#recherche');

let formMenu = document.querySelector('#menu');
let submitCatalogue = document.getElementById('submitCatalogue');
let submitContact = document.querySelector('#submitContact');

submitCatalogue.addEventListener('click', (e) => {
    e.preventDefault();
    window.location.href = "catalogue.html";
});

