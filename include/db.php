<?php 

$serverName = "samp454.database.windows.net"; 
    $connectionOptions = array(
        "Database" => "CIS454", 
        "Uid" => "JGPrish", 
        "PWD" => "password!9" 	
	);

 $conn = sqlsrv_connect($serverName, $connectionOptions) or DIE("Failed to connect to database");
 
?>
