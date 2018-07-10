<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
error_reporting(0);
$id=$_SESSION['entreprise'];
$nom=$_POST['nom'];
$pren=$_POST['pren'];
$civ=$_POST['civ'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$logo=$_POST['logo'];
$filetmp = $_FILES["image"]["tmp_name"];
$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filepath = "../public/images/logo_ent/".$filename;
#$date_au = date('Y-m-d'); 
include("../model/mentreprise.php");
$i= new Entreprise();
if ($filename=="") {
	$filename = $logo;
$i->filename=$filename;

$i->nom=$nom;
$i->pren=$pren;
$i->email=$email;
$i->id=$id;
$i->civ=$civ;
$i->pass=$pass;
#$i->date=$date_au;
$i->modif_Profil_Ent($i);
}
else if ($filename !="") {
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
$i->nom=$nom;
$i->pren=$pren;
$i->email=$email;
$i->id=$id;
$i->civ=$civ;
$i->pass=$pass;
#$i->date=$date_au;
$i->modif_Profil_Ent($i);
}
echo "<script language='javascript'>alert('Modification Avec Succès'),parent.location.href='../tableau_bord_ent.php'</script>";
?>