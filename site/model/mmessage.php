<?php
class Message{
	public function supp_msg($id_msg){
include("config.php");
$sql='DELETE FROM messages WHERE id_cont= :id ';
$req = $db->prepare($sql);
$req->bindValue(':id',$id_msg);
$res =$req->execute();
}
public function Affmessage($id)
	{
		include 'config.php';
		$sql=" select *
		from client, messages
		where client.id_client =  messages.id_emetteur  and messages.id_recepteur  = :id  order by date_reception DESC ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
		public function Affmessagebyent($id)
	{
		include 'config.php';
		$sql=" select * 
		from  entreprise, messages
		where entreprise.id_entreprise =  messages.id_emetteur and messages.id_recepteur = :id order by date_reception DESC ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
		public function Affmessagebyid($id,$id_msg)
	{
		include 'config.php';
		$sql=" select * 
		from  entreprise, messages
		where entreprise.id_entreprise = messages.id_emetteur  and  id_cont = :id_msg and messages.id_recepteur = :id";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id, ':id_msg' => $id_msg));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}
	public function Affmessagebyidcli($id,$id_msg)
	{
		include 'config.php';
		$sql=" select * 
		from  client, messages
		where client.id_client = messages.id_emetteur  and  id_cont = :id_msg and messages.id_recepteur = :id";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id, ':id_msg' => $id_msg));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}
	public function Affmsgenv ($id,$id_msg)
	{
		include 'config.php';
		$sql=" select * 
		from  entreprise, messages
		where entreprise.id_entreprise =  messages.id_recepteur and messages.id_emetteur = :id and id_cont = :id_msg ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id, ':id_msg' => $id_msg));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}
		public function Repondre(Message $msg){
include("config.php");
$sql=$db->prepare('UPDATE messages set  reponse_msg= :rep, statut_rep = 1 WHERE id_cont = :id');
$sql->bindValue(':id',$msg->id);
$sql->bindValue(':rep',$msg->rep);
$sql->execute();
}

public function Ajouter_msg(Message $an){
include("config.php");
$sql=$db->prepare('INSERT INTO messages set id_emetteur = :id_cli, date_reception = :date_auj, sujet_msg= :objet, statut_message = 0, id_recepteur = :id_ent, quest_msg = :msg');
$sql->bindValue(':id_cli',$an->id_cli);
$sql->bindValue(':date_auj',$an->date_auj);
$sql->bindValue(':objet',$an->objet);
$sql->bindValue(':id_ent',$an->id_ent);
$sql->bindValue(':msg',$an->msg);
$sql->execute();
}

public function Affmessagecli($id)
	{
		include 'config.php';
		$sql=" select *
		from client, messages, entreprise
		where  messages.id_emetteur =:id and messages.id_recepteur  = entreprise.id_entreprise and messages.id_emetteur= client.id_client order by date_reception DESC ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}

public function Affrepmsgcli($id,$id_msg)
	{
		include 'config.php';
		$sql=" select * 
		from  client, messages, entreprise
		where client.id_client = messages.id_emetteur  and client.id_client =:id and id_cont = :id_msg 	and id_entreprise = id_recepteur ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id, ':id_msg' => $id_msg));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}

public function Affmessage2($id)
	{
		include 'config.php';
		$sql=" select *
		from client, messages
		where client.id_client =  messages.id_emetteur  and messages.id_recepteur  = :id and statut_message = 0  order by date_reception DESC ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
	public function Affmessagebyent2($id)
	{
		include 'config.php';
		$sql=" select * 
		from  entreprise, messages
		where entreprise.id_entreprise =  messages.id_emetteur and messages.id_recepteur = :id and statut_message = 0 order by date_reception DESC ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}
public function contact_admin(Message $msgs){
include("config.php");
$sql=$db->prepare('INSERT INTO contact set email = :email, date_rec = :dates, question= :msg, statut = 0, nom_client= :nom, objet = :obj');
$sql->bindValue(':email',$msgs->email);
$sql->bindValue(':dates',$msgs->dates);
$sql->bindValue(':msg',$msgs->msg);
$sql->bindValue(':nom',$msgs->nom);
$sql->bindValue(':obj',$msgs->obj);
$sql->execute();
}
	
	public function Affmessagebyentrecu($id)
	{
		include 'config.php';
		$sql=" select * 
		from  entreprise, messages
		where entreprise.id_entreprise =  messages.id_recepteur and messages.id_emetteur = :id and entreprise.id_entreprise != messages.id_emetteur";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}

	public function Affmsgnoti($id)
	{
		include 'config.php';
		$sql=" select * 
		from  messages
		where messages.id_recepteur = :id and statut_message = 0 ";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}

		public function Affmsgnoticli($id)
	{
		include 'config.php';
		$sql=" select * 
		from  entreprise, messages
		where  messages.id_emetteur = :id and entreprise.id_entreprise =messages.id_recepteur and messages.reponse_msg != '' 
		and statut_rep = 0";
		$res=$db->prepare($sql);
		$res->execute(array(':id' => $id));
		$donne=$res->fetchAll();
		return $donne;
	}


}	