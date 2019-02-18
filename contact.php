<?php


/* Defining a PHP Function */
	var_dump($_GET); //Use this to see what info we got!
	 function writeMessage() {
		echo "You are really a nice person, Have a nice time!";
	 }
	 
	 /* Calling a PHP Function */
	 writeMessage();
	 
	 header("Location:  http://www.google.com/");
  exit();

?>