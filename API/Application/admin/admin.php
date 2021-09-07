<?php
// $pass = 'passe'; /*$pass est une chaine de caracteres qui ne change pas, ni son statut, ni sa valeur*/
//  $hash = password_hash($pass, PASSWORD_BCRYPT); /*$hash est une clé variante aléatoire, sa valeur change à chaque initilisation*/
// exit;
    require 'Database.php';
    require 'util.php';
    init_php_session();


    if(isset($_POST['valid-connection']))
    if(isset($_POST['form_username']) && !empty($_POST['form_username']) &&
       isset($_POST['form_password']) && !empty($_POST['form_password']))
           {
                $username = $_POST['form_username'];
                $password = $_POST['form_password'];

                $sql =  'SELECT *  FROM site_users WHERE user_name = :name';
                $fields =['user_name' => $username];

                $req = Database::getBdd()->request($sql, $fields);

                if($req)
                {
                    if(password_verify($password, $req->user_password))
                    {
                        init_php_session();

                        $_SESSION['username'] = $username;
                        $_SESSION['rank'] = $req->user_admin;
                    }
                }

                echo 'Identifiant ou mot de passe incorect';
           }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Page de Connexion</title>
    </head>
    <body>
        <h1>Page de Connexion</h1>
        <p>Bienvenue sur la page de Connexion</p>

        <hr>
        <h2>Se connecter</h2>

        <form method="post">
            <input type="text" name="form_username" placeholder="Identifiant...">
            <input type="password" name="form_password" placeholder="Mot de passe...">
            <input type="submit" name="valid-connection" value="Connexion">
        </form>

        <nav>
            <ul>
                <li><a href="admin.php">Accueil</a></li>
            </ul>
        </nav>

    </body>
</html>