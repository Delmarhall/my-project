<?php
/*
  require_once 'session.php';

  //Handle Change Password Ajax Request
  if(isset($_POST['action']) && $_POST['action'] == 'change_pass'){
    $currentPass = $_POST['curpass'];
    $newPass = $_POST['newpass'];
    $cnewPass = $_POST['cnewpass'];

    $hnewPass = password_hash($newPass, PASSWORD_DEFAULT);

    if($newPass != $cnewPass){
      echo $cuser->showMessage('danger','Password did not match!');
    }
    else{
      if(password_verify($currentPass, $cpass)){
        $cuser->change_password($hnewPass,$cid);
        echo $cuser->showMessage('success','Password Changed Successfully!');
      }
      else{
        echo $cuser->showMessage('danger','Currrent Password is incorrect!');
      }
    }
  } */
?>