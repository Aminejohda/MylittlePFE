<?php
class Activites {

	public function AffActivites()
	{
		include 'config.php';
		$sql="SELECT *FROM activites";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}
	public function AffAct($id)
	{
		include 'config.php';
		$sql="SELECT * FROM activites where id_cat = :id";
		$res=$db->prepare($sql);
		$res->execute(array(':id'=>$id));
		$donne=$res->fetchAll();
		return $donne;
	}

	public function AffActbyid($id)
	{
		include 'config.php';
		$sql="SELECT * FROM activites where id_ac = :id";
		$res=$db->prepare($sql);
		$res->execute(array(':id'=>$id));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}

	public function AffActivitesbycateg($id)
	{
	include 'config.php';
		$sql="SELECT * FROM activites,entreprise
		 where entreprise.id_cat = activites.id_cat and entreprise.id_entreprise = :id";
		$res=$db->prepare($sql);
		$res->execute(array(':id'=>$id));
		$donne=$res->fetchAll();
		return $donne;
	}
} 

