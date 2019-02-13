<?php

if($_POST["submit"]) {
    $recipient="sales@windberrysolar.com";
    $subject="Enquiry Message";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $senderPhone=$_POST["phone"];
    $message=$_POST["message"];

    $mailBody="Name: $name\nEmail: $email\nPhone: $phone\n\n$message";

    echo("Recipient : ".$recipient." subject : ".$subject." mail : ".$mailBody);

    $status = mail($recipient, $subject, $mailBody, "From: $name <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
    echo("<br>".$thankYou);
    echo("Status : ".$status);
}

?>