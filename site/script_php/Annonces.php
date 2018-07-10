<?php
  mysql_connect("localhost","root","");  
  mysql_select_db("saadeni");  

 
  $ville = $_POST['VIL'];
  $act = $_POST['ACT'];
  $sql=mysql_query("SELECT * FROM 
		annonce, entreprise, activites
		where entreprise.id_entreprise = annonce.id_entreprise and 
		activites.titre_ac = '$act' and entreprise.adresse like  '%$ville%'
		and annonce.id_ac = activites.id_ac ");
 
  while($row=mysql_fetch_assoc($sql))
  $output[]=$row;
  print(json_encode($output)); // encoder le  resultat sous la format JSON = JAVA SCRIPT OBJECT NOTATION = c'est une format d'echnage des donées qui permet de le stricturer

?>