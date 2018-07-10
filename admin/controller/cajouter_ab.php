<script src='../public/js/sweetalert.min.js'></script>
  <link href='../public/css/sweetalert.css' rel='stylesheet'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if (empty($_POST['type']) || empty($_POST['duree']) || empty($_POST['prix']))  {
 ?><p></p>
    <script language='javascript'> swal({
      title: "Message Erreur", 
      text: "Veuillez remplir tous les champs" , 
      type: "error"
    }, function() {
      // Redirect the user
      window.location.href = '../ajout_ab.php';
    });</script>
<?php
  die();
}
include("../model/config.php");
$titre=$_POST['type'];
$sql=$db->query("select COUNT(*)  from abonnement where type_ab='$titre'")->fetch();
if ($sql['COUNT(*)']!=0){?>
<p></p>
<script language='javascript'> swal({
      title: "Message Erreur", 
      text: "Ce type déja existe !!!" , 
      type: "error"
      }, function() {
      // Redirect the user
      window.location.href = '../ajout_ab.php';
    });</script>

<?php
	die();
}
$type=$_POST['type'];
$duree=$_POST['duree'];
$prix=$_POST['prix'];

include("../model/mabonnement.php");
$i= new Abonnement();

$i->type=$type;
$i->duree=$duree;
$i->prix=$prix;
$res =$i->Ajouter_ab($i);
if ($res !== 0) {?>
<p></p>
<script language='javascript'> swal({
      title: "Bon Travail!", 
      text: "Abonnement est ajoutée avec succès" , 
      type: "success"
    }, function() {
      // Redirect the user
      window.location.href = '../Abonnement.php';
    });</script>
<?php
}


?>


?>