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
	<?php
	$email = $_GET['email'];
	?>
		<a href="#" class="scrollup"></a>
		<div class="boxed_layout_secondary">
		<br><br><br><br><br><br><br>
		<div class="span4">
				<img src="public/images/blog2.jpg">	
						</div>
							
		<h2 style='font-size: 34px;line-height: 1.1;font-family: Lato,"Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;
    font-weight: 300;
    margin-top: 0;-webkit-margin-before: 0.83em;
    -webkit-margin-after: 0.83em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    margin-bottom: 16px;
    margin-left: 50%'>Création de compte</h2>

<p style=" margin-left: 30%; padding-right: 50px">Nous vous remercions de vous inscrire sur le site Sa3edni.tn . Vous recevrez une confirmation par e -mail contenant un lien d'activation à cette adresse:</p>

<div style="color: rgb(241, 93, 28);margin-left: 30%"><?php echo $email; ?></div><br>
<p style=" margin-left: 30%; padding-right: 50px">Si vous ne recevez pas la confirmation par e -mail , s'il vous plaît vérifier votre dossier spam et vérifier que votre adresse e -mail est correcte . Si vous essayez de vous connecter , vous serez en mesure de demander à nouveau la confirmation par e -mail .</p>

<br><br><br><br><br><br><br>




	


			<?php include 'header.php'; ?>
			</div>
			<?php include 'footer.php'; ?>
		
	</body>
</html>