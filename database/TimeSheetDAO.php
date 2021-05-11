<?php 
require_once('./DAO');

class TimeSheetDAO extends DAO
{
    public function create(TimeSheet $time_sheet) 
    {
        $clock_in = $time_sheet->getClockIn();
        $note = $time_sheet->getNote();
        $id_employe = $time_sheet->getIDEmploye();

        $query = "INSERT INTO time_sheet(clock_in, note, id_employe,) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare(this->connection->getConnection(), $query);
        mysqli_stmt_bind_param($stmt, 'ssi', $clock_in, $note, $id_employe);

        $result = mysqli_stmt_execute($stmt); 
        mysqli_stmt_close($stmt);

        return $result;
    }

    public function retriever()
    {
        
    }

    public function find(int $id_time_sheet)
    {
        $query = "SELECT * FROM time_sheet WHERE id_time_sheet = ?";
        
        $stmt = mysqli_prepare(this->connection->getConnection(), $query);
        mysqli_stmt_bind_param($stmt, 'i', $id_time_sheet);

        $result = mysqli_stmt_execute($stmt); 
        mysqli_stmt_close($stmt);

        return $result;
    }

    public function update(TimeSheet $time_sheet)
    {
        $id_time_sheet = $time_sheet->getIDTimeSheet();
        $clock_in = $time_sheet->getClockIn();
        $note = $time_sheet->getNote();

        $query = "UPDATE INTO time_sheet(clock_in, note,) VALUES (?, ?) WHERE id_time_sheet = ?";
        $stmt = mysqli_prepare(this->connection->getConnection(), $query);
        mysqli_stmt_bind_param($stmt, 'ssi', $clock_in, $note, $id_time_sheet);

        $result = mysqli_stmt_execute($stmt); 
        mysqli_stmt_close($stmt);

        return $result;
    }

    public function delete(int $id_time_sheet)
    {
        $query = "DELETE FROM time_sheet WHERE id_time_sheet = ?";
        
        $stmt = mysqli_prepare(this->connection->getConnection(), $query);
        mysqli_stmt_bind_param($stmt, 'i', $id_time_sheet);

        $result = mysqli_stmt_execute($stmt); 
        mysqli_stmt_close($stmt);

        return $result;
    }
}
?>