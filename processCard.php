<?php


	function processCard($name,$ccn,$ccv,$month,$year){
		//this is where we'd process the card if we wanted to pay for that
		
		//someFunction($name,$ccn,$ccv,$month,$year)
		//if the card is legit -> return true
		//else -> return false
		if (!strlen($ccn) == 16){
			return false;
		}
		return true;
		
	}

?>