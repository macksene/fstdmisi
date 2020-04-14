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
        <h2>AJOUT D'UN ARTICLE</h2>
    </section>
    <!-- End Banner area -->
   <?php


if(isset($_POST['btn']))
{

  if(empty($_POST['type_a']) and empty($_POST['titre_a']))
 {  
        
 }else
 {

$photo=null;
if(isset($_FILES['Photo']))
$photo=$_FILES['Photo'];
if($_FILES['Photo']['name'])
 {
 
$extensions_valides = array( 'jpg','png','gif');
$extension_upload = strtolower(  substr(  strrchr($_FILES['Photo']['name'], '.')  ,1)  );
if ( in_array($extension_upload,$extensions_valides) ) 
{
$uploaddir = '../images/';
$uploadfile = $uploaddir . basename($_FILES['Photo']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['Photo']['tmp_name'], $uploadfile)) {
 echo "<table><tr><td></td><td><img src='../images/".$_FILES['Photo']['name']."' width='90px' /></td></tr></table>";   
$Photo=$_FILES['Photo']['name']; 
$nomphoto=$_FILES['Photo']['tmp_name']; 
} else {
    echo "Le telechargement n'est de la photo n'est pas correctement effectué veuillez le refaire:\n";
}
echo '</pre>';
} else echo"Vous ne pouvez pas envoyer ce type de fichier <br>seuls les photos sont permises";
}
      
  $sql2 = 'INSERT INTO articles VALUES ("0","'.$_POST['type_a'].'","'.$_POST['titre_a'].'","'.$_POST['description_a'].'","'.$_POST['texte_a'].'","'.$_POST['date_a'].'","'.$Photo.'","'.$_SESSION['Login'].'")'; 
 
 $db->exec($sql2);        
 
echo '<div class="alert bg-success" role="alert">
           Votre article est bien enregistrer! <a href="#" class="pull-right"></a>
        </div>'; 
 } 
}
 ?>


  <!-- All contact Info -->
 <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-12 contact_info send_message">
                  <div class="col-sm-offset-1 contact_info send_message">  
                  <div class="col-sm-10 contact_info send_message">
                    <form enctype="multipart/form-data"  method="post" class="form-inline contact_box" >
                      <fieldset>
                        <legend>AJOUTER UN ARTICLE</legend>
                        <select name="type_a" class="form-control input_box">
                            <option value="actualite"> Actualité</option>
                            <option value="publication"> Publication</option>
                            <option value="these"> Thése</option> 
                            <option value="institution"> Institutions publiques</option>
                            <option value="entreprise"> Entreprises</option> 
                        </select>
                        <input name='titre_a'type="text" class="form-control input_box" placeholder="Titre">
                        <input name='description_a'type="text" class="form-control input_box" placeholder="Description">
                        <input name='date_a' type="date" class="form-control input_box" placeholder="Date">
                        <input name='Photo'type="file" class="form-control input_box" placeholder="Photo">
                        <textarea cols="55" rows="18" name="texte_a" class="form-control input_box" placeholder="Votre article"> </textarea>

                        <button type="submit" class="btn btn-default" name="btn">Enregistrer</button>
                      </fieldset>
                    </form>
                  </div>      
            </div>
            <div class="col-sm-offset-1 contact_info send_message">
        </div></div>
    </section>

  

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
