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
										<?php
    include 'model/mactivite.php';
    $id= $_GET['id'];
    $p= new Activites();
    $res=$p->AffActbyid($id);
  
?>
		<img src="../admin/public/img/activite/<?php echo $res['image_ac'] ?>" style=" height: 350px; width: 1400px">
			<div class="page_padding">
				<div class="container">
					<div class="row">
						<div class="span8">

							<article>
								<hr class="devider_type_5">
								<header>
									<br>
									<h2><?php echo $res['titre_ac'];?></h2>
								</header>
								<div class="fancybox_container f_left">
									<a href="../admin/public/img/activite/<?php echo $res['image_ac']; ?>" class="fancybox_link"></a>
									<?php echo '<img src="../admin/public/img/activite/'.$res['image_ac'].'"  style="width:180px;height:180px;">'; ?>
									<div class="fancybox_color_wrap"></div>
								</div>
								<p><?php echo $res['description_ac']; ?></p>
							</article>
						</div>
						<div class="span4">
							<!--Start cart-->
							<hr class="devider_type_4">
							<a href="liste_annonce.php?id=<?php echo $res['id_ac']; ?>"><img src="public/images/bt_senior.png" ></a>
							<!--End community poll-->
						</div>
					</div>
				</div>
			</div>
		</div>
			<?php include 'footer.php'; ?>
		
	</body>
</html>