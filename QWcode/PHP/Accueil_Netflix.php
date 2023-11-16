<!DOCTYPE html>
<html lang ="fr">
	<head>
		<title>Netflix France - Regardez des séries en ligne, Regardez des films en ligne</title>
		<link rel="stylesheet" type="text/css" href="../CSS/Netstyle.css">
		<meta charset="utf-8">
	</head>

	<body>
		<div class="pannel"><img src="../Image/Pannel.jpg" onmousedown="return false"></div>
		<div class="menu"> <!-- Classe Menu : regroupe logo et boutons -->
			<div class="logo"><a href="https://www.netflix.com/fr/"><img src="../Image/Netflix.png" height = "40" onmousedown="return false"></a></div>
			<div class="boutons">
				<div class="langue">Français</div>
				<a href="https://www.netflix.com/fr/login"><div class="connexion">S'identifier</div></a> <!-- Log in a créer plus tard -->
			</div>
		</div>
		<div class="aligntexte">
			<div class="titre">
				<h1>Bénéficiez de séries culte, de films incontournables et bien d'autres avec un ✨ Code Promo ✨.</h1>
			</div>
		</div>
		<div class="code">
			<h2>Code Promotionnel&nbsp<div class="detecte">détecté</div>&nbsp! Connectez-vous ou inscrivez-vous pour l'appliquer.</h2>
		</div>
		<h3>Offre : 1 an d'abonnement gratuit.</h3>
		<h3>code : NF-081-456-256</h3>

		<div class="container">
			<div class="formulaire">
				<label><h1 class="txtLog">S'identifier<h1></label>
				<form action="formulaire.php" method="post" name="formulaire-connexion">
					<input type="email" placeholder="Adresse E-mail" class="Login" name="idlogin" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
					<br>
					<input type="password" placeholder="Mot de passe" class="Pass" name="idpass" required="">
					<br>
					<div class="new"><h6>Création d'un nouveau compte :&nbsp</h6><input type="checkbox" class="userStat" name="idcheck" value="off"></div>
					<input type="submit" name="valider" class="idLog" value="S'identifier" id="idsubmit">
					<div class="check"><h6>Veuillez vérifier que le code promo correspond à celui fourni.</h6></div>
					<div class="end"><h6><a href="https://www.netflix.com/fr/LoginHelp">Mot de passe oublié ?</a></h6></div>
				</form>
			</div>
		</div>
		<br>
		<footer>
			<div class="foot">
				<a href="https://help.netflix.com/fr/node/412">FAQ</a>
				<a href="https://help.netflix.com/fr/">Centre d'aide</a>
				<a href="https://help.netflix.com/legal/corpinfo">Mentions Légales</a>
				<a href="https://help.netflix.com/legal/termsofuse">Conditions d'utilisation</a>
			</div>
		</footer>
	</body>
</html>