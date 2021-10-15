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
let mode = 'inscription';

if(btnConnexion){
btnConnexion.addEventListener('click', () => {
      pageConnexion.style.display = 'block';
      pageInscription.style.display = 'none';
      mode = 'connexion';
});}

if(btnInscription){
btnInscription.addEventListener('click', () => {
    pageInscription.style.display = 'block';
    pageConnexion.style.display = 'none';
    mode = 'inscription';
});}

if((envoiConnexion)){
    envoiConnexion.addEventListener('click', (e) => {
        e.preventDefault();
        if (mode === 'inscription') {

            if (inscriptionEmail.value === '' || inscriptionPassword.value === '') {
                alert('Inscription : Rempli les champs mail ET mdp');
            }
            else{
                alert('Inscription : Tu as bien rempli les champs, bg');
            }

        }
        else if(mode === 'connexion'){

            if (connexionEmail.value === '' || connexionPassword.value === '') {
                alert('Connexion : Tu n\'as pas indiqué ton mail ou ton mdp');
            }
            else{
                alert('Connexion : Tu as bien rempli les champs, tu vas être connecté');
            }
        }
});}

// DEMARCHE A INVESTIGUER POUR LIEN AVEC PAGES PHP DE L'API

// $('#envoiConnexion').click(function() {
//     // L'URL du fichier dans lequel tu appelles ta fonctio
//     var url = '../../CRUD/userCreated.php';
//     $.post(url, function(data){
//         // Tu affiches le contenu dans ta div
//         $('#div_donnees').html(data);
//     });
// });