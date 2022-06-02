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
session_start();
if (isset($_POST['username'])){
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: index.php");
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>
<a class="header" href="homepage.php"><header>BUBBLE WAVES</header></a>
    <nav>
      <section class="navbar">
        <a href="tarif.php">TARIF</a>
        <a href="homepage.html">CONTACT</a>
      </section>
    </nav>
    <hr>
<form class="box" action="" method="post" name="login">
<h1 class="box-logo box-title">Bubble Waves</h1>
<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
<br> <br> <br>
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
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>

<?php } ?>

</form>
</body>
</html>