<?php 

include_once('../../database/Employe.php');
include_once('../../database/EmployeDAO.php');

$employe = new Employe();
$employe->setIDEmploye($_POST["id_employe"]);
$employe->setCpfNumber($_POST["cpf_number"]);
$employe->setCardID($_POST["card_id"]);
$employe->setFirstName($_POST["first_name"]);
$employe->setLastName($_POST["last_name"]);
$employe->setPhoneNumber($_POST["phone_number"]);
$employe->setEmail($_POST["email"]);
$employe->setPassword($_POST["password"]);
$employe->setHourPrice($_POST["hour_price"]);
$employe->setMonthlySalary($_POST["monthly_salary"]);

$DAO = new EmployeDAO();
$result = $DAO->update($employe);

session_start();

if($result)
    $_SESSION["warning"] = "Employe {$employe->getFirstName()} was updated with successfully";
else
    $_SESSION["error"] = "Could not update the employe {$employe->getFirstName()}";

header('Location: http://localhost/dotimer/views/employe/');

?>