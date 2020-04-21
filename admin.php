<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="css/crea.css">
</head>
<body>

<?php include("nav.php"); ?>

<?php

$pdo = new PDO('mysql::host=localhost;dbname=japon_mythes', 'root',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION))

?>

<form class="box" action="" method="post">
  
    <h1 class="box-title">Se connecter</h1>
  <input type="text" class="box-input" name="username" 
  placeholder="Nom d'utilisateur" required />
  
  
    <input type="password" class="box-input" name="password" 
  placeholder="Mot de passe" required />
  
    <input type="submit" name="submit" 
  value="S'inscrire" class="box-button" />
  
    <p class="box-register">Déjà inscrit? 
  <a href="login.php">Connectez-vous ici</a></p>
</form>

</body>
</html>