<?php
class Employe {
    private $id_employe;
    private $cpf_number;
    private $card_id;
    private $first_name;
    private $last_name;
    private $phone_number;
    private $email;
    private $password;
    private $hour_price;
    private $monthly_salary;

    public function getIDEmploye() : int
    {
        return $this->id_employe;
    }

    public function setIDEmploye(int $id_employe) : void
    {
        $this->id_employe = $id_employe;
    }

    public function getCpfNumber() : string
    {
        return $this->cpf_number;
    }

    public function setCpfNumber(string $cpf_number) : void
    {
        $this->cpf_number = $cpf_number;
    }

    public function getCardID() : string
    {
        return $this->card_id;
    }

    public function setCardID(string $card_id) : void
    {
        $this->card_id = $card_id;
    }

    public function getFirstName() : string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name) : void
    {
        $this->first_name = $first_name;
    }

    public function getLastName() : string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name) : void
    {
        $this->last_name = $last_name;
    }

    public function getPhoneNumber() : string
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phone_number) : void
    {
        $this->phone_number = $phone_number;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }

    public function getPassword() : string
    {
        return $this->password;
    }

    public function setPassword(string $password) : void
    {
        $this->password = $password;
    }
    
    public function getHourPrice() : string
    {
        return $this->hour_price;
    }

    public function setHourPrice(string $hour_price) : void
    {
        $this->hour_price = $hour_price;
    }

    public function getMonthlySalary() : string
    {
        return $this->monthly_salary;
    }

    public function setMonthlySalary(string $monthly_salary) : void
    {
        $this->monthly_salary = $monthly_salary;
    }
}

?>