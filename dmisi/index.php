<?php   session_start();

if(isset($_SESSION['cnx']) and $_SESSION['cnx']==true )
{
  

  header('location:admin.php');

}


    include('cnx.php');	
?>
<?php
 if(isset($_POST["btn"])  )
    {

	
    $q = "select count(*) as nbr from admin where Email = '".$_POST['Email']."' and password = '".($_POST['password'])."'";
	$r = $db -> query($q);
	$c = $r -> fetch();

    $q1 = "select * from admin where Email = '".$_POST['Email']."' and password = '".($_POST['password'])."'";
	$r1 = $db -> query($q1);
	$c1 = $r1 -> fetch();
    $id_user = $c1['id_user'] ;
	$Nom = $c1['Nom'] ;
	$Prenom = $c1['Prenom'] ;
	$Login = $c1['Login'] ;
	$Photo = $c1['Photo'] ;
	$Fonction = $c1['Fonction'] ;
	$Service = $c1['Service'] ;
	$Statut = $c1['Statut'] ;
    $_SESSION['id_user'] =$id_user;
	$_SESSION['Nom'] =$Nom;
	$_SESSION['Prenom'] =$Prenom;
	$_SESSION['Login'] =$Login;
	$_SESSION['Photo'] =$Photo;
	$_SESSION['Statut'] =$Statut;
	$_SESSION['Fonction'] =$Fonction;
	$_SESSION['Service'] =$Service;
	$nbr = $c['nbr'] ;
		if ($nbr == 1)
	{
           

            $_SESSION['cnx'] = true;

			  header('location:admin.php');
			  
	}else
	{
		header('location:index.php?error=1');
	}
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>FST/ DMI/ SECTION INFORMATIQUE</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg">
 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="card card-authentication1 mx-auto my-5 animated zoomIn">
		<div class="card-body">
		 <div class="card-content p-2">
		  <div class="text-center">
		 		<a href="../index.php"><img src="assets/images/logo.png"/></a>
		 	</div>
		  <div class="form-group text-center">
			    <hr>
			</br>
			 </div>
		    <form enctype="multipart/form-data" method="POST">
			  <div class="form-group">
			   <div class="position-relative has-icon-left">
				  <label for="exampleInputUsername" class="sr-only">Votre email</label>
				  <input type="text" id="exampleInputUsername" class="form-control" placeholder="Votre Email" name="Email" required>
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <div class="position-relative has-icon-left">
				  <label for="exampleInputPassword" class="sr-only">Password</label>
				  <input type="password" id="exampleInputPassword" class="form-control" placeholder="Votre mot de passe" name="password" required>
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			
			 
			</div>
			
			 
			 <div class="form-group text-center">
			    <hr>
			 </div>
			  <div class="form-group text-center">
				
				<div class="form-group">
			   <button name="btn" type="submit" class="btn btn-primary shadow-primary px-5"><i class="icon-lock"></i>Se connecter</button>
			 </div>
			  </div>
			 </form>
		   </div>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- waves effect js -->
  <script src="assets/js/waves.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	
</body>
</html>
