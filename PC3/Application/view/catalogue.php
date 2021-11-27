<?php
  require "header.php"
?>

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
require "footer.php";
?>