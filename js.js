let formRecherche = document.querySelector('#recherche');

let formMenu = document.querySelector('#menu');
let submitCatalogue = document.getElementById('submitCatalogue');
let submitContact = document.querySelector('#submitContact');

submitCatalogue.textContent('wesh');
submitCatalogue.addEventListener('click', () => {
    console.log('bonsoir');
    window.location.href = "https://google.fr";
});