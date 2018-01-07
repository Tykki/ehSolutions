<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";
$emailTo = "nurjamanup@gmail.com";
$query = "You Have Received A New Query";
$name = trim(stripslashes($_POST['name'])); 
$email = trim(stripslashes($_POST['email'])); 
$phone = trim(stripslashes($_POST['phone']));  
$subject = trim(stripslashes($_POST['subject']));  
$message = trim(stripslashes($_POST['message']));  

// prepare email body text
$body = "";
if(isset($name)){
  $body .= "Name:";
  $body .= $name;
  $body .= "\n";
}
if(isset($email)){
  $body .= "E-mail: ";
  $body .= $email;
  $body .= "\n";
}
if(isset($phone)){
  $body .= "Phone: ";
  $body .= $phone;
  $body .= "\n";
}
if(isset($subject)){
  $body .= "Subject: ";
  $body .= $subject;
  $body .= "\n";
}
if(isset($message)){
  $body .= "Message: ";
  $body .= $message;
  $body .= "\n";
}


mail($emailTo, $query, $body);
?>