CREATE TABLE users (
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50) NOT NULL,
	email VARCHAR(50) UNIQUE,
	password VARCHAR(50) UNIQUE,
	address VARCHAR(255),
	avata VARCHAR(255),
	role VARCHAR(50),
	phone INT(11) UNIQUE
);

CREATE TABLE students (
code INT(11) AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
birthday DATETIME ,
address VARCHAR(255),
email VARCHAR(50) UNIQUE,
phone INT(11) UNIQUE,
image VARCHAR(255)

);

CREATE TABLE brorrow(
id INT AUTO_INCREMENT PRIMARY KEY,
brorrow_date DATETIME,
return_date DATETIME,
expected_return_date DATETIME,
 student_id

);
CREATE TABLE book_borrow(
book_id INT(11),
brorrow_id INT(11)
);