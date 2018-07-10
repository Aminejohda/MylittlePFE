
<!DOCTYPE HTML>
<html>
		<head>
		<title>Sa3edni.tn</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <title>Liste Catégories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include 'style.php';?>
		<?php include 'js.php'; ?>
	</head>
	<body>
		<a href="#" class="scrollup"></a>
		<div class="boxed_layout">
			
			<?php include 'header.php';
			include 'public/php/resize.php'; ?>
			<?php
				$id_cat = $_GET['id'];
    $i= new Categorie();
    $res=$i->AffCatbyid($id_cat); 
      ?>
			<img src="../admin/public/img/categorie/<?php echo $res['image_cat'] ?>" style=" height: 350px; width: 1400px">
			<div class="banner_type_3">
				<div class="container">
				
						<h1><?php echo $res['titre_cat'] ?></h1>
					<p><?php echo $res['description_cat'] ?></p>
				</div>
			</div>
			<div class="page_padding" style="margin-top: 0">
				<div class="container">
					<div class="row">
						<div class="span9 m_bottom_15">
						<hr class="devider_type_4">
				
					<section class="shop_items_container">
							
						 <div id="test-list">
   Recherche: <input type="text" class="search" />	<?php include 'sorting.php'; ?>
    <ul class="list shop_items_list clearfix">
					
<?php
    include 'model/mactivite.php';
    $id= $_GET['id'];
    $p= new Activites();
    $res=$p->AffAct($id);
    if (count($res) == 0) {
    		
	echo "<p class='yellow_alert_box'>
									 Message d'erreur.Aucune Activites Pour le moment.
									 Accédez à la page directement à partir de la page d'accueil</p>";

    	} else {
    for( $i=0 ;$i<count($res); $i++){
?>

								<li>
									<div class="shop_item_wrap">
										<figure class="shop_item_img_part special_item">

										<a href="lesact.php?id=<?php echo $res[$i]['id_ac']?>"><?php echo '<img src="../admin/public/img/activite/'.$res[$i]['image_ac'].'"  style="width:180px;height:180px;">'; ?></a>	
											<dl>
												<?php echo "<dt> <p class='name'>".$res[$i]['titre_ac']."</p></dt>";?>
												<p><?php $text=  $res[$i]['description_ac'];
												
												echo   preview_text($text,50);?></p>
											</dl>
										</figure>
									</div><br>
									<div class="add_to_cart_no_active"> 
										<a  id ="btnn" href="liste_annonce.php?id=<?php echo $res[$i]['id_ac'];?>">Voir</a>
										
									</div>
								</li>
								<?php } } ?>
						</ul>
    		<div class="clearfix">
							<!--Start pagination-->
							<div class="pagination_type_1 f_left">
							
							<ul class="pagination_page_list"></ul>
						
							</div>
    
  </div>
  </div></section>
					
						<br><br>

  <script>var monkeyList = new List('test-list', {
  valueNames: ['name'],
  page: 9,
  plugins: [ ListPagination({}) ] 
});</script>
			
						
						</div>
						<div class="span3">
					
							
						<figure class="m_bottom_30">
								<hr class="devider_type_4">
								<br><br>
								<figcaption>
									<h2>Nos Categories</h2>
								</figcaption>
									<?php
			
    $i= new Categorie();
    $res=$i->affcat(); 
    for ($i=0; $i <count($res) ; $i++) { 
    	
    
      ?>
								<ul class="list_type_9">
									<li><a href="liste_activite.php?id=<?php echo $res[$i]['id_cat'] ?>"><i class="icon_container"></i><?php echo $res[$i]['titre_cat'] ?></a></li>
								
								</ul>
								<?php } ?>
							</figure>
						</div>
					</div>
				</div>
			</div>
			</div>
			<?php include 'footer.php'; ?>
</body>
</html>