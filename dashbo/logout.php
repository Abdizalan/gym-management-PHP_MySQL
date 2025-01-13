<?php 
        session_start();
        session_destroy();
      //session_unset($_SESSION['secure']);
        //session_unset($_SESSION['username']);
        header("location:login.php");
 ?>