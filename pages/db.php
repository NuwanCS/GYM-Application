<?php
class Database{
   
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "db_rathnayakagyms";
    private $username = "root";
    private $password = "";
    public $conn;
   
    // get the database connection
    public function getConnection(){
   
        $this->conn = null;
   
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
   
        return $this->conn;
    }
}

// $serveName = "localhost";
// $userName = "root";
// $password = "";
// $dbName = "db_rathnayakagyms";

// $conn = new mysqli($serveName, $userName, $password, $dbName);

// //check connection
// if($conn-> connect_error){
//     die("Connectin failed" . $conn -> connect_error);
// }

?>



