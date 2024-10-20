<?php
   session_start();
   require_once 'auth.php';
   $cuser = new Auth();
   
   if(!isset($_SESSION['user'])){
    header('location:../../../index.php');
    die;
   }

   $cemail = $_SESSION['user'];

   $data = $cuser->currentUser($cemail);

   $cid = $data['id'];   
   $cfname = $data['fname'];
   $cphone = $data['phone'];
   $cpass = $data['password'];
   $cmodel = $data['model'];
   $crangee = $data['rangee'];
   $ccapacity = $data['capacity'];
   $cbalance = $data['balance'];
   
   $created = $data['created_at'];

   $reg_on = date('d M Y', strtotime($created));

   // $verified =$data['verified'];

   // To display only the fisrtname in a place where your fullname is required. then call it up using $fname instead of $cfname
   $fname = strtok($cfname, " ");

/* if($verified == 0){
      $verified = 'Not Verified!';
   }
   else{
      $verified = 'Verified!';
   } */
?>