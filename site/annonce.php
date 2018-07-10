<?php include 'session.php'; ?>
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
     <?php include "header.php";
     include 'header_ent.php'; ?>
		<div class="page_padding">
				<div class="container">
                <div class="row">
                <aside class="span4">
                <br><br><br>
<hr class="devider_type_4">

							<ul class="social_stat_list clearfix">

                                   <a href="ajout_annonce.php"><h5> Ajouter une nouvelle annonce</h5></a>
                                    

							</ul>
							
							<figure>
								<hr class="devider_type_4">
								<figcaption>
									<h2>liste des annonces</h2>
								</figcaption>

								<ul class="popular_tags_list clearfix">
								<?php
$id= $_SESSION['entreprise'];
    include 'model/mannonce.php';
    $i= new Annonce();
    $res=$i->AffAnn2($id);
    if (count($res) == 0) {
        echo 'Aucune annonce visible';
     } 
    for( $i=0 ;$i<count($res); $i++){
?>
									<li><a href="#<?php echo  $res[$i]['titre_annonce']; ?>"><?php echo  $res[$i]['titre_annonce'].'<br>'; ?> </a></li>
								
								<?php }	?>
								</ul>
							</figure>



									<figure>
								<hr class="devider_type_4">
								<figcaption>
									<h2>liste des annonces En attente</h2>
								</figcaption>

								<ul class="popular_tags_list clearfix">
								<?php
$id= $_SESSION['entreprise'];
 
    $i= new Annonce();
    $res=$i->AffmesAnn2($id);
    if (count($res) == 0) {
        echo 'Aucune annonce visible';
     } 
    for( $i=0 ;$i<count($res); $i++){
?>
									<li><a href="#<?php echo  $res[$i]['titre_annonce']; ?>"><?php echo  $res[$i]['titre_annonce'].'<br>'; ?> </a></li>
								
								<?php }	?>
								</ul>
							</figure>
							
				</aside>
                 <div class="span8">
           
 <?php 
$i= new Annonce();
    $res=$i->AffAnn2($id);
    if (count($res) == 0) {
        echo 'Aucune annonce visible';
     } 
    for( $i=0 ;$i<count($res); $i++){
?>

<article>
								<hr class="devider_type_5">
								<br>
								<header>
									
									<h2 id="<?php echo  $res[$i]['titre_annonce'];?>">	
		 <?php 
          echo  $res[$i]['titre_annonce'].'<br>';  
		 ?>	</h2>
								</header>
								<section class="portfolio_item_carousel_container">
									<div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 647px; height: 273px; margin: 0px; overflow: hidden;">
									<?php
 echo '<img src="public/images/annonce/'.$res[$i]['image_an'].'" height="120" width="500"/>'.'<br>'.'<br>'.'<br>';?> 
									</div>
									
								</section>
								<!--Start about article block-->
								<div class="about_article">
								<?php                        
           echo $res[$i]['titre_ac'].' - '.$res[$i]['adresse'].'<br>';     ?> 
								</div>
								<!--End about article block-->
							<p><?php   echo $res[$i]['description_an'] ; ?></p>
								<a id="btnn"  style = "width : 70px; border-radius:5px " href="controller/csupp_annonce.php?id=<?php echo $res[$i]['id_annonce'];?>" class="small_button_type_1" data-confirm="Etes-vous certain de vouloir supprimer?">Supprimer</a>
								<a id="btnn"  style = "width : 70px; border-radius:5px " href="modif_annonce.php?id_an=<?php echo $res[$i]['id_annonce'];?>" class="small_button_type_1">Modifier</a>
							</article>

<?php } ?>


					</div>
					
					</div>
				</div>
                </div>
                </div>
             
                
	
		 

			<?php include 'footer.php'; ?>
</body>
</html>

							
                            
             
             
                            
                            