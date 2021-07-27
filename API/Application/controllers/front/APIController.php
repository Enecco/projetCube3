<?php

require_once 'models/front/API.manager.php';
class APIController {

    private $apiManager;

    // On veut qu'au moment ou l'on instancie la classe de L'APIController, j'instancie aussi un APIManager
    public function __construct()
    {
        $this->apiManager = new APIManager();
    }


    public function getContenu(){
        $contenu = $this->apiManager->getDBContenu();
        // affichera les données (ss forme de tblx) de la table 
        return $contenu;
    }
    // Affichera les données selon l'ID du contenu
    public function getContenu1(){
        $contenuId1 = $this->apiManager->getDBContenu1();
        // affichera les données (ss forme de tblx) de la table 
        echo "<pre>";
        print_r($contenuId1); 
        echo '</pre>';
    }
    public function getContenu2(){
        $contenuId2 = $this->apiManager->getDBContenu2();
        // affichera les données (ss forme de tblx) de la table 
        echo "<pre>";
        print_r($contenuId2); 
        echo '</pre>';
    }
    public function getContenu3(){
        $contenuId3 = $this->apiManager->getDBContenu3();
        // affichera les données (ss forme de tblx) de la table 
        echo "<pre>";
        print_r($contenuId3);
        echo '</pre>';
    }
    public function getRechercher(){
        $rechercher = $this->apiManager->getDBRechercher();
        // affichera les données (ss forme de tblx) de la table 
        echo "<pre>";
        print_r($rechercher); 
        echo '</pre>';
    }

    
    public function getUtilisateur(){
        $utilisateur = $this->apiManager->getDBUtilisateur();
        // affichera les données (ss forme de tblx) de la table 
        echo "<pre>";
        print_r($utilisateur); 
        echo '</pre>';
    }
}
