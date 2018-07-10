<div class="boxed_layout_footer">
				<footer>
					<section class="footer_top_part">
						<div class="container">
							<div class="row">
								<div class="span3">
									<figure class="footer_column">
										<i class="footer_icon_03"></i>
										<div class="footer_title_wrap">
											<h2>Nos Catégories</h2>
										</div>
										<?php

    $i= new Categorie();
    $res=$i->AffCat(); 
      
	for ($i=0; $i <count($res) ; $i++) { ?>
<a href=""><p><?php echo $res[$i]['titre_cat']; ?></p></a>

<?php } ?>
									</figure>
								</div>
								<div class="span3">
									<figure class="footer_column">
										<i class="footer_icon_02"></i>
										<div class="footer_title_wrap">
											<h2>Contacter Nous</h2>
										</div>
										<ul class="contact_list">
											<li><img src="public/images/adress.png" alt=""><mark>Adresse:</mark> Rue Charle de gaulle, Hammam-sousse</li>
											<li><img src="public/images/phone.png" alt=""><mark>Téléphone:</mark> +216 41747037</li>
											<li><img src="public/images/mail.png" alt=""><mark>Email:</mark> Sa3edni.tn@gmail.com</li>
										</ul>
										<ul class="social_icons_list clearfix">
											<li class="facebook"><a href="#"><img src="public/images/icons_type2_facebook.png" alt=""></a></li>
											<li class="twitter"><a href="#"><img src="public/images/icons_type2_twitter.png" alt=""></a></li>
											<li class="googleplus"><a href="#"><img src="public/images/icons_type2_googleplus.png" alt=""></a></li>
											<li class="rss"><a href="#"><img src="public/images/icons_type2_rss.png" alt=""></a></li>
										</ul>
									</figure>
								</div>
								<div class="span3">
									<figure class="footer_column">
										<i class="footer_icon_03"></i>
										<div class="footer_title_wrap">
											<h2>Qui sommes-nous ?</h2>
										</div>
										<p>Sa3edni.tn est le site qui encourage l’emploi direct sans intermédiaire dans tous les métiers des services aux particuliers. Plus de 100 métiers les plus traditionnels comme la garde d’enfants ou l’aide aux personnes âgées, aux
										 plus originaux comme coach de développement personnel ou promeneurs d’animaux .</p>
										
									</figure>
								</div>
								<div class="span3">
									<figure class="footer_column">
										<i class="footer_icon_04"></i>
										<div class="footer_title_wrap">
											<h2>Subscribe</h2>
										</div>
										<p>Abonnez-vous à notre Newsletter pour recevoir les nouveautés.</p>
										<form class="subscribe_form">
											<input type="email" placeholder="Enterer votre email" required>
											<button type="submit">Envoyer</button>
										</form>
									</figure>
								</div>
							</div>
						</div>
						<section class="footer_bottom_part">
							<div class="container">
								<ul class="f_right clearfix footer_menu">
									<li><a href="#">Qui Sommes-Nous</a></li>
									<li><a href="ajout_annonce.php">Publier Votre Annonce</a></li>
									<li><a href="contact.php">Contacter Nous</a></li>
								</ul>
								<p class="f_left">&copy; Copyright 2016 Sa3edni.tn All Rights Reserved</p>
							</div>
						</section>
					</section>
				</footer>
</div>