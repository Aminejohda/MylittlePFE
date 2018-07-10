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
		
			<div class="banner_type_3">
				<div class="container">
					<h1>Contact</h1>
				</div>
			</div>
			<div class="page_padding">
				<div class="container">
					<hr class="devider_type_4">
					<h2>Notre Emplacement</h2>
					<!--Start google map-->
					<div id="gmap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d808.3986286370791!2d10.597564829179168!3d35.858945085673646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDUxJzMyLjIiTiAxMMKwMzUnNTMuMiJF!5e0!3m2!1sfr!2s!4v1460714335030" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>
					<!--End google map-->
					<div class="row">
						<div class="span8">
							<hr class="devider_type_4">
							<h2>Contacter-Nous</h2>
							<!--Start contact form-->
							<form id="contactform" method="post" action="controller/contact_admin.php">
								<fieldset>
									<span class="form_col">
										<label for="wname">Votre Nom(obligatoire)</label>
										<input type="text" name="nom" id="wname" required>
									</span>
									<span class="form_col">
										<label for="wmail">Votre Email(obligatoire)</label>
										<input type="email" name="email" id="wmail" required>
									</span>
									<span class="form_col">
										<label for="wname">Objet(obligatoire)</label>
										<input type="text" name="obj" id="wname" required>
									</span><BR>
									<label for="wmessage">Message(obligatoire)</label>
									<textarea name="msg" id="wmessage" required></textarea>
									<button type="submit" class="small_button_type_1">Envoyer Message</button>
								</fieldset>
							</form>
							<!--End contact form-->
						</div>
						<div class="span4">
							<hr class="devider_type_4">
							<h2>Détails</h2>
							<!--Start contact details-->
							<ul class="contact_detail_list">
								<li><img src="public/images/custom-icon-home.png" alt=""> Addresse:  Rue Charle de gaulle, Hammam-sousse</li>
								<li><img src="public/images/custom-icon-phone.png" alt=""> Téléphone: +216 41747037</li>
								<li><img src="public/images/custom-icon-contact.png" alt=""> Email: <a href="mailto:">Sa3edni.tn@gmail.com</a></li>
							</ul>
							<!--End contact details-->
							<hr class="devider_type_4">
							<h2>Contact Par département</h2>
							<!--Start contact by departemnt list-->
							<ul class="contact_department_list">
								<li>Salsabil sougir - management</li>
								<li>Maha Zaouali - Gérante</li>
								<li>Med Amine Mhiri- développement</li>
								
							</ul>
							<!--End contact by departemnt list-->
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<?php include 'footer.php'; ?>

	</body>
</html>