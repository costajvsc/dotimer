<?php 

include_once('../../database/DoorDAO.php');


function index()
{
    $DAO = new DoorDAO();
    return $DAO->retrieve();
}

?>