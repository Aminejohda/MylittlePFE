<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
		<head>
		<title>Sa3edni.tn</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta charset="utf-8">
		<script src="http://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
		<?php include 'style.php';?>
		<?php include 'js.php';

		include 'public/php/resize.php';  ?>

	</head>
	<body>
		<a href="#" class="scrollup"></a>
		<div class="boxed_layout">
			<?php include 'header.php'; ?>
			<div class="page_padding">
				<div class="container">
					<div class="row">
							<div class="span9 m_bottom_15">
						<hr class="devider_type_4">
				
					<section class="shop_items_container">
							
						 <div id="test-list">
   Recherche: <input type="text" class="search" />	<?php include 'sorting.php'; ?>
    <ul class="list shop_items_list clearfix">
<?php
    include 'model/mannonce.php';
    $id= $_GET['id'];
    if (isset($_GET['id'])) {
    $p= new Annonce();
    $res=$p->AffAnnbyid($id);
	} else {	
	$ville=$_POST['ville'];
	$act=$_POST['act'];
	$lon=$_POST['long'];
	$lat=$_POST['lat'];
	$dist=$_POST['distance'];
    $j= new Annonce();
    $res=$j->AffAnnbyville($act,$lon,$lat,$dist);}
    if (count($res) == 0) {
    		
			if (isset($_SESSION['client'])) {
	
echo "<a href= 'devis_client.php'><img src = 'public/images/noresult.jpg'></a>"."<br> <br>";
}
if (isset($_SESSION['entreprise'])) {
	echo "<a href= 'devis_ent2.php'><img src = 'public/images/noresult.jpg'></a>"."<br> <br>";
}
if(!isset($_SESSION['entreprise']) && !isset($_SESSION['client'])){
	echo "<a href= 'cnx.php'><img src = 'public/images/noresult.jpg'></a>"."<br> <br>";
}

    	} else {
    for( $i=0 ;$i<count($res); $i++){
    	
?>

								<a href="profil.php?id=<?php echo $res[$i]['id_annonce']  ?>"><li>
									<div class="shop_item_wrap">
										<figure class="shop_item_img_part special_item">
										<?php
											if ($res[$i]['id_ab'] !=0) {
												echo "<span class='featured'>Speciale</span>" ;
											}
										 ?>
										 <?php echo '<img src="public/images/annonce/'.$res[$i]['image_an'].'" style="height :180px; width: 180px">';?>
											
											<dl>
										
												<?php echo "<dt> <p class='name'>".$res[$i]['titre_annonce']."</p></dt>";?>
												<?php $text = $res[$i]['description_an']; echo "<p>".preview_text($text,50)."</p>";?>
											
											</dl>
										</figure>
										<div class="add_to_cart_active">
											<ul>

												<li><img src="public/images/custom-icon-contact.png"> <button><?php echo $res[$i]['email'];?></button></li>
												<li><img src="public/images/Mobile_Icon.png" width="16px"><button ><?php echo $res[$i]['telephone'];?></button></li>
												
											</ul>
										</div>
									</div>
									<br>
									<div class="add_to_cart_no_active">
										<a href=""></a>
										
									</div>
								</li></a>
								<?php  } } ?>
							</ul>
    		<div class="clearfix">
							<!--Start pagination-->
							<div class="pagination_type_1 f_left">							
							<ul class="pagination_page_list"></ul>						
							</div>
    
  </div>
  </div></section>
					
						<br><br>

  <script>var monkeyList = new List('test-list', {
  valueNames: ['name'],
  page: 15,
  plugins: [ ListPagination({}) ] 
});</script>
			
							</div>
						<div class="span3">
							<!--Start cart-->
						
							
							<div class="overlay4">
        <p style="color: white">Trouvez Le Pro Dont Vous Avez Besoin</p>
        <form method="post" action="liste_annonce.php">


        <input type="text"  name="act" style="  background: #f1f1f1 url(public/images/loupes.png);background-size: 20px 20px; background-position: 10px;
    background-repeat: no-repeat; padding-left: 40px;  width: 300px ; height: 30px;" placeholder="Activité" id="country_id" onkeyup="autocomplet()" autocomplete="off" required value="<?php echo $act; ?>" />  <ul id="country_list_id"></ul><br><br>
                  
    <style type="text/css">
    #slider {margin-left: 5px;
    margin-top: 10px;
	width: 275px;
	height: 17px;
	position: relative;

	background: #10171D;
	
	-webkit-border-radius: 40px;
	-moz-border-radius: 40px;
	border-radius: 40px;
	
	-webkit-box-shadow: inset 0px 0px 1px 1px rgba(0, 0, 0, 0.9), 0px 1px 1px 0px rgba(255, 255, 255, 0.13);
	-moz-box-shadow: inset 0px 0px 1px 1px rgba(0, 0, 0, 0.9), 0px 1px 1px 0px rgba(255, 255, 255, 0.13);
	box-shadow: inset 0px 0px 1px 1px rgba(0, 0, 0, 0.9), 0px 1px 1px 0px rgba(255, 255, 255, 0.13);
}

#slider .bar {
	width: 270px;
	height: 5px;
	background: #333;
	position: relative;
	top: -4px;

	
	background: #1d2e38;
	background: -moz-linear-gradient(left, #1d2e38 0%, #2b4254 50%, #2b4254 100%);
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,#1d2e38), color-stop(50%,#2b4254), color-stop(100%,#2b4254));
	background: -webkit-linear-gradient(left, #1d2e38 0%,#2b4254 50%,#2b4254 100%);
	background: -o-linear-gradient(left, #1d2e38 0%,#2b4254 50%,#2b4254 100%);
	background: -ms-linear-gradient(left, #1d2e38 0%,#2b4254 50%,#2b4254 100%);
	background: linear-gradient(left, #1d2e38 0%,#2b4254 50%,#2b4254 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1d2e38', endColorstr='#2b4254',GradientType=1 );	
	
	-webkit-border-radius: 40px;
	-moz-border-radius: 40px;
	border-radius: 40px;
}

#slider .highlight {
	height: 2px;
	position: absolute;
	width: 270px;
	top: 6px;
	left: 6px;
		
	-webkit-border-radius: 40px;
	-moz-border-radius: 40px;
	border-radius: 40px;
	
	background: rgba(255, 255, 255, 0.25);
}

input[type="range"] {
	-webkit-appearance: none;
	background-color: black;
	height: 2px;
}

input[type="range"]::-webkit-slider-thumb {
	-webkit-appearance: none;
	position: relative;
	top: 0px;
	z-index: 1;
	width: 11px;
	height: 11px;
	cursor: pointer;
	-webkit-box-shadow: 0px 6px 5px 0px rgba(0,0,0,0.6);
	-moz-box-shadow: 0px 6px 5px 0px rgba(0,0,0,0.6);
	box-shadow: 0px 6px 5px 0px rgba(0,0,0,0.6);
	-webkit-border-radius: 40px;
	-moz-border-radius: 40px;
	border-radius: 40px;
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ebf1f6), color-stop(50%,#abd3ee), color-stop(51%,#89c3eb), color-stop(100%,#d5ebfb));
}

input[type="range"]:hover ~ #rangevalue,input[type="range"]:active ~ #rangevalue {
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	opacity: 1;
	top: -75px;
}

/* Tool Tip */
#rangevalue {
	color: white;
	font-size: 10px;
	text-align: center;
	font-family:  Arial, sans-serif;
	display: block;
	color: #fff;
	margin: 20px 0;
	position: relative;
	left: 44.5%;
	padding: 6px 12px;
	border: 1px solid black;
	-webkit-box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0,0,0,0.4);
	-moz-box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0,0,0,0.4);
	box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0,0,0,0.4);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#222931), color-stop(100%,#181D21));

	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	border-radius: 20px;
	width: 40px;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	filter: alpha(opacity=0);
	opacity: 0;

	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	transition: all 0.5s ease;
	top: -95px;
}</style>  

<input  id="txtautocomplete" type="text" name="ville" style="  background: #f1f1f1 url(public/images/gps.png)  ; background-size: 20px 20px; background-position: 10px; background-repeat: no-repeat; padding-left: 40px; width: 300px; height: 30px;" placeholder="Entrer votre ville" value="<?php echo $ville; ?>" required/><br> 
<input type="hidden" id="lat" name="lat" value="<?php echo $lat ?>"/>
<input type="hidden" id="long" name="long" value="<?php echo $lon ?>"/>
<div id="slider">
	<input class="bar" type="range" id="rangeinput" value="10" onchange="rangevalue.value=value.concat(' KM');"/>
	<span class="highlight"></span>
	<output id="rangevalue">10 KM</output>
	<input type="hidden" id="demos" name="distance" value="10">
	<script>
var p = document.getElementById("rangeinput"),
    res = document.getElementById("demos");
p.addEventListener("input", function() {
    res.value = p.value;
}, false); 
</script>
</div>

<br>
    <input type="submit"   style="width:300px;"></input>
 </form>
    </div>				
							<!--End community poll-->
						</div>
						
					</div>
				</div>
			</div>
			</div>
			<?php include 'footer.php'; ?>
</body>
</html>