<?php

$logged = false;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/cyborg/bootstrap.min.css">
    <title>Catalogue</title>
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

    <div style="display: none;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
                <i class="fas fa-bars"></i>
                </button>
        
                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="index.html">
                    <img
                    src="_logo - Copie.png"
                    height="15"
                    alt=""
                    loading="lazy"
                    />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" href="catalogue.html">Catalogue</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Mon profil</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->
        
                <!-- Right elements -->
                <div class="d-flex align-items-center">
                <!-- Icon -->
                <a class="text-reset me-3" href="#">
                    <i class="fas fa-shopping-cart"></i>
                </a>
        
                <!-- Notifications -->
                <a
                    class="text-reset me-3 dropdown-toggle hidden-arrow"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                >
                    <i class="fas fa-bell"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">2</span>
                </a>
                <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdownMenuLink"
                >
                    <li>
                    <a class="dropdown-item" href="#">Some news</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">Another news</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
        
                <!-- Avatar -->
                <a
                    class="dropdown-toggle d-flex align-items-center hidden-arrow"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                >
                    <img
                    src="https://mdbootstrap.com/img/new/avatars/2.jpg"
                    class="rounded-circle"
                    height="25"
                    alt=""
                    loading="lazy"
                    />
                </a>
                <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdownMenuLink"
                >
                    <li>
                    <a class="dropdown-item" href="#">My profile</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">Settings</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">Logout</a>
                    </li>
                </ul>
                </div>
                <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
    </nav>
    </div>

        <h1>Liste :</h1>
<div class="container">
    <div class="row">

        <li class="text-light col" style="text-align: center;"><strong>Intouchables</strong>  
                <img src="intouchables.jpg" alt="BonsoirEh">
                <ul class="nav nav-tabs bg-dark row">

                    <li class="nav-item col">
                      <a class="nav-link" data-bs-toggle="tab" href="#synopsisIntouchables">Synopsis</a>
                    </li>
                    <li class="nav-item col">
                      <a class="nav-link" data-bs-toggle="tab" href="#infosIntouchables">Infos</a>
                    </li>

                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade show" id="synopsisIntouchables">
                      <p>Film bien</p>
                    </div>
                    <div class="tab-pane fade" id="infosIntouchables">
                      <p>Avec Omar SY et François CLUZET</p>
                    </div>
                </div>
        </li>
        <li class="col"></li>
        <li class="text-light col" style="text-align: center;"><strong>Avatar</strong>
                <img src="avatar.jpg" alt="BonsoirEh">
                <ul class="nav nav-tabs bg-dark row">

                    <li class="nav-item col">
                      <a class="nav-link" data-bs-toggle="tab" href="#synopsisAvatar">Synopsis</a>
                    </li>
                    <li class="nav-item col">
                      <a class="nav-link" data-bs-toggle="tab" href="#infosAvatar">Infos</a>
                    </li>

                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade show" id="synopsisAvatar">
                      <p>Film d'exception, un de mes préférés</p>
                    </div>
                    <div class="tab-pane fade" id="infosAvatar">
                      <p>Avec DONT KNOW LES ACTEURS, réalisé par James CAMERON</p>
                    </div>
                </div>
        </li>
        <li class="col"></li>
        <li class="text-light col" style="text-align: center;"><strong>MORIARTY - Jimmy</strong>
                <iframe width="310" height="420" src="https://www.youtube.com/embed/NHhaZnnz5yE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
        </li>
    </div>
<br><br>
    <div class="row">

        <li class="text-light col" style="text-align: center;"><strong>The Karate Kid</strong>
                <img src="karateKid.jpg" alt="BonsoirEh"width="310px" height="420px">
                
                <ul class="nav nav-tabs bg-dark row">

                    <li class="nav-item col">
                      <a class="nav-link" data-bs-toggle="tab" href="#synopsisKk">Synopsis</a>
                    </li>
                    <li class="nav-item col">
                      <a class="nav-link" data-bs-toggle="tab" href="#infosKk">Infos</a>
                    </li>

                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade show" id="synopsisKk">
                      <p>Film excellent mais vu en deux fois</p>
                    </div>
                    <div class="tab-pane fade" id="infosKk">
                      <p>Avec Maitre Miyagi et le petit</p>
                    </div>
                </div>
        </li>
        <li class="col"></li>
        <li class="text-light col" style="text-align: center;"><strong>Karate Kid 4</strong>
                <img src="KarateKid4.jpg" alt="BonsoirEh">
                <ul class="nav nav-tabs bg-dark row">

                    <li class="nav-item col">
                      <a class="nav-link" data-bs-toggle="tab" href="#synopsisKk4">Synopsis</a>
                    </li>

                    <li class="nav-item col">
                      <a class="nav-link" data-bs-toggle="tab" href="#infosKk4">Infos</a>
                    </li>

                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade show" id="synopsisKk4">
                      <p>Karate kid 4 est un film bien</p>
                    </div>
                    <div class="tab-pane fade" id="infosKk4">
                      <p>Avec Jackie CHAN et Jaden SMITH</p>
                    </div>
                </div>
        </li>
        <li class="col"></li>
        <li class="text-light col" style="text-align: center;"><strong>MORIARTY - Jimmy</strong>
          <iframe width="310" height="420" src="https://www.youtube.com/embed/NHhaZnnz5yE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
        </li>

    </div>
</div>
<br><br>
        <a href="index.php" class="container-fluid">
            <input type="submit" value="Retour à l'accueil" class="btn btn-light">
        </a>

    <br><br><br>

    <script src="bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</body>
</html>