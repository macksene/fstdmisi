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


if(isset($_POST['btn']))
{

  if(empty($_POST['Login']) and empty($_POST['Password']))
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
$uploaddir = 'images/';
$uploadfile = $uploaddir . basename($_FILES['Photo']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['Photo']['tmp_name'], $uploadfile)) {
 echo "<table><tr><td></td><td><img src='images/".$_FILES['Photo']['name']."' width='90px' /></td></tr></table>";   
$Photo=$_FILES['Photo']['name']; 
$nomphoto=$_FILES['Photo']['tmp_name']; 
} else {
    echo "Le telechargement n'est de la photo n'est pas correctement effectué veuillez le refaire:\n";
}
echo '</pre>';
} else echo"Vous ne pouvez pas envoyer ce type de fichier <br>seuls les photos sont permises";
}
      
  $sql2 = 'INSERT INTO admin VALUES ("0","'.$_POST['Login'].'","'.$_POST['Nom'].'","'.$_POST['Prenom'].'","'.$_POST['Date_Naissance'].'","'.$_POST['Email'].'","'.$_POST['Password'].'","'.$_POST['Statut'].'","'.$Photo.'","'.$_POST['Service'].'","'.$_POST['Fonction'].'")'; 
 
 $db->exec($sql2);        
 
echo '<div class="alert bg-success" role="alert">
           Votre utilisateur est bien enregistrer! <a href="#" class="pull-right"></a>
        </div>'; 
 } 
}
 ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- All contact Info -->
   <section class="our_feature_area">
        <div class="container">
            <div class="feature_row row">
                <div class="col-md-4 feature_content">
                    
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa" aria-hidden="true"><br></i>
                            </a>
                        </div>
                        <div class="media-body">
                            



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
 <a>AJOUTER UN ARTICLE</a>
</button>
<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </br></br></br></br></br>
        <h2 class="modal-title" id="exampleModalLabel">Ajouter un nouvel étudiant</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">   
      <form>
       Nom étudiant: <input type="text" name="etduaint"> <br>
       Prénom étudiant: <input type="text" name="etduaint"> <br>
       Sexe: <input type="text" name="etduaint"> <br>
       Age: <input type="text" name="etduaint"> <br>
      </form>
      </div>
  </div>
</div>
</div>




                            <p>ce lien vous permet d'ajouter un article dans la base de données</p><br>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa" aria-hidden="true"><br></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">AFFICHER LES ARTICLES</a>
                            <p>ce lien vous permet d'ajouter un article dans la base de données</p><br>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa" aria-hidden="true"><br></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">METTRE A JOUR LES ARTICLES</a>
                            <p>ce lien vous permet d'ajouter un article dans la base de données</p><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 feature_content">
                    
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa" aria-hidden="true"><br></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">AJOUTER UN ETUDIANT</a>
                            <p>ce lien vous permet d'ajouter un article dans la base de données</p><br>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa" aria-hidden="true"><br></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">AFFICHER LES ETUDIANTS</a>
                            <p>ce lien vous permet d'ajouter un article dans la base de données</p><br>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa" aria-hidden="true"><br></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">METTRE A JOUR LES ETUDIANTS</a>
                            <p>ce lien vous permet d'ajouter un article dans la base de données</p><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 feature_content">
                    
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa" aria-hidden="true"><br></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">AJOUTER UN PROFESSEURS</a>
                            <p>ce lien vous permet d'ajouter un article dans la base de données</p><br>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa" aria-hidden="true"><br></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">AFFICHER LES PROFS</a>
                            <p>ce lien vous permet d'ajouter un article dans la base de données</p><br>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa" aria-hidden="true"><br></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">METTRE A JOUR LES PROFESSEURS</a>
                            <p>ce lien vous permet d'ajouter un article dans la base de données</p><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-12 contact_info send_message">
                  <div class="col-sm-6 contact_info send_message">
                    
                    <form enctype="multipart/form-data"  method="post" class="form-inline contact_box" >
                      <fieldset border:2px>
                        <legend>ETUDIANT</legend>
                        <input name='Login'type="text" class="form-control input_box" placeholder="Login">
                        <input name='Nom'type="text" class="form-control input_box" placeholder="Votre nom">
                        <input name='Prenom'type="text" class="form-control input_box" placeholder="Votre Prenom">
                        <input name='Date_Naissance' type="date" class="form-control input_box" placeholder="Votre date de naissance">
                        <input name='Email'type="email" class="form-control input_box" placeholder="Votre email">
                        <input name='Password'type="Password" class="form-control input_box" placeholder="Votre mot de passe">
                        <input name='Statut'type="text" class="form-control input_box" placeholder="Votre statut">
                        <input name='Photo'type="file" class="form-control input_box" placeholder="Photo">
                        <input name='Fonction'type="text" class="form-control input_box" placeholder="Votre fonctipn">
                        <input name='Service'type="text" class="form-control input_box" placeholder="Votre service">
                        <button type="submit" class="btn btn-default" name="btn">Enregistrer</button>
                      </fieldset>
                    </form>
                  </div>
                  <div class="col-sm-6 contact_info send_message">
                    <form enctype="multipart/form-data"  method="post" class="form-inline contact_box" >
                      <fieldset>
                        <legend>PROFESSEUR</legend>
                        <input name='Login'type="text" class="form-control input_box" placeholder="Login">
                        <input name='Nom'type="text" class="form-control input_box" placeholder="Prenom">
                        <input name='Prenom'type="text" class="form-control input_box" placeholder="Prenom">
                        <input name='Date_Naissance' type="date" class="form-control input_box" placeholder="Date_Naissance">
                        <input name='Email'type="email" class="form-control input_box" placeholder="mail">
                        <input name='Password'type="Password" class="form-control input_box" placeholder="mot de passe">
                        <input name='Statut'type="text" class="form-control input_box" placeholder="statut">
                        <input name='Photo'type="file" class="form-control input_box" placeholder="mot de passe">
                        <input name='Fonction'type="text" class="form-control input_box" placeholder="statut">
                        <input name='Service'type="text" class="form-control input_box" placeholder="statut">
                        <button type="submit" class="btn btn-default" name="btn1">Enregistrer</button>
                      </fieldset>
                    </form>
                  </div>      
            </div>
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
