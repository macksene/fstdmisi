<?php
	include('cnx.php');
	
	$q1 = "DELETE FROM articles WHERE id_a = '".$_GET['id']."'";
	$r1 = $db->query($q1);	

	header('location:articles.php');
?>