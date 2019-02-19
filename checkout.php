<?php
	require 'processCard.php';
	include_once 'include/db.php';
	session_start();
	
	//$_SESSION['cart']
	$amount = $_SESSION['total'];
	$items = $_SESSION['cart'];
	$itemName = $_SESSION['prodName'];
	$orderedBy = $_SESSION['email']
	
	$nl = "\n";
	
	echo nl2br($amount . $nl . $items . $nl .$itemName . $nl);
	
	$name = $_POST['name'];
	$familyname = $_POST['familyname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$addr = $_POST['addr1'] . "\n" . $_POST['addr2'] . "\n" . $_POST['city'] . "," . $_POST['state'];
	$zip = $_POST['zip'];
	
	$nameB = $_POST['nameBilling'];
	$familynameB = $_POST['familynameBilling'];
	$phoneB = $_POST['phoneBilling'];
	$addrB = $_POST['addr1Billing'] . "\n" . $_POST['addr2Billing'] . "\n" . $_POST['cityBilling'] . "," . $_POST['stateBilling'];
	$zipB = $_POST['zipBilling'];
	
	$nameCard = $_POST['name-on-card'];
	$ccn = $_POST['credit-card-number'];
	$exp_m = $_POST['exp-month'];
	$exp_y = $_POST['exp-year'];
	$ccv = $_POST['ccv'];
	//echo "\n\n\n\n\n" . $ccn . $addrB . $familyname;
	
	$shipping = "\nShipping information:\n" . $name . " " . $familyname . $nl . $email . $nl . $phone . $nl . $addr . $nl . $zip;
	$billing = "\nBilling information:\n" . $nameB . " " . $familynameB . $nl . $phoneB . $nl . $addrB . $nl . $zipB;
	$charged = "\n\n$" . $amount . " charged to x". substr($ccn,-4);
	
	//echo nl2br("the card number is: " . $ccn . $nl);
	if (processCard($nameCard,$ccn,$ccv,$exp_m,$exp_y)){
		echo "Print this recipt out for your records\n";
		echo nl2br($shipping . $nl);
		echo nl2br($billing);
		echo nl2br($charged);
		$sql = "INSERT INTO dbo.IncomingOrder454 (product_name, product_price, product_seller ,orderedBy) VALUES ('$itemName',floatval($amount),'LeBron','$name')";
		$result = sqlsrv_query($conn, $sql);
		if ($result) {
			echo "success";
		} else {
			echo "failure";
		}
	} else {
		echo nl2br("Processing card failed. Are you sure your information is correct?\n");
	}
?>