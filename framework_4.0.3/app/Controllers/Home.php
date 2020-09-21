<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{
		function getImgUrlsFromFold($folder)
		{
			$base_img_dir = ('assets/img/');
			$files = scandir($base_img_dir.$folder);
			$l = array();
			foreach ($files as $file)
				$l[$file] = base_url($base_img_dir.$folder.$file);
			return $l;
		}

		$company = "medweb";
		$logo = base_url('assets/img/logo.svg');

		$content = [
			"title" => $company,
			"logo" => $logo,
			"content_blocks" => [
				["title" => "Experts in med/web", "desc" => "build experiences between clinics and patients", "img" => getImgUrlsFromFold('content1')],
				["title" => "Built around your clinic", "desc" => "built around how you work", "img" => getImgUrlsFromFold('content2')],
				["title" => "Happy, healthy people", "desc" => "The ultimate goal", "img" => getImgUrlsFromFold('content3')],
			],
		];

		echo view('home', $content);

		// see this - https://forum.codeigniter.com/thread-69456-post-362185.html#pid362185
		// https://blog.cacan.id/codeigniter-3-back-end-react-js-front-end/

		// echo view('templates/header', ["title" => $company, "logo" => $logo]);
		// echo view('contents', $content);
		// echo view('templates/footer');
	}
}
