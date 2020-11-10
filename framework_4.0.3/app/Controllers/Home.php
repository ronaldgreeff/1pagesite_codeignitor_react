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
					"desc" => "We understand how clinics are run and couple on a fast, stable patient interfaces.",
					"imgs" => getImgDir(1)],
				["title" => "Solutions built around how <b>you</b> work",
					"desc" => "Your clinic is unique. Your digital presence should reflect that, aligning to <b>your</b> processes.",
					"imgs" => getImgDir(2)],
				["title" => "We help you <b>deliver</b>.",
					"desc" => "Drive desired outcomes through a strong online presence.",
					"imgs" => getImgDir(3)],
			],
		];

		echo view('home', $content);

	}
}
