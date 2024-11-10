<?php 
include_once '../common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../images/favicon-logo evernice.png" rel="shortcut icon" type="image/x-icon">
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
         <div class="logo"> <a href="evernice-tagidor.php"><img src="../images/TAGIDOR By Evernice YellowOnBlack.png" alt=""></a> </div>
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

            <a href="tagidor-reseaux.php?lang=fr"><img class="img-fluid" src="../images/francais-flag.png" alt="Francais" title="Francais"></a>&nbsp;&nbsp;
            <a href="tagidor-reseaux.php?lang=en"><img class="img-fluid" src="../images/anglais-flag.png" alt="English" title="English"></a>  

              <!--

                   <a href="tagidor-reseaux.php?lang=fr"style="color: #ffffff;font-family: 'Work Sans', sans-serif; "><b>FR</b></a>
              <a href="tagidor-reseaux.php?lang=en"style="color: #ffffff;font-family: 'Work Sans', sans-serif; "><b>Eng</b></a>
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

          <ul>
              
              <li class="active"><a  href="../index.php" title="Home" class="animsition-link"><?php echo $lang['Accueil']; ?></a>
                <ul>
                  <li><a href="../beauty-spa/evernice-beauty-spa.php" title="EverNice Beauty&Spa"><?php echo $lang['entreprise1']; ?></a></li>
                  <li><a href="../espace-prive/evernice-espace-prive.php" title="EverNice Espace Privé"><?php echo $lang['entreprise2']; ?></a></li>
                <li class="active"><a href="evernice-tagidor.php" title=" Evernice & Tagidor"> <?php echo $lang['entreprise3']; ?></a></li>
 <!--<li><a href="../private-sport/evernice-private-sport.php" title="Evernice Private Sport&Spa"><?php //echo $lang['entreprise4']; ?></a></li>-->                
                </ul>
              </li>
              <li><a href="#" title="Service List" ><?php echo $lang['Prestations_cap']; ?></a>
                <ul >
                  <li><a href="tagidor-piscine-jacuzzi.php" title="piscine & Jacuzzi"><?php echo $lang['Piscine_Jacuzzi']; ?></a></li>
                  <li ><a href="tagidor-hamman-turc.php" title="hammam turc"><?php echo $lang['Hammam_Turc']; ?></a></li>
                   <li ><a href="tagidor-Soins-Esthetique.php" title="Soins & Esthetiques"><?php echo $lang['Soins_estetiques']; ?></a></li>
                  <li ><a href="tagidor-Onglerie-Pedicure.php" title="Onglerie & Pedicure"><?php echo $lang['Onglerie_pediocure']; ?></a></li>
                 
                  <li ><a href="tagidor-coiffures.php" title="Coiffures"><?php echo $lang['COIFFURE_MIXTE']; ?></a></li>
                </ul>
              </li>
              
              <li><a href="#" title="Offres" ><?php echo $lang['Offres_cap']; ?></a>
                <ul>
                   <li><a href="tagidor-piscine-jacuzzi-prix.php" title="piscine & Jacuzzi" ><?php echo $lang['Liste_Prix_piscine']; ?></a></li>
                  <li ><a href="tagidor-hamman-turc-prix.php" title="hammam turc" ><?php echo $lang['Liste_Prix_hamman']; ?></a></li>                  
                  <li><a href="tagidor-Soins-Esthetique-prix.php" title="prix soins & Esthetiques" ><?php echo $lang['Liste_Prix_Soins']; ?></a></li>
                  <li ><a href="tagidor-Onglerie-Pedicure-prix.php" title="prix onglerie & Pedicure" ><?php echo $lang['Liste_Prix_Onglerie']; ?></a></li>
                  <li ><a href="tagidor-coiffures-prix.php" title="prix coiffure" ><?php echo $lang['Liste_Prix_Coiffure']; ?></a></li>
                 
                </ul>
              </li>
              
              <li class="active"><a href="tagidor-contact.php" title="Contact" class="animsition-link"><?php echo $lang['Contact_cap']; ?></a> </li>
              <li><a href="tagidor-reseaux.php" title="Contact" class="animsition-link"><?php echo $lang['Reseaux_cap']; ?></a> </li>
              
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
         <?php echo $lang['Reseaux']; ?>  
       </div>
       </div>      
    </div>
    <div class="row">
      <div class="container">
       <section class="images-evernice slider">
            <div class="slide"><img width="400" src="../images/network/network (1).jpg"></div>
            <div class="slide"><img width="400" src="../images/network/network (2).jpg"></div>
            <div class="slide"><img width="400" src="../images/network/network (3).jpg"></div>
            <div class="slide"><img width="400" src="../images/network/network (4).jpg"></div>
            <div class="slide"><img width="400" src="../images/network/network (5).jpg"></div>
            <div class="slide"><img width="400" src="../images/network/network (6).jpg"></div>
            <div class="slide"><img width="400" src="../images/network/network (7).jpg"></div>
            <div class="slide"><img width="400" src="../images/network/network (8).jpg"></div>
            <div class="slide"><img width="400" src="../images/network/network (9).jpg"></div>
            <div class="slide"><img width="400" src="../images/network/network (10).jpg"></div>
            <div class="slide"><img width="400" src="../images/network/network (11).jpg"></div>
            <div class="slide"><img width="400" src="../images/network/network (12).jpg"></div>
            <div class="slide"><img width="400" src="../images/network/network (13).jpg"></div>
            <div class="slide"><img width="400" src="../images/network/network (14).jpg"></div>
            <div class="slide"><img width="400" src="../images/network/network (15).jpg"></div>
            <div class="slide"><img width="400" src="../images/network/network (16).jpg"></div>
            <div class="slide"><img width="400" src="../images/network/network (17).jpg"></div>
            <div class="slide"><img width="400" src="../images/network/network (18).jpg"></div>
          </section>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 evernice-contact">
        <div class="row">
         <div class="horaire col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h3><?php echo $lang['reseaux_entreprise1']; ?></h3> 
          
            <a target="blank" href="https://mobile.facebook.com/evernicebeautyspa" data-rel="external" > <img width="40" src="../images/piscine/facebook.png" style="width:30px;height: 30px;border-radius: 50px;"></a>&nbsp;&nbsp;

             <a target="blank" href="https://www.youtube.com/channel/UCl0to5NlvIr56nVcJNzrG3A" data-rel="external" > <img width="40" src="../images/piscine/youtube.png" style="width:30px;height: 30px;border-radius: 50px;"></a>&nbsp;&nbsp;

             <a target="blank"  data-rel="external" > <img width="40" src="../images/piscine/instagram0.jpg" style="width:30px;height: 30px;border-radius: 50px;"></a>&nbsp;&nbsp;

             <a target="blank" href="https://vm.tiktok.com/ZMNkqU8ak/" data-rel="external" > <img width="40" src="../images/piscine/tiktok1.png" style="width:30px;height: 30px;border-radius: 50px;"></a>&nbsp;&nbsp;
           
          </div>


           <div class="horaire col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <h3><?php echo $lang['reseaux_entreprise2']; ?></h3> 
        
            <a target="blank" href="https://web.facebook.com/evernicebeautyspa" data-rel="external" > <img width="40" src="../images/piscine/facebook.png" style="width:30px;height: 30px;border-radius: 50px;"></a>&nbsp;&nbsp;

             <a target="blank" href="https://www.youtube.com/channel/UCzyygNU-9uVADA788wb1fRw" data-rel="external" > <img width="40" src="../images/piscine/youtube.png" style="width:30px;height: 30px;border-radius: 50px;"></a>&nbsp;&nbsp;

             <a target="blank"  data-rel="external" > <img width="40" src="../images/piscine/instagram0.jpg" style="width:30px;height: 30px;border-radius: 50px;"></a>&nbsp;&nbsp;

             <a target="blank"  data-rel="external" > <img width="40" src="../images/piscine/tiktok1.png" style="width:30px;height: 30px;border-radius: 50px;"></a>&nbsp;&nbsp;
          </div>


            <div class="horaire col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <h3><?php echo $lang['reseaux_entreprise3']; ?></h3> 
            <a target="blank" href="https://tagidorgardenresort.com/" data-rel="external" ><img width="40" src="../images/piscine/website.png" style="width:30px;height: 30px;border-radius: 50px;">  </a>&nbsp;&nbsp;

            <a target="blank" href="https://web.facebook.com/tagidorgardenresort" data-rel="external" > <img width="40" src="../images/piscine/facebook.png" style="width:30px;height: 30px;border-radius: 50px;"></a>&nbsp;&nbsp;

             <a target="blank" href="https://www.instagram.com/tagidorgardenresort/?hl=fr"  data-rel="external" > <img width="40" src="../images/piscine/instagram0.jpg" style="width:30px;height: 30px;border-radius: 50px;"></a>&nbsp;&nbsp;

             <a target="blank" href="https://www.tiktok.com/@tagidor"  data-rel="external" > <img width="40" src="../images/piscine/tiktok1.png" style="width:30px;height: 30px;border-radius: 50px;"></a>&nbsp;&nbsp;

             <a target="blank" href="https://mobile.twitter.com/tagidorresort/status/1503079552289021956" data-rel="external" > <img width="40" src="../images/piscine/twitter.jpg" style="width:30px;height: 30px;border-radius: 50px;"></a>
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
<!-- <script type="text/javascript" src="js/jquery.sticky.js"></script> 
<script type="text/javascript" src="js/sticky-header.js"></script>  -->
<!-- animsition --> 
<script type="text/javascript" src="js/animsition.js"></script> 
<script type="text/javascript" src="js/animsition-script.js"></script> 

<script src="../js/slick.js" type="text/javascript" charset="utf-8"></script> 
<script src="../js/blog-carousel.js" type="text/javascript" charset="utf-8"></script> 
<!-- Back to top script --> 
<script src="js/back-to-top.js" type="text/javascript"></script> 

</body>
</html>
