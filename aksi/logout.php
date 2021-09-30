<?php
    session_start();
    //session_unset($_SESSION['backend_user']);
    //session_unset($_SESSION['backend_pass']);
    //session_unset($_SESSION['backend_level']);
    session_destroy();
    header("location:../login.php");  
?>