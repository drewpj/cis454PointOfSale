<?php

    //This is just a page for testing connection for SQL db. PLEASE IGNORE!

    //Connect to server
    $serverName = "samp454.database.windows.net"; 
    $connectionOptions = array(
        "Database" => "CIS454", 
        "Uid" => "JGPrish", 
        "PWD" => "password!9" 
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);

    //SQL statement.
    $tsql= "SELECT * FROM dbo.User454";
    $getResults= sqlsrv_query($conn, $tsql);
    echo(sqlsrv_num_rows($getResults));
    echo ("Reading data from table" . PHP_EOL);
    //Print out data.
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
        echo ($row['user_email'] . " " . $row['user_password'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>
