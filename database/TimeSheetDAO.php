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

    private function getNoteType(string $id_employe) : string {
        $today = date("Y-m-d");
        
        $query = "SELECT COUNT(*) FROM time_sheet WHERE id_employe = '{$id_employe}' AND clock_in LIKE '{$today}%'";
         
        $result = mysqli_query($this->connection->getConnection(), $query);
        $result = mysqli_fetch_assoc($result);
        return $result["COUNT(*)"];
    }

    public function clock_in(string $id_employe) 
    {
        $clock_in = date("Y-m-d H:i:s");
        $note = $this->getNoteType($id_employe) % 2 == 0 ? "Work in" : "Work out";

        $query = "INSERT INTO time_sheet(clock_in, note, id_employe) VALUES ('{$clock_in}', '{$note}', '{$id_employe}')";
        return mysqli_query($this->connection->getConnection(), $query);
    }

    public function retrieve()
    {
        $query = "SELECT 
                    time_sheet.*, employes.first_name, employes.last_name
                    FROM time_sheet JOIN employes ON time_sheet.id_employe = employes.id_employe";

        $time_sheet = array();
        $result = mysqli_query($this->connection->getConnection(), $query);

        while ($row = mysqli_fetch_assoc($result)) {
            array_push($time_sheet, $row);
        }
        
        return $time_sheet;
    }

    public function find(int $id_time_sheet)
    {
        $query = "SELECT 
                    time_sheet.*, employes.first_name, employes.last_name
                    FROM time_sheet JOIN employes ON time_sheet.id_employe = employes.id_employe
                    WHERE id_time_sheet = '{$id_time_sheet}'";
        
        $result = mysqli_query($this->connection->getConnection(), $query);
        return mysqli_fetch_assoc($result);
    }

    public function update(TimeSheet $time_sheet)
    {
        $id_time_sheet = $time_sheet->getIDTimeSheet();
        $id_employe = $time_sheet->getIDEmploye();
        $clock_in = $time_sheet->getClockIn();
        $note = $time_sheet->getNote();

        $query = "UPDATE time_sheet SET id_employe = '{$id_employe}', clock_in = '{$clock_in}', note = '{$note}' WHERE id_time_sheet = '{$id_time_sheet}'";

        return mysqli_query($this->connection->getConnection(), $query);
    }

    public function delete(int $id_time_sheet)
    {
        $query = "DELETE FROM time_sheet WHERE id_time_sheet = '{$id_time_sheet}'";

        return mysqli_query($this->connection->getConnection(), $query);
    }
}
?>