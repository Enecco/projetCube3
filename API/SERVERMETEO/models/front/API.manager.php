<?php
// liaison faite pr heritage de la connexion Bdd
require_once 'models/Model.php';

class APIManager extends Model{

    public function getDBContenu() {

        $req = " SELECT * FROM contenu ";
        $stmt = $this->getBdd()->prepare($req); // si connexion true, on prepare la requete
        $stmt->execute();
        $contenu = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetchAll prend en parametre la constante FETCH::ASSOC pour retourner SEULEMENT les champs present dans notre table.
        // fermeture du cursor pour fermer la requete et la co a la bdd
        $stmt->closeCursor();
        return $contenu;
    }

    public function getDBContenu1() {

        $req = " SELECT * FROM contenu  WHERE id_contenu = 1";
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

    public function getDBUtilisateur() {

        $req = "SELECT * from utilisateur ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        
        $utilisateur = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        return $utilisateur;
    }
    public function getDBRechercher() {

        $req = "SELECT * from rechercher ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        
        $rechercher = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        return $rechercher;
    }
}