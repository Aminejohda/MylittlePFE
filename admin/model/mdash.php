<?php
class Dash {
	public function AffMsg()
	{
		include 'config.php';
		$sql="SELECT * FROM contact";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}
	
	public function AffNMsg()
	{
		include 'config.php';
		$sql="SELECT * FROM contact where statut = 0";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}
		public function AffAboP()
	{
		include 'config.php';
		$sql="SELECT * FROM entreprise where id_ab != 0";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}
	public function Affclie()
	{
		include 'config.php';
		$sql="SELECT * FROM client";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}
		public function Affent()
	{
		include 'config.php';
		$sql="SELECT * FROM entreprise";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}
	public function Affannonce()
	{
		include 'config.php';
		$sql="SELECT * FROM annonce where statut_an = 0";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}
	public function Affdevis()
	{
		include 'config.php';
		$sql="SELECT * FROM devis where statut_dev = 0";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}



}