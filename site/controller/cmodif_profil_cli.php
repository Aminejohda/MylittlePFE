<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();

$id=$_SESSION['client'];
$nom=$_POST['nom'];
$pren=$_POST['pren'];
$civ=$_POST['civ'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$logo=$_POST['logo'];
$dn=$_POST['dn'];
$adr=$_POST['adr'];
$tel=$_POST['tel'];
$gsm=$_POST['gsm'];
$lat=$_POST['lat'];
$long=$_POST['long'];
$filetmp = $_FILES["image"]["tmp_name"];
$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filepath = "../public/images/client/".$filename;
include("../model/mclient.php");
$i= new client();
if ($filename=="") {
	$filename = $logo;
$i->filename=$filename;
$i->nom=$nom;
$i->pren=$pren;
$i->email=$email;
$i->id=$id;
$i->civ=$civ;
$i->pass=$pass;
$i->lat=$lat;
$i->long=$long;
$i->adr=$adr;
$i->dn=$dn;
$i->gsm=$gsm;
$i->tel=$tel;
$i->modif_Profil_cli($i);
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
$i->lat=$lat;
$i->long=$long;
$i->adr=$adr;
$i->dn=$dn;
$i->gsm=$gsm;
$i->tel=$tel;
$i->modif_Profil_cli($i);
}
echo "<script language='javascript'>alert('Modification Avec Succès'),parent.location.href='../tableau_bord_cli.php'</script>";
?>