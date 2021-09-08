<?php 

include 'C:\wamp64\www\projetCube3\API\Application\models\Model1.php';

    if(isset($_GET['id'])) {
        $user_id = $_GET['id'];

        $sql = "DELETE FROM `user` WHERE `ID_USER` = '$user_id'";

        $result = $pdo->query($sql);

        if($result == TRUE) {
            echo "Record deleted Successfully.";
        } else {
            echo "Error:" . $sql . "<br>" . $pdo->$error;
        }

        header('Location: index.php');

    }
?>
