<?php 
include_once 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/favicon-logo evernice.png" rel="shortcut icon" type="image/x-icon">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="EverNice est un centre de beauté et bien-être de reference à Douala, Cameroun ">
<meta name="keywords" content="Soins Esthetiques,Onglerie, Pedicure,Coiffure, EverNice, page d'accueil">
<title><?php echo $lang['titre1']; ?></title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Style css -->
<link rel="stylesheet" href="css/style.css">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/fontello.css">
<!-- animsition css -->
<link rel="stylesheet" type="text/css" href="css/animsition.min.css">
<!-- owl Carousel Css -->
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">
<!-- Font css -->
<link rel="stylesheet" href="css/imagehover.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7cLibre+Baskerville:400,400i,700" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="animsition">
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="logo ">
  <a  href="index.php">
    <img class="hidden-xs hidden-sm" src="images/Evernice WhiteOnBlack.png" alt="">
    <img class="hidden-lg hidden-md" style="height:35px;" src="videos/02_EverNice3Soc1920x200.gif" alt="">
  </a> 
</div>
      </div>




      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 slogan">
        <div class="row">
          
          <div class="col-lg-8 col-md-8 col-sm-6 col-xs-8">
            <div class="time-block" align="center">
              <h3 class="time"><?php echo $lang['titre']; ?></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-4" >
            <div class="top-btn">
            <a href="index.php?lang=fr"><img class="img-fluid" src="images/francais-flag.png" alt="Francais" title="Francais"></a>
            <a href="index.php?lang=en"><img class="img-fluid" src="images/anglais-flag.png" alt="English" title="English"></a>
            <!-- <a href="contact.html" class="btn btn-default">Make Appointment</a>  -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- navigation -->
<div class="navigation-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="navigation" id="navigation" >
          <ul >
            
            <li class="active "><a href="index.php" title="Home" class="animsition-link"><?php echo $lang['Accueil']; ?></a>
              <ul >
                <li><a href="beauty-spa/evernice-beauty-spa.php" title="EverNice Beauty&Spa"><?php echo $lang['entreprise1']; ?></a></li>
                <li><a href="espace-prive/evernice-espace-prive.php" title="EverNice Espace Privé"><?php echo $lang['entreprise2']; ?></a></li>
                <li><a href="tagidor/evernice-tagidor.php" title=" Evernice & Tagidor"> <?php echo $lang['entreprise3']; ?></a></li>
                <li><a href="private-sport/evernice-private-sport.php" title="Evernice Private Sport&Spa"><?php echo $lang['entreprise4']; ?></a></li>
                
              </ul>
            </li>
            
            
            <li ><a href="#" title="prestations" class="lien-inactif"><?php echo $lang['Prestations']; ?></a> 
            <li ><a href="#" title="offres" class="lien-inactif"><?php echo $lang['Offres']; ?></a>
            <li ><a href="#" title="contact" class="lien-inactif"><?php echo $lang['Contact']; ?></a>
            <li ><a href="#" title="reseaux" class="lien-inactif"><?php echo $lang['Reseaux']; ?></a>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="hero-section">
  <!-- navigation -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-lg-offset-3 col-sm-offset-3">
        <div class="hero-caption home">
            <div class="row intro">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="hero-title" style="font-style: italic;"><?php echo $lang['bienvenue_evernice']; ?></h1>
                <p class="hero-text " >
                  <?php echo $lang['details_bienvenue']; ?>
                </p>
                <p class="pull-right"><i>Valérie Parisod</i></p>
              </div>
            </div> 
            <div class="row choix-evernice">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" align="center">
                <a href="beauty-spa/evernice-beauty-spa.php" class="btn btn-block"> <?php echo $lang['sous_entreprise1']; ?> </a>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a href="espace-prive/evernice-espace-prive.php" class="btn btn-block"><?php echo $lang['sous_entreprise2']; ?>  </a>
              </div>
            
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" align="center">
                <a href="private-sport/evernice-private-sport.php" class="btn btn-block"> <?php echo $lang['sous_entreprise3']; ?></a>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a href="tagidor/evernice-tagidor.php" class="btn btn-block" > <?php echo $lang['sous_entreprise4']; ?> </a>
              </div>
            </div>
        </div>
         
      </div>
    </div>
  </div>
</div>







<div class="tiny-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php echo $lang['copy_right']; ?>.</div>
    </div>
  </div>
</div>
<!-- back to top icon -->
<a href="#0" class="cd-top" title="Go to top">Top</a>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/menumaker.js"></script>
<!-- animsition -->
<script type="text/javascript" src="js/animsition.js"></script>
<script type="text/javascript" src="js/animsition-script.js"></script>
<!-- sticky header -->
<!-- <script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/sticky-header.js"></script> -->
<!-- testimonial-carousel--> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/testimonial-carousel.js"></script> 
<!-- Back to top script -->
<script src="js/back-to-top.js" type="text/javascript"></script>

</body>
</html>
