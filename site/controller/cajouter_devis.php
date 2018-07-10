<script src='../public/js/sweetalert.min.js'></script>
  <link href='../public/css/sweetalert.css' rel='stylesheet'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
  $ac=$_POST['act'];
    
 function act_aff($ac){
include("../model/config.php");
$sql='select * from activites where titre_ac= :ac';
$res=$db->prepare($sql);
		$res->execute(array(':ac' => $ac));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}	$res=act_aff($ac);
if ($res['id_ac']=="") {
	if (isset($_SESSION['client'])) {
	?><p></p>
    <script language='javascript'> swal({
      title: "Message Erreur", 
      text: "Veuillez choisir une activites de la liste précédente" , 
      type: "error"
    }, function() {
      // Redirect the user
      window.location.href = '../devis_client.php';
    });</script>
<?php
  }
  if (isset($_SESSION['entreprise'])) {
  	?><p></p>
    <script language='javascript'> swal({
      title: "Message Erreur", 
      text: "Veuillez choisir une activites de la liste précédente" , 
      type: "error"
    }, function() {
      // Redirect the user
      window.location.href = '../devis_ent.php';
    });</script>
<?php
  }
}else{
$id_act = $res['id_ac'];
$objet=$_POST['objet'];
$devis=$_POST['devis'];
$adr=$_POST['adr'];
$id_em=$_POST['id'];
$filetmp = $_FILES["image"]["tmp_name"];
$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filepath = "../public/images/devis/".$filename;

include("../model/mdevis.php");
$i= new devis();
if ($filename !="") {
	

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

}else{
$filename="";
}
$i->filename=$filename;
$i->objet=$objet;
$i->devis=$devis;
$i->id_act=$id_act;
$i->adr=$adr;
$i->id_em=$id_em;

$i->Ajouter_Devis($i);
if (isset($_SESSION['client'])) {
echo "<script language='javascript'>alert('Ajouter Avec Succès'),parent.location.href='../devis_client.php'</script>";
}else {
	echo "<script language='javascript'>alert('Ajouter Avec Succès'),parent.location.href='../devis_ent2.php'</script>";
}
}
?>