<?php
  mysql_connect("localhost","root","");  
  mysql_select_db("saadeni");  
  require '../model/config.php';
  
  $id = $_POST['NUM'];
  $sql=mysql_query("SELECT * FROM 
		annonce, entreprise, activites, avis
		where entreprise.id_entreprise = annonce.id_entreprise  
		and annonce.id_ac = activites.id_ac and avis.id_rec = entreprise.id_entreprise
    and annonce.id_annonce = '$id' ");

 
  while($row=mysql_fetch_assoc($sql))
  $output[]=$row;
$id_ent=$row['id_entreprise'];
  print(json_encode($output)); // encoder le  resultat sous la format JSON = JAVA SCRIPT OBJECT NOTATION = c'est une format d'echnage des donées qui permet de le stricturer

 
 

?>