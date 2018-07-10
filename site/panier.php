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
		<div class="boxed_layout">
			<?php include 'header.php'; ?>
			<div class="page_padding">
				<div class="container">
					<!--Start pricing table 1-->
					<div class="page_padding">
				<div class="container">
						<?php
    include 'model/mabonnement.php';
    $id=$_GET['id'];
    $p= new Abonnement();
    $res=$p->AffAbbyid($id);
    for( $i=0 ;$i<count($res); $i++){
					?>
					<!--Start cart table-->
					<section class="table_cart_container">
						<table class="table_cart_type">
							<tr>
								<td>Abonnement</td>
								<td>Prix</td>
								<td>TVA</td>
								<td>Supprimer</td>
							</tr>
							<tr>
								<td>
									
									<?php echo $res[$i]['type_ab'];?>
								</td>
								<td>
									<?php echo $prix= $res[$i]['prix_ab'];?> DT

								</td>
								<?php }?>
								<td>
									18%</td>
								<td>
									<a class="cart_remove"></a>
								</td>
							</tr>
							
						</table>
						<footer class="table_cart_footer clearfix">
							<div class="f_left">
								<form action="abonnement.php">	<button class="button_type_4">Modifier Commande</button></form>
						  </div>
							<div class="f_right">
							
								<a href="#" class="button_next_type_1">Valider Commande</a>
                                
                                
                                <?php $prix_t =($prix * 0.18) + $prix;
								
							$tt= number_format($prix_t,2,'.',' '); ?> 
                                
							<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  
  
 

    <input name="id_prod" type="hidden" value="--">
    <input name="qte" type="hidden" value="--">
       
  
<input type='hidden' value="<?php echo $tt;?>" name="amount" />

<input name="currency_code" type="hidden" value="EUR" />

<input name="shipping" type="hidden" value="0" /><!--frais de port-->

<input name="tax" type="hidden" value="00.00" />

<input name="return" type="hidden" value="http://127.0.0.1/pfetest/site/paiementValide.php?id_ab=<?php echo $id;?>" />

<input name="cancel_return" type="hidden" value="http://127.0.0.1/pfetest/site/paiementAnnule.php" />

<input name="notify_url" type="hidden" value="http://127.0.0.1/site/paiementValide.php?id_ab=<?php echo $id;?>" />

<input name="cmd" type="hidden" value="_xclick" />

<input name="business" type="hidden" value="medaminemhiri.95-facilitator@gmail.com" />

<input name="item_name" type="hidden" value="" />

<input name="no_note" type="hidden" value="1" /><!--Par défaut, PayPal demande aux acheteurs d'ajouter un commentaire lors de la transaction. En spécifiant ce paramètre, la boite ne s'affichera plus.-->

<input name="lc" type="hidden" value="FR" />

<input name="bn" type="hidden" value="PP-BuyNowBF" />

<input name="custom" type="hidden" value="ID_ACHETEUR" />

<input alt="Effectuez vos paiements via PayPal : une solution rapide, gratuite et sécurisée" name="submit" src="https://www.paypal.com/fr_FR/FR/i/btn/btn_buynow_LG.gif" type="image" /><img src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" border="0" alt="" width="1" height="1" />  
  
  
  
  
		  </form>
                            </div>
					  </footer>
				  </section>
					<!--End cart table-->
					<!--Start cart totals-->
					<section class="cart_totals clearfix m_bottom_15">
						<hr class="devider_type_4">
						<h2>Cart Totals</h2>
						<ul>
							<li>Order Total:<span><?php echo $prix_t =($prix * 0.18) + $prix; ?> DT </span></li>
						</ul>
					</section>
					<!--End cart totals-->
					
					</div>
					<!--End calculate shipping-->
				</div>
			</div>
		</div></div>
		<?php include 'footer.php'; ?>
	
</body></html>