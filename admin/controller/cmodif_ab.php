<script src='../public/js/sweetalert.min.js'></script>
  <link href='../public/css/sweetalert.css' rel='stylesheet'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$type=$_POST['type'];
$duree=$_POST['duree'];
$prix=$_POST['prix'];
$id=$_GET['id'];

include("../model/mabonnement.php");
$i= new Abonnement();

$i->type=$type;
$i->duree=$duree;
$i->prix=$prix;
$i->id=$id;

$res=$i->modif_ab($i);

if ($res !== 0) {?>
<p></p>
<script language='javascript'> swal({
      title: "Bon Travail! ", 
      text: "Abonnement est modifiée avec succès sans changement du titre" , 
      type: "success"
    }, function() {
      
      window.location.href = '../Abonnement.php';
    });</script>
<?php
}