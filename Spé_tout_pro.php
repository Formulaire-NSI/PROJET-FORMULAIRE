<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Traitement cycle pro</title>
	</head>
	<body>
		<?php
			if (!empty($_POST["cycle_pro"])) {
				$choix = $_POST["cycle_pro"];
			}else{
				$choix = 'erreur';
			}
			$message = $_POST['message'];
			if ($choix == 'erreur') {
				echo "<b>Vous n'avez pas choisi de branche<b><br>";
			}else{
				header ('Location: Réussite.html');
			}
		?>
	</body>
</html>