<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
$id=$_SESSION['entreprise'];
$id_an=$_POST['id_an'];
$titre=$_POST['titre'];
$des=$_POST['des'];
$ac=$_POST['ac'];
$adr=$_POST['adr'];
$lat=$_POST['lat'];
$long=$_POST['long'];
$logo=$_POST['logo'];
$filetmp = $_FILES["image"]["tmp_name"];
$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filepath = "../public/images/annonce/".$filename;
include("../model/mannonce.php");
$i= new Annonce();
if ($filename=="") {
	$filename = $logo;
	$i->filename=$filename;

$i->titre=$titre;
$i->des=$des;
$i->ac=$ac;
$i->adr=$adr;
$i->id=$id;
$i->id_an=$id_an;
$i->lat=$lat;
$i->long=$long;
$i->Modifier_Annonce($i);
}else if ($filename !="") {
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
$i->id_an=$id_an;
$i->lat=$lat;
$i->long=$long;
$i->Modifier_Annonce($i);
}
echo "<script language='javascript'>alert('Modification Avec Succès'),parent.location.href='../Annonce.php'</script>";
?>