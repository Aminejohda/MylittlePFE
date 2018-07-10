<?php
class Entreprise {
	

	public function Ajouter_Entreprise(Entreprise $ent){
include("config.php");
$sql=$db->prepare('INSERT INTO entreprise set id_entreprise = :id_en, email= :email, password= :pwd, nom_commerciale= :ns, conf="non", image = "author_img@2x.png", id_cat = :cat  ');

$sql->bindValue(':cat',$ent->cat);
$sql->bindValue(':ns',$ent->ns);
$sql->bindValue(':email',$ent->email);
$sql->bindValue(':pwd',$ent->pwd);
$sql->bindValue(':id_en',$ent->id_en);

$sql->execute();
$sql=$db->prepare('INSERT INTO organisme set id_entreprise = :id_en, email= :email, password= :pwd, conf="non", image = "author_img@2x.png"  ');
$sql->bindValue(':email',$ent->email);
$sql->bindValue(':pwd',$ent->pwd);
$sql->bindValue(':id_en',$ent->id_en);

$sql->execute();
}
public function Aff_Cord($id)
{
	include("config.php");
	$sql=('SELECT * FROM entreprise WHERE id_entreprise = :id ');
	$res=$db->prepare($sql);
		$res->execute(array(':id'=>$id));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}


public function modif_Profil_Ent(Entreprise $ent){
include("config.php");
$sql=$db->prepare('UPDATE entreprise set  nom = :nom, prenom = :pren, email = :email, civilite = :civ, password = :pass, image = :image WHERE id_entreprise = :id');
$sql->bindValue(':nom',$ent->nom);
$sql->bindValue(':civ',$ent->civ);
$sql->bindValue(':pass',$ent->pass);
$sql->bindValue(':pren',$ent->pren);
$sql->bindValue(':email',$ent->email);
$sql->bindValue(':image',$ent->filename);
$sql->bindValue(':id',$ent->id);
#$sql->bindValue(':date_au',$ent->date_au);
$sql->execute();
$sql=$db->prepare('UPDATE organisme set  nom = :nom, prenom = :pren, email = :email, civilite = :civ, password = :pass, image = :image WHERE id_entreprise = :id');
$sql->bindValue(':nom',$ent->nom);
$sql->bindValue(':civ',$ent->civ);
$sql->bindValue(':pass',$ent->pass);
$sql->bindValue(':pren',$ent->pren);
$sql->bindValue(':email',$ent->email);
$sql->bindValue(':image',$ent->filename);
$sql->bindValue(':id',$ent->id);
#$sql->bindValue(':date_au',$ent->date_au);
$sql->execute();

}
public function modif_Profil2_Ent(Entreprise $ent){
include("config.php");
$sql=$db->prepare('UPDATE entreprise set nom_commerciale = :nom_ste, adresse = :adr, site_web = :site, description = :des, moyen_paiement = :mp, reponse_demande = :rd, telephone = :tel, fax_ent = :fax, gsm = :gsm, lon = :long, lat = :lat  WHERE id_entreprise = :id');
$sql->bindValue(':nom_ste',$ent->nom_ste);
$sql->bindValue(':adr',$ent->adr);
$sql->bindValue(':site',$ent->site);
$sql->bindValue(':des',$ent->des);
$sql->bindValue(':mp',$ent->mp);
$sql->bindValue(':rd',$ent->rd);
$sql->bindValue(':tel',$ent->tel);
$sql->bindValue(':fax',$ent->fax);
$sql->bindValue(':gsm',$ent->gsm);
$sql->bindValue(':long',$ent->long);
$sql->bindValue(':lat',$ent->lat);
$sql->bindValue(':id',$ent->id);
#$sql->bindValue(':date_au',$ent->date_au);
$sql->execute();
$sql=$db->prepare('UPDATE organisme set nom_commerciale = :nom_ste, adresse = :adr, site_web = :site, description = :des, moyen_paiement = :mp, reponse_demande = :rd, telephone = :tel, fax_ent = :fax, gsm = :gsm, lon = :long, lat = :lat  WHERE id_entreprise = :id');
$sql->bindValue(':nom_ste',$ent->nom_ste);
$sql->bindValue(':adr',$ent->adr);
$sql->bindValue(':site',$ent->site);
$sql->bindValue(':des',$ent->des);
$sql->bindValue(':mp',$ent->mp);
$sql->bindValue(':rd',$ent->rd);
$sql->bindValue(':tel',$ent->tel);
$sql->bindValue(':fax',$ent->fax);
$sql->bindValue(':gsm',$ent->gsm);
$sql->bindValue(':long',$ent->long);
$sql->bindValue(':lat',$ent->lat);
$sql->bindValue(':id',$ent->id);
#$sql->bindValue(':date_au',$ent->date_au);
$sql->execute();

}
public function modif_Conf_Ent(Entreprise $ent){
include("config.php");
$sql=$db->prepare('UPDATE entreprise set  conf= "oui" WHERE email = :email');
$sql->bindValue(':email',$ent->email);

$sql->execute();
$sql=$db->prepare('UPDATE organisme set  conf= "oui" WHERE email = :email');
$sql->bindValue(':email',$ent->email);

$sql->execute();

}
	

public function update_Entreprise(Entreprise $ent){
include("config.php");
$sql=$db->prepare('UPDATE entreprise set  id_cat = :cat , nom_commerciale = :ns WHERE id_entreprise = :id_ent');
$sql->bindValue(':id_ent',$ent->id_ent);
$sql->bindValue(':ns',$ent->ns);
$sql->bindValue(':cat',$ent->cat);

$sql->execute();

}

}

