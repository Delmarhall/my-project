<?php

  require_once 'config.php';

  class Auth extends Database {

    //Register New User
    public function register($fname, $phone, $email, $model, $rangee, $capacity, $balance, $password){
      $sql = "INSERT INTO evcalculator (fname, phone, email, model, rangee, capacity, balance, password) VALUES (:fname, :phone, :email, :model, :rangee, :capacity, :balance, :pass)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['fname'=>$fname, 'phone'=>$phone, 'email'=>$email, 'model'=>$model, 'rangee'=>$rangee, 'capacity'=>$capacity, 'balance'=>$balance, 'pass'=>$password]);

      return true;
    }

    //check if user is already registered
    public function user_exist($email){
        $sql = "SELECT email FROM evcalculator WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email'=>$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    //Login Existing user
    public function login($email){
        $sql = "SELECT email, password FROM evcalculator WHERE email = :email AND deleted != 0";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email'=>$email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    //current user in session
    public function currentUser($email){
        $sql = "SELECT * FROM evcalculator WHERE email = :email AND deleted != 0";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email'=>$email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }






    //change password of a user
   /* public function change_password($pass,$id){
        $sql = "UPDATE evcalculator SET password = :pass WHERE id = :id AND deleted != 0";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['pass'=>$pass, 'id'=>$id]);
        return true;
    }*/

  }
    
?>