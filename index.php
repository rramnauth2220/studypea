<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
	$from = 'From: StudyPea'; 
    $to = 'rramnauth2220@bths.edu'; 
    $subject = 'Hello';
	
	$body = "From: $name\n E-Mail: $email\n Message:\n $message";

	if ($_POST['submit']) {
		/* Anything that goes in here is only performed if the form is submitted */
		if (mail ($to, $subject, $body, $from)) { 
			echo '<p>Your message has been sent!</p>';
		}   
		else { 
			echo '<p>Something went wrong, go back and try again!</p>'; 
		}
	}
?>