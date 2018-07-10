<?php
  mysql_connect("localhost","root","");  
  mysql_select_db("saadeni");  

 
  
  $sql=mysql_query(" SELECT * FROM activites ");
 
  while($row=mysql_fetch_assoc($sql))
  $output[]=$row;
  print(json_encode($output)); // encoder le  resultat sous la format JSON = JAVA SCRIPT OBJECT NOTATION = c'est une format d'echnage des donées qui permet de le stricturer

?>