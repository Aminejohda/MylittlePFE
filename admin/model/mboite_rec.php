<?php
class Boite_Rec {
	public function AffMsg()
	{
		include 'config.php';
		$sql="select * from contact order by email ASC";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}
	public function supp_email($id){
include("config.php");
$sql=$db->prepare('delete from contact where id_contact= :id ');
$sql->execute(array(':id'=>$id));
}


	public function voir_email($id){
include("config.php");
$sql=$db->prepare('UPDATE contact set statut = 0 where id_contact= :id ');
$sql->execute(array(':id'=>$id));
}

	public function ajout_rep( Boite_Rec $bo){
include("config.php");
$sql=$db->prepare('UPDATE contact set reponse_admin = :rep where id_contact= :id ');
$sql->bindValue(':rep',$bo->rep);
$sql->bindValue(':id',$bo->id);
$sql->execute();
}


} 

