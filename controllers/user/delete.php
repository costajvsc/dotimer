<?php
include_once('../../database/User.php');
include_once('../../database/UserDAO.php');

$DAO = new UserDAO();
$id_user = $_POST['id_user'];

$result = $DAO->find($id_user);

session_start();

$_SESSION["user"] = $result;

header('Location: http://localhost/dotimer/views/user/delete.php');

?>