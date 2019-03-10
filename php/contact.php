<?php 
require '../vendor/autoload.php';

 $to = new SendGrid\Email(null,"navneet920@gmail.com");
 $from = new SendGrid\Email(null,"sales@windberrysolar.com");
 // $to = new SendGrid\Email(null, $_POST['mail']);
 $subject="Enquiry Message";
 $sender=$_POST["name"];
 $senderEmail=$_POST["email"];
 $senderPhone=$_POST["phone"];
 $message=$_POST["message"];

 print "Hello world!"; 
 $mailBody="Name: $sender\nEmail: $senderEmail\nPhone: $senderPhone\n\n$message";
 $content = new SendGrid\Content("text/plain", $mailBody);
 $mail = new SendGrid\Mail($from, $subject, $to, $content);

 $apiKey = getenv('SENDGRID_API_KEY');
 $sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);

$thankYou="<p>Thank you! Your message has been sent.</p>";
    echo("<br>".$thankYou);
    

  print "Hello world!";   
?>



