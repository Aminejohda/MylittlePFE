<?php session_start(); ?>

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
		<div class="boxed_layout" style="background-color: white">
			<?php include 'header.php'; ?>
			<div class="page_padding">
				<div class="container">
					<div class="pricing_table_type_1 m_bottom_30">
							<?php
    include 'model/mabonnement.php';
    $p= new Abonnement();
    $res=$p->AffAb();
    for( $i=0 ;$i<count($res); $i++){
if( $res[$i]['type_ab'] == "Premium")
					{?><div class="pricing_table_column active_column">
 <?php }else {?><div class="pricing_table_column "><?php }?>
							<header>
								<?php echo $res[$i]['type_ab'];?>
							</header>
							<div class="price">
								<dl>
									<dt>$ <?php echo $res[$i]['prix_ab'];?></dt>
						
								</dl>
							</div>
							<ul class="pricing_table_list">
								<li><?php echo $res[$i]['duree_ab']." Mois";?></li>
							
							</ul>
							<footer>
<?php
if (isset($_SESSION['entreprise'])) {?>
<a href="panier.php?id=<?php echo $res[$i]['id_ab'];?>">Commander</a><?php 
} else {
?>
								<a href="cnx.php">Connectez-vous</a>
								<?php } ?>
							</footer>
						</div>
				<?php } ?>
						<!--End pricing table column-->
					</div>
					<!--End pricing table 1-->
				</div>
		</div></div>
		<?php include 'footer.php'; ?>
	
</body></html>