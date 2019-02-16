<?php 
require '../vendor/autoload.php';
if(isset($_POST['submit'])){




















// If you are using Composer


// If you are not using Composer (recommended)
// require("path/to/sendgrid-php/sendgrid-php.php");

 $from = new SendGrid\Email(null, "sales@windberrysolar.com");
 echo '<from';
 $subject = "Hello World from the SendGrid PHP Library!";
 $to = new SendGrid\Email(null, $_POST['email']);
 $content = new SendGrid\Content("text/plain", "Hello, Email!");
 $mail = new SendGrid\Mail($from, $subject, $to, $content);

 $apiKey = getenv('SENDGRID_API_KEY');
 $sg = new \SendGrid($apiKey);
echo 'sg';
$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();
    }
?>
