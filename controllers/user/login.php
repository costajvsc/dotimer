<?php
include_once('../../database/User.php');
include_once('../../database/UserDAO.php');

$DAO = new UserDAO();
$user = new User();
$user->setEmail($_POST['email']);
$user->setPassword($_POST['password']);

$result = $DAO->tryLogin($user);

session_start();

if(!is_null($result)){
    $_SESSION["login"] = $result;
    header('Location: http://localhost/dotimer/views/timesheet/');
}
else{
    $_SESSION["fail_login"] = "Could not login into system.";
    header('Location: http://localhost/dotimer/views/login.php');
}
    
?>