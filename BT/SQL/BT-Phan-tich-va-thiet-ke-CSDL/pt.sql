CREATE TABLE customers(
	customerNumber INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	customerName VARCHAR(50) NOT NULL,
	contactLastName VARCHAR(50) NOT NULL,
	contactFirstName VARCHAR(50) NOT NULL,
	phone VARCHAR(50) NOT NULL,
	addressLine1 VARCHAR(50) NOT NULL,
	addressLine2 VARCHAR(50),
	city VARCHAR(50) NOT NULL,
	state  VARCHAR(50) NOT NULL,
	postalCode  VARCHAR(15) NOT NULL,
	country VARCHAR(50) NOT NULL,
	creditLimit  INT,
	officeCode INT,

);
CREATE TABLE orders(
	orderNumber INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	orderDate DATETIME NOT NULL,
	requiredDate DATETIME NOT NULL,
	shippedDate DATETIME NULL,
	status VARCHAR(15) NOT NULL,
	comments TEXT ,
	quantityOrdered INT NOT NULL,
	priceEach FLOAT NOT NULL,
	customerNumber INT,

	FOREIGN KEY (customerNumber) REFERENCES customers(customerNumber)
);
CREATE TABLE payments(
	customerNumber INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	checkNumber  VARCHAR(50) NOT NULL,
	paymentDate DATETIME NOT NULL,
	amount  FLOAT NOT NULL,
	customerNumber INT,
	salesRepEmployeeNumber INT,

	FOREIGN KEY (salesRepEmployeeNumber) REFERENCES employees(employeeNumber),
	FOREIGN KEY (salesRepEmployeeNumber) REFERENCES customers(customerNumber),

	FOREIGN KEY (customerNumber) REFERENCES customers(customerNumber)
	
);
CREATE TABLE OrderDetails(
	productCode VARCHAR(15),
	ordernumber INT,

	FOREIGN KEY (productCode) REFERENCES products(productCode),
	FOREIGN KEY (ordernumber) REFERENCES orders(orderNumber)
	
);
CREATE TABLE products(
	productCode VARCHAR(15) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	productName  VARCHAR(70) NOT NULL,
	productScale  VARCHAR(10) NOT NULL,
	productVendor VARCHAR(50) NOT NULL,
	productDescription TEXT NOT NULL,
	quantityInStock INT NOT NULL,
	buyPrice INT NOT NULL,
	MSRP  INT NOT NULL,
	productLine VARCHAR(50),

	FOREIGN KEY (productLine) REFERENCES productlines(productLine)
);
CREATE TABLE productlines(
	productLine VARCHAR(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	textDescription  TEXT NOT NULL,
	image VARCHAR(255)
	
);
CREATE TABLE employees(
	employeeNumber INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	lastName VARCHAR(50) NOT NULL,
	firstName VARCHAR(50) NOT NULL,
	email VARCHAR(100) NOT NULL,
	jobTitle VARCHAR(50)
);
CREATE TABLE offices(
	officeCode VARCHAR(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	city VARCHAR(50) NOT NULL,
	phone VARCHAR(50) NOT NULL,
	addressLine1 VARCHAR(100) NOT NULL,
	addressLine2 VARCHAR(100),
	state VARCHAR(50),
	country VARCHAR(50) NOT NULL,
	postalCode VARCHAR(15) NOT NULL

);
