<?php
	$nouveau = false;
	if (!isset($_COOKIE["detectionVisite"])) {
		setcookie("detectionVisite", "true", time() + 2592000, "/");
		$nouveau = true;
	}
	if (file_exists("autres/nombreVisites.txt")) {
		$contenuString = file_get_contents("autres/nombreVisites.txt");
		if ($nouveau) {
			$contenuInt = (int)$contenuString;
			$contenuInt++;
			file_put_contents("autres/nombreVisites.txt", $contenuInt);
		}
	$contenuString = file_get_contents("autres/nombreVisites.txt");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Accueil</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="icon" href="imagesPages/logo.png" type="image/png" />
	</head>
	<body>
		<div class="menu">
			<div class="nav" id="nav">
				<a href="accueil.php" class="pageActuelle">Accueil</a>
				<a href="moi.html">À propos de moi</a>
				<a href="competences.html">Compétences</a>
				<a href="bts.html">BTS SIO</a>
				<a href="realisations.html">Réalisations</a>
				<a href="stages.html">Stages</a>
				<a href="veille.html">Veille technologique</a>
				<a href="javascript:void(0);" class="icone" onclick="responsiveNav()">
			  		<i class="fa fa-bars"></i>
				</a>
				<p class="titreBarreNav">Mon portfolio &nbsp&nbsp&nbsp</p>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<center>
			<p class="titreAccueil">
				<u><b>Mon portfolio</b></u>
			</p>
			<br>
			<br>
			<br>
			<img class="imagePage" src="imagesPages/accueil.jpg"><br>
			<br>
			<br>
			<br>
			<p class="contenu">
				Bienvenue, je m'appelle Kévin Rodrigues, je suis actuellement en deuxième année de BTS
				SIO option SLAM, et je vous présente mon portfolio. Celui-ci regroupe mon parcours dans
				cette formation sous la forme d'un site web programmé en HTML5, en CSS3, en PHP et en
				JavaScript, que j'ai programmé moi-même. De plus, le code source du site web est
				librement disponible sur mon GitHub.
			</p>
			<br>
			<br>
			<br>
			<form method="get" action="https://github.com/Rodrigues-Kevin/Portfolio" target="_blank">
				<button type="submit"><b>Code source sur GitHub</b></button>
			 </form>
			<br>
			<br>
			<br>
			<?php
				echo "<p><b>" . $contenuString . " visiteurs uniques depuis le 11/10/2023</b></p>";
			?>
			<br>
			<br>
			<br>
			<br>
			<br>
			<footer class="piedPage">
				<br>
				<p class="contenuPiedPage">
					Rodrigues Kévin - BTS SIO SLAM - Lycée René Descartes - 2022/2024
				</p>
				<br>
			</footer>
		</center>
		<script src="script.js"></script>
	</body>
</html>