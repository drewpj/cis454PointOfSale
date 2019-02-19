<?php
session_start();
include_once '../include/db.php';

$sql = "SELECT * FROM dbo.IncomingOrder454";
$result = sqlsrv_query($conn, $sql);
if ($result) {
    echo("Printing results: <br> <br>");
    while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
<<<<<<< HEAD
        echo ($row['product_name'] . " ordered by " . $row['product_seller'] . PHP_EOL);
=======
        echo ($row['product_name'] . " " . $row['product_id'] . " " . $row['orderedBy'] . PHP_EOL);
>>>>>>> f47695fad3731b7a9e65b4e08156bc20d4ad8b33
        echo ("<br>");
       }
}

