<?php 

include_once('../../database/UserDAO.php');


function index()
{
    $DAO = new UserDAO();
    return $DAO->retrieve();
}

?>