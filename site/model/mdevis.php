<?php
class Devis{

public function AffDevcli($id) 
	#pour la liste dappel doffre
	{
		include 'config.php';
		$sql=" select client.nom, client.prenom, client.image, date_deb_devis, adresse_devis, titre_ac, demande_devis, id_devis
		from client, devis,activites,entreprise
		where client.id_client =  devis.id_em and activites.id_ac= devis.id_ac and entreprise.id_entreprise = :id and entreprise.id_cat = activites.id_cat and statut_dev = 1";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
	public function AffDev($id) #pour la liste dappel doffre entreprise
	{
		include 'config.php';
		$sql=" select * 
		from  devis,activites,entreprise
		where entreprise.id_entreprise =  devis.id_em and activites.id_ac= devis.id_ac and entreprise.id_entreprise = :id and entreprise.id_cat = activites.id_cat";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
		public function AffDevoffre($id) #pour la liste dappel doffre entreprise
	{
		include 'config.php';
		$sql=" select * 
		from  devis,activites,entreprise
		where entreprise.id_entreprise =  devis.id_em and activites.id_ac= devis.id_ac and entreprise.id_cat = activites.id_cat and statut_dev = 1 and devis.id_em != :id ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}

	public function Affmesdev($id)
	{
		include 'config.php';
		$sql=" select * 
		from devis ,activites
		where devis.id_em =  :id and activites.id_ac = devis.id_ac and statut_dev = 1 ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
		public function Affmesdevnon($id)
	{
		include 'config.php';
		$sql=" select * 
		from devis ,activites
		where devis.id_em =  :id and activites.id_ac = devis.id_ac and statut_dev = 0 ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
	public function AffDev2($id_dev)  #pour les informations du client
	{
		include 'config.php';
			$sql=" select * 
		from client, devis
		where client.id_client =  devis.id_em and devis.id_devis = :id_dev";
		$res=$db->prepare($sql);
		$res->execute(array(':id_dev' => $id_dev));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}
	public function AffDevent($id_dev)  #pour les informations du entreprise
	{
		include 'config.php';
			$sql=" select * 
		from entreprise, devis
		where entreprise.id_entreprise =  devis.id_em and devis.id_devis = :id_dev";
		$res=$db->prepare($sql);
		$res->execute(array(':id_dev' => $id_dev));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}
	public function AffDevbyid($id_dev)
	{
		include 'config.php';
		$sql=" select * 
		from devis,entreprise,details_devis
		where  	entreprise.id_entreprise = details_devis.id_entreprise	
				and details_devis.id_devis = devis.id_devis and
				devis.id_devis = :id_dev order by date_rep DESC";
		$res=$db->prepare($sql);
		$res->execute(array(':id_dev' => $id_dev));
		$donne=$res->fetchAll();
		return $donne;
	}




		public function Repondre_devis(Devis $dev){
include("config.php");
$date_auj= date('Y-m-d');
$sql=$db->prepare('insert into details_devis set  reponse = :rep, id_entreprise = :id_ent , id_devis = :id_dev ,date_rep = :date_auj');
$sql->bindValue(':id_ent',$dev->id_ent);
$sql->bindValue(':id_dev',$dev->id_dev);
$sql->bindValue(':rep',$dev->rep);
$sql->bindValue(':date_auj',$date_auj);
$sql->execute();
$sql1=$db->prepare('update devis set  statut_devis = 0 where id_devis = :id_dev');
$sql1->bindValue(':id_dev',$dev->id_dev);
$sql1->execute();

}
public function supp_devis($id_dev){
include("config.php");
$sql='DELETE FROM devis WHERE id_devis= :id_dev ';
$req = $db->prepare($sql);
$req->bindValue(':id_dev',$id_dev);
$res =$req->execute();
$sql='DELETE FROM details_devis WHERE id_devis= :id_dev ';
$req = $db->prepare($sql);
$req->bindValue(':id_dev',$id_dev);
$res =$req->execute();
}

public function Ajouter_Devis(Devis $dev){
include("config.php");


$sql=$db->prepare('INSERT INTO devis set id_ac = :id_act, demande_devis = :devis, id_em = :id_em, date_deb_devis = :dateau, statut_devis = 1 , adresse_devis = :adr, sujet_devis = :objet, image_dev= :image ');
$dateau= date("Y-m-d");
$sql->bindValue(':image',$dev->filename);
$sql->bindValue(':dateau',$dateau);
$sql->bindValue(':devis',$dev->devis);
$sql->bindValue(':id_em',$dev->id_em);
$sql->bindValue(':adr',$dev->adr);
$sql->bindValue(':objet',$dev->objet);
$sql->bindValue(':id_act',$dev->id_act);
$sql->execute();



}

}	