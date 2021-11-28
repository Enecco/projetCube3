<?php
 require_once "AppDAO.php";
 require_once "../models/Model.php";

 // On pourrais l'appeller "AppRestController" #TODO

    class AppRestController {
        private $AppDAO;
    
        public function __construct(){
            $this->AppDAO = new AppDAO();
       }
        public function getUsers(){ 
            
           $users = $this->AppDAO->getBDUsers();
            Model::sendJSON($users);

        }

        public function verifyLogin($mail, $passwoord){
        $verif = $this->AppDAO->verifyBDLogin($mail, $passwoord);
        if ($verif) {
            echo "You are connected to the user ". $mail;
            return true;
        }
        else{
            echo "We don't have that user in base. Try again.";
            return false;
        }
        //Model::sendJSON($verif);
        }

        public function formatDataLigneSonde($ligneSonde){
         $tabsonde = [];
            foreach($ligneSonde as $sondes){
                if(!array_key_exists($sondes['IDSonde'],$tabsonde)){
                  $tabsonde[$sondes['IDSonde']] = [
                     "Sonde" => $sondes['IDSonde'],
                     "model" => $sondes['model'],
                     "Station" => $sondes['IDStation'],
                     "Users" => $sondes['IDUsers'],
                   //  "Model" => $sondes['Model']
                  ];
                }
            }
            return $tabsonde;
            /*   echo "------------Start----------------";
            print_r($ligneSonde);
             echo "------------End--------------";
         */

        }

        // Permet de convertir en objet JSON récupérable par une API
        // private function formatDataLignesUsers($lignes){
        //     $tab = [];
            
        //     foreach($lignes as $ligne){
        //         if(!array_key_exists($ligne['IDUsers'],$tab)){
        //             $tab[$ligne['IDUsers']] = [
        //                 "id" => $ligne['IDUsers'],
        //                 "nom" => $ligne['Nomcomplet'],
        //                 "Email" => $ligne['EmailUsers'],
        //                 "Password" => $ligne['Password']
        //             ];
        //         }
        //     }
    
        //     return $tab;
        // }
        

        // DELETE 
        public function deleteUser($IDUser){
            $users = $this->AppDAO->deleteBDUser($IDUser);
            return $users;
        }


        // CREATE
        public function createUser($Nomcomplet, $passwoord){
            $users = $this->AppDAO->createBDUser($Nomcomplet, $passwoord);
            //Model::sendJSON($users);
        }

        public function getIDUser($lemail){
            $id = $this->AppDAO->getIDBDUser($lemail);
            return $id;
        }

        public function modifyMdpBDUser($lid, $newMdp){
            $leNew = $this->AppDAO->modifyMdpBDUser($lid, $newMdp);
        }
    }
