let formRecherche = document.querySelector('#recherche');

let formMenu = document.querySelector('#menu');
let submitCatalogue = document.getElementById('submitCatalogue');
let submitContact = document.getElementById('submitContact');

submitCatalogue.addEventListener('click', (e) => {
    e.preventDefault();
    window.location.href = "catalogue.html";
});

submitContact.addEventListener('click', (e) => {
    e.preventDefault();
    window.location.href = "contact.html";
});