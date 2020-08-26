<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{

		$header_data = [
			'title' => "medweb",
			'menu_items' => ["who", "what", "why"],
		];

		$content = [
			'content_blocks' => [
				['s' => "Who we are", 't' => "Experts in clinical", 'u' => "who"],
				['s' => "What we do", 't' => "Build solutions around how you work", 'u' => "what"],
				['s' => "Why we do it", 't' => "Happy, healthy people", 'u' => "why"],
			],
		];

		echo view('templates/header', $header_data);
		echo view('home', $content);
		echo view('templates/footer');
	}
}
