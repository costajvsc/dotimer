<?php 

include_once('../../database/User.php');
include_once('../../database/UserDAO.php');

$user = new User();
$user->setEmail($_POST["email"]);
$user->setPassword($_POST["password"]);

$DAO = new UserDAO();
$result = $DAO->create($user);

session_start();

if($result)
    $_SESSION["success"] = "User was created with successfully";
else
    $_SESSION["error"] = "Could not create this user.";

header('Location: http://localhost/dotimer/views/user/');

?>