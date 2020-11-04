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

			// todo: main background image, optional background and foreground
			// $l['background'] = base_url($base_dir.'/background'.$i.'.svg');
			// $l['foreground'] = base_url($base_dir.'/foreground'.$i.'.svg');
			// $l['main_desktop'] = base_url($base_dir.'/main_desktop'.$i.'.svg');
			// $l['main_mobile'] = base_url($base_dir.'/main_mobile'.$i.'.svg');

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
