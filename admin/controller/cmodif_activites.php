<script src='../public/js/sweetalert.min.js'></script>
  <link href='../public/css/sweetalert.css' rel='stylesheet'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
error_reporting(0);

include("../model/config.php");
$tac=$_POST['tac'];
$des=$_POST['des'];
$res=$db->query("select COUNT(*) from activites where titre_ac ='$tac' ");
if ($res->fetchColumn() >= 1) {
$logo=$_POST['logo'];
$tc=$_POST['tc'];
$des=$_POST['des'];
$id=$_GET['id'];
$filetmp = $_FILES['image']['tmp_name'];
$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filepath = "../public/img/activite/".$filename;
include("../model/mactivites.php");
$i= new Activites();
if ($filename=="") {
	$filename = $logo;
	$i->filename=$filename;
$i->des=$des;
$i->id=$id;
$i->tc=$tc;
$i->modif_Activites2($i);}
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
$i->tc=$tc;
$res=$i->modif_Activites2($i);
}
if ($res !== 0) {?>
<p></p>
<script language='javascript'> swal({
      title: "Bon Travail! ", 
      text: "Activitée est modifiée avec succès sans changement du titre" , 
      type: "success"
    }, function() {
      // Redirect the user
      window.location.href = '../activites.php';
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
$filepath = "../public/img/activite/".$filename;
include("../model/mactivites.php");
$i= new Activites();
if ($filename=="") {
	$filename = $logo;
	$i->filename=$filename;
$i->tc=$tc;
$i->des=$des;
$i->id=$id;
$i->tac=$tac;
$i->modif_Activites($i);}
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
$i->tac=$tac;
$res=$i->modif_Activites($i);
}
if ($res !== 0) {?>
<p></p>
<script language='javascript'> swal({
      title: "Bon Travail!", 
      text: "Activitée est Modifiée avec succès" , 
      type: "success"
    }, function() {
      // Redirect the user
      window.location.href = '../activites.php';
    });</script>
<?php
}}


?>