<?php
class TimeSheet{
    private $id_time_sheet;
    private $clock_in;
    private $note;
    private $id_employe;

    public function getIDTimeSheet() : int
    {
        return $this->id_time_sheet;
    }

    public function setIDTimeSheet(int $id_time_sheet) : void
    {
        $this->id_time_sheet = $id_time_sheet;
    }

    public function getClockIn() : string
    {
        return $this->clock_in;
    }

    public function setClockIn(string $clock_in) : void
    {
        $this->clock_in = $clock_in;
    }

    public function getNote() : string
    {
        return $this->note;
    }

    public function setNote(string $note) : void
    {
        $this->note = $note;
    }

    public function getIDEmploye() : int
    {
        return $this->id_employe;
    }

    public function setIDEmploye(int $id_employe) : void
    {
        $this->id_employe = $id_employe;
    }

}
?>