<!DOCTYPE html>
<html>
	<head>
		<title> G�n�rateur de Code Barres Code 128</title>
	</head>

	<body>

		<h1>G�n�rateur de Code Barres Code 128</h1>
		<?php
			require_once 'barcode.php';
			if ( isset($_GET['c'])) {
				$code=$_GET['c'];
				$image = barcode::image($code);
				imagejpeg($image, 'image.jpg');
			}
		?>

		<form method="get">
			<label>Code barre � g�n�rer</label>
			<input type="text" name="c" />
			<input type="submit" />
		</form>

		<br/> <br/> <br />

		<?php if ( isset($_GET['c']) ) { ?>
		<img src="image.jpg" />
		<br />
		<?php echo $code; ?>
		<?php } ?>

	</body>
</html>

