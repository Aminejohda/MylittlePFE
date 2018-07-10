<?php 
if(isset($res['id_entreprise'])){
?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<input type="hidden" value="HERE COME THE PRODUCT ID" id="product_id">

		<input type="hidden" value="<?php echo $res['id_entreprise'] ?>" id="entrep"></input>
		<div id="star-container" style="margin-left: 20px;">
			<i class="fa fa-star fa-2 star" id="star-1"></i>
			<i class="fa fa-star fa-2 star" id="star-2"></i>
			<i class="fa fa-star fa-2 star" id="star-3"></i>
			<i class="fa fa-star fa-2 star" id="star-4"></i>
			<i class="fa fa-star fa-2 star" id="star-5"></i>
		</div>
		<div id="result"></div>
		<?php } ?>
		<?php
	if(isset($_POST['star'])){
		$star = htmlentities($_POST['star']);
		$entre = htmlentities($_POST['entrep']);
		//valid star id array
		$valid_star = array('1','2','3','4','5');

		//show a error message if some hacker (Noobs) try to change the star id
		if(!in_array($star, $valid_star)){
			echo "<b class='r'>. noob</b>";
			exit();
		}



include("model/config.php");
$sql=$db->prepare("insert into avis set etoile = '$star', id_rec = :id");
$sql->bindValue(':id',$entre);
$sql->execute();
if($sql->rowCount() != 0){
		echo'<div id="star-container" style="margin-left: 20px;">';
		for ($i=0; $i<$star; $i++) { 	
				echo'<i class="fa fa-star fa-2 star2"></i>';
				}
				echo'</div>';
	}
	}
?>
	
