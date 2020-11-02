<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>medweb &bull; medical website design</title>
		<meta name="description" content="medical website design and development">

		<link rel="stylesheet" href="assets/css/custom.css">
		<!-- Materialize CSS todo: use local not cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	</head>
	<body>
		<?= $this->include('includes\navbar') ?>
		<?= $this->renderSection('content') ?>
		<?= $this->include('includes\footer') ?>
	</body>
</html>
