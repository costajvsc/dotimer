<?php
require_once('./DAO');

class EmployeDAO extends DAO
{
    public function create(Employe $employe)
    {
        $cpf_number = $employe->getCpfNumber();
        $card_id = $employe->getCardID();
        $first_name = $employe->getFirstName();
        $last_name = $employe->getLastName();
        $phone_number = $employe->getPhoneNumber();
        $email = $employe->getEmail();
        $password = $employe->getPassword();
        $hour_price = $employe->getHourPrice();
        $monthly_salary = $employe->getMonthlySalary();

        $query = "INSERT INTO employe(cpf_number, card_id, first_name, last_name, phone_number, email, password, hour_price, monthly_salary) VALUES
                    (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = mysqli_prepare(this->connection->getConnection(), $query);
        mysqli_stmt_bind_param($stmt, 'sssssssdd', $cpf_number, $card_id, $first_name, $last_name, $phone_number, $email, $password, $hour_price, $monthly_salary);

        $result = mysqli_stmt_execute($stmt); 
        mysqli_stmt_close($stmt);

        return $result;
    }

    //[TODO]
    public function retrieve(Employe $employe)
    {
        $query = "SELECT * from employe";
        
        $stmt = mysqli_prepare(this->connection->getConnection(), $query);
        
        // if(mysqli_stmt_execute($stmt)){
        //     $result = mysqli_stmt_get_result($stmt);

        //     if(mysqli_num_rows($result) == 1){
        //         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
        //         $id_employe = $row["id_employe"];
        //         $cpf_number = $row["cpf_number"];
        //         $card_id = $row["card_id"];
        //         $first_name = $row["first_name"];
        //         $last_name = $row["last_name"];
        //         $phone_number = $row["phone_number"];
        //         $email = $row["email"];
        //         $password = $row["password"];
        //         $hour_price = $row["hour_price"];
        //         $monthly_salary = $row["monthly_salary"];

        //     }

        // }
    }

    public function find(int $id_employe)
    {
        $query = "SELECT * FROM employe WHERE id_employe = ?";
        
        $stmt = mysqli_prepare(this->connection->getConnection(), $query);
        mysqli_stmt_bind_param($stmt, 'i', $id_employe);

        $result = mysqli_stmt_execute($stmt); 
        mysqli_stmt_close($stmt);

        return $result;
    }

    public function update(Employe $employe)
    {
        $id_employe = $employe->getIDEmploye();
        $cpf_number = $employe->getCpfNumber();
        $card_id = $employe->getCardID();
        $first_name = $employe->getFirstName();
        $last_name = $employe->getLastName();
        $phone_number = $employe->getPhoneNumber();
        $email = $employe->getEmail();
        $password = $employe->getPassword();
        $hour_price = $employe->getHourPrice();
        $monthly_salary = $employe->getMonthlySalary();

        $query = "UPDATE employe SET cpf_number = ?, card_id = ?, first_name = ?, last_name = ?, phone_number = ?, email = ?, password = ?, hour_price = ?, monthly_salary = ? WHERE id_employe = ?";
        
        $stmt = mysqli_prepare(this->connection->getConnection(), $query);
        mysqli_stmt_bind_param($stmt, 'sssssssddi', $cpf_number, $card_id, $first_name, $last_name, $phone_number, $email, $password, $hour_price, $monthly_salary, $id_employe);

        $result = mysqli_stmt_execute($stmt); 
        mysqli_stmt_close($stmt);

        return $result;
    }

}

?>