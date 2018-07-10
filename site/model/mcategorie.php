<?php
class Categorie {
	public function AffCat()
	{
		include 'config.php';
		$sql="SELECT * FROM categorie";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}
		public function AffCatbyid($id_cat)
	{
		include 'config.php';
		$sql="SELECT * FROM categorie where id_cat = :id";
		$res=$db->prepare($sql);
		$res->execute(array(':id'=>$id_cat));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}
	
	

}

