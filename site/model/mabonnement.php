<?php
class Abonnement {
	public function AffAb()
	{
		include 'config.php';
		$sql="SELECT * FROM abonnement order by prix_ab";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}
		public function AffAbbyid($id)
	{
		include 'config.php';
		$sql="SELECT * FROM abonnement where id_ab = :id";
		$res=$db->prepare($sql);
		$res->execute(array(':id'=>$id));
		$donne=$res->fetchAll();
		return $donne;
	}
	public function modif_ab_ent(Abonnement $ab){
include("config.php");
$date= date("Y-m-d");
$sql=$db->prepare('UPDATE entreprise set  id_ab = :id_ab, date_insc_ab = :dattte WHERE id_entreprise = :id');
$sql->bindValue(':id_ab',$ab->id_ab);
$sql->bindValue(':dattte',$date);
$sql->bindValue(':id',$ab->id_ent);
$sql->execute();

}

}

