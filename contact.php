<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/formulaire.css">
</head>

<body>
		<?php include("nav.php"); ?>


<div class="container">
  <form action="action_page.php">

    <label for="fname">Votre nom</label>
    <input type="text" id="fname" name="firstname" placeholder="...">

    <label for="lname">Votre Prénom</label>
    <input type="text" id="lname" name="lastname" placeholder="...">

    <label for="country">Pays</label>
    <select id="country" name="country">
      <option value="france">France</option>
      <option value="états-unis">Etats-unis</option>
    </select>

    <label for="subject">Sujet</label>
    <textarea id="subject" name="subject" placeholder="..." style="height:60px"></textarea>

    <input type="submit" value="Envoyer">

  </form>
</div>


</section>





































		<footer>
		  
		  <a href="mentionslegales.php">Mentions légales</a>

		</footer> 

</body>





</html>