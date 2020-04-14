<!DOCTYPE html>
<html lang="en">
<?php   session_start();

if(!isset($_SESSION['cnx']) or $_SESSION['cnx']==false )
{
  header('location:index.php');
}
$i=1;
include('cnx.php');
$ID=$_SESSION['id_user'];
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UCAD / FST / Departement Mathématique et Informatique</title>

    <!-- Favicon -->
    <link rel="icon" href="../images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="../vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
    <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="../vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
    <link rel="stylesheet" type="text/css" href="../vendors/owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="all" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head> 
<body>
   
<!-- Preloader -->
    <div class="preloader"></div>
<?php   
    include('menu_top.php'); 
?>	

        <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>INFORMATIONS</h2>
    </section>
    <!-- End Banner area -->

   <!-- blog area -->
    <section class="blog_all">
        <div class="container">
            <div class="row m0 blog_row">
                <div class="col-sm-8 main_blog">
                    <?php 
                            $q0 =  "select * from articles where type_a='actualite'order by id_a DESC";
                            $r0 = $db -> query($q0) ;
                            $cp0=0;
                            while (($c0 = $r0 -> fetch()) && ($cp0<1))
                            {
                                $cp0++;
                            ?> 
                    <img src="../images/<?php echo $c0['photo_a'] ; ?>" alt="" width="700" heigth="360">
                    
                    <div class="col-xs-11 blog_content">
                        <a class="blog_heading" href="#"><?php echo $c0['titre_a'] ; ?></a>
                        <a class="blog_admin" href="#"><i class="fa fa-user" aria-hidden="true"></i><?php echo $c0['auteur_a'] ; ?></a>
                        <ul class="like_share">
                            <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>3</a></li>
                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>10</a></li>
                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul>
                        <p><?php echo $c0['texte_a'] ; ?></p>
                        
                    </div>
                    
                    <?php
                            }
                            ?>
                    
                </div>




                <div class="col-sm-4 widget_area">
                    <div class="resent">
                        <h3>RECENT POSTS</h3>
                    <?php 
                            $q =  "select * from articles where type_a='actualite'order by id_a DESC";
                            $r = $db -> query($q) ;
                            $cp=0;
                            while (($c = $r -> fetch()) && ($cp<9))
                            {
                                $cp++;
                            ?> 
                    
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="../images/<?php echo $c['photo_a'] ; ?>" alt="Post" width="60" heigth="60" >
                                </a>
                            </div>
                            <div class="media-body">
                                <a href=""><?php echo $c['description_a'] ; ?></a>
                                <h6>publié le <?php echo $c['date_a'] ; ?></h6>
                            </div>
                        </div>
                        
                        <?php
                            }
                            ?>
                    </div>
                     </div>
                    
                  
                </div>
            </div>
        </div>
    </section>
    <!-- End blog area -->


<!-- Footer Area -->
    <footer class="footer_area">
        <div class="copyright_area">
            Copyright 2019 All rights reserved. Designed by <a href="#">SECTION INFORMATIQUE.</a>
        </div>
    </footer>
    <!-- End Footer Area -->
        <!-- jQuery JS -->
    <script src="../js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="../vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="../vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="../vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="../vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="../vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="../vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="../vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="../vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="../vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="../js/theme.js"></script>
</body>
</html>
