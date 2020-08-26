<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<header>
			<div class="menu">
				<li class="logo">
					<a href="#" title="MedWeb Logo">
						<img alt="Visit medweb" height="50px"
							src="<?php echo base_url('img/medweb_logo__plain_inverse.svg'); ?>" />
					</a>
				<?php foreach ($menu_items as $menu_item): ?>
					<li class="menu_item">
						<a href="#<?= esc($menu_item); ?>">
							<?= esc($menu_item); ?>
						</a>
					</li>
				<?php endforeach; ?>
				</li>
			</div>
		</header>
