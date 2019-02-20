<?php
//Start Session
session_start();
//Connect to database
include_once 'db.php';

//SQL statement to be sent to the db.
$sql = "SELECT * FROM dbo.IncomingOrder454";
//Query the statement
$result = sqlsrv_query($conn, $sql);
//Create an array to store the orders.
$manager_orders = array();

//If successfully queried:
if ($result) {
    echo("Printing results: <br> <br>");
    //Convert SQL rows into associative array.
    while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
        //Represent each order as a table row.
        $item = "<tr> <td>" . $row['product_name'] . "</td> <td>" . $row['orderedBy'] . "</td> <td>" . $row['product_price'] . " </td> </tr>";
        //Push it to the array.
        array_push($manager_orders, $item);
       }
    //Add it to SESSION variable so it can be accessed later.
    $_SESSION['manager_orders'] = $manager_orders;
}

//Redirect back to the original page.
header("Location: ../manager.php");

