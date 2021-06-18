<?php 
require_once('DAO.php');

class DoorDAO extends DAO
{
    public function create(Door $door) 
    {
        $door_name = $door->getDoorName();

        $query = "INSERT INTO doors(door_name) VALUES ('{$door_name}')";
        
        return mysqli_query($this->connection->getConnection(), $query);
    }

    public function retrieve()
    {
        $query = "SELECT * FROM doors";

        $doors = array();
        $result = mysqli_query($this->connection->getConnection(), $query);

        while ($row = mysqli_fetch_assoc($result)) {
            array_push($doors, $row);
        }
        
        return $doors;
    }

    public function find(int $id_door)
    {
        $query = "SELECT * FROM doors WHERE id_door = '{$id_door}'";
        
        $result = mysqli_query($this->connection->getConnection(), $query);
        return mysqli_fetch_assoc($result);
    }

    public function update(Door $door)
    {
        $id_door = $door->getIDDoor();
        $door_name = $door->getDoorName();

        $query = "UPDATE doors SET door_name = '{$door_name}' WHERE id_door = '{$id_door}'";

        return mysqli_query($this->connection->getConnection(), $query);
    }

    public function delete(int $id_door)
    {
        $query = "DELETE FROM doors WHERE id_door = '{$id_door}'";

        return mysqli_query($this->connection->getConnection(), $query);
    }
}
?>