-- CIS454 Project 1 Database
-- azure
-- DROP TABLE User454
-- DROP TABLE Product454
-- DROP TABLE Payment454
-- DROP TABLE Vendor454

CREATE TABLE User454 (
	userid int IDENTITY not null,
	user_card int not null,
	user_name varchar(50) not null 
)

INSERT INTO User454 (user_card, user_name, user_password)
	VALUES (1, 'user1', PWDENCRYPT('thisisme')),
			(2, 'user2', PWDENCRYPT('hellothere')),
			(3, 'user3', PWDENCRYPT('yeet')),
			(4, 'user4', PWDENCRYPT('esketit')),
			(5, 'user5', PWDENCRYPT('getthisbread'))
	
ALTER TABLE User454 
	ADD CONSTRAINT PK_user_id PRIMARY KEY (userid),
		CONSTRAINT FK_user_card FOREIGN KEY (user_card) REFERENCES Payment454(credit_id),

ALTER TABLE User454
	ADD user_password nvarchar(50)

INSERT INTO User454 (user_password)
	VALUES ('thisisme'),
			('hellothere'),
			('yeet'),
			('esketit'),
			('getthisbread')

CREATE TABLE Product454 (
	product_id int IDENTITY not null,
	product_name varchar(50) not null,
	product_price decimal(4,2) not null,
	product_seller varchar(50) not null
)

ALTER TABLE Product454 ADD
	CONSTRAINT FK_seller FOREIGN KEY (product_seller) REFERENCES Vendor454(vendor_name)

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

INSERT INTO Payment454 (is_card_debit, card_number, card_holder_name, card_holder_suid, total_price)
	VALUES (1, 1234, 'Matthew', 111222333, 050.00),
			(0, 4321, 'Jon', 222333444, 040.00),
			(1, 5678, 'Moon', 333444555, 048.00),
			(0, 8765, 'Drew', 444555666, 103.00),
			(1, 9000, 'Natalie', 555666777, 67.00)

CREATE TABLE Vendor454 (
	products_sold int not null,
	vendor_user_id int not null,
	vendor_name varchar(50) not null,
	vendor_email varchar(50) not null
)

INSERT INTO Vendor454 (products_sold, vendor_user_id, vendor_name, vendor_email)
	VALUES (3, 2, 'Seller1', 'Seller1@gmail.com'), 
			(6, 3, 'Seller2', 'Seller2@gmail.com'),
			(6, 5, 'Seller3', 'Seller3@gmail.com') 
	
ALTER TABLE Vendor454
	ADD CONSTRAINT PK_vendor_name PRIMARY KEY (vendor_name),
		CONSTRAINT FK_vendor_user_id FOREIGN KEY (vendor_user_id) REFERENCES User454(userid)

SELECT * FROM User454
SELECT * FROM Product454
SELECT * FROM Payment454
SELECT * FROM Vendor454
