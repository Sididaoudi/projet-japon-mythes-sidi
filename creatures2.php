<!DOCTYPE html>
<html>
<head>
  <title>Page2</title>
  <link rel="stylesheet" href="css/crea.css">
</head>
<body>

 <?php include("nav.php"); ?>

<header class="masthead clear">
  <div class="centered">

    <div class="site-branding">
      <h1 class="site-title">Liste des créatures</h1>
    </div>
    
  </div>
 
</header>


<main class="main-area">

  <div class="centered">

    <section class="cards">

      <article class="card">
        <a href="#">
          <figure class="thumbnail">
          
          <img src="img/kitsune.jpg" alt="" width=310px height=520px>
          </figure>
          <div class="card-content">
            <h2>Kitsune</h2> <h3> 
            <a href="kitsune.php">Voir la fiche </a> </h3>
          </div>
          <!-- .card-content -->
        </a>
      </article>
      <!-- .card -->



     
     

    </section>
    <!-- .cards -->

  </div>
  <!-- .centered -->

</main>
  
  <div class="container">
  <ul class="pagination">
    <li><a href="creatures.php">1</a></li>
    <li class="active"><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
  </ul>
</div>


</body>



</html>