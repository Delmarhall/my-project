<?php    
   session_start();

   require_once 'auth.php';
   $user = new Auth();

   //Handle Registration Ajax Request
   if(isset($_POST['action']) && $_POST['action'] == 'register'){
     $fname = $user->test_input($_POST['fname']);
     $phone = $user->test_input($_POST['phone']);
     $email = $user->test_input($_POST['email']);
     $model = $user->test_input($_POST['model']);
     $rangee = $user->test_input($_POST['rangee']);
     $capacity = $user->test_input($_POST['capacity']);
     $balance = $user->test_input($_POST['balance']);
     $pass = $user->test_input($_POST['password']);     

     $hpass = password_hash($pass, PASSWORD_DEFAULT);

     if($user->user_exist($email)){
        echo $user->showMessage('warning','This E-mail is already registered!');
     }
     else{
        if($user->register($fname,$phone,$email,$model,$rangee,$capacity,$balance,$hpass)){
          echo 'register';
          $_SESSION['user'] = $email;
        }
        else{
            echo $user->showMessage('danger','something went wrong! try again later!');
        }
     }
   }

   //Handle Login Ajax Request
   if(isset($_POST['action']) && $_POST['action'] == 'login'){
      $email = $user->test_input($_POST['email']);
      $pass = $user->test_input($_POST['password']);

      $loggedInUser = $user->login($email);

      if($loggedInUser != null){
         if(password_verify($pass, $loggedInUser['password'])){
            if(!empty($_POST['rem'])){
               setcookie("email", $email, time()+(30+24+60+60), '/');
               setcookie("password", $pass, time()+(30+24+60+60), '/');
            }
            else{
               setcookie('email',"",1, '/');
               setcookie('password',"",1, '/');
            }

            echo 'login';
            $_SESSION['user'] = $email;
         }
         else{
            echo $user->showMessage('danger','Password is incorrect!');
         }
      }
      else{
         echo $user->showMessage('danger','User not found');
      }
   }

?>