<?php
include 'C:\wamp64\www\projetCube3\API\Application\models\Model1.php';

    if(isset($_POST['update'])) {
        $user_id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "UPDATE `users` SET `username` = '$username', `password` = '$password' WHERE `ID_USER` = '$user_id'";

        $result = $db->query($sql);

        if($result == TRUE){
            echo "Record Updated Successfully";
        } else {
            echo "Error:" . $sql . "<br>" . $db->error;
        }
    }

    if(isset($GET['id'])) {
        $user_id = $_GET['id'];

        $sql = "SELECT *FROM 'users' WHERE 'id' = '$user_id'";

        $result = $db->query($sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $first_name = $row['username'];
                $password = $row['password'];
                $id = $row['ID_USER'];
            }
?>

<html>
    <body>

        <h2> User Update Form</h2>

        <form action="" method="post">
            <fieldset>
                <legend>Personal Information:</legend>
                First Name:<br>
                <input type="text" name="firstname" value="<?php echo $first_name; ?>">
                <input type="hiden" name="user_id" value="<?php echo $id; ?>">
                <br>
                Last Name:<br>
                <input type="text" name="lastname" value="<?php echo $last_name; ?>">
                <br>
                Email:
                <input type="email" name="email" value="<?php echo $email; ?>">
                <br>
                Password:
                <input type="password" name="password" value="<?php echo $password; ?>">
                <br>
                Gender:<br>
                <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){echo "checked";} ?>>Male
                <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){echo "checked";} ?>>Female
                <br><br>
                <input type="submit" name="update" value="Update">
            </fieldset>
        </form>
    </body>
</html>
    <?php
        } else {
            //Si la valeur de l'id et incorrect alors l'utilisateur est renvoyé vers la page view.php
            header('Location: view.php');
        }
    }
?>
