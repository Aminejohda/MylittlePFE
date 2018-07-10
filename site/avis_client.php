<?php include 'session_client.php'; ?>
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
<div class="boxed_layout_secondary">
<?php include 'header.php';
      include 'header_cli.php';

?>
<div class="container">
  <hr class="devider_type_4">
<section class="m_bottom_30">
<hr class="devider_type_4">
<h2>Les avis que j'ai déposés</h2>

       <div id="test-list">
   Recherche: <input type="text" class="search" />
    <br><br> 
    <ul class="list shop_items_list clearfix">
<?php
$id= $_SESSION['client'];
    include 'model/mavis.php';
    $i= new Avis();
    $res=$i->AffAv3($id);
    if (count($res) == 0) {
        echo 'Aucune avis visible';
     } 
    for( $i=0 ;$i<count($res); $i++){ ?>
      									<div class="comment_container">
										<header>
											<img src="public/images/logo_ent/<?php echo $res[$i]['image']; ?>" width="100" style="margin-right:60px">
											<div class="comment_content">
                      <p class='name'><?php echo $res[$i]['nom_commerciale']; ?>
                      <div style="float: right;"><?php echo $res[$i]['titre_annonce']; ?></div></p>
                      <br>
                      <a href="controller/csupp_avis.php?id=<?php echo $res[$i]['id_avis'] ;?>" data-confirm="Etes-vous certain de vouloir  de supprimer?"><img src="public/images/trash.png" width="20px" style="float: right;padding-left: 10px;"></a></p>
												<p><?php echo $res[$i]['commentaire']; ?></p>
											</div>
										</header>
										<footer>
										
											<ul class="social_icons_list clearfix">
												<?php echo $res[$i]['date_rec']; ?>
											</ul>
										</footer>
									</div>
                    <?php  } ?>
                    </ul>
        <div class="clearfix">
              <!--Start pagination-->
              <div class="pagination_type_1 f_left">
              
              <ul class="pagination_page_list"></ul>
            
              </div>
    
  </div>
  </div>  <script>var monkeyList = new List('test-list', {
  valueNames: ['name'],
  page: 9,
  plugins: [ ListPagination({}) ] 
});</script>
								</section>
	
  						
          
<br><br><br>
</div>
</div>

<?php include 'footer.php'; ?>
  </body>
</html>