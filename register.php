<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<?php
// REGISTER USER

if (isset($_POST['reg_user'])) {

// receive all input values from the form

$username = mysqli_real_escape_string($db, $_POST['username']);

$email = mysqli_real_escape_string($db, $_POST['email']);

$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);

$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

// form validation: ensure that the form is correctly filled ...

// by adding (array_push()) corresponding error unto $errors array

if (empty($username)) { array_push($errors, "Username is required"); }

if (empty($email)) { array_push($errors, "Email is required"); }

if (empty($password_1)) { array_push($errors, "Password is required"); }

if ($password_1 != $password_2) {

array_push($errors, "The two passwords do not match");

}

// first check the database to make sure

// a user does not already exist with the same username and/or email

$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";

$result = mysqli_query($db, $user_check_query);

$user = mysqli_fetch_assoc($result);

if ($user) { // if user exists

if ($user['username'] === $username) {

array_push($errors, "Username already exists");

}

if ($user['email'] === $email) {

array_push($errors, "email already exists");

}

}
// Finally, register user if there are no errors in the form

if (count($errors) == 0) {

$password = md5($password_1);//encrypt the password before saving in the database

echo $password ;

$query = "INSERT INTO users(username, email, password)

VALUES('$username', '$email', '$password')";

mysqli_query($db, $query);

$_SESSION['username'] = $username;

$_SESSION['success'] = "You are now logged in";

header('location: login.php');

}

}




?>



<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Créer mon compte</h4>
	
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter-t"></i> <a href="https://twitter.com/explore">Se connecter via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> <a href="https://www.facebook.com/">Se connecter via Facebook</a>

		<br>
	</p>

	<form>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Nom" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="adress mail" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+33</option>
		    <option value="1">+1</option>
		    <option value="2">+44</option>
		    <option value="3">+32</option>
		</select>
    	<input name="" class="form-control" placeholder="telephone" type="text">
    
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
		<br>
		<br>
        <input class="form-control" placeholder="creer mon mot de passe" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="confirmer le mot de passe" type="password">
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Créer mon compte  </button>
    </div> <!-- form-group// -->    

    <br>  
    <p class="text-center">Déjà inscrit ? <a href="login.php">Se connecter</a> </p>

    <a href="index.php">Retour à l'accueil</a>

</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
