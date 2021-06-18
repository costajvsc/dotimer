<?php
class DoorGuard {
    private $id_door_guards;
    private $id_employe;
    private $id_door;

    public function getIDDoorGuard() : int
    {
        return $this->id_door_guards;
    }

    public function setIDDoorGuard(int $id_door_guards) : void
    {
        $this->id_door_guards = $id_door_guards;
    }

    public function getIDDoor() : int
    {
        return $this->id_door;
    }

    public function setIDDoor(int $id_door) : void
    {
        $this->id_door = $id_door;
    }

    public function getIDEmploye() : int
    {
        return $this->id_employe;
    }

    public function setIDEmploye(string $id_employe) : void
    {
        $this->id_employe = $id_employe;
    }
}
?>