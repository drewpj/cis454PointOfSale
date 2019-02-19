<?php
session_start();
include_once '../include/db.php';

$sql = "SELECT * FROM dbo.IncomingOrder454";
$result = sqlsrv_query($conn, $sql);
if ($result) {
    echo("Printing results: <br> <br>");
    while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
        echo ($row['product_name'] . " " . $row['product_id'] . " " . $row['orderedBy'] . PHP_EOL);
        echo ("<br>");
       }
}

