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
	
	public function AffCat2($idcat)
	{
		include 'config.php';
		$sql="select * from categorie where id_cat != :id";
		$res=$db->prepare($sql);
		$res->execute(array(':id'=>$idcat));
		$donne=$res->fetchAll();
		return $donne;
	}
	public function supp_categorie($id){
include("config.php");
$sql='DELETE FROM categorie WHERE id_cat= :id ';
$req = $db->prepare($sql);
$req->bindValue(':id',$id);
$res =$req->execute();
$sql='DELETE FROM categorie WHERE id_cat= :id ';
$req = $db->prepare($sql);
$req->bindValue(':id',$id);
$res =$req->execute();
}


	public function Ajouter_categorie(Categorie $cat){
include("config.php");
$sql=$db->prepare('INSERT INTO categorie set titre_cat = :titre, description_cat = :des, image_cat= :image');
$sql->bindValue(':titre',$cat->titre);
$sql->bindValue(':des',$cat->des);
$sql->bindValue(':image',$cat->filename);
$sql->execute();

$a=$sql->rowCount();
return $a;
}

public function Affscbyid($id)
	{
		include ('config.php');
		$sql="select * from categorie where id_cat = :id";
		$res=$db->prepare($sql);
		$res->execute(array(':id'=>$id));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}

public function modif_cat(Categorie $cat){
include("config.php");
$sql=$db->prepare('UPDATE categorie set  description_cat = :des, titre_cat = :tc, image_cat= :image WHERE id_cat = :id');
$sql->bindValue(':tc',$cat->tc);
$sql->bindValue(':des',$cat->des);
$sql->bindValue(':id',$cat->id);
$sql->bindValue(':image',$cat->filename);
$sql->execute();


}


public function modif_cat2(Categorie $cat){
include("config.php");
$sql=$db->prepare('UPDATE categorie set  description_cat = :des, image_cat= :image WHERE id_cat = :id');
$sql->bindValue(':des',$cat->des);
$sql->bindValue(':id',$cat->id);
$sql->bindValue(':image',$cat->filename);
$sql->execute();


}


}

