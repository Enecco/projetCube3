<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="PC3/Application/view/styles/styles.css">
    <link rel="stylesheet" href="bootstrap/cyborg/bootstrap.min.css">
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
                      <a class="dropdown-item" href="#">Mon profil</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" name="deconnexion" href="deco.html">Deconnexion</a>
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