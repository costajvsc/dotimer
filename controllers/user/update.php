<?php 

include_once('../../database/User.php');
include_once('../../database/UserDAO.php');

$user = new User();
$user->setIDUser($_POST["id_user"]);
$user->setEmail($_POST["email"]);
$user->setPassword($_POST["password"]);

$DAO = new UserDAO();
$result = $DAO->update($user);

session_start();

if($result)
    $_SESSION["success"] = "User was update with successfully";
else
    $_SESSION["error"] = "Could not update this user.";

header('Location: http://localhost/dotimer/views/user/');

?>