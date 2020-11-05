<?php namespace App\Controllers;
use App\Models\FormModel;
use CodeIgniter\Controller;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require __DIR__.'/../../vendor/autoload.php';

class SendMail extends Controller
{
  public function index()
  {
    return view('form_view');
  }

  public function send($value='')
  {
    $mail = new PHPMailer(true);
    $mail->isSMTP();// Set mailer to use SMTP
    $mail->CharSet = "utf-8";// set charset to utf8
    $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted
    $mail->Host = $_ENV['mail.Host'];// Specify main and backup SMTP servers
    $mail->Port = 587;// TCP port to connect to
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->isHTML(true);// Set email format to HTML

    $mail->Username = $_ENV['mail.Username'];// SMTP username
    $mail->Password = $_ENV['mail.Password'];// SMTP password
    $mail->Subject = 'MedWeb Contact';//Message subject
    $mail->addAddress($_ENV['mail.To']);// Target email
    $mail->setFrom($_ENV['mail.From']);//Your application NAME and EMAIL

    $enquirer_email = $this->request->getVar('enquirer_email');
    $enquirer_phone = $this->request->getVar('enquirer_phone');
    $enquirer_message = $this->request->getVar('enquirer_message');

    $mail->MsgHTML("{$enquirer_email}<br>{$enquirer_phone}<br><br>{$enquirer_message}");// Message body

    $mail->send();
  }
}
