<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Traitement Terminale g&eacuten&eacuterale</title>
	</head>
	<body>
		<?php
			$choix_1 = $_POST['spé_1'];
			$choix_2 = $_POST['spé_2'];
			$spé_ab = $_POST['spé_ab'];
			$message = $_POST['message'];
			if ($choix_1 == $choix_2) {
				echo "<b>Vous avez choisi plusieurs spécialités identiques<b><br>";
			}elseif ($spé_ab == $choix_1 or $spé_ab == $choix_2) {
					echo "<b>Vous comptez abandonner une spécialité que vous avez gardée, ce n'est pas possible<b><br>";
			}else{
				header ('Location: Réussite.html');
			}
		?>
	</body>
</html>