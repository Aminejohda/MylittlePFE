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
            <h2>Ma Messagerie</h2>
          </section>
          	<?php 
           	$id= $_SESSION['entreprise'];
           	$id_msg = $_GET['id_msgent'];	
    				
   			$k= new Message();
          $res1=$k->Affmsgenv($id,$id_msg);
   			
       		?>     
       		
          <div class="total_container">

        <div class="fancybox_container f_left" style="margin: 6px 20px auto 0;"><a href="public/images/logo_ent/<?php echo $res1['image']; ?>" class="fancybox_link"></a>
        <img src="public/images/logo_ent/<?php echo $res1['image']; ?>" width="100">
        <div class="fancybox_color_wrap"></div>
        </div>
      
        <span style="float: right;"><?php echo $res1['date_reception'];?></span>
          <BR>
        <span> <?php echo $res1['nom_commerciale'];?></span>
    
        
        <br><br>
        <span style="font-size : large">Objet : </span> <?php echo $res1['sujet_msg'];?> 
        </div>
         
         
        <div class="total_container" style="padding: 50px 0 50px 150px">
        	Votre Message : <?php echo $res1['quest_msg'];?><br><br>
        <a href="controller/csupp_msg.php?id_msg=<?php echo $id_msg;?>" style="background: white;background-size: 30px 30px; width: 33px;
    background-repeat: no-repeat; float: right; margin-right: 90px" value=" "> <img src="public/images/icon_trash.png"></a>
    <?php if ($res1['reponse_msg'] != "")  { echo 'Réponse : <br>'.$res1['reponse_msg'];} ?>
    
  </div>




        </div>




            <br><br>
        </div>
			<?php include 'footer.php'; ?>
	</body>
</html>