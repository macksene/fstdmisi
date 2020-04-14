 <!DOCTYPE html>
<html lang="en">
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

  <?php   session_start();

if(!isset($_SESSION['cnx']) or $_SESSION['cnx']==false )
{
  header('location:index.php');
}
$i=1;
include('cnx.php');
?>

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
    <section class="banner_area" data-stellar-background-ratio="0.3">
        <h2>UTILISATEURS DE L'APPLICATION</h2>
    </section>
    <!-- End Banner area -->
    <?php           
   $ID=$_SESSION['id_user'];
  
   $sql = "SELECT * FROM admin where id_user=$ID "; 
  
   
   
   $result=$db->query($sql);  
  
   $data=$result->fetchAll(PDO::FETCH_ASSOC);
  foreach ($data as $donnee){

  }         
  
          
  ?>  
  <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row col-sm-12 ">
              
                    
                    <h2>LISTE DE UTILISATEURS</h2>
                    <?php include('tableau_article.php'); ?>
                     

            </div>
        </div>
    </section>
    <!-- End All contact Info -->

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
