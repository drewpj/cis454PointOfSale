<?php
    include_once 'db.php';
	
MSSQL_CONNECT(	$dbServername,$dbUsername,$dbPassword) or DIE("Database failed to respond");
mssql_select_db($dbName) or DIE("Database unavailable");

$query = "SELECT * FROM dbo.Product454";
$result = mssql_query( $query );

for ($i = 0; $i < mssql_num_rows( $result ); ++$i)
     {
         
		 $line = mssql_fetch_row($result);
         print( "$line[0] - $line[1]\n");
     }
	
	
	

	
	
	
	
?>
	