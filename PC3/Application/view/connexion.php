<?php
$inscriptionMail = $_POST['inscriptionEmail'];
echo $inscriptionMail;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Feuilles de styles -->
    <link rel="stylesheet" href="PC3/Application/view/styles/styles.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/cyborg/bootstrap.min.css">
    <!-- / Feuilles de styles -->
    <title>EnekateStream</title>
</head>
<body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">EnekateStream</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="catalogue.html">Catalogue
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
                <div id="espaceUser">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Espace User</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" id="nomEspaceUser">Films sauvegardés</a>
                      <a class="dropdown-item" href="#">Points films</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Mon profil</a>
                    </div>
                  </li>
                </div>

                <div id="espaceGuest">
                  <li class="nav-item dropdown" id="espaceGuest">
                    <a class="nav-link dropdown-toggle active green" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="nomEspaceGuest">Connexion</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="connexion.html">Se connecter</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="connexion.html">S'inscrire</a>
                    </div>
                  </li>
                </div>

          </ul>
          <form class="d-flex">
            <input class="form-control me-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- /NavBar -->

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
                <input type='email' class='form-control' id='connexionEmail' aria-describedby='emailHelp' placeholder='Enter email'>
                <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
              </div>
              <div class='form-group'>
              <label for='InputPassword' class='form-label mt-4'>Password</label>
              <input type='password' class='form-control' id='connexionPassword' placeholder='Password'>
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
              <input type="password" class="form-control" id="inscriptionPassword" placeholder="Password">
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
  $logged = false;
  if(!$logged){ 
    echo "<script>
    let espaceUser = document.querySelector('#espaceUser');
    espaceUser.style.display = 'none';
    </script>";
  }
  else{
    echo "<script>
    let espaceGuest = document.querySelector('#espaceGuest');
    espaceGuest.style.display = 'none';
    </script>";
  }
?>
    <script src="PC3/Application/view/styles/js.js"></script>
    <script src="bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</body>
</html>