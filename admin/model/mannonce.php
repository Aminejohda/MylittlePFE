<?php
class Annonce {
	public function AffAnn()
	{
		include 'config.php';
		$sql="select * 
		from annonce, entreprise, activites
		where annonce.id_ac= activites.id_ac and annonce.id_entreprise= entreprise.id_entreprise";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}

	public function supp_annonce($id){
include("config.php");
$sql=$db->prepare('delete from annonce where id_annonce= :id ');
$sql->execute(array(':id'=>$id));
}

	public function approuver_annonce($id){
include("config.php");
$sql=$db->prepare('UPDATE annonce set statut_an = 1 where id_annonce= :id ');
$sql->execute(array(':id'=>$id));
}


} 

