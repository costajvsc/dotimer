<?php
    session_start();
    if(isset($_SESSION["login"])){
        unset ($_SESSION["login"]);
        $_SESSION["logout"] = "You are logout";
        header('Location: http://localhost/dotimer/views/login.php');
    }
    else{
        header('Location: http://localhost/dotimer/views/login.php');
    }
?>