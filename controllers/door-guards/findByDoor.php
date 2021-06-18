<?php 

include_once('../../database/DoorGuardDAO.php');

function findByDoor(int $id_door)
{
    $DAO = new DoorGuardDAO();
    return $DAO->findByIDDoor($id_door);
}

?>