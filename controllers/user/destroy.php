<?php
include_once('../../database/User.php');
include_once('../../database/UserDAO.php');
$DAO = new UserDAO();
$id_user = $_POST['id_user'];

$result = $DAO->delete($id_user);

session_start();

if($result)
    $_SESSION["success"] = "User was created with successfully";
else
    $_SESSION["error"] = "Could not create this user.";

header('Location: http://localhost/dotimer/views/user/');

?>