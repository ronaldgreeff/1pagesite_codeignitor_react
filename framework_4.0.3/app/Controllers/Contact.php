<?php namespace App\Controllers;

use CodeIgniter\Controller;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require __DIR__.'/../../vendor/autoload.php';

class Contact extends Controller
{
  public function index()
  {
    return view('contact');
  }

  public function send($value='')
  {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->CharSet = "utf-8";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = $_ENV['mail.Host'];
    $mail->Port = 587;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->isHTML(true);

    $mail->Username = $_ENV['mail.Username'];
    $mail->Password = $_ENV['mail.Password'];
    $mail->Subject = 'MedWeb Contact';
    $mail->addAddress($_ENV['mail.To']);
    $mail->setFrom($_ENV['mail.From']);

    $enquirer_full_name = $this->request->getVar('enquirer_full_name');
    $enquirer_email = $this->request->getVar('enquirer_email');
    $enquirer_phone = $this->request->getVar('enquirer_phone');
    $enquirer_message = $this->request->getVar('enquirer_message');

    $mail->MsgHTML("
      {$enquirer_full_name}
      <br><br>
      {$enquirer_message}
      <br><br>
      {$enquirer_phone}
      <br>
      {$enquirer_email}
      ");

    $mail->send();
  }
}
