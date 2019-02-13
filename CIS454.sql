-- CIS454 Project 1 Database

CREATE TABLE User454 (
	userid int IDENTITY not null,
	user_card int not null,
	user_name varchar(50) not null 
)

ALTER TABLE User454 
	ADD CONSTRAINT PK_user_id PRIMARY KEY (userid),
		CONSTRAINT FK_user_card FOREIGN KEY (user_card) REFERENCES Payment454(credit_id)

CREATE TABLE Product454 (
	product_id int IDENTITY not null,
	product_name varchar(50) not null,
	product_price decimal(5,2) not null,
	product_seller varchar(50) not null
)

CREATE TABLE Payment454 (
	credit_id int IDENTITY not null,
	is_card_debit bit not null,
	card_number int not null,
	card_holder_name varchar(50) not null,
	card_holder_suid int not null,
	total_price decimal(5,2) not null
)

ALTER TABLE Payment454
	ADD CONSTRAINT PK_credit_id PRIMARY KEY (credit_id)

CREATE TABLE Vendor454 (
	products_sold int not null,
	vendor_user_id int not null,
	vendor_name varchar(50) not null,
	vendor_email varchar(50) not null
)

ALTER TABLE Vendor454
	ADD CONSTRAINT PK_vendor_name PRIMARY KEY (vendor_name),
		CONSTRAINT FK_vendor_user_id FOREIGN KEY (vendor_user_id) REFERENCES User454(userid)

SELECT * FROM User454
SELECT * FROM Product454
SELECT * FROM Payment454
SELECT * FROM Vendor454