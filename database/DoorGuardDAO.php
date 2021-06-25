<?php 
require_once('DAO.php');

class DoorGuardDAO extends DAO
{
    public function create(DoorGuard $door_guard) 
    {
        
        $id_employe = $door_guard->getIDEmploye();
        $id_door = $door_guard->getIDDoor();

        $query = "INSERT INTO door_guards(id_employe, id_door) VALUES ('{$id_employe}', '{$id_door}')";
        
        return mysqli_query($this->connection->getConnection(), $query);
    }

    public function retrieve()
    {
        $query = "SELECT * FROM door_guards";

        $door_guards = array();
        $result = mysqli_query($this->connection->getConnection(), $query);

        while ($row = mysqli_fetch_assoc($result)) {
            array_push($door_guards, $row);
        }
        
        return $door_guards;
    }

    public function find(int $id_door_guard)
    {
        $query = "SELECT 
                        door_guards.*, 
                        employes.first_name, 
                        doors.door_name
                    FROM door_guards 
                    JOIN doors on doors.id_door = door_guards.id_door
                    JOIN employes on employes.id_employe = door_guards.id_employe
                    WHERE id_door_guards = '{$id_door_guard}'";
        
        $result = mysqli_query($this->connection->getConnection(), $query);
        return mysqli_fetch_assoc($result);
    }

    public function findByIDDoor(int $id_door)
    {
        $query = "SELECT 
                    door_guards.*, 
                    employes.first_name,   
                    doors.door_name
                FROM door_guards
                JOIN doors on doors.id_door = door_guards.id_door
                JOIN employes on employes.id_employe = door_guards.id_employe
                WHERE door_guards.id_door = '{$id_door}'";
        
        $door_guards = array();
        $result = mysqli_query($this->connection->getConnection(), $query);
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($door_guards, $row);
        }
        
        return $door_guards;
    }

    public function update(DoorGuard $door_guard)
    {
        $id_door_guard = $door_guard->getIDDoorGuard();
        $id_employe = $door_guard->getIDEmploye();
        $id_door = $door_guard->getIDDoor();

        $query = "UPDATE door_guards SET id_employe = '{$id_employe}', id_door = '{$id_door}' WHERE id_door_guard = '{$id_door_guard}'";

        return mysqli_query($this->connection->getConnection(), $query);
    }

    public function delete(int $id_door_guard)
    {
        $query = "DELETE FROM door_guards WHERE id_door_guards = '{$id_door_guard}'";
        return mysqli_query($this->connection->getConnection(), $query);
    }

    public function getGuard($card_id, $id_door)
    {
        $query = "SELECT 
                        * 
                    FROM door_guards 
                    JOIN doors on doors.id_door = door_guards.id_door
                    JOIN employes on employes.id_employe = door_guards.id_employe
                    WHERE doors.id_door = '{$id_door}' AND employes.card_id = '{$card_id}'";
        
        $result = mysqli_query($this->connection->getConnection(), $query);
        return mysqli_fetch_assoc($result);
    }
}

?>