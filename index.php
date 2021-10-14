<?php

$logged = false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <!-- Feuilles de styles -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/cyborg/bootstrap.min.css">
    <!-- / Feuilles de styles -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="_logo - Copie.png" type="image/x-icon">
    
    <title>EnekateStream</title>

</head>
<body class="bg-dark">

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

    <div class="container-fluid">

    <br>
        <img src="images/_logo - Copie.png" style="text-align: center; margin: auto; display: flex;"/>
    <div class="container">
        <br>    

        <form class="form-floating" action="catalogue.php">
            <input type="text" class="form-control" id="floatingInputValue">
            <label for="floatingInputValue">Recherche</label>
            <br>
            <input type="submit" value="Rechercher" class="btn btn-light">
        </form>
        <br><br>

    </div>
    </div>

    <script src="js.js"></script>
    <script src="bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</body>
</html>