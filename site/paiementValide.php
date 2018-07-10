<?php 
session_start(); 

$id_ab = $_GET['id_ab'];
$id_ent = $_SESSION['entreprise'];	
include("model/mabonnement.php");
$i= new Abonnement();
$i->id_ab=$id_ab;
$i->id_ent=$id_ent;
$i->modif_ab_ent($i);






?>

<!DOCTYPE HTML>
<html>
		<head>
		<title>Sa3edni.tn</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta charset="utf-8">
		<?php include 'style.php';?>
		<?php include 'js.php'; ?>
	</head>
	<body>
		<a href="#" class="scrollup"></a>
		<div class="boxed_layout">
			<?php include 'header.php'; ?>
			<div class="page_padding">
				<div class="container">
<div class="span12">
							<!--Start custom icons-->
							<div class="clearfix">
								<hr class="devider_type_4">
								<h2>Fin Paiement</h2>
							<br>
								<p class="green_alert_box">
									Paiement avec succès
									<a></a>
								</p>
							</div>
							<!--End custom icons-->
						</div></div></div></div>
							<?php include 'footer.php'; ?>
	
</body></html>