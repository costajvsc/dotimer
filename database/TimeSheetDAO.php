<?php 
require_once('DAO.php');

class TimeSheetDAO extends DAO
{
    public function create(TimeSheet $time_sheet) 
    {
        $clock_in = $time_sheet->getClockIn();
        $note = $time_sheet->getNote();
        $id_employe = $time_sheet->getIDEmploye();

        $query = "INSERT INTO time_sheet(clock_in, note, id_employe) VALUES ('{$clock_in}', '{$note}', '{$id_employe}')";
        
        return mysqli_query($this->connection->getConnection(), $query);
    }

    public function retrieve()
    {
        $query = "SELECT * FROM time_sheet";

        $time_sheet = array();
        $result = mysqli_query($this->connection->getConnection(), $query);

        while ($row = mysqli_fetch_assoc($result)) {
            array_push($time_sheet, $row);
        }
        
        return $time_sheet;
    }

    public function find(int $id_time_sheet)
    {
        $query = "SELECT * FROM time_sheet WHERE id_time_sheet = '{$id_time_sheet}'";
        
        $result = mysqli_query($this->connection->getConnection(), $query);
        return mysqli_fetch_assoc($result);
    }

    public function update(TimeSheet $time_sheet)
    {
        $id_time_sheet = $time_sheet->getIDTimeSheet();
        $clock_in = $time_sheet->getClockIn();
        $note = $time_sheet->getNote();

        $query = "UPDATE INTO time_sheet(clock_in, note) VALUES ('{$clock_in}', '{$note}') WHERE id_time_sheet = {$id_time_sheet}";
        return mysqli_query($this->connection->getConnection(), $query);
    }

    public function delete(int $id_time_sheet)
    {
        $query = "DELETE FROM time_sheet WHERE id_time_sheet = '{$id_time_sheet}'";

        return mysqli_query($this->connection->getConnection(), $query);
    }
}
?>