<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
		<?php include("nav.php"); ?>

		<?php include("footer.inc.php"); ?>


<div class="container">
  <form action="action_page.php">

    <label for="fname">Nom</label>
    <input type="text" id="fname" name="firstname" placeholder="">

    <label for="lname">Prénom</label>
    <input type="text" id="lname" name="lastname" placeholder="">


    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="" style="height:60px"></textarea>

    <input type="submit" value="Envoyer">

  </form>
</div>


</section>





































</body>





</html>