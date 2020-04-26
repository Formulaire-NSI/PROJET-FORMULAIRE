<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Traitement 1</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	<body>
		<div id="prin">
			<br>
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
					$classe = 'erreur_1';
				}
				if (!empty($_POST['cycle'])) {
					$cycle = $_POST['cycle'];
				}else{
					$cycle = 'erreur';
				}
			?>
			<?php
				if ($nom == 'erreur' or $prénom == 'erreur' or $classe == 'erreur' or $cycle == 'erreur' or $classe == 'erreur_1'){
					if ($nom == 'erreur') {
						echo "<FONT color='red'><b>Vous n'avez pas renseigné votre nom</b></FONT><br>";
					}
					if ($prénom == 'erreur') {
						echo "<FONT color='red'><b>Vous n'avez pas renseigné votre prénom</b></FONT><br>";
					}
					if ($classe == 'erreur_1') {
						echo "<FONT color='red'><b>Pour remplir ce formulaire il faut être en 2nde, 1ère ou terminale</b></FONT><br>";
					}
					if ($cycle == 'erreur') {
						echo "<FONT color='red'><b>Vous n'avez pas renseigné votre cycle</b></FONT><br>";
					}
				}else{
					if ($classe == '1ère' and $cycle == 1) {
						header('Location: Spé_1_gén.html');
					}
					if ($classe == '2nde' and $cycle == 1) {
						header('Location: Spé_2nde_gén.html');
					}
					if ($classe == "terminale" and $cycle == 1) {
						header('Location: Spé_ter_gén.html');
					}
					if ($classe == '2nde' and $cycle == 2 or $classe == '1ère' and $cycle == 2 or $classe == 'terminale' and $cycle == 2) {
						header('Location: Spé_tout_pro.html');
					}
				}
			?>
			<br>
			<form>
				<input type = "button" value = "Retour au formulaire"  onclick = "history.back()">
			</form>
		</div>
	</body>
</html>