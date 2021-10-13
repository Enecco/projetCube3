<?php

$logged = false;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/cyborg/bootstrap.min.css">
    <title>Contact</title>
</head>
<body>
    
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">EnekateStream</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="catalogue.php">Catalogue
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <?php 
                if($logged){
              ?>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="espaceUser">Espace User</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Films sauvegardés</a>
                      <a class="dropdown-item" href="#">Points films</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Mon profil</a>
                    </div>
                  </li>
                <?php
                }
                else{
              ?>
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle active green" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="espaceUser">Connexion</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="connexion.php">Se connecter</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="connexion.php">S'inscrire</a>
                  </div>
                </li>
              <?php
                }
              ?>

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
    <div class="container-fluid row">

    <div class="card mb-3 col-3">
        <h3 class="card-header">Administrateur</h3>
        <div class="card-body">
          <h5 class="card-title">Michel Delpech</h5>
          <h6 class="card-subtitle text-muted">On peut mettre des trucs là</h6>
        </div>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
          <rect width="100%" height="100%" fill="#868e96"></rect>
          <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
        </svg> -->
        <img src="images/delpech.jpg" alt="delpech">
        <div class="card-body">
          <p class="card-text">On peut mettre des trucs ici.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Téléphone : 06 06 06 06 06</li>
          <li class="list-group-item">Email : michel.depech@mode.fr</li>
          <li class="list-group-item">Autre info ?</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
        <div class="card-footer text-muted">
          Et là, une date, qqch?
        </div>
    </div>
    
    <div class="col-1"></div>

    <div class="card mb-3 col-3">
        <h3 class="card-header">CoOpérateur</h3>
        <div class="card-body">
          <h5 class="card-title">Franck Dubosc</h5>
          <h6 class="card-subtitle text-muted">On peut mettre des trucs là</h6>
        </div>
        <!-- <svg xmlns="images/dubosc.png" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
          <rect width="100%" height="100%" fill="#868e96"></rect>
          <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image pacap</text>
        </svg> -->
        <img src="images/dubosc.jpg" alt="dubosc">
        <div class="card-body">
          <p class="card-text">On peut mettre des trucs ici.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Téléphone : 07 07 07 07 07</li>
          <li class="list-group-item">Email : marre.dubosc@ifaitchier.fr</li>
          <li class="list-group-item">Autre info ?</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
        <div class="card-footer text-muted">
          Et là, une date, qqch?
        </div>
    </div>
<br><br><br>
        <form action="index.php">
          <br>
            <input type="submit" value="Retour à l'accueil" class="btn btn-light">
        </form>
        <br><br><br><br><br>

    </div>

    <script src="bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</body>
</html>