<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>medweb &bull; medical website design</title>
		<meta name="description" content="medical website design and development">

		<link rel="stylesheet" href="assets/css/custom.css">
		<!-- Materialize CSS todo: use local not cdn -->
    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <script src="assets/js/materialize.min.js"></script>
		<script src="assets/js/materialize_load.js"></script>

	</head>
	<body>
		<div id="page" class="site">
			<?= $this->include('includes\header') ?>
			<?= $this->renderSection('content') ?>
			<?= $this->include('includes\footer') ?>
		</div>
	</body>
</html>
