<?php
session_start();
include_once 'db.php';

$sql = "SELECT * FROM dbo.IncomingOrder454";
$result = sqlsrv_query($conn, $sql);
$manager_orders = array();
if ($result) {
    echo("Printing results: <br> <br>");
    while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
        $item = $row['product_name'] . " ordered by " . $row['orderedBy'];
        array_push($manager_orders, $item);
       }
    $_SESSION['manager_orders'] = $manager_orders;
}

header("Location: ../manager.php");

