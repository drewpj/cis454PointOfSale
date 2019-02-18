<?php

	//var_dump($_POST);
	
	echo "Print this recipt out for your records\n";
	$nl = "\n";
	$name = $_POST['name'];
	$familyname = $_POST['familyname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$addr = $_POST['addr1'] . "\n" . $_POST['addr2'] . "\n" . $_POST['city'] . "," . $_POST['state'] . "\n";
	$zip = $_POST['zip'];
	
	$nameB = $_POST['nameBilling'];
	$familynameB = $_POST['familynameBilling'];
	$phoneB = $_POST['phoneBilling'];
	$addrB = $_POST['addr1Billing'] . "\n" . $_POST['addr2Billing'] . "\n" . $_POST['cityBilling'] . "," . $_POST['stateBilling'] . "\n";
	$zipB = $_POST['zipBilling'];
	
	$nameCard = $_POST['name-on-card'];
	$ccn = $_POST['credit-card-number'];
	$exp_m = $_POST['exp-month'];
	$exp_y = $_POST['exp-year'];
	$ccv = $_POST['ccv'];
	//echo "\n\n\n\n\n" . $ccn . $addrB . $familyname;
	
	$shipping = "Shipping information:\n" . $nl . $name . " " . $familyname . $nl . $email . $phone . $addr . $nl . $zip;
	$billing = "Billing information:\n" . $nl . $nameB . " " . $familynameB . $nl . $phoneB . $addrB . $nl . $zipB;
	
	echo $shipping . $nl;
	echo $billing;
	
?>