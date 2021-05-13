<?php
require_once('DAO.php');

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

        $query = "INSERT INTO employes(cpf_number, card_id, first_name, last_name, phone_number, email, password, hour_price, monthly_salary) VALUES
                    ('{$cpf_number}', '{$card_id}', '{$first_name}', '{$last_name}', '{$phone_number}', '{$email}', '{$password}', '{$hour_price}', '{$monthly_salary}')";

        return mysqli_query($this->connection->getConnection(), $query);
        
    }

    public function retrieve()
    {
        $query = "SELECT * from employes";

        $employes = array();
        $result = mysqli_query($this->connection->getConnection(), $query);

        while ($row = mysqli_fetch_assoc($result)) {
            array_push($employes, $row);
        }
        
        return $employes;
    }

    public function find(int $id_employe)
    {
        $query = "SELECT * FROM employes WHERE id_employe = '{$id_employe}'";
       
        $result = mysqli_query($this->connection->getConnection(), $query);
        return mysqli_fetch_assoc($result);
    }

    public function findByCardID(string $card_id)
    {
        $query = "SELECT * FROM employes WHERE card_id = '{$card_id}'";
       
        $result = mysqli_query($this->connection->getConnection(), $query);
        return mysqli_fetch_assoc($result);
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

        $query = "UPDATE employes SET cpf_number = '{$cpf_number}', card_id = '{$card_id }', first_name = '{$first_name}', last_name = '{$last_name }', phone_number = '{$phone_number}', email = '{$email}', password = '{$password}', hour_price = '{$hour_price}', monthly_salary = '{$monthly_salary}' WHERE id_employe = '{$id_employe }'";
     
        return mysqli_query($this->connection->getConnection(), $query);
    }

}

?>