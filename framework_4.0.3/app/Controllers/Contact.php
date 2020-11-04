<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Contact extends Controller
{

  public function index()
  {
    echo view('contact');
  }

  public function send($value='')
  {
    // $this->library('email');
    //
    $email = \Config\Services::email();

    $config = array(
      'mailtype'>"html",
    );

    // $config['protocol']    = 'smtp';
    // $config['smtp_host']    = 'ssl://smtp.gmail.com';
    // $config['smtp_port']    = '465';
    // $config['smtp_timeout'] = '7';
    // $config['smtp_user']    = 'sender_mailid@gmail.com';
    // $config['smtp_pass']    = 'password';
    // $config['charset']    = 'utf-8';
    // $config['newline']    = "\r\n";
    // $config['mailtype'] = 'text';
    // $config['validation'] = TRUE; // bool whether to validate email or not

    $email->initialize($config);
    $email->setFrom('from@a.com', 'From Name');
    $email->setTo('to@b.com', 'To Name');
    $email->setSubject('Such and such and such, etc.');
    $email->setMessage('Testing the email class');

    if ($email->send())
    {
      echo "************* Email sent";
    }
    else
    {
      echo $email->printDebugger();
    }
  }

}
