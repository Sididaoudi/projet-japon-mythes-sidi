<!DOCTYPE html>
<html>
<head>
	<title>Galerie</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
		<?php include("nav.php"); ?>



<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
 


    <!-- Page Content -->
   <div class="container page-top">



        <div class="row">


            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/kitsune.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/kitsune.jpg" class="zoom img-fluid "  alt="">
                   
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/Amanozako.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/Amanozako.jpg" class="zoom img-fluid "  alt="">
                   
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/Azukitogi.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/Azukitogi.jpg" class="zoom img-fluid "  alt="">
                   
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/baku.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/baku.jpg" class="zoom img-fluid "  alt="">
                   
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/Chimi-Moryo.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/Chimi-Moryo.jpg" class="zoom img-fluid "  alt="">
                   
                </a>
            </div>
            
              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/SekienChochinbi.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/SekienChochinbi.jpg" class="zoom img-fluid "  alt="">
                   
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/Masasumi_Hashihimei.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/Masasumi_Hashihime.jpg" class="zoom img-fluid "  alt="">
                   
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/Basan.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/Basan.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
       </div>


    </div>



</body>

<script type="text/javascript">

$(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
</script>










</body>

<footer>
		  
		  <a href="mentionslegales.php">Mentions légales</a>

		</footer> 



</html>