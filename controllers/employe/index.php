<?php 

include_once('../../database/EmployeDAO.php');


function index()
{
    $DAO = new EmployeDAO();
    return $DAO->retrieve();
}

?>