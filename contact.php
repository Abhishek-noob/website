<?php
	$name = $_Post['name'];
	$visitors_email = $_Post['email'];
	$visitors_no = $_Post['phone'];
	$message = $_Post['message'];


	$email_from = 'mishabhi6666@gmail.com';

	$email_subject = "New Form submission";

	$email_body = "User Name: $name.\n".
	                "User Email: $visitors_email.\n".
	                  "User Number: $visitors_no.\n".
	                     "User Message: $message.\n".:


	 $to = "mishabhi6666@gmail.com";
	  
	 $headers = "From: $email_from \r\n";

	  $headers = "From: $visitors_email \r\n";

	  mail($to,$email_subject,$email_body,$headers);


	  header("Location: contact.html");

?>