<?php
include_once('../../database/Employe.php');
include_once('../../database/EmployeDAO.php');
$DAO = new EmployeDAO();
$id_employe = $_POST['id_employe'];

$result = $DAO->find($id_employe);

session_start();

$_SESSION["employe"] = $result;

header('Location: http://localhost/dotimer/views/employe/edit.php');
?>