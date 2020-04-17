<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Traitement 1</title>
	</head>
	<body>		
		<?php
			if (!empty($_POST['nom'])) {
				$nom = $_POST['nom'];
			}else{
				$nom = 'erreur';
			}
			if (!empty($_POST['prénom'])) {
				$prénom = $_POST['prénom'];
			}else{
				$prénom = 'erreur';
			}
			if (!empty($_POST['classe'])) {
				$classe = $_POST['classe'];
			}else{
				$classe = 'erreur';
			}
			if (!empty($_POST['cycle'])) {
				$cycle = $_POST['cycle'];
			}else{
				$cycle = 'erreur';
			}
		?>
		<?php
			if ($nom == 'erreur' or $prénom == 'erreur' or $classe == 'erreur' or $cycle == 'erreur' or $classe == 'erreur_1'){
				if ($nom != 'erreur') {
					echo "C'est bon pour votre nom<br>";
				}else{
					echo "<b>Vous n'avez pas renseigné votre nom</b><br>";
				}
				if ($prénom != 'erreur') {
					echo "C'est bon pour votre prénom<br>";
				}else{
					echo "<b>Vous n'avez pas renseigné votre prénom</b><br>";
				}
				if ($classe != 'erreur') {
					if ($classe == 'erreur_1') {
						echo "<b>Pour remplir ce formulaire il faut être un 1ère</b><br>";
					}else{
						echo "C'est bon pour votre classe<br>";
					}
				}else{
					echo "<b>Vous n'avez pas renseigné votre classe</b><br>";
				}
				if ($cycle != 'erreur') {
					echo "C'est bon pour votre cycle<br>";
				}else{
					echo "<b>Vous n'avez pas renseigné votre cycle</b><br>";
				}
			}else{
				if ($classe == '1ère' and $cycle == 1) {
					header('Location: Spé_1_gén.html');
				}
				if ($classe == '2nde' and $cycle == 1) {
					header('Location: Spé_2nde_gén.html');
				}
			}
		?>
	</body>
</html>