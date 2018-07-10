<?php
class Admin {
	public function Affadmin()
	{
	include 'config.php';
	$sql="select * from admin";
	$res=$db->prepare($sql);
	$res->execute();
	$donnee = $res->fetchALL();
	return $donnee;
	}
	public function Affscbyid($id)
	{
		include ('config.php');
		$sql="select * from admin where id_admin = :id";
		$res=$db->prepare($sql);
		$res->execute(array(':id'=>$id));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}
	public function Affscbyemail($e)
	{
		include ('config.php');
		$sql="select * from admin where email_admin = :email";
		$res=$db->prepare($sql);
		$res->execute(array(':email'=>$e));
		$donne=$res->fetch($db::FETCH_ASSOC);
		return $donne;
	}
	public function modif_admin(Admin $ad){
include("config.php");
$sql=$db->prepare('UPDATE admin set  nom_admin = :nom, prenom_admin = :pren, email_admin= :email,
					  img_admin = :image, pwd= :npwd WHERE id_admin = :id');
$sql->bindValue(':nom',$ad->nom);
$sql->bindValue(':pren',$ad->pren);
$sql->bindValue(':email',$ad->email);
$sql->bindValue(':npwd',$ad->npwd);
$sql->bindValue(':id',$ad->id);
$sql->bindValue(':image',$ad->filename);
$sql->execute();

}
}