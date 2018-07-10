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
		<div class="boxed_layout">
			<?php include 'header.php';include 'header_cli.php'; ?>
			<div class="container">

  <section class="cart_totals clearfix m_bottom_15">
  <br>
            <hr class="devider_type_4">
            <h2>Mes devis</h2>
          </section>
          	<?php 
           	
           	$id_dev = $_GET['id_dev'];	
    		include 'model/mdevis.php';
   			$k= new Devis();
        $j= new Devis();
        $res=$j->AffDev2($id_dev);
   			$res1=$k->AffDevbyid($id_dev);
       		?>     
       		
          <div class="total_container">

        <div class="fancybox_container f_left" style="margin: 6px 20px auto 0;">
        <a href="public/images/client/<?php echo $res['image'];?>" class="fancybox_link"></a>
        <img src= "public/images/client/<?php echo $res['image'];?>" width="100">
        <div class="fancybox_color_wrap"></div>
        </div>
        <span style="float: right;"><?php echo $res['date_deb_devis'];?></span>
     <BR>
        <span> <?php echo $res['nom'].' '.$res['prenom'];?></span>
        <br><br><br>
        <span style="font-size : large">Sujet : </span><?php echo $res['sujet_devis'];?> 
        </div>
        <div class="total_container" style="padding: 50px 50px 50px 120px">
        <?php
        if ($res['image_dev'] !="") {?>
        <img src="public/images/devis/<?php echo $res['image_dev'];?>" style="width: 150px; margin: 25px">
       <?php }
        ?>
         
        	<?php echo $res['demande_devis'];?>
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
                            <p><?php echo $res1[$i]['date_rep'];?> </p>
                          </div>
                        </div>

<p><?php echo $res1[$i]['reponse'];?></p>                      </div>
                    </header>
                  </div>

                  <?php } ?>
      <a  href="controller/csupp_dev.php?id_dev=<?php echo $id_dev;?>" class="small_button_type_1" data-confirm="Etes-vous certain de vouloir supprimer cette Devis?"  style="background: white;background-size: 30px 30px; width: 33px;
    background-repeat: no-repeat; float: right; margin-right: 90px" value=" "> <img src="public/images/glyphicons/glyphicons-17-bin.png"></a>  
   

  </div>
        </div>
            <br><br>
        </div>
			<?php include 'footer.php'; ?>
	</body>
</html>
