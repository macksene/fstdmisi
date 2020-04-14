<?php
	include('cnx.php');
	
	$q1 = "DELETE FROM message WHERE id_m = '".$_GET['id']."'";
	$r1 = $db->query($q1);	

	header('location:aff_message.php');
?>