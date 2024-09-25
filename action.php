<?php

$conn = mysqli_connect("localhost", "root", "", "utsav_universe") or die("not connect");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['book'])) //reg data
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $menu = $_POST["menu"];
    $address = $_POST["address"];


    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'utsavuniverse7@gmail.com';                     //SMTP username
        $mail->Password = 'bqfbyrwqlwjcmvwv';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('utsavuniverse7@gmail.com', 'Utsav_Universe');
        $mail->addAddress("utsavuniverse7@gmail.com", 'Joe User');     //Add a recipient
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Booking Details';
        $mail->Body = "<span style='font-size:20px'><b>First Name</b> :- $fname <br> <b>Last Name</b> :- $lname <br> <b>Email</b> :- $email <br> <b>Phone number</b> :- $number <br> <b>Booking for</b> :- $menu <br> <b>Address</b> :- $address </span>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


    $qry = "insert into booking set first_name='$fname',last_name='$lname',email='$email',phone='$number',booking_for='$menu',address='$address'";
    mysqli_query($conn, $qry) or die("not fire");
    header("location:Booking.php");
}


if (isset($_POST['contact'])) //reg data
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $message = $_POST["message"];
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'utsavuniverse7@gmail.com';                     //SMTP username
        $mail->Password = 'bqfbyrwqlwjcmvwv';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('utsavuniverse7@gmail.com', 'Utsav_Universe');
        $mail->addAddress("utsavuniverse7@gmail.com", 'User');     //Add a recipient
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Contact Details';
        $mail->Body = "<span style='font-size:20px'><b>First Name</b> :- $fname <br> <b>Last Name</b> :- $lname <br> <b>Email</b> :- $email <br> <b>Phone number</b> :- $number <br> <b>Message</b> :- $message";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }



    $qry = "insert into contact set first_name='$fname',last_name='$lname',email='$email',phone='$number',message='$message'";
    mysqli_query($conn, $qry) or die("not fire");
    header("location:Contact.php");
}


?>