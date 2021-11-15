<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
    $email = $_POST['email'];
	$subject = $_POST['subject'];
    $message = $_POST['message'];
	
	$mailTo = "joshmire@pm.me";
	$headers = "From: ".$email;
	$msg = "You have a received an email from ".$name.".\n\n".$message;
	
	mail($mailTo, $subject, $msg, $headers);
	header("Location: contact.php?mailsend");
}
?>
