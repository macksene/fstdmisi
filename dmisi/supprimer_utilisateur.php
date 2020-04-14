<?php
	include('cnx.php');
	
	$q1 = "DELETE FROM admin WHERE id_user = '".$_GET['id']."'";
	$r1 = $db->query($q1);	

	header('location:aff_utilisateur.php');
?>