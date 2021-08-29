
<?php
// bonsoir
// chemin ABSOLU | fichier index = routeur |
// Constante définie permettant de crer le chemin absolu pr l'acces à nos ressources (img, code etc)
// la constante URL sera remplacé par notre index.php avec devant hhtps / http suivi de mon API
define("URL", str_replace("index.php", "", (isset($SERVER['HTTPS']) ?  "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]")); //Modification de mon URL : http://localhost/...


require_once "controllers/front/APIController.php";
$apiController = new APIController(); // nouvelle instance pr utiliser les fonctions de la classe API 

try{
    if(empty($_GET['page'])){
        throw new  Exception("la page n'existe pas");
    } else{
        $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
        if(empty($url[0]) || empty($url[1]) || empty($url[2])) throw new  Exception("la page n'existe pas");//si le nombre de "dossiers" ne depasse pas 2 alors la page n'existe pas
        switch($url[0]){
            case "front" :
                switch($url[1]){
                    case "contenu":
                            //print '<td>'.$apiController->getContenu().'';
                                switch($url[2]){
                                case "1" :
                                    print '<tr><h1>ENEKATESTREAM</h1>';
                                    print '<td><h2>Présentation des données | id_contenu(1)</h2></tr>';
                                    print '<td>'.$apiController->getContenu1().'';
                                break;

                                case "2" :
                                    print '<tr><h1>ENEKATESTREAM</h1>';
                                    print '<td><h2>Présentation des données | id_contenu(2)</h2></tr>';
                                    print '<td>'.$apiController->getContenu2().'';
                                break;

                                case "3" :
                                    print '<tr><h1>ENEKATESTREAM</h1>';
                                    print '<td><h2>Présentation des données | id_contenu(3)</h2></tr>';
                                    print '<td>'.$apiController->getContenu3().'';
                                break;

                    case "rechercher":
                        print '<td>' .$apiController->getRechercher().'';
                    case "utilisateur":
                        print '<td>' .$apiController->getUtilisateur().'';
                    break;

                    default: throw new Exception("Cette page n'existe pas");
                }
            }
        
            break;
            case "back" : echo "page back end demandée";
            break;
            default: throw new Exception("Cette page n'existe pas");
        }
    }
}

catch(Exception $e){
    $msg = $e->getMessage();
    echo $msg;
}

?>


                    
                    
                   
               
                
                   
    
