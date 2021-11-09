let nomEspaceUser = document.querySelector("#nomEspaceUser");
let seConnecter = document.querySelector("#seConnecter");
let sInscrire = document.querySelector("#sInscrire");
// CONDITION AUTHENTIFICATION REQUISE



let btnInscription = document.querySelector("#btnInscription");
let btnConnexion = document.querySelector("#btnConnexion");
let pageConnexion = document.querySelector('#pageConnexion');
let pageInscription = document.querySelector('#pageInscription');
let inscriptionEmail = document.querySelector('#inscriptionEmail');
let envoiConnexion = document.querySelector('#envoiConnexion');
let deleteUser = document.querySelector('#deleteUser');
let modifyUser = document.querySelector('#modifyUser');
let tdUser = document.querySelector('#tdUser');
let tdMdp = document.querySelector('#tdMdp');
let mode = 'inscription';
let divProfilPassword = document.querySelector('#divProfilPassword');
let validNewMdp = document.querySelector('#validNewMdp');
// AFFICHAGE PAGE CONNEXION DEPUIS NAVBAR
if(seConnecter){
    seConnecter.addEventListener('click', (e) => {
        e.preventDefault();
        window.location.href = 'connexion.html';
        pageConnexion.style.display = 'block';
        pageInscription.style.display = 'none';
        mode = 'connexion';
});}

// AFFICHAGE PAGE INSCRIPTION DEPUIS NAVBAR
if(btnInscription){
    btnInscription.addEventListener('click', () => {
        pageInscription.style.display = 'block';
        pageConnexion.style.display = 'none';
        mode = 'inscription';
});}

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
if(envoiConnexion){
    envoiConnexion.addEventListener('click', (e) => {
        //
        if (mode === 'inscription') {

            if (inscriptionEmail.value === '' || inscriptionPassword.value === '') {
                e.preventDefault();
                alert('Inscription : Rempli les champs mail ET mdp');
            }
            else{
                alert('Inscription : Tu as bien rempli les champs, tu es incris.');
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

// BUTTON DELETE USER
// if(deleteUser){
//     deleteUser.addEventListener('click', () => {
//         alert("c'est pas supprimé mais le button fonctionne");
//     });}

let modeModif = 0;
//BUTTON MODIFIER LE PROFIL
if(modifyUser && modeModif < 1){
    modifyUser.addEventListener('click', () => {
        divProfilPassword.style.display = "block";
        modeModif++;
        console.log(modeModif);
    });
}
else if(modifyUser && modeModif > 0) {
        
        modifyUser.addEventListener('click', () => {
            divProfilPassword.style.display = "none";
            modeModif--;
            alert('lol');
            console.log(modeModif);
        });
    
    }


// validNewMdp.addEventListener('click', () => {
//     location.reload();
// });
