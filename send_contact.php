<?php


/* Defining a PHP Function */
	//var_dump($_GET); //Use this to see what info we got!
	 function writeMessage() {
		 //echo "You are really a nice person, Have a nice time!";
		
		 $name = $_GET['name'];
		 $email = $_GET['email'];
		 $message = $_GET['message'];

		 $message = "You have received a request from " . $name . " at email " . $email . " saying " . $message . "\n";
		 //echo $message;
		 $form_email = "djacobso@syr.edu";
		 $subject_line = "Contact Form Submitted";
		 $header = "From: " . $email;
		 mail($form_email,$subject_line,$message,$header);
		 echo "Thank you for your comments!"; 
	 }
	 /* Calling a PHP Function */
	 writeMessage();
	 
	 //header("Location:  http://www.google.com/");
  exit();

?>
