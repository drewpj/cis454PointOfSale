<?php
session_start();
include_once '../include/db.php';

$sql = "INSERT INTO IncomingOrder454 (product_name, product_price, product_seller, orderedBy)
VALUES ('Teriyaki Chicken Sub', 18.00, 'Seller3', 'John'),
        ('The Ultimate Burger', 23.00, 'Seller2', 'LeBron'), 
        ('Fettaccini in Creamy Sauce', 35.00, 'Seller2', 'Pac'),
        ('Crab and Prawn Roll with Spinach', 17.00, 'Seller3', 'John'),
        ('Sushi Platter', 35.00, 'Seller3', 'Lebron'),
        ('Buffalo Chicken Sandwich', 22.00, 'Seller2', 'Pac'),
        ('Steak with Seasonal Veggies', 35.00, 'Seller2', 'John'),
        ('Spaghetti Bolognaise', 27.00, 'Seller2', 'LeBron'),
        ('Grilled Salmon with Potatoes', 26.00, 'Seller3', 'Pac'),
        ('Roast Pork with Vegetables', 38.00, 'Seller3', 'John'),
        ('Garden Pizza', 19.00, 'Seller2', 'LeBron'),
        ('Spicy Chicken with Rice', 27.00, 'Seller2', 'Pac')";
        
$result = sqlsrv_query($conn, $tsql);

if ($result) {
    echo("Inserted correctly!");
}
// while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
//      echo ($row['product_name'] . " " . $row['product_id'] . PHP_EOL);
//     }
