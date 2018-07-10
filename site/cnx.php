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
					<div class="row m_bottom_15">
						<!--Start 1/2 column-->
					   <div class="span6">
							<hr class="devider_type_4">
							<h2>Connexion Tant que Client</h2>
					
          
                 <div style="padding-left : 100px;"> 
                    <?php 
                     include 'fb/index.php';
                    include 'google-login/index.php';
                    ?>
                </div>
                    <br>
 

    <form method="post" action="controller/cnx_client.php">


      <input id="innn" type="email" placeholder ="Adresse email" name="email1" required><br><br>
      <input id="innn" type="password" placeholder ="Mot de passe" name="pass" required><br><br>
    
      <input id="btnn" type="submit" value="Connexion" ><br><br>
      Vous n'avez pas de compte ? <a href="#" data-toggle="modal" data-target="#myModal">Inscrivez-vous</a>
      </form>

</div>


					
					
						<div class="span6">
							<hr class="devider_type_4">
							<h2>Connexion Tant que Entreprise</h2> <br> <br> <br>
							<p>
                            <form method="post" action="controller/cnx_entreprise.php">
  <div style="padding-left: 70px;">
      <input id="innn" type="email" placeholder ="Adresse email" name="email1" required><br><br>
      <input id="innn" type="password" placeholder ="Mot de passe" name="pass" required><br><br>
      
      <input id="btnn" type="submit" value="Connexion" ><br><br>
      Vous n'avez pas de compte ? <a href="#" data-toggle="modal" data-target="#myModal3">Inscrivez-vous</a>
      </form></p>
						</div>
						<!--End 1/2 column-->
					</div>
					
					
				</div>
			</div>
		</div>
		</div>	<?php include 'footer.php'; ?>
		
	</body>
</html>