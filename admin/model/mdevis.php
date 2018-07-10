<?php
class devis {
	
	public function AffDev()
	{
		include 'config.php';
		$sql="select * 
		from devis, entreprise, activites
		where devis.id_ac= activites.id_ac and devis.id_em= entreprise.id_entreprise";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}
	public function AffDevcli()
	{
		include 'config.php';
		$sql="select * 
		from devis, client, activites
		where devis.id_ac= activites.id_ac and devis.id_em= client.id_client";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}
	public function supp_devis($id){
include("config.php");
$sql=$db->prepare('delete from devis where id_devis= :id ');
$sql->execute(array(':id'=>$id));
}
	public function approuver_devis($id){
include("config.php");
$sql=$db->prepare('UPDATE devis set statut_dev = 1 where id_devis= :id ');
$sql->execute(array(':id'=>$id));
}



} 

