<script src='../public/js/sweetalert.min.js'></script>
  <link href='../public/css/sweetalert.css' rel='stylesheet'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
error_reporting(0);
if (!file_exists($_FILES['image']['tmp_name']) || !is_uploaded_file($_FILES['image']['tmp_name']) ) 
{?><p></p>
    <script language='javascript'> swal({
      title: "Message Erreur", 
      text: "Le fichier téléchargé dépasse la taille autorisé" , 
      type: "error"
    }, function() {
      // Redirect the user
      window.location.href = '../ajout_activites.php';
    });</script>
<?php
  die();
}
if (empty($_POST['tac']) || empty($_POST['des']))  {
 ?><p></p>
    <script language='javascript'> swal({
      title: "Message Erreur", 
      text: "Veuillez remplir tous les champs" , 
      type: "error"
    }, function() {
      // Redirect the user
      window.location.href = '../ajout_activites.php';
    });</script>
<?php
  die();
}
include("../model/config.php");
$titre=$_POST['tac'];
$sql=$db->query("select COUNT(*)  from activites where titre_ac='$titre'")->fetch();
if ($sql['COUNT(*)']!=0){?>
<p></p>
<script language='javascript'> swal({
      title: "Message Erreur", 
      text: "Cette activitée déja existe !!!" , 
      type: "error"
      }, function() {
      // Redirect the user
      window.location.href = '../ajout_activites.php';
    });</script>

<?php
	die();
}

$des=$_POST['des'];
$tc=$_POST['tc'];
$filetmp = $_FILES["image"]["tmp_name"];
$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filepath = "../public/img/activite/".$filename;

include("../model/mactivites.php");
$i= new Activites();
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
$i->titre=$titre;

$res=$i->ajout_activites($i);
if ($res !== 0) {?>
<p></p>
<script language='javascript'> swal({
      title: "Bon Travail!", 
      text: "Activitée est ajoutée avec succès" , 
      type: "success"
    }, function() {
      // Redirect the user
      window.location.href = '../ajout_activites.php';
    });</script>
<?php
}


?>