<?php
	//necessary imports
	require 'processCard.php';
	include_once 'include/db.php';
	session_start();
	
	//gathering session information
	$amount = (float) $_SESSION['total'];
	$items = $_SESSION['cart'];
	$itemName = $_SESSION['prodName'];
	$orderedBy = $_SESSION['email'];
	
	//gathering POST information
	$nl = "\n";
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
	
	//constructing strings to print
	$shipping = "\nShipping information:\n" . $name . " " . $familyname . $nl . $email . $nl . $phone . $nl . $addr . $nl . $zip;
	$billing = "\nBilling information:\n" . $nameB . " " . $familynameB . $nl . $phoneB . $nl . $addrB . $nl . $zipB;
	$charged = "\n\n$" . $amount . " charged to x". substr($ccn,-4);
	
	//email setup
	$emailPrinter = "printer@thiswebserver.syr.edu";
	$message = $shipping . $nl . $billing . $charged ;
	$subject_line = "Print";
	$header = "From: " . $email;
	
	
	//checking if the card is valid
	if (processCard($nameCard,$ccn,$ccv,$exp_m,$exp_y)){
		//if the card is valid, print the recipt
		echo "Print this receipt out for your records\n";
		echo nl2br($shipping . $nl);
		echo nl2br($billing);
		echo nl2br($charged);
		
		//adding order to database
		$sql = "INSERT INTO dbo.IncomingOrder454 (product_name, product_price, product_seller ,orderedBy) VALUES ('$itemName',$amount,'LeBron','$email')";
		$result = sqlsrv_query($conn, $sql);
		
		//emailing out the receipt to a wireless printer which will automatically print it out (obviously we didn't have access to one for this project)
		//However, this is how my printer at home works (all I need to do is email it)
		mail($emailPrinter,$subject_line,$message,$header);
		
	} else {
		//if the card isn't valid, don't print the recipt 
		echo nl2br("Processing card failed. Are you sure your information is correct?\n");
	}
?>