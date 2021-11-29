<?php 
require_once "../models/Model.php";

// "AppDAO" #TODO
class AppDAO extends Model {

    //A l'initialisation 
    public function getBDUsers(){
        $req = "SELECT * FROM user";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $user;
    }

    public function verifyBDLogin($username, $passwoord){
        $sql = "SELECT `password` FROM user WHERE username = :username";
        $stmt = $this->getBdd()->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $verify = $stmt->fetchAll();
        $stmt->closeCursor();
        if (isset($verify[0][0]) && $verify[0][0] == $passwoord) {
            return true;
        }
        else{
            return false;
        }
    }
    // Quand id User choisi:
    public function getBDSonde($user_sonde){
       // $req = "SELECT * from sonde as sd inner join station as s on s.IDStation = sd.IDStation WHERE sd.IDstation = :user_sonde
       // ";
       $req = "SELECT  sonde.IdSonde, sonde.model, users.EmailUsers
        FROM `sondeuser` 
        INNER JOIN `sonde` ON sonde.IdSonde = sondeuser.IdSonde 
        INNER JOIN `users` ON users.IDUser = sondeuser.IDUser 
        WHERE sondeuser.IDUser  = :user_sonde";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":user_sonde",$user_sonde,PDO::PARAM_INT);
        $stmt->execute();
        $lignesSonde = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $lignesSonde;
    }



    // DELETE
    public function deleteBDUser($IDUser){

        // ! Axe d'amélioration : condition

        //  requete get avec id user voir si existe
        // if()l'id existe pas
        // "existe pas"

         // if id existe  
        
        $req = "DELETE FROM `user` WHERE user_id =:IDUser";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindParam(':IDUser', $IDUser, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();

        return "Utilisateur n°". $IDUser . " supprimé";
    }

    // CREATE
    public function createBDUser($Nomcomplet, $passwoord){

        $req = "INSERT INTO `user`(`username`, `password`) VALUES (:Nomcomplet, :passwoord )";
        $stmt = $this->getBdd()->prepare($req); 
        $stmt->bindParam(':Nomcomplet', $Nomcomplet, PDO::PARAM_STR);
        $stmt->bindParam(':passwoord', $passwoord, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
        return "USER CREEE :" . $Nomcomplet ;

    }


    public function getIDBDUser($lemail){

        $req = "SELECT user_id FROM user WHERE username =:lemail";
        $stmt = $this->getBdd()->prepare($req); 
        $stmt->bindParam(':lemail', $lemail, PDO::PARAM_STR);
        $stmt->execute();
        //$stmt->closeCursor();
        $id = $stmt->fetchAll();
        return $id;
        
    }

    public function modifyMdpBDUser($lid, $newMdp){

        $req = "UPDATE user SET password=:newMdp WHERE user_id=:lid";
        $stmt = $this->getBdd()->prepare($req); 
        $stmt->bindParam(':lid', $lid, PDO::PARAM_INT);
        $stmt->bindParam(':newMdp', $newMdp, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
        //$id = $stmt->fetchAll();
        // return (echo"Mdp modifié");
        
    }
    
    public function createBDContenu(){
        $req = "SELECT * FROM `contenu`";
        $stmt = $this->getBdd()->prepare($req); 
        $stmt->execute();
        $contenu = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        echo "<div class='container-fluid row'>";
        $revenirLigne = false;
        $keyRef = 0;

        foreach ($contenu as $typeDonnee => $value) {

            if ($keyRef > 2) {
                echo "<div class='row'>";
                $revenirLigne = true;
                $keyRef-= 2;
            }

            $titre = $value['titre'];
            $cheminImg = $value['image'];
            $video = $value['video'];



            echo "
            <li class='text-light col' style='text-align: center; list-style: none;'><strong style='color:white;'>". $titre ."</strong><br>  
            <a href='".$video."' target='_blank' ><img src='".$cheminImg."'></a>
            <ul class='nav nav-tabs row'>

                <li class='nav-item col'>
                  <a class='nav-link' data-bs-toggle='tab' href='#synopsisIntouchables".$typeDonnee."'>Synopsis</a>
                </li>
                <li class='nav-item col'>
                  <a class='nav-link' data-bs-toggle='tab' href='#infosIntouchables".$typeDonnee."'>Infos</a>
                </li>

            </ul>
            <div id='myTabContent' class='tab-content'>
                <div class='tab-pane fade show' id='synopsisIntouchables".$typeDonnee."'>
                  <p>Film bien</pq>
                </div>
                <div class='tab-pane fade' id='infosIntouchables".$typeDonnee."'>
                  <p>Bientôt present..</p>
                </div>
            </div>
            </li>";

            if($revenirLigne){
                echo "</div>";
                $revenirLigne = false;
            }
            $keyRef++;
        }

        echo "</div>";
    }


}