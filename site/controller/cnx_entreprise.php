<script src='../public/js/sweetalert.min.js'></script>
  <link href='../public/css/sweetalert.css' rel='stylesheet'>

<?php
 session_start();
$email= $_POST['email1'];
$pass= $_POST['pass'];
include("../model/config.php");
$sql=$db->query("select COUNT(*) from entreprise where email='$email' and password='$pass'")->fetch();
if($sql['COUNT(*)']!=0){

$sql1=$db->query("select * from entreprise where email='$email' and password='$pass' ")->fetch();
if($sql1['conf']=='oui'){
    $nom =$sql1['nom_commerciale'];
$id=$sql1['id_entreprise'];
$_SESSION['entreprise']=$id;
?>
<p></p>
<script language='javascript'> swal({
      title: "Bienvenue <?php echo $nom ?>", 
     
      type: "success"
    }, function() {
      // Redirect the user
      window.location.href = '../tableau_bord_ent.php';
    });</script>

<?php




}else {
  ?>
<p></p>
<script language='javascript'> swal({
      title: "Message Erreur", 
      text: "Vuillez activer votre compte " , 
      type: "error"
    }, function() {
      // Redirect the user
      window.location.href = '../index.php';
    });</script>

<?php
}

}
if ($sql['COUNT(*)']==0){
?>
<p></p>
<script language='javascript'> swal({
      title: "Message Erreur", 
      text: "Vos Parametres incorrecte " , 
      type: "error"
    }, function() {
      // Redirect the user
      window.location.href = '../index.php';
    });</script>

<?php

}

?>