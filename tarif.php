<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="tarifs.css">
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Balthazar&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<title> Bubble Waves</title>
</head>
<body>
	<a class="header" href="homepage.php"><header>BUBBLE WAVES</header></a>
		<nav>
			<section class="navbar">
				<a href="tarif.php">TARIF</a>
				<a href="homepage.php">CONTACT</a>
			</section>
		</nav>
	<?php 
		session_start();
  	if(!isset($_SESSION["username"])){
  		echo '
	<button class="inscrire"type="button">
    	<a href="register.php"> S INSCRIRE</a>
	</button>
	<button class="account"type="button">
    	<a href="login.php"> MON COMPTE</a>
	</button>';}
	else{
		echo '<div class="sucess">
    <h6>Bonjour '. $_SESSION['username']. '</h6>
    </div>
    <div class="deco">
    <a href="logout.php">Déconnexion</a>
    </div>';
	}
?>
	<hr>

	<div class="imgtarif">
		<h4>Formule simple :</h4>
		<img src="res/tarif.png" alt="tarif" width="500px">
		<br><br><br>
		<h4>Formule spéciale :</h4>
		<img src="res/tarif2.png" alt="tarif" width="505px">
	</div>

	<footer>
	<div class="footermain">
		<div class="partfooter">
			<h3>A propos</h3>
			<ul>  
				<li>Notre Histoire</li>
				<li>CGU</li>
			</ul>
		</div>

		<div class="partfooter">
			<h3>Nous contacter</h3>
			<ul>  
				<li>01 23 45 67 89</li>
				<li>BubbleWaves@gmail.com</li>
			</ul>
		</div>

		<div class="partfooter">
			<h3>Mentions légales</h3>
				
		</div>
			<div class="partfooter">
			<h3>Réseaux sociaux</h3>
				<ul>
					<li>Facebook</li>
					<li>Instagram</li>
					<li>Twitter</li>
				</ul>
		</div>
	</div>

	</footer>

	

</body>
</html>