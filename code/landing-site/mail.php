<?php
ob_start();
session_start();

if (isset($_POST['contact_submit'])) {

  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $service = $_POST['services'] ? $_POST['services'] : 'Not required';
  $message = $_POST['message'] ? $_POST['message'] : 'Not required';
}
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// //Load Composer's autoloader
// require 'vendor/autoload.php';

// //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
  //Server settings
  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'mohnish101998@gmail.com';                     //SMTP username
  $mail->Password   = 'lrmlsmeqznniqxmb';                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
  $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  // $mail->Host       = 'mail.ewallhost.com';                     //Set the SMTP server to send through
  // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  // $mail->Username   = 'promo@ewallhost.com';                     //SMTP username
  // $mail->Password   = '4D8z2G8uZ';                               //SMTP password
  // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
  // $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $mail->setFrom($email, $username);
  // $mail->addAddress('promo@ewallhost.com', 'eWallHost');     //Add a recipient
  $mail->addAddress('mohnish101998@gmail.com');               //Name is optional
  // $mail->addReplyTo('info@example.com', 'Information');
  // $mail->addCC('cc@example.com');
  // $mail->addBCC('bcc@example.com');

  //Attachments
  // $mail->addAttachment('../assets/image/');         //Add attachments


  //Content
  $mail->isHTML(true);              //Set email format to HTML
  $mail->Subject =  "Confirmation of Your Contact Form Submission";
  $mail->Body    = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Mail Ewallhost</title>
        <style>
          .page-wrapper{
            width: 600px;
            margin: 0 auto;
          }
        .e-title{
            color: orangered;
            text-align: center;
        }
        .e-logo{
          text-align: center;
          margin-bottom: 20px;
        }
        .e-logo img{
          width: 200px;
        }
        
        table,th,td{
            border: 1px solid black;
            width: 600px;
            border-collapse: collapse;
        }
        tr{
            height: 60px;
            text-align: center;
        }
        th{
            background-color: #f6f6f6;
        }
        td:hover{
            background-color: #f1f1f1;
        }
    </style>
    </head>
    <body>
   
        <div class="page-wrapper">
          <div>
            <!-- <h2 class="e-title"> Contact Form</h2> -->

              <div class="e-logo">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrJYQQA28C7Bm2_kyrB4zf96d0__HZsCzogZpHOYgGPA&s" alt="eWALLhost-logo">
              </div>
        </div>
        <table>
            <tr>
                <th>Name</th>
                <td>' . $username . '</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>' . $email . '</td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>' . $mobile . '</td>
            </tr>
            <tr>
                <th>Service</th>
                <td>' . $service  . '</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>' . $message . '</td>
            </tr>
        </table>
        </div>
    </body>
    </html>';
  // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  if ($mail->send()) {
    $_SESSION['status'] = "Message has been sent successfully. We will reach you soon!";
  } else {
    $_SESSION['status_failed'] = "Something went wrong, please try again later!";
  }

  header('location:./index.php');
} catch (Exception $e) {
  $_SESSION['status_failed'] = "Please enter a valid email address";
  header('location:./index.php');
  // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
