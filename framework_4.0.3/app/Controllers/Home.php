<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{

		function getImgDir($i) {
			$base_dir = ('assets/img/home/');
			return base_url($base_dir.$i);
		}

		$content = [
			"content_blocks" => [
				["title" => "We <b>bridge the gap</b> between clinical and digital",
					"desc" => "Our team understand how clinics are run and the profound impact of coupling them to a fast, stable digital inteface that patients interact with.",
					"imgs" => getImgDir(1)],
				["title" => "Solutions built around how <b>you</b> work",
					"desc" => "Every clinic is unique. Our systems are tailor made to work how you work, highlight what makes you unique, and extend your experience into the digital world.",
					"imgs" => getImgDir(2)],
				["title" => "We help you <b>deliver</b>.",
					"desc" => "Happy, contented patients. That's what we're all here for.",
					"imgs" => getImgDir(3)],
			],
		];

		echo view('home', $content);

	}
}
