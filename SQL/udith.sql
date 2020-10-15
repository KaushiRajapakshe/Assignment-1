create database id15088001_udith_databasename;

CREATE TABLE `id14926292_udith_databasename`.`carers` (
	customer_id INT(10) PRIMARY KEY NOT NULL, 
	PIN LONGBLOB NOT NULL, 
	given_name VARCHAR(30) NOT NULL, 
	family_name VARCHAR(30) NOT NULL
);


CREATE TABLE `id14926292_udith_databasename`.`child` (
	child_id  INT PRIMARY KEY AUTO_INCREMENT,
	given_name VARCHAR(30) NOT NULL, 
	family_name VARCHAR(30) NOT NULL,
    date_of_birth  DATE NOT NULL,
    gender CHAR(1) NOT NULL,
    daily_message VARCHAR(100),
    carer_phone_number INT(10) NOT NULL,
    FOREIGN KEY (carer_phone_number) REFERENCES carers(customer_id)
);


INSERT INTO `id14926292_udith_databasename`.`carers` (customer_id, PIN, given_name, family_name) VALUES (0717925432, PASSWORD(1234), 'Manasha', 'Androo');
INSERT INTO `id14926292_udith_databasename`.`carers` (customer_id, PIN, given_name, family_name) VALUES (0777925432, PASSWORD(5678), 'Kaushi', 'Mandori');
INSERT INTO `id14926292_udith_databasename`.`carers` (customer_id, PIN, given_name, family_name) VALUES (0700925412, PASSWORD(1289), 'Jhone', 'Smith');
INSERT INTO `id14926292_udith_databasename`.`carers` (customer_id, PIN, given_name, family_name) VALUES (0787920032, PASSWORD(3456), 'Pasan', 'Liyanage');
INSERT INTO `id14926292_udith_databasename`.`carers` (customer_id, PIN, given_name, family_name) VALUES (0117925932, PASSWORD(1290), 'Beny', 'Pool');

INSERT INTO `id14926292_udith_databasename`.`child` (given_name, family_name, date_of_birth, gender, daily_message, carer_phone_number) VALUES 
('Kaushi', 'Rajapakshe', '1998-7-04', 'F', 'How are You', 0717925432);
INSERT INTO `id14926292_udith_databasename`.`child` (given_name, family_name, date_of_birth, gender, daily_message, carer_phone_number) VALUES 
('Udith', 'Loku', '2008-7-04', 'F', 'I am doing good', 0777925432);
INSERT INTO `id14926292_udith_databasename`.`child` (given_name, family_name, date_of_birth, gender, daily_message, carer_phone_number) VALUES 
('Jhone', 'Harisan', '1978-7-04', 'F', 'Good Morning', 0700925412);
INSERT INTO `id14926292_udith_databasename`.`child` (given_name, family_name, date_of_birth, gender, daily_message, carer_phone_number) VALUES 
('Donal', 'Trump', '1956-7-04', 'F', 'How are You', 0787920032);
INSERT INTO `id14926292_udith_databasename`.`child` (given_name, family_name, date_of_birth, gender, daily_message, carer_phone_number) VALUES 
('Wilium', 'Gopal', '1975-7-04', 'F', 'How are You', 0117925932);


select * from `id14926292_udith_databasename`.`child`