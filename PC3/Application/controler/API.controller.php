<?php
 require_once "API.manager.php";
 require_once "../models/Model.php";


    class APIController {
        private $apimanager;
    
        public function __construct(){
            $this->apimanager = new APIManager();
       }
        public function getUsers(){ 
            
           $users = $this->apimanager->getBDUsers();
            Model::sendJSON($users);

        }

        public function verifyLogin($mail, $passwoord){
        $verif = $this->apimanager->verifyBDLogin($mail, $passwoord);
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



        public function getReleve(){
            $releve = $this->apimanager->getBDReleve();
            Model::sendJSON($releve);

        }

        public function getDernierReleve($user_sonde){
            $dernierReleve = $this->apimanager->getBDdernierReleve($user_sonde);
            Model::sendJSON($dernierReleve);

        }

        public function getDerniersReleves(){
            $derniersReleves = $this->apimanager->getBDderniersReleves();
            Model::sendJSON($derniersReleves);

        }

    
        public function getStation(){
            $station = $this->apimanager->getBDStation();
            Model::sendJSON($station);
            // echo "<pre>";
            // print_r($stations);
            // echo "</pre>";
           
        }
        public function getSondes(){
            $sondes = $this->apimanager->getBDSondes();
            Model::sendJSON($sondes);
        }
        

        // DELETE 
        public function deleteUser($IDUser){
            $users = $this->apimanager->deleteBDUser($IDUser);
            return $users;
        }
        public function deleteSonde($IDSonde){
            $sondes = $this->apimanager->deleteBDSonde($IDSonde);
            Model::sendJSON($sondes);
        }
        public function deleteReleve($IDReleve){
            $releves = $this->apimanager->deleteBDReleve($IDReleve);
            Model::sendJSON($releves);
        }

        // CREATE
        public function createSonde($model, $IdStation ){
            $sondes = $this->apimanager->createBDSonde($model, $IdStation );
            Model::sendJSON($sondes);
        }

        public function createUser($Nomcomplet, $passwoord){
            $users = $this->apimanager->createBDUser($Nomcomplet, $passwoord);
            //Model::sendJSON($users);
        }

        public function getIDUser($lemail){
            $id = $this->apimanager->getIDBDUser($lemail);
            return $id;
        }


    }
