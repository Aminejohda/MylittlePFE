<?php 
		include 'popup.php';

 ?>	
<div class="header_sticky_container">
				<header class="header">
					<div class="container" style="width: auto;">
						<div class="logo_container f_left">
							<a href="index.php" class="logo" title="Sa3edni">
								<img src="public/images/logo.png">
							</a>
						</div>
							<nav class="f_right">
							<button class="menu_button">
									<span></span>
									<span></span>
									<span></span>
								</button>

								<ul class="dropdown_menu clearfix">
									<?php 
									if (!isset($_SESSION['client']) && !isset($_SESSION['entreprise']) ){
									?>
									<li data-toggle="modal" data-target="#myModal3"><a href="#">Espace Entreprise<i></i><i></i></a></li>
									<li data-toggle="modal" data-target="#myModal"><a href="#">Espace Client<i></i><i></i></a></li>
									<li><a href="abonnement.php">abonnements<i></i><i></i></a></li>
									<li><a href="contact.php">Contacter Nous<i></i><i></i></a></li>
									<?php }?>
									
									<?php 

									if (isset($_SESSION['client'])){?>

									<li><a href="#">Espace Client<i></i><i></i></a>
										<ul>	
											<li style="display: none;"><a href="tableau_bord_cli.php">Tableau de bord</a></li>
											<li style="display: none;"><a href="logout.php">Déconnexion</a></li>
										</ul>
									</li>
									<li ><a href="devis_client.php">Publier Votre Devis<i></i><i></i></a></li>
										<li><a href="contact.php">Contacter Nous<i></i><i></i></a></li>
									<?php }  ?>
									<?php 

									if (isset($_SESSION['entreprise'])){?>

									<li><a href="#">Espace entreprise<i></i><i></i></a>
										<ul>	
											<li style="display: none;"><a href="tableau_bord_ent.php">Tableau de bord</a></li>
											<li style="display: none;"><a href="logout.php">Déconnexion</a></li>
										</ul>
									</li>
									<li ><a href="ajout_annonce.php">Publier Votre Annonce<i></i><i></i></a></li>
										<li><a href="contact.php">Contacter Nous<i></i><i></i></a></li>
										<li><a href="abonnement.php">abonnements<i></i><i></i></a></li>

									<?php }  ?>
									
								</ul>
							</nav>
					</div>
				</header>
			</div>
	
				
										