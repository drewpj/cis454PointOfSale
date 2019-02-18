<?php
    $serverName = "samp454.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "CIS454", // update me
        "Uid" => "JGPrish", // update me
        "PWD" => "password!9" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    //$tsql= "SELECT * FROM dbo.Product454";
    $tsql= "SELECT * FROM dbo.User454 WHERE user_email='moonmahbubar@gmail.com'";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     //echo ($row['product_name'] . " " . $row['product_id'] . PHP_EOL);
     echo ($row['user_email'] . " " . $row['user_password'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>
