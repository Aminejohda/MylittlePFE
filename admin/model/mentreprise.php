<?php
class Entreprise {
	public function AffEntreprise()
	{
		include 'config.php';
		$sql="select * from entreprise";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}
	public function supp_Entreprise($id){
include("config.php");
$sql=$db->prepare('delete from entreprise where id_entreprise = :id ');
$sql->execute(array(':id'=>$id));
$sql=$db->prepare('delete from organisme where id_entreprise = :id ');
$sql->execute(array(':id'=>$id));
}

} 

