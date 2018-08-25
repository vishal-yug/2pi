<?php
	$email = $_REQUEST['email'];
	$name = $_REQUEST['name'];
	$message = $_REQUEST['message'];
	$phone = $_REQUEST['phone'];
	$company = $_REQUEST['companyName'];


 
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$email_subject = "Enquiry 2PI";

$body = "Name: ". $name. "\n";
$body .= "Company: ". $company. "\m";
$body .= "Phone: ". $phone. "\m";
$body .= "message: ". $message. "\m";
$body .= "Email: ". $email. "\m";

$to = "contatvishaljain@gmail.com";
@mail($to, $email_subject, $body, $headers);  

$return = array('type' => 'success' , 'message' => $body);

echo json_encode($return);
?>