<?php

print_r($_POST);
echo "<br></br>";

require '../../models/front/API.manager.php';

$apimanage = new APIManager();
$apimanage->createBDUser();
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

    <script src="lejs.js">
    </script>
</body>
</html>