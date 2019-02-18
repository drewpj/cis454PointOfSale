-- CIS454 Project 1 Database
 
-- DROP TABLE User454
-- DROP TABLE Product454 
-- DROP TABLE Payment454
-- DROP TABLE Vendor454

-- Creates the User table of the database initializing all the variables of that table
CREATE TABLE User454 (
	userid int IDENTITY not null,
	user_type varchar(50) not null,
	user_card int not null,
	user_firstname varchar(50) not null,
	user_lastname varchar(50) not null,
	user_email varchar(50) not null,
    user_password nvarchar(50) not null 
)

-- Creates the Product table of the database initializing all the variables of that table
CREATE TABLE Product454 (
	product_id int IDENTITY not null,
	product_name varchar(50) not null,
	product_price decimal(4,2) not null,
	product_seller varchar(50) not null
)

-- Creates the Payment table of the database initializing all the variables of that table
CREATE TABLE Payment454 (
	credit_id int IDENTITY not null,
	is_card_debit bit not null,
	card_number int not null,
	card_holder_name varchar(50) not null,
	card_holder_suid int not null,
	total_price decimal(5,2) not null
)

-- Creates the Vendor table of the database initializing all the variables of that table
CREATE TABLE Vendor454 (
	products_sold int not null,
	vendor_name varchar(50) not null,
	vendor_email varchar(50) not null
)

-- Adds data to the User table of the database
INSERT INTO User454 (user_type, user_card, user_firstname, user_lastname, user_email, user_password)
	VALUES ('Manager', 1, 'John', 'Doe', 'johndoe@gmail.com', PWDENCRYPT('thisisme')),
			('Customer', 2, 'Jane', 'Doe', 'janedoe@gmail.com', PWDENCRYPT('hellothere')),
			('Customer', 3, 'LeBron', 'James', 'lbj@gmail.com', PWDENCRYPT('yeet')),
			('Customer', 4, 'Pac', 'Man', 'pacman@yahoo.com', PWDENCRYPT('esketit')),
			('Manager', 5, 'Mario', 'Bro', 'mariobro@yahoo.com', PWDENCRYPT('getthisbread'))

-- Adds data to the Product table of the database
INSERT INTO Product454 (product_name, product_price, product_seller)
	VALUES ('Eggs on Toast with Fruit', 16.50, 'Seller1'), --seller1 is breakfast
			('Spicy Chicken with Rice', 27.00, 'Seller2'), --seller 2 is dinner
			('Exotic Fruit Platter', 24.00, 'Seller3'), --seller 3 in misc
			('Roast Pork with Vegetables', 38.00, 'Seller3'),
			('Grilled Salmon with Potatos', 26.00, 'Seller3'),
			('Eggs on Avacado Toast', 15.00, 'Seller1'),
			('Buffalo Chicken Sandwich', 22.00, 'Seller2'),
			('Breakfast Sandwich with Eggs and Bacon', 18.00, 'Seller1'),
			('Teriyaki Chicken Sub', 18.00, 'Seller3'),
			('The Ultimate Burger', 23.00, 'Seller2'),
			('Prawn Roll with Spinach', 17.00, 'Seller3'),
			('Fettaccini in Creamy Sauce', 35.00, 'Seller2'),
			('Sushi Platter', 35.00, 'Seller3'),
			('Spaghetti Bolognaise', 27.00, 'Seller2'),
			('Garden Pizza', 19.00, 'Seller2')

-- Adds data to the Payment table of the database											
INSERT INTO Payment454 (is_card_debit, card_number, card_holder_name, card_holder_suid, total_price)
	VALUES (1, 1234, 'Matthew', 111222333, 050.00),
			(0, 4321, 'Jon', 222333444, 040.00),
			(1, 5678, 'Moon', 333444555, 048.00),
			(0, 8765, 'Drew', 444555666, 103.00),
			(1, 9000, 'Natalie', 555666777, 67.00)

-- Adds data to the Vendor table of the database											
INSERT INTO Vendor454 (products_sold, vendor_name, vendor_email)
	VALUES (3, 'Seller1', 'Seller1@gmail.com'), 
			(6, 'Seller2', 'Seller2@gmail.com'),
			(6, 'Seller3', 'Seller3@gmail.com') 
	
-- Adds a primary key to the Payment table 
ALTER TABLE Payment454
	ADD CONSTRAINT PK_credit_id PRIMARY KEY (credit_id)

-- Adds a primary key and foreign key to the User table											
ALTER TABLE User454 
	ADD CONSTRAINT PK_user_id PRIMARY KEY (userid),
		CONSTRAINT FK_user_card FOREIGN KEY (user_card) REFERENCES Payment454(credit_id)

-- Adds a primary key to Vendor table	
ALTER TABLE Vendor454
	ADD CONSTRAINT PK_vendor_name PRIMARY KEY (vendor_name)

-- Adds a primary key to Product table	
ALTER TABLE Product454 ADD
	CONSTRAINT FK_seller FOREIGN KEY (product_seller) REFERENCES Vendor454(vendor_name)

-- SELECT * FROM User454
-- SELECT * FROM Product454
-- SELECT * FROM Payment454
-- SELECT * FROM Vendor454
