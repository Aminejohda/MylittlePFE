<?php
class Abonnement {
	public function AffAb()
	{
		include 'config.php';
		$sql="SELECT * FROM abonnement";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}
	public function supp_ab($id){
include("config.php");
$sql='DELETE FROM abonnement WHERE id_ab= :id ';
$req = $db->prepare($sql);
$req->bindValue(':id',$id);
$res =$req->execute();
}
		public function Ajouter_ab(Abonnement $ab){
include("config.php");
$sql=$db->prepare('INSERT INTO abonnement set  type_ab= :type,  prix_ab= :prix, duree_ab= :duree');
$sql->bindValue(':type',$ab->type);
$sql->bindValue(':prix',$ab->prix);
$sql->bindValue(':duree',$ab->duree);
$sql->execute();

}
public function modif_ab(Abonnement $ab){
include("config.php");
$sql=$db->prepare('UPDATE abonnement set  prix_ab = :prix, type_ab = :type, duree_ab= :duree WHERE id_ab = :id');
$sql->bindValue(':type',$ab->type);
$sql->bindValue(':prix',$ab->prix);
$sql->bindValue(':id',$ab->id);
$sql->bindValue(':duree',$ab->duree);


$sql->execute();

}
public function Affabbyid($id)
	{
		include ('config.php');
		$sql="select * from abonnement where id_ab = :id";
		$res=$db->prepare($sql);
		$res->execute(array(':id'=>$id));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}


}