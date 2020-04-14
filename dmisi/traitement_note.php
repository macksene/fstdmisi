<?php   session_start();

if(!isset($_SESSION['cnx']) or $_SESSION['cnx']==false )
{
  header('location:index.php');
}
include('cnx.php');
$ID=$_SESSION['id_user'];
?>
<?php 

$num_sem=null;
if(isset($_POST['num_sem']))
$num_sem=$_POST['num_sem'];
$type_eva=null;
if(isset($_POST['type_eva']))
$type_eva=$_POST['type_eva'];
$nom_module=null;
if(isset($_POST['nom_module']))
$nom_module=$_POST['nom_module'];
$session=null;
if(isset($_POST['session']))
$session=$_POST['session'];

 $i=0;
foreach($_POST['note'] as $index =>$element)
{
$nume=$_POST['nume'][$i];$i++;
	$req="insert into noter values ('$nom_module','$nume','$type_eva','$session','$element','$num_sem')";
	$res=$db->exec($req);
}
	if($res)
	 	header("Location:articles.php");
	else
	header("Location:articles.php"); 
?>
			