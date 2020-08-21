<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'team.neweducation@gmail.com';

  if (isset ($_POST['submit'])) {
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $headers = "From: Contact Form <" . $receiving_email_address . ">" . "\r\n";
    $headers .= "Reply-To: " . $name . " <" . $email .">" . "\r\n";
    
    echo 'Your message was sent successfully!';
    mail($receiving_email_address, $subject, $message, $headers);
  } else {
    echo 'Desculpe, ocorreu algum erro!';
  }
?>