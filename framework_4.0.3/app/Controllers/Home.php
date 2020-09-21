<?php namespace App\Controllers;
use CodeIgniter\Controller;

// Allow CORS between localhost:3000 and localhost:8080
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
	die();
}
// Remove the above

class Home extends Controller
{
	public function index()
	{
		return view('home');
	}

	public function data()
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

		return $this->response->setJSON($content);
	}

}
