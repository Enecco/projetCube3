
<?php
// CA FONCTIONNE BIENNNNN pour sur
// chemin ABSOLU | fichier index = routeur |
// Constante définie permettant de crer le chemin absolu pr l'acces à nos ressources (img, code etc)
// la constante URL sera remplacé par notre index.php avec devant hhtps / http suivi de mon API
define("URL", str_replace("routes.php", "", (isset($SERVER['HTTPS']) ?  "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]")); //Modification de mon URL : http://localhost/...
?>


                    
                    
                   
               
                
                   
    
