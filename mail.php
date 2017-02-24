<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$formcontent="From: $name \n Message: $message";
	$recipient = "christine@christineyost.com";
	$fullsubject = "CONTACT FORM: $subject";
	$mailheader = "From: $email \r\n";
	
	if (mail($recipient, $fullsubject, $formcontent, $mailheader))
	{
		echo "<p><em>Thank you for your message!</em></p>";
	}
	else
	{
		echo "<p><em>Sorry, there was an error. Please try again.</em></p>";
	}
?>