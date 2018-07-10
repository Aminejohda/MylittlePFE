<?php
class Activites {

	public function AffActivites()
	{
		include 'config.php';
		$sql="SELECT categorie.titre_cat, categorie.id_cat, activites.id_ac, activites.titre_ac, activites.description_ac , activites.image_ac , activites.id_cat
		 FROM activites , categorie 
		 WHERE activites.id_cat = categorie.id_cat ";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}
	
	public function AffAcbyid($id)
	{
		include ('config.php');
		$sql="SELECT categorie.titre_cat, categorie.id_cat, Activites.id_ac, Activites.titre_ac, Activites.description_ac ,
		Activites.image_ac, Activites.id_cat
		 from activites,categorie 
		 where activites.id_cat = categorie.id_cat  and activites.id_ac = :id ";
		$res=$db->prepare($sql);
		$res->execute(array(':id'=>$id));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}
	
	public function suppActivites($id){
include("config.php");
$sql=$db->prepare('DELETE FROM activites WHERE id_ac= :id');
$sql->execute(array(':id'=>$id));
}
	
	public function ajout_Activites(Activites $cat){
include("config.php");
$sql=$db->prepare('INSERT INTO activites SET id_cat = :tc, description_ac = :des, titre_ac = :tac, image_ac= :image');
$sql->bindValue(':tc',$cat->tc);
$sql->bindValue(':des',$cat->des);
$sql->bindValue(':tac',$cat->titre);
$sql->bindValue(':image',$cat->filename);


$sql->execute();

}

public function modif_Activites(Activites $cat){
include("config.php");
$sql=$db->prepare('UPDATE activites SET id_cat = :tc, description_ac = :des, titre_ac = :tac, image_ac= :image WHERE id_ac = :id');
$sql->bindValue(':tc',$cat->tc);
$sql->bindValue(':des',$cat->des);
$sql->bindValue(':tac',$cat->tac);
$sql->bindValue(':id',$cat->id);
$sql->bindValue(':image',$cat->filename);

$sql->execute();

}
public function modif_Activites2(Activites $cat){
include("config.php");
$sql=$db->prepare('UPDATE activites SET id_cat = :tc, description_ac = :des, image_ac= :image WHERE id_ac = :id');
$sql->bindValue(':tc',$cat->tc);
$sql->bindValue(':des',$cat->des);
$sql->bindValue(':id',$cat->id);
$sql->bindValue(':image',$cat->filename);

$sql->execute();

}




} 

