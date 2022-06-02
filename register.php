<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Balthazar&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
  
<?php
require('config.php');
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username); 
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  //requéte SQL + mot de passe crypté
    $query = "INSERT into `users` (username, email, password)
              VALUES ('$username', '$email', '".hash('sha256', $password)."')";
  // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo " 


            <div class='inscritclean'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
    }
}else{
?>
<a class="header" href="homepage.php"><header>BUBBLE WAVES</header></a>
    <nav>
      <section class="navbar">
        <a href="tarif.php">TARIF</a>
        <a href="homepage.php">CONTACT</a>
      </section>
    </nav>
    <hr>
<form class="box" action="" method="post">
  <h1 class="box-logo box-title"> </h1>
    <h1 class="box-title">S'inscrire</h1>
  <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
    <input type="text" class="box-input" name="email" placeholder="Email" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</form>
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
<?php } ?>
</body>
</html>