<?php
class Clients {
	public function AffCli()
	{
		include 'config.php';
		$sql="select * from client";
		$res=$db->prepare($sql);
		$res->execute();
		$donne=$res->fetchAll();
		return $donne;
	}
	public function supp_Client($id){
include("config.php");
$sql=$db->prepare('delete from client where id_client = :id ');
$sql->execute(array(':id'=>$id));
$sql=$db->prepare('delete from organisme where id_client = :id ');
$sql->execute(array(':id'=>$id));
}
}


} 

