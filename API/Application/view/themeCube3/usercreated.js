let lebutton = document.body.querySelector('button');

lebutton.textContent = "Revenir à l'accueil";

lebutton.addEventListener('click', () => {
    window.location.href='../themeCube3/index.php';
});