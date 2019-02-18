<?php
	require 'processCard.php';
	//var_dump($_POST);
	
	echo "Print this recipt out for your records\n";
	
	$amount = $_SESSION['total'];
	
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
	
	$shipping = "\nShipping information:\n" . $name . " " . $familyname . $nl . $email . $nl . $phone . $nl . $addr . $nl . $zip;
	$billing = "\nBilling information:\n" . $nameB . " " . $familynameB . $nl . $phoneB . $nl . $addrB . $nl . $zipB;
	$charged = "\n\n$" . $amount . " charged to x". substr($ccn,-4);
	
	if (processCard($nameCard,$cnn,$ccv,$exp_m,$exp_y)){
	echo nl2br($shipping . $nl);
	echo nl2br($billing);
	echo nl2br($charged);
	} else {
		echo nl2br("Processing card failed. Are you sure your information is correct?\n");
	}
	
?>