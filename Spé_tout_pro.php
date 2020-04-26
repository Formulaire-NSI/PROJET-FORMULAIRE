<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Traitement cycle pro</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	<body>
		<div id="prin">
			<br>
			<?php
				if (!empty($_POST["cycle_pro"])) {
					$choix = $_POST["cycle_pro"];
				}else{
					$choix = 'erreur';
				}
				$message = $_POST['message'];
				if ($choix == 'erreur') {
					echo "<FONT color='red'><b>Vous n'avez pas choisi de branche<b></FONT><br>";
				}else{
					header ('Location: Réussite.html');
				}
			?>
			<br>
			<form>
				<input type = "button" value = "Retour au formulaire"  onclick = "history.back()">
			</form>
		</div>
	</body>
</html>