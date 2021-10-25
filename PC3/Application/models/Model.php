<!-- <?php
    $servername = "localhost";
    $username = "enekatestream";
    $password = "enekatestream33";
    $dbname = "enekatestream";

    $pdo = new mysqli( $servername, $username, $password, $dbname);
    if($pdo->connect_error) {
        die("Connection Failed" . $pdo->connect_error);
    }?> -->

<?php
abstract class Model {
    private static $pdo;

    private static function setBdd(){
        self::$pdo = new PDO("mysql:host=localhost;dbname=projetraspberry;charset=utf8","root","");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }

    protected function getBdd(){
        if(self::$pdo === null){
            self::setBdd();
        }
        return self::$pdo;
    }

    public static function sendJSON(
        $info
        ){
        header('Access-Control-Allow-Origin: *');
        // header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        // header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
        header('Access-Control-Allow-Credentials: true');
      
       header('Content-Type: application/json');
      echo json_encode($info);  
    }
}