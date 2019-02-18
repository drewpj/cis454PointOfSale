<?php
    include_once 'db.php';
	
	
	
$sql = "SELECT * FROM dbo.Product454";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
	echo($row['product_name']; 
    if ($row['product_id'] == $id){
			$price = $row['product_price'];
			$name = $row['product_name'];
    }
    sqlsrv_free_stmt($getResults);
     }
$total = $total + $price;
$conn->close();

/*
$id should be assigned when the user selects the item from the products page.
$price and $name are meant to be displayed on the html page.
$total should be updated using $price and i meant to be displayed.
*/
	

	
	

	
	
	
	
?>
	