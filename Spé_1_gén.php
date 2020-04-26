<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Traitement 1&egravere g&eacuten&eacuterale</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	<body>
		<div id="prin">
			<br>
			<?php
				$choix_1 = $_POST['spé_1'];
				$choix_2 = $_POST['spé_2'];
				$choix_3 = $_POST['spé_3'];
				$spé_ab = $_POST['spé_ab'];
				$message = $_POST['message'];
				if ($choix_1 == $choix_2 or $choix_1 == $choix_3 or $choix_2 == $choix_3) {
					echo "<FONT color='red'><b>Vous avez choisi plusieurs spécialités identiques<b></FONT><br>";
				}elseif ($spé_ab != "jsp") {
					if ($spé_ab != $choix_1 xor $spé_ab != $choix_2 xor $spé_ab != $choix_3) {
						echo "<FONT color='red'><b>Vous comptez abandonner une spécialité que vous n'avez pas choisi, ce n'est pas possible<b></FONT><br>";
					}else{
						header ('Location: Réussite.html');
					}
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