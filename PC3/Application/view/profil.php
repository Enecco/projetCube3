<?php
require "../controler/API.controller.php";
require "header.php";

$apicontrol = new APIController();

if(isset($_POST['floatingpassword']) && isset($_POST['validNewMdp']))
$floatingPassword = $_POST['floatingpassword'];


if (isset($_POST['deleteUser'])) {
    $lid = $apicontrol->getIDUser($_SESSION['nomUser']);
    echo $lid;
    // $apicontrol->deleteUser($lid);
    // header("Location : index.html");
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

<form action="#" method="POST">
<button type="button" class="btn btn-primary" id="modifyUser">Modifier le mot de passe utilisateur</button>
<input type="submit" class="btn btn-danger" name="deleteUser" id="deleteUser" value="Supprimer l'utilisateur">
</form>

<br><br>

<div class="form-floating" style="display: none;" id="divProfilPassword">
    <input type="text" class="form-control" id="floatingPassword" name="floatingPassword" placeholder="Password" value="<?php echo $_SESSION['mdpUser'] ?>">
    <label for="floatingPassword">Entrez votre nouveau mot de passe :</label>
    <button type="button" class="btn btn-success" name="validNewMdp" id="validNewMdp">Valider</button>
</div>



</div>











<?php
require "footer.php";
?>