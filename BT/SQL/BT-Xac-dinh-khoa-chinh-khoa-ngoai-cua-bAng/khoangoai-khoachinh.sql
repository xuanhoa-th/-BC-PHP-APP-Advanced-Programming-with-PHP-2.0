
CREATE TABLE Customers(
customer_number INT(11) AUTO_INCREMENT PRIMARY KEY,
fullname VARCHAR(255),
address VARCHAR(255),
email VARCHAR(255),
phone INT
);
CREATE TABLE accounts(
account_number INT AUTO_INCREMENT PRIMARY KEY ,
account_type TEXT ,
date_start DATETIME,
balance FLOAT,
customer_number INT,
 FOREIGN KEY (customer_number) REFERENCES customers(customer_number)
);
CREATE TABLE Transactions(
 tran_number INT ,
 account_number INT AUTO_INCREMENT PRIMARY KEY,
 date_Transactions DATETIME,
 amounts FLOAT,
 descriptions TEXT,
 account_number INT,
 FOREIGN KEY (account_number) REFERENCES accounts(account_number)

);

