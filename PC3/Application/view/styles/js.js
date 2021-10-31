let nomEspaceUser = document.querySelector("#nomEspaceUser");
let nomEspaceGuest = document.querySelector("#nomEspaceGuest");
// CONDITION AUTHENTIFICATION REQUISE



let btnInscription = document.querySelector("#btnInscription");
let btnConnexion = document.querySelector("#btnConnexion");
let pageConnexion = document.querySelector('#pageConnexion');
let pageInscription = document.querySelector('#pageInscription');
let inscriptionEmail = document.querySelector('#inscriptionEmail');
let envoiConnexion = document.querySelector('#envoiConnexion');
let mode = 'inscription';


// AFFICHAGE PAGE CONNEXION 
if(btnConnexion){
btnConnexion.addEventListener('click', () => {
      pageConnexion.style.display = 'block';
      pageInscription.style.display = 'none';
      mode = 'connexion';
});}
// AFFICHAGE PAGE INSCRIPTION
if(btnInscription){
btnInscription.addEventListener('click', () => {
    pageInscription.style.display = 'block';
    pageConnexion.style.display = 'none';
    mode = 'inscription';
});}


// CONDITION D'ENVOI DU SUBMIT EN MODE INSCRIPTION
if((envoiConnexion)){
    envoiConnexion.addEventListener('click', (e) => {
        //
        if (mode === 'inscription') {

            if (inscriptionEmail.value === '' || inscriptionPassword.value === '') {
                e.preventDefault();
                alert('Inscription : Rempli les champs mail ET mdp');
            }
            else{
                alert('Inscription : Tu as bien rempli les champs, bg');
            }
// SINON EN MODE CONNEXION
        }
        else if(mode === 'connexion'){

            if (connexionEmail.value === '' || connexionPassword.value === '') {
                e.preventDefault();
                alert('Connexion : Tu n\'as pas indiqué ton mail ou ton mdp');
            }
            else{
                alert('Connexion : Tu as bien rempli les champs, tu vas être connecté');
            }
        }
});}