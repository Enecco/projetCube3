<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="PC3/Application/view/styles/styles.css">
    <link rel="stylesheet" href="bootstrap/cyborg/bootstrap.min.css">
    <title>Catalogue</title>
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

        <h1>Liste :</h1>
<div class="container">

    <div class="row">

        <li class="text-light col" style="text-align: center; list-style: none;"><strong style="color:white;">Intouchables</strong>  
                <img src="PC3/Application/view/img/intouchables.jpg" alt="BonsoirEh">
                <ul class="nav nav-tabs row">

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

        <li class="col" style="list-style: none;"></li>

        <li class="text-light col" style="text-align: center; list-style: none;"><strong style="color: white;">Avatar</strong>
                <img src="PC3/Application/view/img/avatar.jpg" alt="BonsoirEh">
                <ul class="nav nav-tabs row">

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

        <li class="col" style=" list-style: none;"></li>

        <li class="text-light col" style="text-align: center; list-style: none;"><strong style="color: white;">MORIARTY - Jimmy</strong>
                <iframe width="310" height="420" src="https://www.youtube.com/embed/NHhaZnnz5yE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
        </li>

    </div>
    <br><br>

    <div class="row">

        <li class="text-light col" style="text-align: center; list-style: none;"><strong style="color: white;">The Karate Kid</strong>
                <img src="PC3/Application/view/img/karateKid.jpg" alt="BonsoirEh"width="310px" height="420px">
                
                <ul class="nav nav-tabs row">

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

        <li class="col" style=" list-style: none;"></li>

        <li class="text-light col" style="text-align: center; list-style: none;"><strong style="color: white;">Karate Kid 4</strong>
                <img src="PC3/Application/view/img/KarateKid4.jpg" alt="BonsoirEh">
                <ul class="nav nav-tabs row">

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

        <li class="col" style=" list-style: none;"></li>

        <!-- <li class="text-light col" style="text-align: center;"><strong>MORIARTY - Jimmy</strong>
          <iframe width="310" height="420" src="https://www.youtube.com/embed/NHhaZnnz5yE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
        </li> -->

    </div>
</div>

  <br><br>

    <a href="index.html" class="container-fluid">
        <input type="submit" value="Retour à l'accueil" class="btn btn-light">
    </a>

  <br><br><br>

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