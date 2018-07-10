<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$logo=$_POST['logo'];
$id=$_GET['id'];
$nom=$_POST['nom'];
$pren=$_POST['pren'];
$email=$_POST['email'];
$cpwd=$_POST['cpwd'];
$npwd=$_POST['npwd'];
$filetmp = $_FILES["image"]["tmp_name"];
$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filepath = "../public/img/photo/".$filename;
include("../model/madmin.php");
$i= new Admin();
if ($filename=="") {
	$filename = $logo;
$i->filename=$filename;
$i->nom=$nom;
$i->pren=$pren;
$i->email=$email;
$i->npwd=$npwd ;
$i->id=$id;
$i->modif_admin($i);}
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
$i->npwd=$npwd ;
$i->id=$id;
$i->modif_admin($i);
}echo "<script language='javascript'>parent.location.href='../dash.php'</script>";
?>