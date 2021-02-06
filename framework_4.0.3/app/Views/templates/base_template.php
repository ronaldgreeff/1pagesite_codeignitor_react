<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>medweb &bull; medical website design</title>
		<meta name="description" content="medical website design and development">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="assets/css/custom.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Materialize CSS todo: use local not cdn -->
    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <script src="assets/js/materialize.min.js"></script>
		<script src="assets/js/materialize_load.js"></script>

	</head>
	<body>
		<div id="page" class="site">
			<?= $this->include('includes/header') ?>
				<div class="valign center">
					<?= $this->renderSection('home') ?>
				</div>
			<?= $this->include('includes/footer') ?>
		</div>
	</body>
</html>
