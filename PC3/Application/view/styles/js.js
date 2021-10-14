let espaceUser = document.querySelector("#espaceUser");
let nomEspaceUser = document.querySelector("#nomEspaceUser");
let espaceGuest = document.querySelector("#espaceGuest");
let nomEspaceGuest = document.querySelector("#nomEspaceGuest");
let logged = false;

if(!logged){
    espaceUser.style.display = "none";
}


let btnInscription = document.querySelector("#btnInscription");
let btnConnexion = document.querySelector("#btnConnexion");
let pageConnexion = document.querySelector('#pageConnexion');
let pageInscription = document.querySelector('#pageInscription');
let inscriptionEmail = document.querySelector('#inscriptionEmail');
let envoiConnexion = document.querySelector('#envoiConnexion');


if(envoiConnexion){
    inscriptionEmail
    envoiConnexion.addEventListener('click', (e) => {
        e.preventDefault();
        if (inscriptionEmail.value === '' || inscriptionPassword.value === '') {
            alert('Rempli les champs mail ET mdp');
        }
        else{
            alert('Tu as bien rempli les champs, bg');
        }
});}

if(btnConnexion){
btnConnexion.addEventListener('click', () => {
      pageConnexion.style.display = 'block';
      pageInscription.style.display = 'none';
});}

if(btnInscription){
btnInscription.addEventListener('click', () => {
    pageInscription.style.display = 'block';
    pageConnexion.style.display = 'none';
});}


