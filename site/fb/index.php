<?php
/*	FACEBOOK LOGIN + LOGOUT - PHP SDK V4.0
 *	file 			- index.php
 * 	Developer 		- Krishna Teja G S
 *	Website			- http://packetcode.com/apps/fblogin-basic/
 *	Date 			- 27th Sept 2014
 *	license			- GNU General Public License version 2 or later
*/

/* INCLUSION OF LIBRARY FILEs*/
	require_once( 'lib/Facebook/FacebookSession.php');
	require_once( 'lib/Facebook/FacebookRequest.php' );
	require_once( 'lib/Facebook/FacebookResponse.php' );
	require_once( 'lib/Facebook/FacebookSDKException.php' );
	require_once( 'lib/Facebook/FacebookRequestException.php' );
	require_once( 'lib/Facebook/FacebookRedirectLoginHelper.php');
	require_once( 'lib/Facebook/FacebookAuthorizationException.php' );
	require_once( 'lib/Facebook/GraphObject.php' );
	require_once( 'lib/Facebook/GraphUser.php' );
	require_once( 'lib/Facebook/GraphSessionInfo.php' );
	require_once( 'lib/Facebook/Entities/AccessToken.php');
	require_once( 'lib/Facebook/HttpClients/FacebookCurl.php' );
	require_once( 'lib/Facebook/HttpClients/FacebookHttpable.php');
	require_once( 'lib/Facebook/HttpClients/FacebookCurlHttpClient.php');

/* USE NAMESPACES */
	
	use Facebook\FacebookSession;
	use Facebook\FacebookRedirectLoginHelper;
	use Facebook\FacebookRequest;
	use Facebook\FacebookResponse;
	use Facebook\FacebookSDKException;
	use Facebook\FacebookRequestException;
	use Facebook\FacebookAuthorizationException;
	use Facebook\GraphObject;
	use Facebook\GraphUser;
	use Facebook\GraphSessionInfo;
	use Facebook\FacebookHttpable;
	use Facebook\FacebookCurlHttpClient;
	use Facebook\FacebookCurl;

/*PROCESS*/
	
	//1.Stat Session
	 session_start();

	//check if users wants to logout
	 if(isset($_REQUEST['logout'])){
	 	unset($_SESSION['fb_token']);
	 }
	
	//2.Use app id,secret and redirect url 
$app_id = '585843724924636';
	 $app_secret = '587d55deb7a16a7c0c1259e67418d4af';
	 $redirect_url='http://localhost/pfetest/site/index.php';

	//3.Initialize application, create helper object and get fb sess
	 FacebookSession::setDefaultApplication($app_id,$app_secret);
	 $helper = new FacebookRedirectLoginHelper($redirect_url);
	 $sess = $helper->getSessionFromRedirect();

	//check if facebook session exists
	if(isset($_SESSION['fb_token'])){
	 	$sess = new FacebookSession($_SESSION['fb_token']);
	}

	//logout


	//4. if fb sess exists echo name 
	 	if(isset($sess)){
	 		//store the token in the php session
	 		$_SESSION['fb_token']=$sess->getToken();
	 		//create request object,execute and capture response
	 		$request = new FacebookRequest($sess,'GET','/me?fields=id,first_name,email,last_name');
			// from response get graph object
			$response = $request->execute();
			$graph = $response->getGraphObject(GraphUser::classname());
			// use graph object methods to get user details
			$name = $graph->getFirstName();
			$ln = $graph-> getLastName();
			$id = $graph->getId();
			$image = 'https://graph.facebook.com/'.$id.'/picture?width=300';
			$email = $graph->getProperty('email');
			$str = 'abcd1234';
			$pwd = str_shuffle($str);

						include("model/config.php");

 $sql="select id_client from client";
        $res=$db->prepare($sql);
        $res->execute();
        $donne=$res->fetchAll();
        $int="";
        for ($i=0; $i <count($donne) ; $i++) { 
        $str = $donne[$i]['id_client'].'<br>';
       

 $int = $int . filter_var($str, FILTER_SANITIZE_NUMBER_INT).' ';


    }  
    $pieces = explode(" ", $int);
   
    $id_cl= C.(max($pieces)+1);
     
$img = $id.'.jpg';
$path_img= 'public/images/client/'.$img;
file_put_contents($path_img, file_get_contents($image));

$sql=$db->query("select COUNT(*) from entreprise where email = '$email' ")->fetch();

if ($sql['COUNT(*)']!=0){
	$oki="";
	include 'logout.php';
echo"<script language='javascript'>alert('Vous etes un prestataire'),parent.location.href='../site/index.php'</script>";
	
}
else{

$sql=$db->query("select COUNT(*) from client where email ='$email'")->fetch();
if ($sql['COUNT(*)']==0){

$sql=$db->prepare('INSERT INTO client set id_client = :id_cl, nom = :nom, prenom = :pren, email = :email, password = :pwd, conf = "oui", image = :img');
$sql->bindValue(':id_cl',$id_cl);
$sql->bindValue(':nom',$name);
$sql->bindValue(':pren',$ln);
$sql->bindValue(':email',$email);
$sql->bindValue(':pwd',$pwd);
$sql->bindValue(':img',$img);
$sql->execute();
$oki="oki";

}
else {
	$oki="okii";
	$sql1=$db->query("select * from client where email='$email' ")->fetch();

$id_cli=$sql1['id_client'];


}

include 'logout.php';

if ($oki=="oki") {
	session_start();
		$_SESSION['client']=$id_cl;
}
if ($oki=="okii") {
	 session_start();
		$_SESSION['client']=$id_cli;
}
		
			echo "<script language='javascript'>parent.location.href='../site/index.php'</script>";
		

}
	 	}else{
			//else echo login
	 		echo '<a href="'.$helper->getLoginUrl(array('email')).'" ><img src="fb/facebook.png" style="height="200px" width="200px"></a>';
	 	}











	
