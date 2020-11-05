<?php namespace App\Controllers;

use CodeIgniter\Controller;

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
// require __DIR__.'/../../vendor/autoload.php';

class Contact extends Controller
{

  // public function send($value='')
  // {
  //   $mail = new PHPMailer(true);
  //
  //   $mail->isSMTP();// Set mailer to use SMTP
  //   $mail->CharSet = "utf-8";// set charset to utf8
  //   $mail->SMTPAuth = true;// Enable SMTP authentication
  //   $mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted
  //
  //   $mail->Host = $_ENV['mail.Host'];// Specify main and backup SMTP servers
  //   $mail->Port = 587;// TCP port to connect to
  //   $mail->SMTPOptions = array(
  //       'ssl' => array(
  //           'verify_peer' => false,
  //           'verify_peer_name' => false,
  //           'allow_self_signed' => true
  //       )
  //   );
  //   $mail->isHTML(true);// Set email format to HTML
  //
  //   $mail->Username = $_ENV['mail.Username'];// SMTP username
  //   $mail->Password = $_ENV['mail.Password'];// SMTP password
  //
  //   $mail->setFrom($_ENV['mail.From']);//Your application NAME and EMAIL
  //   $mail->addAddress($_ENV['mail.To']);// Target email
  //   $mail->Subject = 'MedWeb Contact';//Message subject
  //   $mail->MsgHTML('HTML code');// Message body
  //
  //   $mail->send();
  // }

  public function index()
  {
    echo view('contact');
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
