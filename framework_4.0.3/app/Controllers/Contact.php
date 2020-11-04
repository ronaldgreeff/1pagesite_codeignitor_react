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
    $email = \Config\Services::email();

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
