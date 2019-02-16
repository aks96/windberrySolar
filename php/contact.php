<?php 
require '../vendor/autoload.php';
if(isset($_POST['submit'])){




















// If you are using Composer


// If you are not using Composer (recommended)
// require("path/to/sendgrid-php/sendgrid-php.php");

echo $from = new SendGrid\Email(null, "sales@windberrysolar.com");

echo $subject = "Hello World from the SendGrid PHP Library!";
echo $to = new SendGrid\Email(null, $_POST['email']);
echo $content = new SendGrid\Content("text/plain", "Hello, Email!");
echo $mail = new SendGrid\Mail($from, $subject, $to, $content);

echo $apiKey = getenv('SENDGRID_API_KEY');
echo $sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();
    }
?>
