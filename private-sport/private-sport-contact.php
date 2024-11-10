<?php 
include_once '../common.php';
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
<link rel="stylesheet" href="../css/style.css">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/fontello.css">
<!-- animsition css -->
<link rel="stylesheet" type="text/css" href="css/animsition.min.css">
<!-- owl Carousel Css -->
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/carousel.css" rel="stylesheet" type="text/css" >
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
          <div class="logo"> <a href="evernice-private-sport.php"><img src="../images/Evernice Private Sport WhiteOnBlack.png" alt=""></a> </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 slogan">
        <div class="row"><!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
              <div class="call-block">
                <h3 class="call-no">(+237) 655 94 33 26</h3>
                <p class="call-text">Besoin d'aide?</p>
              </div>
            </div> -->
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
              <div class="time-block" align="center">
              <h3 class="time"><?php echo $lang['titre']; ?></h3>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <div class="top-btn">
                <a href="#"><img class="img-fluid" src="../images/francais-flag.png" alt="Francais" title="Francais"></a><a href="#"><img class="img-fluid" src="../images/anglais-flag.png" alt="English" title="English"></a>
                 <!-- <a href="private-sport-contact.html" class="btn btn-default">Make Appointment</a>  -->
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
           <ul>
              
              <li class="active"><a  href="../index.php" title="Home" class="animsition-link"><?php echo $lang['Accueil']; ?></a>
                <ul>
                  <li><a href="../beauty-spa/evernice-beauty-spa.php" title="EverNice Beauty&Spa"><?php echo $lang['entreprise1']; ?></a></li>
                  <li><a href="../espace-prive/evernice-espace-prive.php" title="EverNice Espace Privé"><?php echo $lang['entreprise2']; ?></a></li>
                <li ><a href="../tagidor/evernice-tagidor.php" title=" Evernice & Tagidor"> <?php echo $lang['entreprise3']; ?></a></li>
                 <li class="active"><a href="evernice-private-sport.php" title="Evernice Private Sport&Spa"><?php echo $lang['entreprise4']; ?></a></li>
                
                </ul>
            
              </li>
              <li><a href="#" title="Service List" ><?php echo $lang['Prestations_cap']; ?></a>
                <ul>
                  <li  ><a href="private-sport-musculation.php" title="Musculation"> <?php echo $lang['Musculation']; ?></a></li>
                  <li><a href="private-sport-cardio-training.php" title="Cardio Training"><?php echo $lang['Cardio_Training']; ?></a></li>
                  <li ><a href="private-sport-natation.php" title="Natation"><?php echo $lang['Natation']; ?></a></li>
                  <li ><a href="private-sport-massage.php" title="massage"><?php echo $lang['soins1']; ?></a></li>
                  <li><a href="private-sport-danse.php" title="Danse"><?php echo $lang['Danse']; ?></a></li>
                  <li ><a href="private-sport-conseil-nutrition.php" title="Conseils Nutrition"><?php echo $lang['Conseils_Nutrition']; ?></a></li>
                </ul>
              </li>
              <li><a href="#" title="offres" ><?php echo $lang['Offres_cap']; ?></a>
                <ul>
                  <li ><a href="private-sport-musculation-prix.php" title="Musculation"><?php echo $lang['Liste_Prix_Musculation']; ?></a></li>
                  <li><a href="private-sport-cardio-training-prix.php" title="Cardio Training"><?php echo $lang['Liste_rix_Cardiotraining']; ?></a></li>
                  <li ><a href="private-sport-natation-prix.php" title="Natation"><?php echo $lang['Liste_Prix_Natation']; ?></a></li>
                  <li ><a href="private-sport-massage-prix.php" title="massage"><?php echo $lang['DanListe_Prix_massage']; ?></a></li>
                  <li><a href="private-sport-danse-prix.php" title="Danse"><?php echo $lang['Liste_Prix_Natation']; ?></a></li>
                  <li ><a href="private-sport-conseil-nutrition-prix.php" title="Conseils Nutrition"><?php echo $lang['Liste_Prix_Conseils']; ?></a></li>
                </ul>
              </li>
              
              
             <li class="active"><a href="private-sport-contact.php" title="Contact" class="animsition-link"><?php echo $lang['Contact_cap']; ?></a> </li>
              <li><a href="private-sport-contact.php" title="Contact" class="animsition-link"><?php echo $lang['Reseaux_cap']; ?></a> </li>
              
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="space-small">
  <div class="container">
    
    <div class="row evernice-en">
      <div class="evernice-title col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
        <div class="section-title">
                    CONTACT <small> <b> - Private Sport</b></small>
        </div>
       </div>      
    </div>
    <div class="row">
      <div class="container">
        <section class="images-evernice slider">
          <div class="slide"><img width="400" src="../images/EVERNICE_beauty-spa/EVERNICE beauty-spa (1).jpg"></div>
          <div class="slide"><img width="400" src="../images/EVERNICE_beauty-spa/EVERNICE beauty-spa (2).jpg"></div>
          <div class="slide"><img width="400" src="../images/EVERNICE_beauty-spa/EVERNICE beauty-spa (3).jpg"></div>
          <div class="slide"><img width="400" src="../images/EVERNICE_beauty-spa/EVERNICE beauty-spa (4).jpg"></div>
          <div class="slide"><img width="400" src="../images/EVERNICE_beauty-spa/EVERNICE_SOINS (2).jpg"></div>
          <div class="slide"><img width="400" src="../images/EVERNICE_beauty-spa/EVERNICE_SOINS (3).jpg"></div>
          
          
        </section>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 evernice-contact">
        <div class="row">
         <div class="horaire col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3><?php echo $lang['Horaires']; ?></h3>
            <p><?php echo $lang['Horaires_details']; ?></p>
          </div>
          <div class="contact col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3><?php echo $lang['Contact']; ?></h3>
            <p><?php echo $lang['Horaires_details_email']; ?></p>
            
          </div>
          <div class="contact col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="tel:(+237) 655 94 33 26" data-rel="external" class="reserve"><i class=" icon-phone-call icon-secondary icon-1x"> </i> <?php echo $lang['Contact_phone13']; ?> </a> 
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

               <a href="tel:(+237) 679 47 38 95" data-rel="external" class="reserve"><i class=" icon-phone-call icon-secondary icon-1x"> </i> <?php echo $lang['Contact_phone2']; ?> </a>
            </div>
          </div>
        </div>
        </div>
        
          <div class="infos-plus col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3><?php echo $lang['Rendez_vous']; ?> </h3>
            <p><?php echo $lang['Rendez_vous_details']; ?> </p>

            <h3><?php echo $lang['Ponctualite']; ?> </h3>
            <p> <?php echo $lang['Ponctualite_details']; ?></p>

            <h3><?php echo $lang['Hygiene_protection']; ?> </h3>
            <p><?php echo $lang['Hygiene_protection_details']; ?></p>

            <p><?php echo $lang['Hygiene_protection_details2']; ?> </p>

          </div>
        
        
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div  class="row">
          <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
            <iframe style="width: inherit; border-width: 0px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.9961356536252!2d9.700341196981197!3d4.023560217849279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106112c76fffffff%3A0x4915a4d8d67aaaf2!2sEvernice%20Beauty%20%26%20SPA!5e0!3m2!1sen!2scm!4v1629124017003!5m2!1sen!2scm" 
             height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>

<div class="tiny-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php echo $lang['copy_right']; ?></div>
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
<!-- sticky header --> 
<script type="text/javascript" src="js/jquery.sticky.js"></script> 
<script type="text/javascript" src="js/sticky-header.js"></script> 
<!-- animsition --> 
<script type="text/javascript" src="js/animsition.js"></script> 
<script type="text/javascript" src="js/animsition-script.js"></script> 
<script src="../js/slick.js" type="text/javascript" charset="utf-8"></script> 
<script src="../js/blog-carousel.js" type="text/javascript" charset="utf-8"></script>
<!-- Back to top script --> 
<script src="js/back-to-top.js" type="text/javascript"></script> 
<script>
    function initMap() {
        var myLatLng = {
            lat: 23.0225,
            lng: 72.5714
        };

        var map = new google.maps.Map(document.getElementById('googleMap'), {
            zoom: 8,
            center: myLatLng,
            scrollwheel: false,

        });
        var image = 'images/map-pin.png';
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: image,
            title: 'Hello World!'

        });
    }
    </script> 
<script src="https://maps.googleapis.com/maps/api/js?&callback=initMap" async defer></script>
</body>
</html>
