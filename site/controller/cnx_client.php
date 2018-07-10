<script src='../public/js/sweetalert.min.js'></script>
  <link href='../public/css/sweetalert.css' rel='stylesheet'>
<?php
 session_start();
$email= $_POST['email1'];
$pass= $_POST['pass'];
include("../model/config.php");
$sql=$db->query("select COUNT(*) from client where email='$email' and password='$pass'")->fetch();
if($sql['COUNT(*)']!=0){

$sql3=$db->query("select COUNT(*) from entreprise where email='$email' ")->fetch();
if($sql3['COUNT(*)']==0){


$sql1=$db->query("select * from client where email='$email' and password='$pass' ")->fetch();
if($sql1['conf']=='oui'){
$id=$sql1['id_client'];
$nom=$sql1['nom'];
$_SESSION['client']=$id;
?>
<p></p>
<script language='javascript'> swal({
      title: "Bienvenue <?php echo $nom ?>", 
     
      type: "success"
    }, function() {
      // Redirect the user
      window.location.href = '../tableau_bord_cli.php';
    });</script>

<?php

}
else 
{
	?>
<p></p>
<script language='javascript'> swal({
      title: "Message Erreur", 
      text: "Veuillez activer votre compte " , 
      type: "error"
    }, function() {
      // Redirect the user
      window.location.href = '../index.php';
    });</script>

<?php
}
}else {
  ?>
<p></p>
<script language='javascript'> swal({
      title: "Message Erreur", 
      text: "vous etes un prestataire " , 
      type: "error"
    }, function() {
      // Redirect the user
      window.location.href = '../index.php';
    });</script>

<?php
	
}}
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