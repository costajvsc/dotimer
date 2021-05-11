<?php 

include_once('../../database/Employe.php');
include_once('../../database/EmployeDAO.php');

$employe = new Employe();
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
$result = $DAO->create($employe);

session_start();

if($result)
    $_SESSION["success"] = "Employe {$employe->getFirstName()} was created with successfully";
else
    $_SESSION["error"] = "Could not create the employe {$employe->getFirstName()}";

header('Location: http://localhost/dotimer/views/employe/');

?>