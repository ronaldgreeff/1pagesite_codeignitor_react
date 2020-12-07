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
					"desc" => "Helping you deliver exemplary patient services online.",
					"imgs" => getImgDir(1)],
				["title" => "We tailor solutions to how <b>you</b> work",
					"desc" => "",
					"imgs" => getImgDir(2)],
				["title" => "We deliver satisfaction.",
					"desc" => "uniqueness/And drive desired outcomes through a strong online presence.",
					"imgs" => getImgDir(3)],
			],
		];

		echo view('home', $content);

	}
}
