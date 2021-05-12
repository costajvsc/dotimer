<?php
include_once('../../database/TimeSheet.php');
include_once('../../database/TimeSheetDAO.php');
$DAO = new TimeSheetDAO();
$id_time_sheet = $_POST['id_time_sheet'];

$result = $DAO->delete($id_time_sheet);

session_start();

if($result)
    $_SESSION["success"] = "Time Sheet was created with successfully";
else
    $_SESSION["error"] = "Could not create the time sheet.";

header('Location: http://localhost/dotimer/views/timesheet/');

?>