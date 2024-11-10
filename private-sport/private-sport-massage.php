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
<title><?php echo $lang['private_spaort_massage']; ?></title>
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
          <div class="logo">  <a href="evernice-private-sport.php"><img src="../images/Evernice Private Sport WhiteOnBlack.png" alt=""></a> </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 slogan">
        <div class="row">
          <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
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
               <a href="private-sport-massage.php?lang=fr"><img class="img-fluid" src="../images/francais-flag.png" alt="Francais" title="Francais"></a>
              <a href="private-sport-massage.php?lang=en"><img class="img-fluid" src="../images/anglais-flag.png" alt="English" title="English"></a>
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
                  <li class="active"><a href="private-sport-massage.php" title="massage"><?php echo $lang['soins1']; ?></a></li>
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
              
              
            <li><a href="private-sport-contact.php" title="Contact" class="animsition-link"><?php echo $lang['Contact_cap']; ?></a> </li>
              <li><a href="private-sport-contact.php" title="Contact" class="animsition-link"><?php echo $lang['Reseaux_cap']; ?></a> </li>
              
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
       <h3><?php echo $lang['massage_lg']; ?>
        </h3>
       </div>   
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 right-arrow pull-right"><a class="a-link pull-right" href="private-sport-massage-prix.php"><?php echo $lang['Liste_des_prix']; ?> </a></div>   
    </div>
    <div class="row">
      <div class="container">
        <section class="images-evernice slider">
          <div class="slide"><img width="400" src="../images/coiffure/coiffure-evernice (1).jpg"></div>
          <div class="slide"><img width="400" src="../images/coiffure/coiffure-evernice (2).jpg"></div>
          <div class="slide"><img width="400" src="../images/coiffure/coiffure-evernice (3).jpg"></div>
          <div class="slide"><img width="400" src="../images/coiffure/coiffure-evernice (4).jpg"></div>
          <div class="slide"><img width="400" src="../images/coiffure/coiffure-evernice (5).jpg"></div>
          <div class="slide"><img width="400" src="../images/coiffure/coiffure-evernice (6).jpg"></div>
          <div class="slide"><img width="400" src="../images/coiffure/coiffure-evernice (7).jpg"></div>
          
        </section>
      </div>
    </div>
    
   
     <!-- <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class=" service-block mb0">
              <div class="panel-group catalogue" id="accordion">
                <!-- 1 P 
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="panel-title expand">
                      <div class="right-arrow pull-right">+</div>
                      <a href="#" >Shampooing Brushing</a>
                    </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                      gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
                      
                    </div>
                      <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> Reservez </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="tel:+237 699 657 456" data-rel="external"><span><i class="fa fa-phone"></i></span> Appelez</a></div>

                  </div>
                  
                </div>
                <!-- 2 P
                <div class="panel panel-default">
                 <div class="panel-heading">
                   <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="panel-title expand">
                     <div class="right-arrow pull-right">+</div>
                     <a href="#" >Keratine</a>
                   </h4>
                 </div>
                 <div id="collapse2" class="panel-collapse collapse">
                   <div class="panel-body">
                     gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
                   </div>
                     <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> Reservez </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="tel:+237 699 657 456" data-rel="external"><span><i class="fa fa-phone"></i></span> Appelez</a></div>

                 </div>
                 </div>
                 <!-- 3 p 
                 <div class="panel panel-default">
                   <div class="panel-heading">
                     <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="panel-title expand">
                       <div class="right-arrow pull-right">+</div>
                       <a href="#" >Soins Masque</a>
                     </h4>
                   </div>
                   <div id="collapse3" class="panel-collapse collapse">
                     <div class="panel-body">
                       gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
                     </div>
                       <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> Reservez </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="tel:+237 699 657 456" data-rel="external"><span><i class="fa fa-phone"></i></span> Appelez</a></div>

                   </div>
                 </div>
                 <!-- 4 P 
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="panel-title expand">
                      <div class="right-arrow pull-right">+</div>
                      <a href="#" >Coupe Femme</a>
                    </h4>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                      gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
                      
                    </div>
                      <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> Reservez </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="tel:+237 699 657 456" data-rel="external"><span><i class="fa fa-phone"></i></span> Appelez</a></div>

                  </div>
                  
                </div>
                <!-- 5 P 
                <div class="panel panel-default">
                 <div class="panel-heading">
                   <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="panel-title expand">
                     <div class="right-arrow pull-right">+</div>
                     <a href="#" >Coloration</a>
                   </h4>
                 </div>
                 <div id="collapse5" class="panel-collapse collapse">
                   <div class="panel-body">
                     gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
                   </div>
                     <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> Reservez </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="tel:+237 699 657 456" data-rel="external"><span><i class="fa fa-phone"></i></span> Appelez</a></div>

                 </div>
                 </div>
                 <!-- 6 p 
                 <div class="panel panel-default">
                   <div class="panel-heading">
                     <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="panel-title expand">
                       <div class="right-arrow pull-right">+</div>
                       <a href="#" >Defrisage</a>
                     </h4>
                   </div>
                   <div id="collapse6" class="panel-collapse collapse">
                     <div class="panel-body">
                       gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
                     </div>
                       <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> Reservez </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="tel:+237 699 657 456" data-rel="external"><span><i class="fa fa-phone"></i></span> Appelez</a></div>

                   </div>
                 </div>
              </div>   
          </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class=" service-block mb0">
            <div class="panel-group catalogue" id="accordion1">
              <!-- 7 P 
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 data-toggle="collapse" data-parent="#accordion1" href="#collapse7" class="panel-title expand">
                    <div class="right-arrow pull-right">+</div>
                    <a href="#" >Epilation</a>
                  </h4>
                </div>
                <div id="collapse7" class="panel-collapse collapse">
                  <div class="panel-body">
                    gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
                    
                  </div>
                    <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> Reservez </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="tel:+237 699 657 456" data-rel="external"><span><i class="fa fa-phone"></i></span> Appelez</a></div>

                </div>
                
              </div>
              <!-- 8 P 
              <div class="panel panel-default">
               <div class="panel-heading">
                 <h4 data-toggle="collapse" data-parent="#accordion1" href="#collapse8" class="panel-title expand">
                   <div class="right-arrow pull-right">+</div>
                   <a href="#" >Sauna</a>
                 </h4>
               </div>
               <div id="collapse8" class="panel-collapse collapse">
                 <div class="panel-body">
                   gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
                 </div>
                 <div class="visitbtn"><button class="btn btn-primary btn-sm btn-block"><span><i class="fa fa-phone"></i></span> Reservez </button></div>

               </div>
               </div>
               <!-- 9 p 
               <div class="panel panel-default">
                 <div class="panel-heading">
                   <h4 data-toggle="collapse" data-parent="#accordion1" href="#collapse9" class="panel-title expand">
                     <div class="right-arrow pull-right">+</div>
                     <a href="#" >Traitement des Vergetures</a>
                   </h4>
                 </div>
                 <div id="collapse9" class="panel-collapse collapse">
                   <div class="panel-body">
                     gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
                   </div>
                     <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> Reservez </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="tel:+237 699 657 456" data-rel="external"><span><i class="fa fa-phone"></i></span> Appelez</a></div>

                 </div>
               </div>
               <!-- 10 P 
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 data-toggle="collapse" data-parent="#accordion1" href="#collapse10" class="panel-title expand">
                    <div class="right-arrow pull-right">+</div>
                    <a href="#" >Tresses (Nattes & Rasta)</a>
                  </h4>
                </div>
                <div id="collapse10" class="panel-collapse collapse">
                  <div class="panel-body">
                    gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
                    
                  </div>
                    <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> Reservez </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="tel:+237 699 657 456" data-rel="external"><span><i class="fa fa-phone"></i></span> Appelez</a></div>

                </div>
                
              </div>
              <!-- 11 P 
              <div class="panel panel-default">
               <div class="panel-heading">
                 <h4 data-toggle="collapse" data-parent="#accordion1" href="#collapse11" class="panel-title expand">
                   <div class="right-arrow pull-right">+</div>
                   <a href="#" >Babyliss</a>
                 </h4>
               </div>
               <div id="collapse11" class="panel-collapse collapse">
                 <div class="panel-body">
                   gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
                 </div>
                 <div class="visitbtn"><button class="btn btn-primary btn-sm btn-block"><span><i class="fa fa-phone"></i></span> Reservez </button></div>

               </div>
               </div>
               <!-- 12 p 
               <div class="panel panel-default">
                 <div class="panel-heading">
                   <h4 data-toggle="collapse" data-parent="#accordion1" href="#collapse12" class="panel-title expand">
                     <div class="right-arrow pull-right">+</div>
                     <a href="#" >Coiffure Fille</a>
                   </h4>
                 </div>
                 <div id="collapse12" class="panel-collapse collapse">
                   <div class="panel-body">
                     gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
                   </div>
                     <div class="visitbtn hidden-xs hidden-sm"><button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#mediumModal"><span><i class="fa fa-phone"></i></span> Reservez </button></div>
                    <div class="visitbtn hidden-lg hidden-md"><a class="btn btn-primary btn-sm btn-block" href="tel:+237 699 657 456" data-rel="external"><span><i class="fa fa-phone"></i></span> Appelez</a></div>

                 </div>
               </div>
            </div>   
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class=" service-block mb0">
          <div class="panel-group catalogue" id="accordion2">
            <!-- 13 P 
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 data-toggle="collapse" data-parent="#accordion2" href="#collapse13" class="panel-title expand">
                  <div class="right-arrow pull-right">+</div>
                  <a href="#" >Extensions</a>
                </h4>
              </div>
              <div id="collapse13" class="panel-collapse collapse">
                <div class="panel-body">
                  gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
                  
                </div>
                <div class="visitbtn"><button class="btn btn-primary btn-sm btn-block"><span><i class="fa fa-phone"></i></span> Reservez </button></div>

              </div>
              
            </div>
            <!-- 14 P 
            <div class="panel panel-default">
             <div class="panel-heading">
               <h4 data-toggle="collapse" data-parent="#accordion2" href="#collapse14" class="panel-title expand">
                 <div class="right-arrow pull-right">+</div>
                 <a href="#" >Coupe</a>
               </h4>
             </div>
             <div id="collapse14" class="panel-collapse collapse">
               <div class="panel-body">
                 gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
               </div>
               <div class="visitbtn"><button class="btn btn-primary btn-sm btn-block"><span><i class="fa fa-phone"></i></span> Reservez </button></div>

             </div>
             </div>
             <!-- 15 p 
             <div class="panel panel-default">
               <div class="panel-heading">
                 <h4 data-toggle="collapse" data-parent="#accordion2" href="#collapse15" class="panel-title expand">
                   <div class="right-arrow pull-right">+</div>
                   <a href="#" >Barbes</a>
                 </h4>
               </div>
               <div id="collapse15" class="panel-collapse collapse">
                 <div class="panel-body">
                   gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
                 </div>
                 <div class="visitbtn"><button class="btn btn-primary btn-sm btn-block"><span><i class="fa fa-phone"></i></span> Reservez </button></div>

               </div>
             </div>
             <!-- 16 P 
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 data-toggle="collapse" data-parent="#accordion2" href="#collapse16" class="panel-title expand">
                  <div class="right-arrow pull-right">+</div>
                  <a href="#" >Locks</a>
                </h4>
              </div>
              <div id="collapse16" class="panel-collapse collapse">
                <div class="panel-body">
                  gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
                  
                </div>
                <div class="visitbtn"><button class="btn btn-primary btn-sm btn-block"><span><i class="fa fa-phone"></i></span> Reservez </button></div>

              </div>
              
            </div>
            <div class="panel panel-default">
             <div class="panel-heading">
               <h4 data-toggle="collapse" data-parent="#accordion2" href="#collapse17" class="panel-title expand">
                 <div class="right-arrow pull-right">+</div>
                 <a href="#" >Coupe Enfant</a>
               </h4>
             </div>
             <div id="collapse17" class="panel-collapse collapse">
               <div class="panel-body">
                 gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
               </div>
               <div class="visitbtn"><button class="btn btn-primary btn-sm btn-block"><span><i class="fa fa-phone"></i></span> Reservez </button></div>

             </div>
             </div>
             <!-- 18 
             <div class="panel panel-default">
               <div class="panel-heading">
                 <h4 data-toggle="collapse" data-parent="#accordion2" href="#collapse18" class="panel-title expand">
                   <div class="right-arrow pull-right">+</div>
                   <a href="#" >Waves</a>
                 </h4>
               </div>
               <div id="collapse18" class="panel-collapse collapse">
                 <div class="panel-body">
                   gigo iougugo uoa ouiyuat uoao ruyouoyu urt uyaru yh uoy urwytuoryt uoy URTYPOyutryturouT YUGr UTURPGuwg uwg UG
                 </div>
                 <div class="visitbtn"><button class="btn btn-primary btn-sm btn-block"><span><i class="fa fa-phone"></i></span> Reservez </button></div>

               </div>
             </div>
          </div>   
      </div>
  </div>
            -->
      
    
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