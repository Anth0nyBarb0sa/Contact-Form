<?php
require 'vendor/autoload.php'; 

//initalize
$name = $_POST['name'];
$mailfrom = $_POST['mail'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$txt = "You have received an e-mail from ".$name.".\n\n Their Email: ".$mailfrom.".\n\n  Subject: ".$subject."\n\n Message: ".$message;



//set and send

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("info@myvuemedia.com", "Contact Form Request");
$email->setSubject($subject);
$email->addTo("info@myvuemedia.com", "Contact Form Request");
$email->addContent("text/plain", $txt);
$email->addContent("text/html", $txt);
$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
try {
    $response = $sendgrid->send($email);
    //print $response->statusCode() . "\n";
    //print_r($response->headers());
    //print $response->body() . "\n";
    include 'worked.html';

    
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
