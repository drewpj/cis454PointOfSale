<?php
session_start();
include_once '../include/db.php';

$sql = "SELECT * FROM dbo.IncomingOrder454";
$result = sqlsrv_query($conn, $tsql);
while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
     echo ($row['product_name'] . " " . $row['product_id'] . PHP_EOL);
    }
