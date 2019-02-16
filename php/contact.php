<?php 
require '../vendor/autoload.php';
if(isset($_POST['submit'])){




















// If you are using Composer


// If you are not using Composer (recommended)
// require("path/to/sendgrid-php/sendgrid-php.php");

$from = new SendGrid\Email(null, "sales@windberrysolar.com");
echo $from;

$subject = "Hello World from the SendGrid PHP Library!";
echo $subject
$to = new SendGrid\Email(null, $_POST['email']);
echo $to
$content = new SendGrid\Content("text/plain", "Hello, Email!");
echo $content
$mail = new SendGrid\Mail($from, $subject, $to, $content);
echo $mail

$apiKey = getenv('SENDGRID_API_KEY');
$apiKey
$sg = new \SendGrid($apiKey);
$sg 
$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();
    }
?>
