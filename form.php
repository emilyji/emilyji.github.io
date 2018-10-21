error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

<?php 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emailaddress = $_POST['emailaddress'];
$phonenumber = $_POST['phonenumber'];
$subject = $_POST['subject'];
$formcontent="From: $name \n Message: $message";
$recipient = "emilyji349@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
