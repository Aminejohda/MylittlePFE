<script src='../public/js/sweetalert.min.js'></script>
  <link href='../public/css/sweetalert.css' rel='stylesheet'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
error_reporting(0);
include("../model/config.php");
$tc=$_POST['tc'];
$des=$_POST['des'];
$logos=$_FILES["image"]["name"];
$res=$db->query("select COUNT(*) from categorie where titre_cat ='$tc' ");
if ($res->fetchColumn() >= 1) {
$logo=$_POST['logo'];
$tc=$_POST['tc'];
$des=$_POST['des'];
$id=$_GET['id'];
$filetmp = $_FILES['image']['tmp_name'];
$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filepath = "../public/img/categorie/".$filename;
include("../model/mcategorie.php");
$i= new Categorie();
if ($filename=="") {
	$filename = $logo;
	$i->filename=$filename;
$i->des=$des;
$i->id=$id;
$i->modif_cat2($i);}
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
$i->des=$des;
$i->id=$id;
$res=$i->modif_cat2($i);
}
if ($res !== 0) {?>
<p></p>
<script language='javascript'> swal({
      title: "Bon Travail! ", 
      text: "Catégorie est modifiée avec succès sans changement du titre" , 
      type: "success"
    }, function() {
      // Redirect the user
      window.location.href = '../categorie.php';
    });</script>
<?php
}


}else {

$logo=$_POST['logo'];
$tc=$_POST['tc'];
$des=$_POST['des'];
$id=$_GET['id'];
$filetmp = $_FILES['image']['tmp_name'];
$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filepath = "../public/img/categorie/".$filename;
include("../model/mcategorie.php");
$i= new Categorie();
if ($filename=="") {
	$filename = $logo;
	$i->filename=$filename;
$i->tc=$tc;
$i->des=$des;
$i->id=$id;
$i->modif_cat($i);}
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
$i->tc=$tc;
$i->des=$des;
$i->id=$id;
$res=$i->modif_cat($i);
}
if ($res !== 0) {?>
<p></p>
<script language='javascript'> swal({
      title: "Bon Travail!", 
      text: "Catégorie est Modifiée avec succès" , 
      type: "success"
    }, function() {
      // Redirect the user
      window.location.href = '../categorie.php';
    });</script>
<?php
}}


?>