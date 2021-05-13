<?php
require_once('../database/EmployeDAO.php');
require_once('../database/TimeSheetDAO.php');

$id_card = $_GET["id_card"];

$employeDAO = new EmployeDAO();
$timeSheetDAO = new TimeSheetDAO();
$employe = $employeDAO->findByCardID($id_card);

if(!is_null($employe)){
    $id_employe =  $employe['id_employe'];
    $timeSheetDAO->clock_in($id_employe);
}

?>