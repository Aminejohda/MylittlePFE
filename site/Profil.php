<!DOCTYPE HTML>
<html>
<head>
	<title>Sa3edni.tn</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta charset="utf-8">
	<?php include 'style.php';?>
	<?php include 'js.php';
	include 'public/php/resize.php';  ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
	<a href="#" class="scrollup"></a>
	<div class="boxed_layout">
		<?php include 'header.php'; ?>
		<?php
		include 'model/mannonce.php';
		$id= $_GET['id'];
		$p= new Annonce();
		$res=$p->AffAnnbyid3($id);

		?>
		<div class="overlay2">
			<?php echo '<img src="public/images/annonce/'.$res['image_an'].'" width="160" height="160">';?>


		</div>
		<div class="overlay3">
			<?php echo "<dt style ='font-size: 1.4em;'>".$res['nom_commerciale']."</dt>"."<dt>".$res['titre_ac'].' - '.$res['adresse']."</dt>";?>
		</div>

		<img src="public/images/fondheader.jpg" style=" height: 350px; width: 1400px">

		<div class="page_padding">
			<div class="container" style="width: 1100.2px;margin-left: 178px;margin-right: 0px">
				<div class="row">
					<div class="span9 m_bottom_15">
						<hr class="devider_type_4">
						<br><br><div style ='font-size: 1.4em;'><?php echo $res['titre_annonce'];?></div><br><br>
						<?php echo $res['description_an'] ?><br><br>
						<div class="banner_type_3" style="padding-left: 10px ; height: 620px">
							<div class="span6" >
								<h4>A propos de mon métier</h4>
								Moyens de paiement : <br>

								<?php echo $res['moyen_paiement'] ?><br>
								reponse de demande : <?php echo $res['reponse_demande'] ?><br>
								dernière connexion : <?php echo $res['dernier_cnx'] ?><br><br>
								<hr class="devider_type_4" style="border-top-width:3px;"><br>
								<h4>Infos pro</h4><br>
								<label>site :</label> <?php echo $res['site_web'] ?><br>
								<label>e-mail :</label><?php echo $res['email'] ?><br>
								<label>tel :</label><?php echo $res['telephone'] ?><br>
								<label>gsm :</label><?php echo $res['gsm'] ?><br>
								<label>fax :</label><?php echo $res['fax_ent'] ?><br><br>
								<div class="span2">
                <?php
                  
$id_entre = $res['id_entreprise'];
    include 'model/mavis.php';
                  $k= new Avis();
    $res3=$k->Affetoile1($id_entre);
    $res4=$k->Affetoile2($id_entre);
    $res5=$k->Affetoile3($id_entre);
    $res6=$k->Affetoile4($id_entre);
    $res7=$k->Affetoile5($id_entre);
    $res2=$k->Affetoilevide($id_entre);
    $count2=count($res2);
    $etoile1=count($res3);
    $etoile2=count($res4);
    $etoile3=count($res5);
    $etoile4=count($res6);
    $etoile5=count($res7);
$a = $etoile1 ;
$b = $etoile2 * 2 ;
$c = $etoile3 * 3 ;
$d = $etoile4 * 4 ;
$e = $etoile5 * 5 ;
$nbr_etoile = $a + $b + $c + $d + $e ;
$moy= $nbr_etoile/$count2;    
$tot= round($moy);
    
      // $tot= number_format($moy,1,'.',' '); moyenne avec virgule
                  echo '<br><div style ="
                  font-size: 60px;">'.$tot.'/5</div><br><br>';
                  echo'<div id="star-container" style="margin-left: 20px;">';
                  for ($f=0; $f<$tot; $f++) { 
                    echo'<i class="fa fa-star fa-2 star2"></i>';
                  }
                  echo'</div>';
                  echo '<img src="public/images/custom-icon-author.png" alt=""> '.$count2.' au total.<br><br>';
                  echo '</div>';

                  ?>
                  <div class="span3">
                    <br>
                   
                   <div style="display: inline-flex;"><i class="fa fa-star fa-2 star"> 1 </i><progress value="<?php echo $etoile1 ?>" max="<?php echo $count2 ?>" style="margin-left: 20px;"></progress></div><br>
                  <div style="display: inline-flex;"><i class="fa fa-star fa-2 star"> 2 </i><progress value="<?php echo $etoile2 ?>" max="<?php echo $count2 ?>" style="margin-left: 20px;"></progress></div><br>
                  <div style="display: inline-flex;"><i class="fa fa-star fa-2 star"> 3 </i><progress value="<?php echo $etoile3 ?>" max="<?php echo $count2 ?>" style="margin-left: 20px;"></progress></div><br>
                  <div style="display: inline-flex;"><i class="fa fa-star fa-2 star"> 4 </i><progress value="<?php echo $etoile4 ?>" max="<?php echo $count2 ?>" style="margin-left: 20px;"></progress></div><br>
                  <div style="display: inline-flex;"><i class="fa fa-star fa-2 star"> 5 </i><progress value="<?php echo $etoile5 ?>" max="<?php echo $count2 ?>" style="margin-left: 20px;"></progress></div><br>
                   
                  </div><br><br><br><br><br><br></div><br><br><br><br><br><br><br>
                  <?php echo '<img src="public/images/logo_ent/'.$res['image'].'" width="120" height="100" style="border: solid 4px white; border-radius: 10px ;">';?>
							</div>

							
							
						</div>
						 







						<br><br><br>

									<?php if ($res['id_entreprise'] != $_SESSION['entreprise']) {
										
									?>
									<div class="span4" style="margin-left: 50px;">
										<div style="width:310px; border:solid 3px #ff7400  ">
											<div style="padding-top: 20px;padding-bottom: 40px; background-color:#ff7400;text-align: center; color: white"><?php echo $res['titre_ac'];?></div>
											<input onclick="change()" type="button" value="Appeler le pro" id="myButton1" style="margin-left: 50px;margin-bottom: 10px; margin-top: 10px; width: 210px" class="btnn" ></input>
<?php if (  (!isset($_SESSION['client'])) && (!isset($_SESSION['entreprise'])) ) { ?>
	<a href="cnx.php"><input  type="button" value="Envoyer un message" style="margin-left: 50px;margin-bottom: 10px; margin-top: 10px; width: 210px" class="btnn"></input>
											<input  type="button" value="Laisser un avis a ce pro" style="margin-left: 50px;margin-bottom: 10px; margin-top: 10px; width: 210px" class="btnn"></input>
											</a>
<?php  } else {?>
											<input  type="button" value="Envoyer un message" style="margin-left: 50px;margin-bottom: 10px; margin-top: 10px; width: 210px" class="btnn" data-toggle="modal" data-target="#myModal8"></input>
											<input  type="button" value="Laisser un avis a ce pro" style="margin-left: 50px;margin-bottom: 10px; margin-top: 10px; width: 210px" class="btnn" data-toggle="modal" data-target="#myModal9"></input>

<?php } ?>

											<script type="text/javascript">
												function change() 
												{
													var elem = document.getElementById("myButton1");
													if (elem.value=="<?php echo $res['telephone'] ?>") elem.value = "Appeler le pro";
													else elem.value = "<?php echo $res['telephone'] ?>";
												}	
											</script>
										</div>
									</div>
									</div>
								<?php }	?>
								<div class="span9 m_bottom_15">
								<?php
#pour le client

  
    $i= new Avis();
    $res14=$i->AffAvcli($id_entre);
    for( $i=0 ;$i<count($res14); $i++){ ?>
      							<div class="comment_container">
										<header>
											<img src="public/images/client/<?php echo $res14[$i]['image']; ?>" width="100" style="margin-right:60px">
											<div class="comment_content" style="margin-left: 20px;">
												<p><?php echo $res14[$i]['nom'].' '.$res14[$i]['prenom']; ?><ul style="float: right;">
                        Annonce : <?php echo $res14[$i]['titre_annonce']; ?>
                      </ul></p>
                <br>
												<p><?php echo $res14[$i]['commentaire']; ?></p>
											</div>
										</header>
										<footer>
											
											<ul class="social_icons_list clearfix">
												<?php echo $res14[$i]['date_rec']; ?>
											</ul>
										</footer>
									</div>
								
								<?php  } ?>

	          
<?php
#pour lentreprise

    $res1=$k->AffAvent($id_entre);
    for( $j=0 ;$j<count($res1); $j++){ ?>
                        <div class="comment_container">
                    <header>
                      <img src="public/images/logo_ent/<?php echo $res1[$j]['image']; ?>" width="100" style="margin-right:60px">
                      <div class="comment_content" style="margin-left: 20px;">
                        <p><?php echo $res1[$j]['nom_commerciale']; ?><ul style="float: right;">
                        Annonce : <?php echo $res1[$j]['titre_annonce']; ?>
                      </ul></p>
                <br>
                        <p><?php echo $res1[$j]['commentaire']; ?></p>
                      </div>
                    </header>
                    <footer>
                      
                      <ul class="social_icons_list clearfix">
                        <?php echo $res1[$j]['date_rec']; ?>
                      </ul>
                    </footer>
                  </div>
                
                <?php  } ?>


								</div>
							</div>

						</div>
					</div>	 
					<?php if ( (isset($_SESSION['client'])) || (isset($_SESSION['entreprise']) )) {
						include 'display_info.php';
					} 	
					?>	
					<?php include 'publier_avis.php'; include 'footer.php'; ?>
</body>
</html>