<?php
session_start();
if(!isset($_SESSION["login"])){
    header('Location: http://localhost/dotimer/views/login.php');
}

?>