<?php
  require "header.php"
?>

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
        <img src="PC3/Application/view/img/delpech.jpg" alt="delpech">
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
        <img src="PC3/Application/view/img/dubosc.jpg" alt="dubosc">
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
        <form action="index.html">
          <br>
            <input type="submit" value="Retour à l'accueil" class="btn btn-light">
        </form>
        <br><br><br><br><br>

    </div>

<?php
require "footer.php";
?>