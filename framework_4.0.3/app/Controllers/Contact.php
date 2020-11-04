<?php namespace App\Controllers;

// Import PHPMailer classes into the global namespace
use CodeIgniter\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require __DIR__.'\..\..\vendor\autoload.php';

class Contact extends Controller
{

  public function index()
  {
    echo view('contact');
  }

  public function send($value='')
  {
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = $_ENV['mail.Host'];                     // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $_ENV['mail.Username'];                 // SMTP username
    $mail->Password   = $_ENV['mail.Password'];                 // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = $_ENV['mail.Port'];                     // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net');                       // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  }
}

//   $email->setFrom('from@a.com', 'From Name');
//   $email->setTo('to@b.com', 'To Name');
//   $email->setSubject('Such and such and such, etc.');
//   $email->setMessage('Testing the email class');
//
//   if ($email->send())
//   {
//     echo "************* Email sent";
//   }
//   else
//   {
//     echo $email->printDebugger();
//   }
// }
