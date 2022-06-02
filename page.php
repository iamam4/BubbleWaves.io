<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Balthazar&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<title> Bubble Waves</title>
</head>
<body>
	<a class="header" href="homepage.php"><header id="uptostory">BUBBLE WAVES</header></a>
		<nav>
			<section class="navbar">
				<a href="tarif.php">TARIF</a>
				<a href="#downtocontact">CONTACT</a>
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
			<img class="slide1" src="res/slide1.jpg" alt="slide1">
			<img class="logo" src="res/Bubble Waves.png" alt="logo">

	<h1 class="titre">BUBBLE WAVES</h1>

	

	<div class="barrestyle"></div>

			<p class="presentation" > Chez Bubble Waves, nous sommes des experts des cheveux et de la barbe, à votre service dans le but de vous offrir une parenthèse de plaisir et de sublimer votre barbe, votre moustache et votre chevelure.
Nous vous accueillons à Meaux dans le salon à la décoration élégante et feutrée. <br><br>
Vous bénéficierez d’un travail réalisé dans la tradition la plus fidèle des barbiers d’antan. Dès votre arrivée un rafraîchissement au bar et un café de qualité vous seront proposés. Ensuite suivront les services de coupe de cheveux, de rasage à l’ancienne, de taille de barbe, ou de coloration. Et pour parfaire nos prestations, nous n’oublions pas de prendre soin de vous avec une serviette chaude et les meilleures huiles pour hydrater et parfumer votre barbe. <br> <br>
Si trois hommes sur quatre reconnaissent aller chez le coiffeur par nécessité, chez Les Barboristes, vous viendrez une première fois par curiosité et reviendrez pour le plaisir. Notre volonté est d’offrir aux hommes de tous âges, tous styles, toutes professions, une parenthèse de plaisir entre les mains de nos experts et qu’ils en sortent conquis.</p>

	<button class="rdv"type="button">
    	<a href="#">PRENDRE RENDEZ-VOUS</a>
	</button>
	<button class="discover"type="button">
    	<a href="#">DÉCOUVRIR NOTRE SHOP</a>
	</button>

	<h2 id="downtocontact">CONTACT ET ACCÈS</h2>
	<div class="barrestyle2"></div>

	<img class="contact"src="res/contact.png">
	<button class="rdv2"type="button">
    	<a href="#">PRENDRE RENDEZ-VOUS</a>
	</button>


		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2619.9286207213!2d2.8757514155909094!3d48.95484500186457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e8a11cceb9ee4f%3A0x143615de96b042c5!2sIUT%20De%20Meaux%20Universit%C3%A9%20Gustave%20Eiffel!5e0!3m2!1sfr!2sfr!4v1648410108878!5m2!1sfr!2sfr" width="600" height="488" style="border: 1px solid black; margin-bottom: 3.5px; margin-left: 130px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<footer>
	<div class="footermain">
		<div class="partfooter">
			<h3>A propos</h3>
			<ul>  
				<a href="#uptostory" style="text-decoration: none; color: white;"><li>Notre Histoire</li></a>
				<li>CGU</li>
			</ul>
		</div>

		<div class="partfooter">
			<h3>Nous contacter</h3>
			<ul>  
				<a href="tel:+33123456789"style="text-decoration: none; color: white;"><li>01 23 45 67 89</li></a>
				<a href="mailto:BubbleWaves@gmail.com" style="text-decoration: none; color: white;"><li>BubbleWaves@gmail.com</li></a>
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
	<p class="copyright">Bubble Waves &copy 2022</p>
	

</body>
</html>
