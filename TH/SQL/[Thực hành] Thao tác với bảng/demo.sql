CREATE TABLE contacts(
	contact_id INT(11) NOT NULL AUTO_INCREMENT,
	last_name VARCHAR(30) NOT NULL,
	first_name VARCHAR(255),
	birthday DATE,
	CONSTRAINT contacts_pk PRIMARY KEY (contact_id) 
);
CREATE TABLE suppliers(
	supplier_id INT(11) NOT NULL AUTO_INCREMENT,
	supplier_name VARCHAR(50) NOT NULL,
	account_rep VARCHAR(30) NOT NULL DEFAULT 'TBD',
	CONSTRAINT suppliers_pk PRIMARY KEY (supplier_id)
);
ALTER TABLE contacts
  DROP COLUMN contact_type;
ALTER TABLE contacts
  CHANGE COLUMN contact_type ctype
    varchar(20) NOT NULL;

/*cu phap doi ten bang*/
ALTER TABLE contacts
  RENAME TO people;
