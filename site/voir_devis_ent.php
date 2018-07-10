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
			<?php include 'header.php';include 'header_ent.php'; ?>
			<div class="container">

  <section class="cart_totals clearfix m_bottom_15">
  <br>
            <hr class="devider_type_4">
            <h2>Mes devis</h2>
          </section>
          	<?php 
           	
            $id_ent= $_SESSION['entreprise'];
           	$id_dev = $_GET['id_dev'];	
    		include 'model/mdevis.php';
   			$k= new Devis();
        $j= new Devis();
        $ac= new Devis();
        $res=$j->AffDev2($id_dev);
        $res3=$ac->AffDevent($id_dev);
   			$res1=$k->AffDevbyid($id_dev);
       
       		?>     
       		
          <div class="total_container">



<?php
if (isset($res['id_client'])) {

          ?>
        
        <div class="fancybox_container f_left" style="margin: 6px 20px auto 0;">
        <a href="public/images/client/<?php echo $res['image'];?>" class="fancybox_link"></a>
        <img src= "public/images/client/<?php echo $res['image'];?>" width="100">
        <div class="fancybox_color_wrap"></div>
        </div>
        <span style="float: right;"><?php echo $res['date_deb_devis'];?>
        </span>
     <BR>
        <span> <?php echo $res['nom'].' '.$res['prenom'];?></span>
        <br><br>
        <span style="font-size : large">Sujet : </span><?php echo $res['sujet_devis'];?> 
        </div>
        <div class="total_container" style="padding: 50px 50px 50px 120px">
        <img src="public/images/devis/<?php echo $res['image_dev'];?>" style="width: 150px; margin: 25px">
        	<?php echo $res['demande_devis'];?>
<?php } else {
 ?>


        <div class="fancybox_container f_left" style="margin: 6px 20px auto 0;">
        <a href="public/images/logo_ent/<?php echo $res3['image']?>" class="fancybox_link"></a>
        <img src= "public/images/logo_ent/<?php echo $res3['image']?>" width="100">
        <div class="fancybox_color_wrap"></div>
        </div>
        <span style="float: right;"><?php echo $res3['date_deb_devis'];?>
        
        </span>
     <BR>
        <span> <?php echo $res3['nom_commerciale'];?></span>
        <br><br>
        <span style="font-size : large">Sujet : </span><?php echo $res['sujet_devis'];?> 
        </div>
        <div class="total_container" style="padding: 50px 0 50px 150px">
          <?php echo $res3['demande_devis'];?>
          <?php } ?>



          <br><br>
    <?php 
      for ($i=0; $i <count($res1) ; $i++) { 
     ?> 
          <div class="comment_container">
                    <header>
                      <img src="public/images/logo_ent/<?php echo $res1[$i]['image'];?>" width="100">
                      <div class="comment_content">
                        <div class="top_part">
                          <p><?php echo $res1[$i]['nom_commerciale'];?></p>
                          <div class="comment_time">
                            <p><?php echo $res1[$i]['date_rep'];?></p>
                          </div>
                        </div>
<p><?php echo $res1[$i]['reponse'];?></p>                      </div>
                    </header>
                  </div>
                  <?php } ?>
      <a type="button" href="#demos"  data-toggle="collapse"style="background: white;background-size: 30px 30px; width: 33px;
    background-repeat: no-repeat; float: right; margin-right: 90px" value=" "> <img src="public/images/icon_comments.png"></a>  
  <div id="demos" class="collapse" >
    <br>
    <form method="post" action="controller/crepondre_devis.php?id_dev=<?php echo $id_dev;?>">
      <label for="textarea_1">Répondre:</label>
<textarea id="textarea_1" class="textarea" style="width: 610px; height: 200px" name="rep" placeholder="Cliquer ici pour Répondre"></textarea >
<script>
    $(".textarea").wysihtml5();
</script>
<input type="hidden" value="<?php echo $id_ent;?>" name="id_ent"></input>
<input type="submit" value="Envoyer" id="btnn"></input>
      </form>
</div>
  </div>
        </div>
            <br><br>
        </div>
			<?php include 'footer.php'; ?>
	</body>
</html>
