<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    // Validate and sanitize inputs
    $userName = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $userEmail = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $userMobile = isset($_POST['mobile']) ? htmlspecialchars($_POST['mobile']) : '';
    $userMessage = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    $userCountry= isset($_POST['userCountry']) ? htmlspecialchars($_POST['userCountry']) : '';

    // Validate email
    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email address';
    }

    if (empty($errors)) {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'sandbox.smtp.mailtrap.io';                       // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = '59e6c32e9d5c10';                 // SMTP username
            $mail->Password   = '9b14e80edc23c1';           // SMTP password or App-specific password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption
            $mail->Port       = 587;                                    // TCP port to connect to

            // Recipients
            $mail->setFrom($userEmail, $userName);
            $mail->addAddress('gabodev603@noefa.com');                  // Add a recipient

            // Content
            $mail->isHTML(true);                                        // Set email format to HTML
            $mail->Subject = "Confirmation of Your Contact Form Submission";
            $mail->Body    = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title> Mail Ewallhost</title>
                <style>
                  .page-wrapper {
                    width: 600px;
                    margin: 0 auto;
                  }
                  .e-title {
                    color: orangered;
                    text-align: center;
                  }
                  .e-logo {
                    text-align: center;
                    margin-bottom: 20px;
                  }
                  .e-logo img {
                    width: 200px;
                  }
                  table, th, td {
                    border: 1px solid black;
                    width: 600px;
                    border-collapse: collapse;
                  }
                  tr {
                    height: 60px;
                    text-align: center;
                  }
                  th {
                    background-color: #e7f2fa;
                  }
                  td:hover {
                    background-color: #f1f1f1;
                  }
                </style>
            </head>
            <body>
                <div class="page-wrapper">
                  <div>
                    <div class="e-logo">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrJYQQA28C7Bm2_kyrB4zf96d0__HZsCzogZpHOYgGPA&s" alt="eWALLhost-logo">
                    </div>
                  </div>
                  <table>
                      <tr>
                          <th>Name</th>
                          <td>' . $userName . '</td>
                      </tr>
                      <tr>
                          <th>Email</th>
                          <td>' . $userEmail . '</td>
                      </tr>
                      <tr>
                          <th>Mobile</th>
                          <td>' . $userMobile . '</td>
                      </tr>
                      <tr>
                          <th>Country</th>
                          <td>' . $userCountry . '</td>
                      </tr>
                      <tr>
                          <th>Message</th>
                          <td>' . $userMessage . '</td>
                      </tr>
                  </table>
                </div>
            </body>
            </html>';

            // Send the email
            $mail->send();
            echo json_encode(['status' => 'success', 'message' => 'Message sent successfully. We will get back to you shortly!']);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo]);
        }
    } else {
        echo json_encode(['status' => 'error', 'errors' => $errors]);
    }
} 