<?php include 'session.php'; ?>
<!DOCTYPE HTML>
<html>
    <head>
    <title>Sa3edni.tn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <?php include 'style.php';?>
    <?php include 'js.php';include 'public/php/resize.php';  ?>
  </head>

  <body>
    <a href="#" class="scrollup"></a>
   
    <div class="boxed_layout">
      <?php include 'header.php'; include 'header_ent.php'; ?>
    <div class="page_padding">
  <div class="container">  
 <div class="row">
  <div class="span9 m_bottom_15">
            <hr class="devider_type_4">
        
          <section class="shop_items_container">
              
             <div id="test-list">
   Recherche: <input type="text" class="search" />  <?php include 'sorting.php'; ?>
    <ul class="list shop_items_list clearfix">
   <?php
$id= $_SESSION['entreprise'];
    include 'model/mdevis.php';
    $i= new Devis();
    $j= new Devis();
    $res=$i->AffDevcli($id);
    $res1=$j->AffDevoffre($id);
    for( $i=0 ;$i<count($res); $i++){   
?>  
<li style ="height: 215px; ">

<div class="shop_item_wrap">
<figure class="shop_item_img_part special_item">
   <?php echo '<img src="public/images/client/'.$res[$i]['image'].'" width= 100px >'; ?>
</figure>
  <?php echo $res[$i]['nom'].' '.$res[$i]['prenom'].'<br>';
    echo $res[$i]['date_deb_devis'];?><br>
 <p class='name'><?php echo $res[$i]['titre_ac'];?></p> 
  <?php echo $res[$i]['adresse_devis'];?> <br>
  <?php echo preview_text($res[$i]['demande_devis'],40);?> 
	  
          </div>    
            <div class="add_to_cart_no_active"> 

            <a  id ="btnn" href="voir_devis_ent.php?id_dev=<?php echo $res[$i]['id_devis']; ?>">Voir Plus</a> 
            <br><br><br><br><br>
                    
                  </div>

          									
</li>    
 <?php } 

     for( $j=0 ;$j<count($res1); $j++){   
?>  
<li style ="height: 215px; ">

<div class="shop_item_wrap">
<figure class="shop_item_img_part special_item">
   <?php echo '<img src="public/images/logo_ent/'.$res1[$j]['image'].'" width= 100px >'; ?>
</figure>
  <?php echo $res1[$j]['nom_commerciale'].'<br>';
    echo $res1[$j]['date_deb_devis'];?><br>
 <p class='name'><?php echo $res[$i]['titre_ac'];?></p> 
  <?php echo $res1[$j]['adresse_devis'];?> <br>
  <?php echo preview_text($res1[$j]['demande_devis'],40);?> 
    
          </div>    
            <div class="add_to_cart_no_active"> 

            <a  id ="btnn" href="voir_devis_ent.php?id_dev=<?php echo $res1[$j]['id_devis']; ?>">Voir Plus</a> 
            <br><br><br><br><br>
                    
                  </div>

                            
</li>    
 <?php } ?>

</ul><br><br><br><br><br>
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
            <div class="span3 m_bottom_15">
            <hr class="devider_type_4">
              
              <a href="devis_ent2.php">
MES DEMANDE DE DEVIS </a>


            </div>
            </div>
            </div></div></div>
			
      
      <?php include 'footer.php'; ?>
</body>
</html>



