<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{
		// todo: move to utils
		function getImgUrlsFromFold($folder)
		{
			$base_img_dir = ('assets/img/');
			$files = scandir($base_img_dir.$folder);
			$l = array();
			foreach ($files as $file)
				$l[$file] = base_url($base_img_dir.$folder.'/'.$file);
			return $l;
		}


		$content = [
			"title" => "medweb",
			"descr" => "",
			"logo" => base_url('assets/img/logo.svg'),
			"content_blocks" => [
				["title" => "Experts in med/web", "desc" => "build experiences between clinics and patients", "img" => getImgUrlsFromFold('content1')],
				["title" => "Built around your clinic", "desc" => "built around how you work", "img" => getImgUrlsFromFold('content2')],
				["title" => "Happy, healthy people", "desc" => "The ultimate goal", "img" => getImgUrlsFromFold('content3')],
			],
		];

		// todo: esc here, not in the html - https://codeigniter4.github.io/CodeIgniter4/outgoing/view_renderer.html
		echo view('templates\header', ["title" => "medweb"]);
		echo view('home', $content);
		echo view('templates\footer');
	}
}
