<?php session_start();
class Database{
 
    public $conn;
 
    // get the database connection
    public function getConnection(){
        $configData = parse_ini_file(__DIR__.'/config.ini');
        $this->conn = null;
 
        try{
            $this->conn = new PDO(
            "mysql:host={$configData['DB_HOST']};dbname={$configData['DB_NAME']};charset=utf8",
            $configData['DB_USERNAME'],
            $configData['DB_PASSWORD'],
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) // Affiche les erreurs SQL à l'écran
            );
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
