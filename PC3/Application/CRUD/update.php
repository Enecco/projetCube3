<?php
include "../models/Model1.php";

if (isset($_POST['update'])) {
    $user_id = $_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_BCRYPT);
    
    $sql = "UPDATE `user` SET `username` = '$username', `password` = '$password' WHERE `ID_USER` = '$user_id'";

    $result = $pdo->query($sql);

    if ($result == TRUE) {
        echo "Record Updated Successfully";
        echo " <a href='elements.php'><input type='submit' value=\"Revenir à mon profil\"></a>";
    } else {
        echo "Error:" . $sql . "<br>" . $pdo->error;
    }
}

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "SELECT * FROM `user` WHERE `ID_USER` = '$user_id'";

    $result = $pdo->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $user_name = $row['username'];
            $password = $row['password'];
        }
?>

<!DOCTYPE html>
<html>
    <body>

        <h2> User Update Form</h2>

        <form action="" method="post">
            <fieldset>
                <legend>Personal Information:</legend>
                User Name:
                <input type="text" name="username" value="<?php echo $user_name; ?>">
                <br>
                Password:
                <input type="password" name="password" value="<?php echo $password; ?>">
                <br><br>
                <input type="submit" name="update" value="Update">
            </fieldset>
        </form>
    </body>
</html>
    <?php
        } else {
            //Si la valeur de l'id et incorrect alors l'utilisateur est renvoyé vers la page elements.php
            header('Location: elements.php');
        }
        // header('Location: elements.php');

    }
?>
