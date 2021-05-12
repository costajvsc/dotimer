<?php 

include_once('../../database/TimeSheet.php');
include_once('../../database/TimeSheetDAO.php');

$timesheet = new TimeSheet();
$timesheet->setIDTimeSheet($_POST["id_time_sheet"]);
$timesheet->setIDEmploye($_POST["id_employe"]);
$timesheet->setClockIn($_POST["clock_in"]);
$timesheet->setNote($_POST["note"]);

$DAO = new TimeSheetDAO();
$result = $DAO->update($timesheet);

session_start();

if($result)
    $_SESSION["success"] = "Time Sheet was update with successfully";
else
    $_SESSION["error"] = "Could not update the time sheet.";

header('Location: http://localhost/dotimer/views/timesheet/');

?>