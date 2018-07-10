<?php
class Avis{
public function AffAvent($id)
	{
		include 'config.php';
		$sql=" select * 
		from entreprise, avis, annonce
		where avis.id_rec = :id  and entreprise.id_entreprise = avis.id_em and annonce.id_annonce = avis.id_annonce ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
public function AffAvcli($id)
	{
			include 'config.php';
		$sql=" select * 
		from entreprise, avis, client, annonce
		where client.id_client = avis.id_em and avis.id_rec = entreprise.id_entreprise and avis.id_rec = :id and annonce.id_annonce = avis.id_annonce";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
public function Affetoilevide($id)
	{
		include 'config.php';
		$sql=" select * 
		from avis
		where etoile != 0 and id_rec = :id ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}

public function Affetoile1($id)
	{
		include 'config.php';
		$sql=" select * 
		from avis
		where etoile = 1 and id_rec = :id ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
public function Affetoile2($id)
	{
		include 'config.php';
		$sql=" select * 
		from avis
		where etoile = 2 and id_rec = :id ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
public function Affetoile3($id)
	{
		include 'config.php';
		$sql=" select * 
		from avis
		where etoile = 3 and id_rec = :id ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
public function Affetoile4($id)
	{
		include 'config.php';
		$sql=" select * 
		from avis
		where etoile = 4 and id_rec = :id ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
public function Affetoile5($id)
	{
		include 'config.php';
		$sql=" select * 
		from avis
		where etoile = 5 and id_rec = :id ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
		public function AffAv4($id)
	{
		include 'config.php';
		$sql=" select * 
		from entreprise, avis, annonce
		where  avis.id_em = :id  and entreprise.id_entreprise = avis.id_rec and avis.id_rec != :id and annonce.id_annonce = avis.id_annonce ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}






	
	public function AffAv3($id)
	{
		include 'config.php';
		$sql=" select * 
		from entreprise, avis, annonce
		where annonce.id_annonce = avis.id_annonce and 
		avis.id_em = :id and 
		annonce.id_entreprise = avis.id_rec	and 
		annonce.id_entreprise = entreprise.id_entreprise
		order by date_rec DESC";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
	


	public function Ajouter_avis(Avis $av){
include("config.php");
$sql=$db->prepare('INSERT INTO avis set id_em = :id_em, date_rec = :date_auj, id_rec= :id_rec, statut_avis = 0, 
 commentaire = :msg, id_annonce = :id_ann ');
$sql->bindValue(':id_em',$av->id_em);
$sql->bindValue(':date_auj',$av->date_auj);
$sql->bindValue(':id_rec',$av->id_rec);
$sql->bindValue(':msg',$av->msg);
$sql->bindValue(':id_ann',$av->id_ann);
$sql->execute();
$id_av = $db->lastInsertId();

$sql=$db->prepare('INSERT INTO details_annonce set id_avis = :id_av, id_an = :id_an');
$sql->bindValue(':id_av',$id_av);
$sql->bindValue(':id_an',$av->id_ann);

$sql->execute();
}

		public function AffAvisProfilent($id)
	{
		include 'config.php';
		$sql=" select * 
		from entreprise, avis
		where  avis.id_rec = :id and (entreprise.id_entreprise = avis.id_em ) order by date_rec DESC";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
	public function AffAvisProfilcli($id)
	{
		include 'config.php';
		$sql=" select * 
		from  avis, client
		where  avis.id_rec = :id and (client.id_client = avis.id_em ) order by date_rec DESC";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}

public function etoile_and($id)
	{
		include 'config.php';
		$sql=" select SUM(etoile) 
		from  avis,entreprise where avis.id_rec  = entreprise.id_entreprise and avis.id_rec = :id";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
	public function supp_avis($id){
include("config.php");
$sql='DELETE FROM avis WHERE id_avis= :id ';
$req = $db->prepare($sql);
$req->bindValue(':id',$id);
$res =$req->execute();
}
}	