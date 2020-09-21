<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>

		<style>
		html, body {
			height: 100%;
			border: 0;
			margin: 0;
		}
		.container {
			background-color: lightgreen;
		  display: flex;
			align-items: center;
			width: 100%;
			/* overflow-y: hidden; */
			height: 100%;
		}
		.item {
			/* flex: 0 0 auto; */
			background-color: lightblue;
			height: 100vh;
			min-width: 100%;
			width: 100vw;
		}
		.centered-container {
			display: flex;
			justify-content: center;
		}
		</style>

	</head>
	<body>
		<header>
			<div class="menu" style="display: none;">
				<a href="#" title="MedWeb Logo">
					<img alt="Visit medweb" height="50px"
						src="<?= esc($logo); ?>" />
				</a>
			</div>
		</header>
