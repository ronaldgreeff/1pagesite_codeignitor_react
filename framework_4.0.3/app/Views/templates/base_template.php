<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>medweb</title>
		<meta name="description" content="medical website design and development">

		<!-- Materialize CSS todo: use local not cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	</head>
	<body>
		<?= $this->include('includes\navbar') ?>
		<?= $this->renderSection('content') ?>
		<?= $this->include('templates\footer') ?>
	</body>
</html>
