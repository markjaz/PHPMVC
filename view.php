<!DOCTYPE html>
<!-- The view determines the presentation and format of the data to be sent
to or obtained from the user. -->
<html lang="en-US">
	<head>
		<title>Products</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Products</h1>
		<?php
			foreach ($products as $product): ?>
			<!-- Uses PHP 'short tag' syntax meaning 'php echo()': -->
			<h2>Name: <?= htmlspecialchars($product['name']) ?></h2>
			<p>Description: <?= htmlspecialchars($product['description']) ?></p>
		<?php endforeach; ?>
	</body>
</html>