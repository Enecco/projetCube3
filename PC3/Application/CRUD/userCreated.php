<?php

include "../models/Model.php";
// print_r($_POST);
// echo "<br></br>";

$nomChoisi = $_POST['username'];
$passChoisi = $_POST['password'];

$sql = "INSERT INTO `user` (username, password) VALUES ('$nomChoisi', '$passChoisi')";

$result = $pdo->query($sql);

if($result == TRUE){
    echo "New record created successfully";
}
else{
    echo "Error:" . $sql . "<br>" . $pdo->error;
}
// require '../../models/front/AppDAO.php';
// require "C:\wamp64\www\projetCube3\API\Application\models\\front\AppDAO.php";
// $apimanage = new APIManager();
// $apimanage->createBDUser();
// APIManager::createBDUser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation de user</title>
</head>
<body>
    <button id="laccueil">Accueil</button>

    <script src="usercreated.js">
    </script>
</body>
</html>