<?php
include_once('../../database/TimeSheet.php');
include_once('../../database/TimeSheetDAO.php');
$DAO = new TimeSheetDAO();
$id_time_sheet = $_POST['id_time_sheet'];

$result = $DAO->find($id_time_sheet);

session_start();

$_SESSION["time_sheet"] = $result;

header('Location: http://localhost/dotimer/views/timesheet/edit.php');

?>