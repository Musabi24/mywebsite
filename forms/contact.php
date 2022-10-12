<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  //$receiving_email_address = "kelviwalanda@gmail.com";

  //if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
 //   include( $php_email_form );
  //} else {
  //  die( 'Unable to load the "PHP Email Form" Library!');
  //}

  //$contact = new PHP_Email_Form;
//  $contact->ajax = true;
  
 // $contact->to = $receiving_email_address;
  //$contact->from_name = $_POST['name'];
 // $contact->from_email = $_POST['email'];
 // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
 // $contact->smtp = array(
 //   'host' => 'example.com',
  //  'username' => 'example',
 //   'password' => 'pass',
  //  'port' => '587'
  //);
  

 // $contact->add_message( $_POST['name'], 'From');
 // $contact->add_message( $_POST['email'], 'Email');
 // $contact->add_message( $_POST['message'], 'Message', 10);

 // echo $contact->send();
//?>
<?php

   $name - $_POST['name'];
   $email - $_POST['email'];
   $subject -$_POST['subject'];
   $message - $_POST['message'];
   
   $mailheader - "from:". $name ."<".$email."\r\n";

   $recipient - "kelviwalanda@gmail.com";

   mail($recipient, $subject ,$message, $mailheader)
   or die ("error");

   echo'
   
   
   <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>web Development</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon1.png" rel="icon">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Eterna - v4.9.1
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
    <div class="container">
    <h1>Thank you for contacting me. I will get back to you as soon as possible</h1>
    <br>
    <p>Go back to <a href="index.html">Homepage</a>.</p>
    </div>
</body>
   
   
   
   ';






?>