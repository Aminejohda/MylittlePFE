<?php
class Annonce{

public function Ajouter_Annonce(Annonce $an){
include("config.php");
$sql=$db->prepare('INSERT INTO annonce set titre_annonce = :titre, description_an = :des, image_an= :image, statut_an = 0, id_entreprise = :id, id_ac = :ac, date_ins_an = :dateau');
$dateau= date("Y-m-d");
$sql->bindValue(':dateau',$dateau);
$sql->bindValue(':titre',$an->titre);
$sql->bindValue(':des',$an->des);
$sql->bindValue(':image',$an->filename);
$sql->bindValue(':id',$an->id);
$sql->bindValue(':ac',$an->ac);
$sql->execute();
$sql1=$db->prepare('UPDATE entreprise set  adresse= :adr, lon= :long, lat = :lat  WHERE id_entreprise = :id');
$sql1->bindValue(':adr',$an->adr);
$sql1->bindValue(':lat',$an->lat);
$sql1->bindValue(':long',$an->long);
$sql1->bindValue(':id',$an->id);
$sql1->execute();
}


public function Modifier_Annonce(Annonce $an){
include("config.php");
$sql=$db->prepare('UPDATE annonce set titre_annonce = :titre, description_an = :des, image_an= :image, statut_an = 0, id_ac = :ac, date_ins_an = :dateau WHERE id_annonce= :id_an');
$dateau= date("Y-m-d");
$sql->bindValue(':dateau',$dateau);
$sql->bindValue(':titre',$an->titre);
$sql->bindValue(':des',$an->des);
$sql->bindValue(':image',$an->filename);
$sql->bindValue(':id_an',$an->id_an);
$sql->bindValue(':ac',$an->ac);
$sql->execute();
$sql1=$db->prepare('UPDATE entreprise set  adresse= :adr, lon= :long, lat = :lat  WHERE id_entreprise = :id');
$sql1->bindValue(':adr',$an->adr);
$sql1->bindValue(':lat',$an->lat);
$sql1->bindValue(':long',$an->long);
$sql1->bindValue(':id',$an->id);
$sql1->execute();
}

public function AffAnn()
	{
		include 'config.php';
		$sql="select * 
		from annonce, entreprise, activites
		where annonce.id_ac= activites.id_ac and annonce.id_entreprise= entreprise.id_entreprise ";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}
public function AffAnn2($id)
	{
		include 'config.php';
		$sql="select * 
		from annonce, entreprise, activites
		where annonce.id_entreprise= entreprise.id_entreprise and entreprise.id_entreprise= :id and activites.id_ac = annonce.id_ac	and statut_an = 1";
		$res=$db->prepare($sql);
		$res->execute(array(':id'=>$id));
		$donne=$res->fetchAll();
		return $donne;
	}
	public function AffmesAnn2($id)
	{
		include 'config.php';
		$sql="select * 
		from annonce, entreprise, activites
		where annonce.id_entreprise= entreprise.id_entreprise and entreprise.id_entreprise= :id and activites.id_ac = annonce.id_ac	and statut_an = 0";
		$res=$db->prepare($sql);
		$res->execute(array(':id'=>$id));
		$donne=$res->fetchAll();
		return $donne;
	}
	public function AffAnnbyid($id)
	{
		include 'config.php';
		$sql="SELECT * FROM annonce,entreprise where annonce.id_ac = :id and entreprise.id_entreprise = annonce.id_entreprise and annonce.statut_an = 1 order by id_ab DESC";
		$res=$db->prepare($sql);
		$res->execute(array(':id'=>$id));
		$donne=$res->fetchAll();
		return $donne;
	}
	public function AffAnnbyid2($id_an)
	{
		include 'config.php';
		$sql="SELECT * FROM annonce where id_annonce = :id ";
		$res=$db->prepare($sql);
		$res->execute(array(':id'=>$id_an));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}
   	function AffAnnbyville($act,$lon,$lat,$dist)
	{
		include 'config.php';
		$sql="SELECT * FROM entreprise, annonce, activites
		where entreprise.id_entreprise = annonce.id_entreprise and
		activites.titre_ac = :act
		and annonce.id_ac = activites.id_ac and annonce.statut_an = 1 and  (( 6371 * acos( cos( radians(:lat) ) * cos( radians( lat ) ) * cos( radians( lon ) - radians(:lon) ) + sin( radians(:lat) ) * sin( radians( lat ) ) ) )) < :dist order by id_ab DESC
		";
		$res=$db->prepare($sql);
		$res->execute(array(':act' => $act, ':lon' => $lon, ':lat' => $lat, ':dist' => $dist));
		$donne=$res->fetchAll();
		return $donne;


}
public function supp_annonce($id){
include("config.php");
$sql='DELETE FROM annonce WHERE id_annonce= :id ';
$req = $db->prepare($sql);
$req->bindValue(':id',$id);
$res =$req->execute();
}
	public function AffAnnbyid3($id_an)
	{
		include 'config.php';
		$sql="SELECT * FROM annonce,entreprise,activites where id_annonce = :id and entreprise.id_entreprise = annonce.id_entreprise and activites.id_ac = annonce.id_ac ";
		$res=$db->prepare($sql);
		$res->execute(array(':id'=>$id_an));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}
}
?>