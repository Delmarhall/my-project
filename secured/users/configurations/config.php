<?php 

  class Database{

         private $dsn = "mysql:host=localhost;dbname=ev_calculator";
         private $dbuser = "root";
         private $dbpass = "";
        
         public $conn;

         public function __construct(){
             try{
               $this->conn = new PDO($this->dsn,$this->dbuser,$this->dbpass);
               
                //echo 'connected successfully to the database';
             
            }catch (PDOException $e){
                echo 'Error : '.$e->getMessage();
            }

            return $this->conn;
         }

         //check input
         public function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }

         //Error Success Message Alert
         public function showMessage($type, $message){
            return '<div class="alert alert-'.$type.' alert-dismissible">
                        <button type="button" class="close"
                          data-dismiss="alert">&times;</button>
                        <strong class="text-center">'.$message.'</strong>
                    </div>'; 
         }

    }
    //$ob = new Database();
?>