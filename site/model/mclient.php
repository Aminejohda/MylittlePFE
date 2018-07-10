<?php
class Client {
	

	public function Ajouter_Client(Client $cli){
include("config.php");
$sql=$db->prepare('INSERT INTO client set id_client = :id_cl, nom = :nom, prenom = :pren, email = :email, password = :pwd, conf = "non"');
$sql->bindValue(':nom',$cli->nom);
$sql->bindValue(':pren',$cli->pren);
$sql->bindValue(':email',$cli->email);
$sql->bindValue(':pwd',$cli->pwd);
$sql->bindValue(':id_cl',$cli->id_cl);

$sql->execute();
$sql=$db->prepare('INSERT INTO organisme set id_client = :id_cl, nom = :nom, prenom = :pren, email = :email, password = :pwd, conf = "non"');
$sql->bindValue(':nom',$cli->nom);
$sql->bindValue(':pren',$cli->pren);
$sql->bindValue(':email',$cli->email);
$sql->bindValue(':pwd',$cli->pwd);
$sql->bindValue(':id_cl',$cli->id_cl);

$sql->execute();

}

public function modif_Conf_Cli(Client $cli){
include("config.php");
$sql=$db->prepare('UPDATE client set  conf= "oui" WHERE email = :email');
$sql->bindValue(':email',$cli->email);

$sql->execute();
$sql=$db->prepare('UPDATE organisme set  conf= "oui" WHERE email = :email');
$sql->bindValue(':email',$cli->email);

$sql->execute();

}
public function Aff_Cord($id)
{
	include("config.php");
	$sql=('SELECT * FROM client WHERE id_client = :id ');
	$res=$db->prepare($sql);
		$res->execute(array(':id'=>$id));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}
	public function modif_Profil_cli(Client $cli){
include("config.php");
$sql=$db->prepare('UPDATE client set  nom = :nom, prenom = :pren, email= :email, civilite = :civ, password = :pass, image = :image , adresse = :adr, telephone = :tel, gsm = :gsm , lon = :long, lat = :lat WHERE id_client = :id');
$sql->bindValue(':nom',$cli->nom);
$sql->bindValue(':civ',$cli->civ);
$sql->bindValue(':pass',$cli->pass);
$sql->bindValue(':pren',$cli->pren);
$sql->bindValue(':email',$cli->email);
$sql->bindValue(':image',$cli->filename);
$sql->bindValue(':id',$cli->id);

$sql->bindValue(':adr',$cli->adr);
$sql->bindValue(':tel',$cli->tel);
$sql->bindValue(':gsm',$cli->gsm);
$sql->bindValue(':long',$cli->long);
$sql->bindValue(':lat',$cli->lat);

$sql->execute();
$sql=$db->prepare('UPDATE organisme set  nom = :nom, prenom = :pren, email= :email, civilite = :civ, password = :pass, image = :image , adresse = :adr, telephone = :tel, gsm = :gsm , lon = :long, lat = :lat WHERE id_client = :id');
$sql->bindValue(':nom',$cli->nom);
$sql->bindValue(':civ',$cli->civ);
$sql->bindValue(':pass',$cli->pass);
$sql->bindValue(':pren',$cli->pren);
$sql->bindValue(':email',$cli->email);
$sql->bindValue(':image',$cli->filename);
$sql->bindValue(':id',$cli->id);

$sql->bindValue(':adr',$cli->adr);
$sql->bindValue(':tel',$cli->tel);
$sql->bindValue(':gsm',$cli->gsm);
$sql->bindValue(':long',$cli->long);
$sql->bindValue(':lat',$cli->lat);

$sql->execute();

}


}

