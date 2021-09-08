<?php
// liaison faite pr heritage de la connexion Bdd
require 'models/Model.php';
require 'admin/Database.php';
// require 'view/index.php';

class APIManager extends Model{

    public function getDBContenu() {

        $req = " SELECT * FROM contenu WHERE ";
        $stmt = $this->getBdd()->prepare($req); // si connexion true, on prepare la requete
        $stmt->execute();
        $contenu = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetchAll prend en parametre la constante FETCH::ASSOC pour retourner SEULEMENT les champs present dans notre table.
        // fermeture du cursor pour fermer la requete et la co a la bdd
        $stmt->closeCursor();
        return $contenu;
    }

    public function getAdmin() {

        $req = " SELECT * FROM site_users ";
        $stmt = $this->getBdd()->prepare($req); // si connexion true, on prepare la requete
        $stmt->execute();
        $admin = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetchAll prend en parametre la constante FETCH::ASSOC pour retourner SEULEMENT les champs present dans notre table.
        // fermeture du cursor pour fermer la requete et la co a la bdd
        $stmt->closeCursor();
        return $admin;
    }

    public function getDBContenu1() {

        $req = " SELECT * FROM contenu  WHERE ID_contenu = 1";
        $stmt = $this->getBdd()->prepare($req); // si connexion true, on prepare la requete
        $stmt->execute();
        $contenuId1 = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetchAll prend en parametre la constante FETCH::ASSOC pour retourner SEULEMENT les champs present dans notre table.
        // fermeture du cursor pour fermer la requete et la co a la bdd
        $stmt->closeCursor();
        return $contenuId1;
    }

    public function getDBContenu2() {

        $req = " SELECT * FROM contenu  WHERE id_contenu = 2";
        $stmt = $this->getBdd()->prepare($req); // si connexion true, on prepare la requete
        $stmt->execute();
        $contenuId3 = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetchAll prend en parametre la constante FETCH::ASSOC pour retourner SEULEMENT les champs present dans notre table.
        // fermeture du cursor pour fermer la requete et la co a la bdd
        $stmt->closeCursor();
        return $contenuId3;
    }

    public function getDBContenu3() {

        $req = " SELECT * FROM contenu WHERE id_contenu = 3 ";
        $stmt = $this->getBdd()->prepare($req); // si connexion true, on prepare la requete
        $stmt->execute();
        $contenu = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetchAll prend en parametre la constante FETCH::ASSOC pour retourner SEULEMENT les champs present dans notre table.
        // fermeture du cursor pour fermer la requete et la co a la bdd
        $stmt->closeCursor();
        return $contenu;
    }

    public function getDBUtilisateur1() {

        $req = " SELECT * FROM user  WHERE ID_USER = 1";
        $stmt = $this->getBdd()->prepare($req); // si connexion true, on prepare la requete
        $stmt->execute();
        $userId1 = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetchAll prend en parametre la constante FETCH::ASSOC pour retourner SEULEMENT les champs present dans notre table.
        // fermeture du cursor pour fermer la requete et la co a la bdd
        $stmt->closeCursor();
        return $userId1;
    }

    public function getDBUtilisateur2() {

        $req = " SELECT * FROM user  WHERE ID_USER = 2";
        $stmt = $this->getBdd()->prepare($req); // si connexion true, on prepare la requete
        $stmt->execute();
        $userId3 = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetchAll prend en parametre la constante FETCH::ASSOC pour retourner SEULEMENT les champs present dans notre table.
        // fermeture du cursor pour fermer la requete et la co a la bdd
        $stmt->closeCursor();
        return $userId3;
    }

    public function getDBUtilisateur3() {

        $req = " SELECT * FROM user WHERE ID_USER = 3 ";
        $stmt = $this->getBdd()->prepare($req); // si connexion true, on prepare la requete
        $stmt->execute();
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetchAll prend en parametre la constante FETCH::ASSOC pour retourner SEULEMENT les champs present dans notre table.
        // fermeture du cursor pour fermer la requete et la co a la bdd
        $stmt->closeCursor();
        return $user;
    }
    public function getDBRechercher() {

        $req = "SELECT * from rechercher ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        
        $rechercher = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        return $rechercher;
    }

    public function createBDUser(){
        // ! Axe d'amélioration : condition

        //  requete get avec id user voir si existe
        // if()l'id existe
        // "existe déjà"

         // if id existe pas
        // if(isset($_POST['username']) || isset($_POST['password'])){
        //     echo "Remplir les champs pour créer un user";
        // }
        // else{
        $nomChoisi = $_POST['username'];
        $passChoisi = $_POST['password'];
        // }


        $req = "INSERT INTO user VALUES ($nomChoisi, $passChoisi)";
        $stmt = $this->getBdd()->prepare($req); 
        // $stmt->bindParam(':Nomcomplet', $Nomcomplet, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
        return "USER CREEE :" . $nomChoisi ;

    }
}