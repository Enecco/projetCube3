<?php
require "../controler/AppRestController.php";
require "header.php";

$apicontrol = new AppRestController();



if(isset($_POST['validNewMdp'])){
$newMDP = $_POST['newMDP'];
echo "mdp pas encore changé mais php fonctionne !" . $newMDP;
}

if (isset($_POST['deleteUser'])) {
    $lid = $apicontrol->getIDUser($_SESSION['nomUser']);
    var_dump($lid[0][0]);
    $delete = $apicontrol->deleteUser($lid[0][0]);
    sleep(1);
    header("Location: deco.html");
}

?>

<h1>Mon profil</h1>

<div class="container">
<table class="table table-hover">
    <tbody>
    <tr class="table-dark">
      <th scope="row">Nom d'utilisateur</th>
      <td id="tdUser"><?php echo $_SESSION['nomUser']?></td>

    </tr>
    <tr class="table-dark">
      <th scope="row">Mot de passe</th>
      <td id="tdMdp"><?php echo $_SESSION['mdpUser']?></td>
    </tr>
    <!-- <tr class="table-dark">
      <th scope="row">Dark</th>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-dark">
      <th scope="row">Dark</th>
      <td>Column content</td>
      <td>Column content</td>
    </tr> -->
  </tbody>
</table>


<button type="button" class="btn btn-primary" id="modifyUser">Modifier le mot de passe utilisateur</button>
<form action="#" method="POST">
<input type="submit" class="btn btn-danger" name="deleteUser" id="deleteUser" value="Supprimer l'utilisateur">
</form>

<br><br>


<div class="form-floating" style="display: none;" id="divProfilPassword">
  <form action="#" method="POST">
    <input type="text" class="form-control" id="newMDP" name="newMDP" placeholder="<?php echo $_SESSION['mdpUser'] ?>">
    <input type="submit" class="btn btn-success" name="validNewMdp" id="validNewMdp">
  </form>
</div>



</div>











<?php
require "footer.php";
?>