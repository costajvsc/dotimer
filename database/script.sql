CREATE DATABASE dotimer CHARACTER SET utf8 COLLATE utf8_general_ci;

USE dotimer;

CREATE TABLE employes(
    id_employe INT AUTO_INCREMENT,
    cpf_number CHAR(11),
    card_id CHAR(8),
    first_name VARCHAR(45),
    last_name VARCHAR(45),
    phone_number CHAR(14),
    email VARCHAR(45),
    password VARCHAR(255),
    hour_price DECIMAL(6, 2),
    monthly_salary DECIMAL(8, 2),
    PRIMARY KEY (id_employe, cpf_number, card_id)
);

CREATE TABLE time_sheet(
    id_time_sheet INT PRIMARY KEY AUTO_INCREMENT,
    clock_in DATETIME,
    note VARCHAR(100),
    id_employe INT,
    FOREIGN KEY(id_employe) REFERENCES employes(id_employe)
);


/*
    Data insert to test your database
    You can't add this data in yout database
*/

INSERT INTO employes(
    cpf_number,
    card_id,
    first_name,
    last_name,
    phone_number,
    email,
    password,
    hour_price,
    monthly_salary
) VALUES
('81757163638', 'E2G9M1C3' ,'João Victor', 'de Sousa da Costa', '5581982240228', 'costa.jvsc@gmail.com', '55A5E9E78207B4DF8699D60886FA070079463547B095D1A05BC719BB4E6CD251', '20.00', '4000.00'),
('25011708497', '1Z5KZ9U3' ,'Bárbara', 'Nicole Ribeiro', '5569996012338', 'barbara.nribeiro@gmail.com', '55A5E9E78207B4DF8699D60886FA070079463547B095D1A05BC719BB4E6CD251', '32.90', '5390.00'),
('07518192985', 'Q13FU7G5' ,'Evelyn', 'Sara da Silva', '5569996012338', 'evelynsaradasilva@dev.com', '55A5E9E78207B4DF8699D60886FA070079463547B095D1A05BC719BB4E6CD251', '17.50', '2540.00'),
('82236355009', 'S1J63CD2' ,'Julio', ' Gonçalves', '5561987572455', 'juliogoncalves@gruporedis.net', '55A5E9E78207B4DF8699D60886FA070079463547B095D1A05BC719BB4E6CD251', '54.33', '9310.50');