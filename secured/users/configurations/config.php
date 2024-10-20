<?php 

class Database{

    private $dsn = "mysql:host=localhost;dbname=ev_calculator";
    private $dbuser = "root";
    private $dbpass = "";

    public $conn;

    public function __construct(){
        try{
            $this->conn = new PDO($this->dsn, $this->dbuser, $this->dbpass);
            // Enable exceptions for error handling
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Call the createTable method to create the table when the connection is made
            $this->createTable();

        }catch (PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }

        return $this->conn;
    }

    // Method to create a table
    public function createTable(){
        try{
            $sql = "CREATE TABLE IF NOT EXISTS evcalculator (
                        id INT(11) AUTO_INCREMENT PRIMARY KEY,
                        fname VARCHAR(255) NOT NULL,
                        phone VARCHAR(20) NOT NULL,
                        email VARCHAR(100) NOT NULL,
                        password VARCHAR(255) NOT NULL,
                        model VARCHAR(100) NOT NULL,
                        rangee VARCHAR(100) NOT NULL,
                        capacity VARCHAR(100) NOT NULL,
                        balance VARCHAR(100) NOT NULL,
                        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        deleted TINYINT(4) DEFAULT 1
                      )";

            $this->conn->exec($sql);
            
        } catch (PDOException $e) {
            echo "Error creating table: " . $e->getMessage();
        }
    }

    // Check and sanitize input
    public function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Error Success Message Alert
    public function showMessage($type, $message){
        return '<div class="alert alert-'.$type.' alert-dismissible">
                    <button type="button" class="close"
                      data-dismiss="alert">&times;</button>
                    <strong class="text-center">'.$message.'</strong>
                </div>'; 
    }

}

?>