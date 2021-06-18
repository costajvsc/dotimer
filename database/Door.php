<?php
class Door {
    private $id_door;
    private $door_name;

    public function getIDDoor() : int
    {
        return $this->id_door;
    }

    public function setIDDoor(int $id_door) : void
    {
        $this->id_door = $id_door;
    }

    public function getDoorName() : string
    {
        return $this->door_name;
    }

    public function setDoorName(string $door_name) : void
    {
        $this->door_name = $door_name;
    }
}
?>