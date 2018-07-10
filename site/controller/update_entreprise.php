<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
 $id_ent = $_GET['id_ent'];
$cat=$_POST['cat'];
$ns=$_POST['ns'];
include("../model/mentreprise.php");
include("../model/config.php");
$i= new Entreprise();
$i->cat=$cat;
$i->ns=$ns;
$i->id_ent=$id_ent;
$i->update_Entreprise($i);

session_start();
$_SESSION = array();
session_destroy();
$sql=('SELECT * FROM entreprise WHERE id_entreprise = :id ');
	$res=$db->prepare($sql);
		$res->execute(array(':id'=>$id_ent));
		$donne=$res->fetch($db::FETCH_ASSOC);
		$img= $donne['image'];
		$path ='../public/images/client/'.$img;
		$path2 ='../public/images/logo_ent/'.$img;
		copy($path, $path2 );
		$id_entre= $donne['id_entreprise'];
		$email= $donne['email'];
		$pass= $donne['password'];
		session_start();
	$sql1=$db->query("select * from entreprise where email='$email' and password='$pass' and id_entreprise='$id_entre' ")->fetch();
$id=$sql1['id_entreprise'];
$_SESSION['entreprise']=$id;



echo "<script language='javascript'>parent.location.href='../tableau_bord_ent.php'</script>";



?>