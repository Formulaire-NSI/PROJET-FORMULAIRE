<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Traitement 1&egravere g&eacuten&eacuterale</title>
	</head>
	<body>
		<?php
			$choix_1 = $_POST['spé_1'];
			$choix_2 = $_POST['spé_2'];
			$choix_3 = $_POST['spé_3'];
			$spé_ab = $_POST['spé_ab'];
			$message = $_POST['message'];
			if ($choix_1 == $choix_2 or $choix_1 == $choix_3 or $choix_2 == $choix_3) {
				echo "<b>Vous avez choisi plusieurs spécialités identiques<b><br>";
			}elseif($spé_ab != $choix_1 xor $spé_ab != $choix_2 xor $spé_ab != $choix_3) {
				echo "<b>Vous comptez abandonner une spécialité que vous n'avez pas choisi, ce n'est pas possible<b><br>";
			}else{
				header ('Location: Réussite.html');
			}
		?>
	</body>
</html>