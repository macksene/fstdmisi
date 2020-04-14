<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>FST/ Section Informatique</title>
  <?php   session_start();

if(!isset($_SESSION['cnx']) or $_SESSION['cnx']==false )
{
  header('location:index.php');
}
$i=1;
include('cnx.php');
$ID=$_SESSION['id_user'];
?>
  
  <style>
/*
P.S: if you like my content maybe you will become a donator and donate some money? That helps me to create new awesome materials. https://www.paypal.me/melnik909
*/

.timeline{
  --uiTimelineMainColor: var(--timelineMainColor, #222);
  --uiTimelineSecondaryColor: var(--timelineSecondaryColor, #fff);

  position: relative;
  padding-top: 3rem;
  padding-bottom: 3rem;
}

.timeline:before{
  content: "";
  width: 4px;
  height: 100%;
  background-color: var(--uiTimelineMainColor);

  position: absolute;
  top: 0;
}

.timeline__group{
  position: relative;
}

.timeline__group:not(:first-of-type){
  margin-top: 4rem;
}

.timeline__year{
  padding: .5rem 1.5rem;
  color: var(--uiTimelineSecondaryColor);
  background-color: var(--uiTimelineMainColor);

  position: absolute;
  left: 0;
  top: 0;
}

.timeline__box{
  position: relative;
}

.timeline__box:not(:last-of-type){
  margin-bottom: 30px;
}

.timeline__box:before{
  content: "";
  width: 100%;
  height: 2px;
  background-color: var(--uiTimelineMainColor);

  position: absolute;
  left: 0;
  z-index: -1;
}

.timeline__date{
  min-width: 65px;
  position: absolute;
  left: 0;

  box-sizing: border-box;
  padding: .5rem 1.5rem;
  text-align: center;

  background-color: var(--uiTimelineMainColor);
  color: var(--uiTimelineSecondaryColor);
}

.timeline__day{
  font-size: 2rem;
  font-weight: 700;
  display: block;
}

.timeline__month{
  display: block;
  font-size: .8em;
  text-transform: uppercase;
}

.timeline__post{
  padding: 1.5rem 2rem;
  border-radius: 2px;
  border-left: 3px solid var(--uiTimelineMainColor);
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .12), 0 1px 2px 0 rgba(0, 0, 0, .24);
  background-color: var(--uiTimelineSecondaryColor);
}

@media screen and (min-width: 641px){

  .timeline:before{
    left: 30px;
  }

  .timeline__group{
    padding-top: 55px;
  }

  .timeline__box{
    padding-left: 80px;
  }

  .timeline__box:before{
    top: 50%;
    transform: translateY(-50%);  
  }  

  .timeline__date{
    top: 50%;
    margin-top: -27px;
  }
}

@media screen and (max-width: 640px){

  .timeline:before{
    left: 0;
  }

  .timeline__group{
    padding-top: 40px;
  }

  .timeline__box{
    padding-left: 20px;
    padding-top: 70px;
  }

  .timeline__box:before{
    top: 90px;
  }    

  .timeline__date{
    top: 0;
  }
}

.timeline{
  --timelineMainColor: #4557bb;
  font-size: 16px;
}

/*
@media screen and (min-width: 768px){

  html{
    font-size: 62.5%;
  }
}

@media screen and (max-width: 767px){

  html{
    font-size: 55%;
  }
}

*/

/*
* demo page
*/

body{
  font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Open Sans, Ubuntu, Fira Sans, Helvetica Neue, sans-serif;
  font-size: 1.6rem;
  color: #222;

  background-color: #f0f0f0;
  margin: 0;
  -webkit-overflow-scrolling: touch;   
  overflow-y: scroll;
}

p{
  margin-top: 0;
  margin-bottom: 1.5rem;
  line-height: 1.5;
}

p:last-child{
  margin-bottom: 0;
}

.page{
 
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

.page__demo{
  flex-grow: 1;
}

.main-container{
  max-width: 960px;
  padding-left: 2rem;
  padding-right: 2rem;

  margin-left: auto;
  margin-right: auto;
}

.page__container{
  padding-top: 30px;
  padding-bottom: 30px;
  max-width: 800px;
}

.footer{
  padding-top: 1rem;
  padding-bottom: 1rem;
  text-align: center;  
  font-size: 1.4rem;
}

.footer__link{
  text-decoration: none;
  color: inherit;
}

@media screen and (min-width: 361px){

  .footer__container{
    display: flex;
    justify-content: space-between;
  }
}

@media screen and (max-width: 360px){

  .melnik909{
    display: none;
  } 
}
</style>
  
  
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- notifications css -->
  <link rel="stylesheet" href="assets/plugins/notifications/css/lobibox.min.css"/>
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
   <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  
  
  
  <!-- notifications css -->
  <link rel="stylesheet" href="assets/plugins/notifications/css/lobibox.min.css"/>
  
   <!--Data Tables -->
  <link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
 
        <link rel="stylesheet" href="assets/plugins/fastselect.min.css">
        <script src="assets/plugins/fastselect.standalone.js"></script>

        <style>

            .fstElement { font-size: 1.2em; }
            .fstToggleBtn { min-width: 16.5em; }

            .submitBtn { display: none; }

            .fstMultipleMode { display: block; }
            .fstMultipleMode .fstControls { width: 100%; }
			
			.button_presentation
			{
			
			border:1px solid #DCDCDC;
			padding-bottom:4px
			}
			
			.button_presentation:hover
			{
			background:white;
			
			
			}
			
			table#table_activites.dataTable tbody tr:hover {
            background-color: #ffa;
			cursor:pointer
}


	table#table_projets.dataTable tbody tr:hover {
            background-color: #ffa;
			cursor:pointer
}

table#table_activites.dataTable tbody tr:after{
    content: "my tooltip";
    padding: 2px;
    display:none;
    position: relative;
    top: -20px;
    right: -30px;
    width: 150px;
    text-align: center;
    background-color: #fef4c5;
    border: 1px solid #d4b943;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    -ms-border-radius: 2px;
    border-radius: 2px;
}

table#table_projets.dataTable tbody tr:after{
    content: "my tooltip";
    padding: 2px;
    display:none;
    position: relative;
    top: -20px;
    right: -30px;
    width: 150px;
    text-align: center;
    background-color: #fef4c5;
    border: 1px solid #d4b943;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    -ms-border-radius: 2px;
    border-radius: 2px;
}

        </style>
		
		
		

</head>

<body>
  <?php           
  
  
   $sql = "SELECT * FROM admin where id_user=$ID "; 
  
   
   
   $result=$db->query($sql);  
  
   $data=$result->fetchAll(PDO::FETCH_ASSOC);
  foreach ($data as $donnee){        
  ?>  
<!-- Start wrapper-->
 <div id="wrapper">

  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="../index.php">
       
       <img src="assets/images/logo1.png" class="logo" alt="logo icon">
     </a>
	 </div>
	 <div class="user-details">
	  <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
	    <div class="avatar"><img class="mr-3 side-user-img" src="../images/<?php  echo $donnee["Photo"];  ?>" alt="user avatar"></div>
	     <div class="media-body">
	     <h6 class="side-user-name name_of_user"><?php echo $donnee["Prenom"]; ?>  <?php echo $donnee["Nom"]; ?></h6>
	    </div>
       </div>
	   <div id="user-dropdown" class="collapse">
		  <ul class="user-setting-menu">
            <li><a href="profil.php"><i class="icon-user"></i>Profil</a></li>
            <li><a href="javaScript:void();"><i class="icon-settings"></i> Reglage</a></li>
			 <li class="dropdown-item" id="deconnexion_"><i class="icon-power mr-2"></i> Déconnexion</li>
		  </ul>
	   </div>
      </div>
	 <ul class="sidebar-menu do-nicescrol"><?php
  }         
  ?> 
      <li class="sidebar-header">MENU</li>
      <li>
        <a href="index.html" class="waves-effect">
          <i class="icon-folder"></i><span>Articles</span><i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
      
		   <li><a onclick="#" data-toggle="modal" data-target="#modal-projet"><i class="fa fa-long-arrow-right"></i> Ajouter <small class="badge float-right badge-info">+</small></a> </li>
		   <li><a onclick="#" data-toggle="modal" data-target="#modal-projet"><i class="fa fa-long-arrow-right"></i> Metrre à jour<small class="badge float-right badge-info">+</small></a> </li>
		  
        </ul>
      </li>
      
      <li>
        <a href="index.html" class="waves-effect">
          <i class="icon-folder"></i><span>Professeurs</span><i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
      
       <li><a onclick="#" data-toggle="modal" data-target="#modal-projet"><i class="fa fa-long-arrow-right"></i> Ajouter <small class="badge float-right badge-info">+</small></a> </li>
       <li><a onclick="#" data-toggle="modal" data-target="#modal-projet"><i class="fa fa-long-arrow-right"></i> Metrre à jour<small class="badge float-right badge-info">+</small></a> </li>
      
        </ul>
      </li>
      <li>
        <a href="index.html" class="waves-effect">
          <i class="icon-folder"></i><span>Etudiants</span><i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
      
       <li><a onclick="#" data-toggle="modal" data-target="#modal-projet"><i class="fa fa-long-arrow-right"></i> Ajouter <small class="badge float-right badge-info">+</small></a> </li>
       <li><a onclick="#" data-toggle="modal" data-target="#modal-projet"><i class="fa fa-long-arrow-right"></i> Metrre à jour<small class="badge float-right badge-info">+</small></a> </li>
      
        </ul>
      </li>
      <li>
        <a href="index.html" class="waves-effect">
          <i class="icon-folder"></i><span>Cours</span><i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
      
       <li><a onclick="#" data-toggle="modal" data-target="#modal-projet"><i class="fa fa-long-arrow-right"></i> Ajouter <small class="badge float-right badge-info">+</small></a> </li>
       <li><a onclick="#" data-toggle="modal" data-target="#modal-projet"><i class="fa fa-long-arrow-right"></i> Metrre à jour<small class="badge float-right badge-info">+</small></a> </li>
      
        </ul>
      </li>
      <li>
        <a href="index.html" class="waves-effect">
          <i class="icon-folder"></i><span>Notes</span><i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
      
       <li><a onclick="#" data-toggle="modal" data-target="#modal-projet"><i class="fa fa-long-arrow-right"></i> Ajouter <small class="badge float-right badge-info">+</small></a> </li>
       <li><a onclick="#" data-toggle="modal" data-target="#modal-projet"><i class="fa fa-long-arrow-right"></i> Metrre à jour<small class="badge float-right badge-info">+</small></a> </li>
      
        </ul>
      </li>
      <li class="sidebar-header"><a href="deconnect.php">Deconnexion</a></li> 
    </ul>

   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top bg-danger">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
   
  </ul>

  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
	    <i class="icon-envelope-open"></i></a>
      <div class="dropdown-menu dropdown-menu-right animated fadeIn">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 4 new messages
          <span class="badge badge-danger">4</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Jhon Deo</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Today, 4:10 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Sara Jen</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Yesterday, 8:30 AM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Dannish Josh</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             <small>5/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
            <small>1/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item"><a href="javaScript:void();">See All Messages</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
	  <i class="icon-bell"></i><span class="badge badge-primary badge-up">10</span></a>
      <div class="dropdown-menu dropdown-menu-right animated fadeIn">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 10 Notifications
          <span class="badge badge-primary">10</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="icon-people fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="icon-cup fa-2x mr-3 text-warning"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Received Orders</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="icon-bell fa-2x mr-3 text-danger"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Updates</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="#"><i class="flag-icon flag-icon-gb"></i></a>
      <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title name_of_user">Katrina Mccoy</h6>
            <p class="user-subtitle statut_of_user">katrina92@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li id="deconnexion" class="dropdown-item"><i class="icon-power mr-2"></i> Se deconnecter</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->

      
	  
	  
	
      

	  
     

	  
	  
	  
	  
	  
	  
	  
	   <!-- Breadcrumb-->
     
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
		      <div class="card">
           <div class="card-body">

        <div class="row">
        
                    </div><!-- End row -->
					
					
					
					
					
					
					
					
					

             </div>
                    </div>
        </div>
      </div><!-- End row -->
	  
	  

    </div>
    <!-- End container-fluid-->

    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 DashRock Admin
        </div>
      </div>
    </footer>
	<!--End footer-->

  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
  
  <!--Data Tables js-->
  <script src="assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- waves effect js -->
  <script src="assets/js/waves.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>

  
  
  <!-- Vector map JavaScript -->
  <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Sparkline JS -->
  <script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
  <!-- Chart js -->
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
  <!--notification js -->
  <script src="assets/plugins/notifications/js/lobibox.min.js"></script>
  <script src="assets/plugins/notifications/js/notifications.min.js"></script>
  
  <!-- cookies -->
    <script src="assets/plugins/js-cookie/src/js.cookie.js"></script>
    <script src="assets/plugins/jwt-decode/build/jwt-decode.js"></script>
  
 
 
  
	

  
   

</body>
</html>




<!-- Mdoals -->


<!-- Modals ajout activités -->
				
	<!-- Modals projets --><div class="modal fade" id="modal-projet">
                  <div class="modal-dialog">
                    <div class="modal-content animated jackInTheBox">
                      <div class="modal-header">
                        <h5 class="modal-title"><i class="fa fa-star"></i> Ajouter un étudiant</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>
						
		 <form id="form_etudiant">
						
						 <div class="form-group">
               <div class="position-relative has-icon-left">
                <label for="exampleInputPassword" class="sr-only">id</label>
                <input type="text" id="id_p" name="id_p" class="form-control" placeholder="id">
                <div class="form-control-position">
                  <i class="icon-folder"></i>
                </div>
               </div>
              </div>

             <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputPassword" class="sr-only">Nom de etudiant</label>
							  <input type="text" id="nom_p" name="nom_p" class="form-control" placeholder="Nom">
							  <div class="form-control-position">
								  <i class="icon-folder"></i>
							  </div>
						   </div>
						  </div>
						  
						  
				 <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputPassword" class="sr-only">PreNom de etudiant</label>
							  <input type="text" id="prenom_p" name="prenom_p" class="form-control" placeholder="prenom">
							  <div class="form-control-position">
								  <i class="icon-folder"></i>
							  </div>
						   </div>
						  </div>

              <div class="form-group">
               <div class="position-relative has-icon-left">
                <label for="exampleInputPassword" class="sr-only">date naissance etudiant</label>
                <input type="date" id="date_nais_p" name="date_nais_p" class="form-control" placeholder="date naissance">
                <div class="form-control-position">
                  <i class="icon-folder"></i>
                </div>
               </div>
              </div>
						  
						  <div class="form-group">
               <div class="position-relative has-icon-left">
                <label for="exampleInputPassword" class="sr-only">telephone</label>
                <input type="text" id="tel_p" name="tel_p" class="form-control" placeholder="telephone">
                <div class="form-control-position">
                  <i class="icon-folder"></i>
                </div>
               </div>
              </div>
				
				
				  
						  
              <div class="form-group">
               <div class="position-relative has-icon-left">
                <label for="exampleInputPassword" class="sr-only">password</label>
                <input type="password" id="mdp_p" name="mdp_p" class="form-control" placeholder="password">
                <div class="form-control-position">
                  <i class="icon-folder"></i>
                </div>
               </div>
              </div>
						  
              <div class="form-group">
               <div class="position-relative has-icon-left">
                <label for="exampleInputPassword" class="sr-only">sexe</label>
                <input type="text" id="sexe" name="sexe" class="form-control" placeholder="sexe">
                <div class="form-control-position">
                  <i class="icon-folder"></i>
                </div>
               </div>
              </div>

						   <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputPassword" class="sr-only">Num Cylce</label>
							  <input type="text" id="num_cycle" name="num_cycle" class="form-control" placeholder="Num Cylce">
							  <div class="form-control-position">
								  <i class="icon-folder"></i>
							  </div>
						   </div>
						  </div>

              <div class="form-group">
               <div class="position-relative has-icon-left">
                <label for="exampleInputPassword" class="sr-only">ville</label>
                <input type="text" id="ville" name="ville" class="form-control" placeholder="ville">
                <div class="form-control-position">
                  <i class="icon-folder"></i>
                </div>
               </div>
              </div>

              <div class="form-group">
               <div class="position-relative has-icon-left">
                <label for="exampleInputPassword" class="sr-only">pays</label>
                <input type="text" id="pays" name="pays" class="form-control" placeholder="pays">
                <div class="form-control-position">
                  <i class="icon-folder"></i>
                </div>
               </div>
              </div>
						  
						  <div class="form-group">
               <div class="position-relative has-icon-left">
                <label for="exampleInputPassword" class="sr-only">classe</label>
                <input type="text" id="classe" name="classe" class="form-control" placeholder="classe">
                <div class="form-control-position">
                  <i class="icon-folder"></i>
                </div>
               </div>
              </div>
						   
				  
				  
				  
				
					
		</form>					
						  
						</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Fermer</button>
                        <button type="button" class="btn btn-primary add_etudiant"><i class="fa fa-check-square-o"></i> Ajouter</button>
                      </div>
                    </div>
                  </div>
                </div>		



				
<!-- Fin des Modals -->




<script>
(function ($) {
	$.fn.serializeFormJSON = function () {

			var o = {};
			var a = this.serializeArray();
			$.each(a, function () {
					if (o[this.name]) {
							if (!o[this.name].push) {
									o[this.name] = [o[this.name]];
							}
							o[this.name].push(this.value || '');
					} else {
							o[this.name] = this.value || '';
					}
			});
			return o;
	};
})(jQuery);	


function notification(msg_type, msg, icon) {
      Lobibox.notify(msg_type, {
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        position: 'top right',
        icon: icon,
        msg: msg
      });
    }

$('.add_etudiant').on('click', function (e) {
		e.preventDefault();
	
		var s = $('#form_etudiant').serializeFormJSON();
		
		$.ajax({
				url:'http://127.0.0.1:4000/etudiants',
				type: 'POST',
				"content-type": "application/json",
				"cache-control": "no-cache",
				data: s,
				success: function (result) {
						
						
						notification('success',result.message, 'fa fa-check-circle');
						
						
			/*			
			  table.clear().draw();
	          table.rows.add(get_data()); // Add new data
	          table.columns.adjust().draw(); // Redraw the DataTable
				//	table.reload();

				table_infos.clear().draw();
				table_infos.rows.add(get_data()); // Add new data
				table_infos.columns.adjust().draw(); // Redraw the DataTable

				
						
			*/
						
						$("#form_etudiant")[0].reset();
						$('#modal-projet').modal('hide');
						

				},
				error: function (result) {
				console.log(result);
						notification('error', result.responseJSON.message, 'fa fa-times-circle');
						$("#loader_").html("");
				}
		});

			   });
			   
			   
			   
			
 
</script>			