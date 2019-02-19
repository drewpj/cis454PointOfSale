<?php


	function processCard($name,$ccn,$ccv,$month,$year){
		//this is where we'd process the card if we wanted to pay for that
		echo " strlen: " . strlen($ccn);
		if (!strlen($ccn) == 16){
			return false;
		}
		return true;
		
	}

?>