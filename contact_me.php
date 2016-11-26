<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'matin.filter@gmail.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Martin Filters Website Contact Form:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "\ایمیل دریافت شده از طرف وب سایت متین فیلتر می باشد.\n\n"."جزئیات:\n\nنام: $name\n\nشماره تماس: $phone\n\nآدرس ایمیل: $email_address\n\nپیام:\n$message";
$headers = "From: noreply@your-domain.com\n";
$headers = "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
