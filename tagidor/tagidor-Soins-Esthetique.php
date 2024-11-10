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
<title><?php echo $lang['titre_tagidor_coiffure_soins_esthetiques']; ?></title>
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
                
                <a href="tagidor-Soins-Esthetique.php?lang=fr"><img class="img-fluid" src="../images/francais-flag.png" alt="Francais" title="Francais"></a>&nbsp;&nbsp;
            <a href="tagidor-Soins-Esthetique.php?lang=en"><img class="img-fluid" src="../images/anglais-flag.png" alt="English" title="English"></a>  

              <!-- 
               <a href="tagidor-Soins-Esthetique.php?lang=fr"style="color: #ffffff;font-family: 'Work Sans', sans-serif; "><b>FR</b></a>
              <a href="tagidor-Soins-Esthetique.php?lang=en"style="color: #ffffff;font-family: 'Work Sans', sans-serif; "><b>Eng</b></a>
                 <!-- <a href="tagidor-contact.html" class="btn btn-default">Make Appointment</a>  -->
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
                  <li  ><a href="tagidor-piscine-jacuzzi.php" title="piscine & Jacuzzi"><?php echo $lang['Piscine_Jacuzzi']; ?></a></li>
                  <li ><a href="tagidor-hamman-turc.php" title="hammam turc"><?php echo $lang['Hammam_Turc']; ?></a></li>
                   <li class="active"><a href="tagidor-Soins-Esthetique.php" title="Soins & Esthetiques"><?php echo $lang['Soins_estetiques']; ?></a></li>
                  <li ><a href="tagidor-Onglerie-Pedicure.php" title="Onglerie & Pedicure"><?php echo $lang['Onglerie_pediocure']; ?></a></li>
                 
                  <li ><a href="tagidor-coiffures.php" title="Coiffures"><?php echo $lang['COIFFURE_MIXTE']; ?></a></li>
                </ul>
              </li>
              
              <li><a href="#" title="Offres" ><?php echo $lang['Offres_cap']; ?></a>
                <ul>
                   <li><a href="tagidor-piscine-jacuzzi-prix.php" title="piscine & Jacuzzi" ><?php echo $lang['Liste_Prix_piscine']; ?></a></li>
                  <li ><a href="tagidor-hamman-turc-prix.php" title="hammam turc" ><?php echo $lang['Liste_Prix_hamman']; ?></a></li>                  
                  <li ><a href="tagidor-Soins-Esthetique-prix.php" title="prix soins & Esthetiques" ><?php echo $lang['Liste_Prix_Soins']; ?></a></li>
                  <li ><a href="tagidor-Onglerie-Pedicure-prix.php" title="prix onglerie & Pedicure" ><?php echo $lang['Liste_Prix_Onglerie']; ?></a></li>
                  <li ><a href="tagidor-coiffures-prix.php" title="prix coiffure" ><?php echo $lang['Liste_Prix_Coiffure']; ?></a></li>
                 
                </ul>
              </li>
    
              
              <li><a href="tagidor-contact.php" title="Contact" class="animsition-link"><?php echo $lang['Contact_cap']; ?></a> </li>
              <li><a href="tagidor-reseaux.php" title="Contact" class="animsition-link"><?php echo $lang['Reseaux_cap']; ?></a> </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<div class="space-medium coiffure">
  <div class="container">
    <div class="row service-titre">
       <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
       <h3><?php echo $lang['SOINS_ESTHETIQUES']; ?>
       </h3>
       </div>   
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 right-arrow pull-right"><a class="a-link pull-right" href="tagidor-Soins-Esthetique-prix.php"><?php echo $lang['Liste_des_prix']; ?></a></div> 
    </div>
    <div class="row">
      <div class="container">
        <section class="images-evernice slider">
          <div class="slide"><img width="400" src="../images/EVERNICE_SOINS/soins1.jpg"></div>
          <div class="slide"><img width="400" src="../images/EVERNICE_SOINS/soins2.jpg"></div>
          <div class="slide"><img width="400" src="../images/EVERNICE_SOINS/soins3.jpg"></div>
          <div class="slide"><img width="400" src="../images/EVERNICE_SOINS/soins4.jpg"></div>
          <div class="slide"><img width="400" src="../images/EVERNICE_SOINS/soins5.jpg"></div>
          <div class="slide"><img width="400" src="../images/EVERNICE_SOINS/soins6.jpg"></div>
          <div class="slide"><img width="400" src="../images/EVERNICE_SOINS/soins7.jpg"></div>
          <div class="slide"><img width="400" src="../images/EVERNICE_SOINS/soins8.jpg"></div>
          <div class="slide"><img width="400" src="../images/EVERNICE_SOINS/soins9.jpg"></div>
        </section>
      </div>
    </div>
    
   
     <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class=" service-block mb0">
              <div class="panel-group catalogue" id="accordion">
                <!-- 1 P -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="panel-title expand">
                      <div class="right-arrow pull-right">+</div>
                      <a href="#" ><?php echo $lang['soins1']; ?></a>
                    </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                      <?php echo $lang['details_soins1']; ?>
                                            
                    </div>
                     <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> <?php echo $lang['Reservez']; ?> </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="<?php echo $lang['phone_tagidor']; ?>" data-rel="external"><span><i class="fa fa-phone"></i></span> <?php echo $lang['Appelez']; ?></a></div>

                  </div>
                  
                </div>
                <!-- 2 P -->
                <div class="panel panel-default">
                 <div class="panel-heading">
                   <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="panel-title expand">
                     <div class="right-arrow pull-right">+</div>
                     <a href="#" ><?php echo $lang['soins2']; ?></a>
                   </h4>
                 </div>
                 <div id="collapse2" class="panel-collapse collapse">
                   <div class="panel-body">
                      <?php echo $lang['details_soins2']; ?>
                      </div>
                     <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> <?php echo $lang['Reservez']; ?> </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="<?php echo $lang['phone_tagidor']; ?>" data-rel="external"><span><i class="fa fa-phone"></i></span> <?php echo $lang['Appelez']; ?></a></div>

                 </div>
                 </div>
                 <!-- 3 p -->
                 <div class="panel panel-default">
                   <div class="panel-heading">
                     <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="panel-title expand">
                       <div class="right-arrow pull-right">+</div>
                       <a href="#" ><?php echo $lang['soins3']; ?></a>
                     </h4>
                   </div>
                   <div id="collapse3" class="panel-collapse collapse">
                     <div class="panel-body">
                      <?php echo $lang['details_soins3']; ?>
                      </div>
                      <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> <?php echo $lang['Reservez']; ?> </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="<?php echo $lang['phone_tagidor']; ?>" data-rel="external"><span><i class="fa fa-phone"></i></span> <?php echo $lang['Appelez']; ?></a></div>

                   </div>
                 </div>
              
              </div>   
          </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class=" service-block mb0">
            <div class="panel-group catalogue" id="accordion1">
              <!-- 7 P -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 data-toggle="collapse" data-parent="#accordion1" href="#collapse7" class="panel-title expand">
                    <div class="right-arrow pull-right">+</div>
                    <a href="#" ><?php echo $lang['soins9']; ?></a>
                  </h4>
                </div>
                <div id="collapse7" class="panel-collapse collapse">
                  <div class="panel-body">
                    <?php echo $lang['details_soins9']; ?>
                                       
                  </div>
                  <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> <?php echo $lang['Reservez']; ?> </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="<?php echo $lang['phone_tagidor']; ?>" data-rel="external"><span><i class="fa fa-phone"></i></span> <?php echo $lang['Appelez']; ?></a></div>

                </div>
                
              </div>
              <!-- 8 P -->
              <div class="panel panel-default">
               <div class="panel-heading">
                 <h4 data-toggle="collapse" data-parent="#accordion1" href="#collapse8" class="panel-title expand">
                   <div class="right-arrow pull-right">+</div>
                   <a href="#" ><?php echo $lang['soins5']; ?></a>
                 </h4>
               </div>
               <div id="collapse8" class="panel-collapse collapse">
                 <div class="panel-body">
                  <?php echo $lang['details_soins5']; ?>
                     </div>
                       <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> <?php echo $lang['Reservez']; ?> </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="<?php echo $lang['phone_tagidor']; ?>" data-rel="external"><span><i class="fa fa-phone"></i></span> <?php echo $lang['Appelez']; ?></a></div>

               </div>
               </div>
               <!-- 9 p -->
               <div class="panel panel-default">
                 <div class="panel-heading">
                   <h4 data-toggle="collapse" data-parent="#accordion1" href="#collapse9" class="panel-title expand">
                     <div class="right-arrow pull-right">+</div>
                     <a href="#" ><?php echo $lang['soins6']; ?></a>
                   </h4>
                 </div>
                 <div id="collapse9" class="panel-collapse collapse">
                   <div class="panel-body">
                     <?php echo $lang['details_soins6']; ?>
                                       </div>
                     <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> <?php echo $lang['Reservez']; ?> </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="<?php echo $lang['phone_tagidor']; ?>" data-rel="external"><span><i class="fa fa-phone"></i></span> <?php echo $lang['Appelez']; ?></a></div>

                 </div>
               </div>
              
            </div>   
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class=" service-block mb0">
          <div class="panel-group catalogue" id="accordion2">
            <!-- 13 P -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 data-toggle="collapse" data-parent="#accordion2" href="#collapse13" class="panel-title expand">
                  <div class="right-arrow pull-right">+</div>
                  <a href="#" ><?php echo $lang['soins7']; ?></a>
                </h4>
              </div>
              <div id="collapse13" class="panel-collapse collapse">
                <div class="panel-body">
                  <?php echo $lang['details_soins7']; ?>
                                    
                </div>
                     <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> <?php echo $lang['Reservez']; ?> </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="<?php echo $lang['phone_tagidor']; ?>" data-rel="external"><span><i class="fa fa-phone"></i></span> <?php echo $lang['Appelez']; ?></a></div>

              </div>
              
            </div>
            <!-- 14 P -->
            <div class="panel panel-default">
             <div class="panel-heading">
               <h4 data-toggle="collapse" data-parent="#accordion2" href="#collapse14" class="panel-title expand">
                 <div class="right-arrow pull-right">+</div>
                 <a href="#" ><?php echo $lang['soins8']; ?></a>
               </h4>
             </div>
             <div id="collapse14" class="panel-collapse collapse">
               <div class="panel-body">
                <?php echo $lang['details_soins8']; ?>
               </div>
              <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> <?php echo $lang['Reservez']; ?> </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="<?php echo $lang['phone_tagidor']; ?>" data-rel="external"><span><i class="fa fa-phone"></i></span> <?php echo $lang['Appelez']; ?></a></div>

             </div>
             </div>
             <!-- 15 p -->
            
          </div>   
      </div>
      </div>
    
    </div>
  </div>
   <!-- Medium Modal -->
<div id="mediumModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><?php echo $lang['Tagidor_RESERVATION']; ?></h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-6">
                      <h3 class="reserve-info"><?php echo $lang['Tagidor_adresse']; ?><br>
                      </h3>
                      <h3>
                        <?php echo $lang['Tagidor_adresse_tel']; ?>
                        
                      </h3>
                  </div>
                  <div class="col-md-6 embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31788.00396608964!2d10.3730016!3d5.1837056!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105fef7b02a8fc37%3A0xaf319ed4ee91f1d9!2sTagidor%20Garden%20Resort%20%26%20Spa!5e0!3m2!1sfr!2scm!4v1630519735865!5m2!1sfr!2scm" 
           allowfullscreen="" loading="lazy"></iframe>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['Fermez']; ?></button>
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
</body>
</html>