<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{
		function getImgDir($i) {
			$base_dir = ('assets/img/home/');
			return base_url($base_dir.$i);

			// todo: main background image, optional background and foreground
			// $l['background'] = base_url($base_dir.'/background'.$i.'.svg');
			// $l['foreground'] = base_url($base_dir.'/foreground'.$i.'.svg');
			// $l['main'] = base_url($base_dir.'/main_desktop'.$i.'.svg');
			// $l['main_mobile'] = base_url($base_dir.'/main_mobile'.$i.'.svg');

			return $l;
		}

		$content = [
			"content_blocks" => [
				["title" => "Experts in med/web",
					"desc" => "Build experiences between clinics and patients. Never let anyone know what you are thinking. Fredo, you're my older brother, and I love you. But don't ever take sides with anyone against the Family again. Ever. I'm your older brother, Mike, and I was stepped over! I want your answer and the money by noon tomorrow. And one more thing. Don't you contact me again, ever. From now on, you deal with Turnbull. My father's name was Antonio Andolini... and this is for you.",
					"imgs" => getImgDir(1)],
				["title" => "Built around your clinic",
					"desc" => "built around how you work. When they come... they come at what you love. Don't ever give an order like that again. Not while I'm alive. I see you took the name of the town. What was your father's name? What's the matter with you, huh? What am I going to do? Am I going to make that baby an orphan before he's born? Is that why you slapped my brother around in public?",
					"imgs" => getImgDir(2)],
				["title" => "Happy, healthy people",
					"desc" => "The ultimate goal. Your enemies always get strong on what you leave behind. I don't like violence, Tom. I'm a businessman; blood is a big expense. Don't you know that I would use all of my power to prevent something like that from happening? I'm gonna make him an offer he can't refuse. Never hate your enemies. It affects your judgment.",
					"imgs" => getImgDir(3)],
			],
		];

		echo view('home', $content);

	}
}
