<?php 
require '../vendor/autoload.php';

 $to = new SendGrid\Email(null,"sales@windberrysolar.com");
 $from = new SendGrid\Email(null,"sales@windberrysolar.com");
 // $to = new SendGrid\Email(null, $_POST['mail']);
 $subject="Enquiry Message";
 $sender=$_POST["name"];
 $senderEmail=$_POST["email"];
 $senderPhone=$_POST["phone"];
 $message=$_POST["message"];

 
 $mailBody="Name: $sender\nEmail: $senderEmail\nPhone: $senderPhone\n\n$message";
 $content = new SendGrid\Content("text/plain", $mailBody);
 $mail = new SendGrid\Mail($from, $subject, $to, $content);

 $apiKey = getenv('SENDGRID_API_KEY');
 $sg = new \SendGrid($apiKey);
 
 $response = $sg->client->mail()->send()->post($mail);
 echo $to1 , $mailBody , $response ," mail 1";
 $to1 = new SendGrid\Email(null,$senderEmai);
 $mailBody1="Thankyou  for contacting us. Our team will contact you shorlty";
 $content1 = new SendGrid\Content("text/plain", $mailBody1);
 $mail1 = new SendGrid\Mail($from, $subject, $senderEmail, $content1);
 $response1 = $sg->client->mail()->send()->post($mail1);
 echo $to1 , $mailBody1 , $response1," mail 2";
 



 $thankYou="<p>Thank you! Your message has been sent.</p>";
    echo("<br>".$thankYou);
    

     
?>



