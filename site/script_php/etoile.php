<?php
  require '../model/config.php';
  
  $id = $_POST['NUM'];
$sql=$db->query(" select * FROM 
    annonce, entreprise
    where entreprise.id_entreprise = annonce.id_entreprise  
    and annonce.id_annonce = '11'")->fetch();
 $id_ent = $sql['id_entreprise'];
 $sql2=$db->query(" select count(*) FROM 
    avis where id_rec = '$id_ent'")->fetch();
$tot = $sql2['count(*)'];
  

 
 

    $sql1=$db->query(" select SUM(etoile) 
    from  avis where id_rec ='$id_ent'")->fetch();

 $nb=$sql1['SUM(etoile)'];
    $ress = round($nb/$tot);
     print(json_encode($ress));

 
 

?>