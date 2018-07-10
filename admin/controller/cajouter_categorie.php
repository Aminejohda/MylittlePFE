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
      window.location.href = '../ajout_categ.php';
    });</script>
<?php
  die();
}
if (empty($_POST['titre']) || empty($_POST['des']))  {
 ?><p></p>
    <script language='javascript'> swal({
      title: "Message Erreur", 
      text: "Veuillez remplir tous les champs" , 
      type: "error"
    }, function() {
      // Redirect the user
      window.location.href = '../ajout_categ.php';
    });</script>
<?php
  die();
}
include("../model/config.php");
$titre=$_POST['titre'];
$sql=$db->query("select COUNT(*)  from categorie where titre_cat='$titre'")->fetch();
if ($sql['COUNT(*)']!=0){?>
<p></p>
<script language='javascript'> swal({
      title: "Message Erreur", 
      text: "Cette catégorie déja existe !!!" , 
      type: "error"
    }, function() {
      // Redirect the user
      window.location.href = '../ajout_categ.php';
    });</script>

<?php
	die();
}

$des=$_POST['des'];
$filetmp = $_FILES["image"]["tmp_name"];
$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filepath = "../public/img/categorie/".$filename;


include("../model/mcategorie.php");
$i= new Categorie();
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
$res=$i->Ajouter_categorie($i);
if ($res !== 0) {?>
<p></p>
<script language='javascript'> swal({
      title: "Bon Travail!", 
      text: "Catégorie est ajoutée avec succès" , 
      type: "success"
    }, function() {
      // Redirect the user
      window.location.href = '../ajout_categ.php';
    });</script>
<?php
}


?>