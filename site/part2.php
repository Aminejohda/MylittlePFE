<div class="banner_type_666">
<div class="row m_bottom_15">
<br><br>
					<p style="padding-left: 17%;">100 MÉTIERS DE SERVICES AUX PARTICULIERS, À DOMICILE OU PRÈS DE CHEZ VOUS.</p>
					<br><br><br>
						<!--Start 1/3 columns-->
						<div class="span4">
						<br><br><br><br>
						<div class="etats">
							<h6>Partout en Tunisie</h6>
							<br>
							<a href="" >Sousse , </a><a href="">Mahdia , </a><a href="">Monastir , </a><a href="">Sfax , </a><a href="">Tunis, </a><a href="">Nabeul , </a>
							<a href="">Médenine , </a><a href="">Gabés , </a><a href="">Kasserine , </a><a href="">Kef , </a><a href="">Jendouba , </a><a href="">Gafsa , </a>
							<a href="">Bizerte , </a><a href="">Béja, </a><a href="">kairouan , </a><a href="">Ariana , </a><a href="">Ben Arous ,</a><a href="">kébili,</a>
							<a href="">Manouba , </a><a href="">Sidi Bouzid , </a><a href="">Siliana, </a><a href="">Tataouine , </a><a href="">Tozeur, </a>
							<a href="">Zaghouan</a>
							</div>
						</div>
						<div class="span5">
							<img src="public/images/maptunisie.png" style="width:400px;height:400px;"></div>
						<div class="span4">
						<br><br><br><br>
							<h6>Des professionnels reconnus</h6>
						<?php
						include 'model/mactivite.php';
						$j= new Activites();
   						$res=$j->AffActivites();
   						for ($i=0; $i <18 ; $i++) { 
   						
   						
						
						
						echo '<a style ="color : black" href="lesact.php?id='.$res[$i]["id_ac"].'">'.$res[$i]['titre_ac'].' , ';?></a>
							<?php } ?>
						</div>
						
					</div>

				

			</div>

