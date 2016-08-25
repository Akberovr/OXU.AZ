<?php
session_start();
      $mail = $_POST['email'];
      $password = $_POST['password'];
      $_SESSION['checklog'] = false;
      if(isset($_POST['button'])){
        if(!empty($mail) && !empty($password) && $mail=='a@b.com' && $password==1){
          $_SESSION['checklog'] = true;
            header('Location:admin.php');
        }else{
          header('Location:login.php');
          $_SESSION['errormsj'] = "Yalnish e-mail & parol";
        }
      }else{
        header('Location:login.php');
      }

 ?>
