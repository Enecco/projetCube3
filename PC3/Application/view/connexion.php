<?php
require_once "../controler/API.controller.php";
require "header.php";

$apicontroler = new APIController();
$logged = false;
if (isset($_POST['inscriptionEmail']) && ($_POST['inscriptionPassword']) != '') {
  $inscriptionMail = $_POST['inscriptionEmail'];
  $inscriptionPassword = $_POST['inscriptionPassword'];
  $apicontroler->createUser($inscriptionMail, $inscriptionPassword);
  echo "User ".$inscriptionMail . " créé !";
}

if (isset($_POST['connexionEmail']) && ($_POST['connexionPassword']) != '') {
  $connexionMail = $_POST['connexionEmail'];
  $connexionPassword = $_POST['connexionPassword'];
  $verif = $apicontroler->verifyLogin($connexionMail, $connexionPassword);

  if($verif){
    $_SESSION['logged'] = true;
    header("Location: index.html");
  }
  else{
    $_SESSION['logged'] = false;
  }
  
}

?>


<br><br>

    <form class="container" method="POST" action="#">
        <fieldset>
            <legend>Rejoignez-nous !</legend><br><br>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnConnexion" autocomplete="off" checked="">
                <label class="btn btn-outline-primary" for="btnConnexion">Connexion</label>
                <input type="radio" class="btn-check" name="btnradio" id="btnInscription" autocomplete="off" checked="">
                <label class="btn btn-outline-primary" for="btnInscription">Inscription</label>
            </div>

            <div id="pageConnexion" style="display: none;">
            <br>
              <div class='container form-group row'>
                <label for='staticEmail' class='col-sm-2 col-form-label'>Connecte toi !</label>
              </div>
              <div class='form-group'>
                <label for='exampleInputEmail1' class='form-label mt-4'>Email address</label>
                <input type='email' class='form-control' id='connexionEmail' name='connexionEmail' aria-describedby='emailHelp' placeholder='Enter email'>
                <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
              </div>
              <div class='form-group'>
              <label for='InputPassword' class='form-label mt-4'>Password</label>
              <input type='password' class='form-control' id='connexionPassword' name="connexionPassword" placeholder='Password'>
              </div>
            </div>

            <div id="pageInscription">
            <br>
              <div class="container form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Inscris toi !</label>
              </div>

              <div class="form-group">
              <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
              <input type="email" class="form-control" id="inscriptionEmail" name="inscriptionEmail" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>

              <div class="form-group">
              <label for="InputPassword1" class="form-label mt-4">Password</label>
              <input type="password" class="form-control" id="inscriptionPassword" name="inscriptionPassword" placeholder="Password">
              </div>

              <div class="form-group">
              <label for="exampleSelect1" class="form-label mt-4">Sexe</label>
              <select class="form-select" id="exampleSelect1">
                  <option>Féminin</option>
                  <option>Masculin</option>
              </select>
              </div>

              <fieldset class="form-group">
                  <legend class="mt-4">Goûts cinématographiques</legend>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                      Thriller
                      </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                      <label class="form-check-label" for="flexCheckChecked">
                      Comédie
                      </label>
                  </div>
              </fieldset>

              <div class="form-group">
              <label for="exampleTextarea" class="form-label mt-4">Description</label>
              <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
              </div>

              <div class="form-group">
              <label for="formFile" class="form-label mt-4">Choisissez votre avatar</label>
              <input class="form-control" type="file" id="formFile">
              </div>
            </div>
<br><br>
            <input type="submit" class="btn btn-primary" id="envoiConnexion" value="Envoyer">

<br><br><br>
        </fieldset>
    </form>

<?php
require "footer.php";
?>