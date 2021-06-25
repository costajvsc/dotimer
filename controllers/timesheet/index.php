<?php 

include_once('../../database/TimeSheetDAO.php');



function index()
{
    $DAO = new TimeSheetDAO();
    return $DAO->retrieve();
}

function daily()
{
    $DAO = new TimeSheetDAO();
    return $DAO->retrieveDaily();
}

?>