<?php

	 function sendMessage() {
		//getting info from the GET method
		 $name = $_GET['name'];
		 $email = $_GET['email'];
		 $message = $_GET['message'];

		//Initializing variables
		 $message = "You have received a request from " . $name . " at email " . $email . " saying " . $message . "\n";
		 $form_email = "admin@groupthirteen.syr.edu";
		 $subject_line = "Contact Form Submitted";
		 $header = "From: " . $email;
		 
		 //sending the email
		 mail($form_email,$subject_line,$message,$header);
		 
		 //Notifying the user of us sending the email
		 echo "Thank you for your comments!"; 
		 echo nl2br("\nYour comments have been emailed to " . $form_email);
		 echo nl2br("\nWe have your email on record, and will reply if it is necessary.");
	 }
	 
	 sendMessage();
  exit();

?>
