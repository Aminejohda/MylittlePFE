<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
$id=$_SESSION['entreprise'];
$titre=$_POST['titre'];
$des=$_POST['des'];
$ac=$_POST['ac'];
$adr=$_POST['adr'];
$lat=$_POST['lat'];
$long=$_POST['long'];
$filetmp = $_FILES["image"]["tmp_name"];
$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filepath = "../public/images/annonce/".$filename;

if ($ac=="") {
	echo("tous les champs");
	die();
}
include("../model/mannonce.php");
$i= new Annonce();
if($filetype == "image/jpeg")
				{
				  $imagecreate = "imagecreatefromjpeg";
				  $imageformat = "imagejpeg";
				}
				if($filetype == "image/png")
				{						 
				  $imagecreate = "imagecreatefrompng";
				  $imageformat = "imagepng";
				}
				if($filetype == "image/gif")
				{						 
				  $imagecreate= "imagecreatefromgif";
				  $imageformat = "imagegif";
				}
move_uploaded_file($filetmp,$filepath);				
$image = $imagecreate($filepath);
$i->filename=$filename;
$i->titre=$titre;
$i->des=$des;
$i->ac=$ac;
$i->adr=$adr;
$i->id=$id;
$i->lat=$lat;
$i->long=$long;
$i->Ajouter_Annonce($i);
echo "<script language='javascript'>alert('Ajouter Avec Succès'),parent.location.href='../Annonce.php'</script>";
?>