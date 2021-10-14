let espaceUser = document.querySelector("#espaceUser");
let nomUser;

let btnInscription = document.querySelector("#btnInscription");
let btnConnexion = document.querySelector("#btnConnexion");
let pageConnexion = document.querySelector('#pageConnexion');
let pageInscription = document.querySelector('#pageInscription');

btnConnexion.addEventListener('click', () => {
      pageConnexion.style.display = 'block';
      pageInscription.style.display = 'none';
});

btnInscription.addEventListener('click', () => {
    pageInscription.style.display = 'block';
    pageConnexion.style.display = 'none';
});