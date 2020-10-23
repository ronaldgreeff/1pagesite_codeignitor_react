<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>medweb</title>
		<meta name="description" content="medical website design and development">
	</head>
	<body>
		<?= $this->include('templates\navbar') ?>
		<?= $this->renderSection('content') ?>
	</body>
</html>
