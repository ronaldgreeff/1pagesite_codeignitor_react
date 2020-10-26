<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{
		function getHomeContentImgUrl($i) {
			$base_dir = ('assets/img/home/');
			$l = array();
			$l['d'] = base_url($base_dir.'/d'.$i.'.svg');
			$l['m'] = base_url($base_dir.'/m'.$i.'.svg');
			return $l;
		}

		$content = [
			"content_blocks" => [
				["title" => "Experts in med/web",
					"desc" => "build experiences between clinics and patients",
					"imgs" => getHomeContentImgUrl(1)],
				["title" => "Built around your clinic",
					"desc" => "built around how you work",
					"imgs" => getHomeContentImgUrl(2)],
				["title" => "Happy, healthy people",
					"desc" => "The ultimate goal",
					"imgs" => getHomeContentImgUrl(3)],
			],
		];

		echo view('home', $content);

	}
}
