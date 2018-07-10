<?php include 'session_client.php'; ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Sa3edni.tn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <style type="text/css">
    ul {cursor: pointer;
      }
      ul li:hover { background-color: #dbdcdc; }</style>
    	<script src="http://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
    <?php include 'style.php';?>
        <script type="text/javascript" src="public/js/jquery-1.8.3.js"></script>
    <script src="public/js/wysihtml5-0.3.0.js"></script>
    <script src="public/js/bootstrap-wysihtml5.js"></script>
    
  </head>
  <body>
<a href="#" class="scrollup"></a>
<div class="boxed_layout_secondary">
<?php include 'header.php'; 
      include 'header_cli.php';
?>
  <div class="page_padding">
        <div class="container" style="    margin-left: 50px;
    margin-right: 0px;
    width: 1200px;
">
          <div class="row">
          <div class="span7">
<?php $id= $_SESSION['client'] ?>
              <hr class="devider_type_4">
              <h2>Nous trouvons gratuitement un professionnel pour vous ! </h2>
              <form method="post" action="controller/cajouter_devis.php" enctype="multipart/form-data">
              <fieldset>
              <span class="form_col">
              <label>Où êtes vous situé ? </label><br>
              <input style="width: 320px;" id="txtautocomplete" class="innn" type="text" name="adr" placeholder="Votre Emplacement" required autofocus></input><br> 
<input type="hidden" id="lat" name="lat"/>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="hidden" id="long" name="long"/>
                  </span>
                  <span class="form_col">
              <label> Choisissez l'activitée</label><br>
       <input type="text"  name="act" placeholder="Activité" id="country_id2" class="innn" onkeyup="autocomplet2()"autocomplete ="off" style="width: 320px" required>       <ul id="country_list_id2"></ul>     
                  </span>
                  <span class="form_col">
                  <label>Objet</label><br>
                        <input type="text" name='objet' id="innn" style="width: 320px" placeholder="Entrer Objet Devis" required>
                   </span>
              <br><span class="form_col">
                        <label>Votre demande de devis</label><br></span>
                        <textarea id="innn" class="textarea" name="devis" placeholder="Entrer Votre demande de devis"  minlength="50" required></textarea><script>
    $(".textarea").wysihtml5();
</script>
    <label>Choisissez une image</label>
    <br><br>
                    
                         
                       
                        <span class="btn btn-default btn-file"><span class="fileupload-new"></span>
        <input type='file' id="files" name="image" accept=".jpg,.jpeg,.gif,.png"/></span><br><br> 
        <img style="margin-left: 50px" id="image" width= '256' height= '256' /><br><br>
                         <br><br>
                  <button type="submit" id="btnn">Publier</button>
                <p class="form_message"></p></fieldset>
              </form>
              <!--End contact form-->
            </div>
            <hr class="devider_type_4">
        
            <div class="span7">
    <figure>
                <figcaption>
                  <h2>Mes Demande de Devis</h2>
                </figcaption>
           
<?php
    include 'model/mdevis.php';
    $i= new devis();
    $res=$i->Affmesdev($id);
    if (count($res) == 0) {
        echo 'Aucune devis visible';
     } else {
      $k= new Devis();
    for( $i=0 ;$i<count($res); $i++){
      $id_devis= $res[$i]['id_devis'];
      $res1=$k->AffDevbyid($id_devis);
         ?>
     <div class='total_container' style = 'height: 21px;'>
    
              <ul class="list_type_11">
                <li style="background :url('public/images/blog_icon_03.png') no-repeat 91% 50%; color: #000; "><a href="controller/csupp_dev.php?id_dev=<?php echo $res[$i]['id_devis'] ;?>" data-confirm="Etes-vous certain de vouloir supprimer cette Devis?"><img src="public/images/trash.png" width="20px" style="float: right;padding-left: 10px;"></a><a href="voir_devis_cli.php?id_dev=<?php echo $res[$i]['id_devis'] ;?>"><i class="icon_container" ></i><?php echo $res[$i]['sujet_devis']?></a><a href="voir_devis_cli.php?id_dev=<?php echo $res[$i]['id_devis'] ;?>" style="float: right;"><?php echo count($res1) ;?></a></li>
              </ul>

                <br>           
          </div>
           <?php  }}
?>
              </figure>


              <br><br><br>
                  <figure>
                <figcaption>
                  <h2>Mes Demande de Devis en attente</h2>
                </figcaption>
           
<?php
    
    $i= new devis();
    $res=$i->Affmesdevnon($id);
    if (count($res) == 0) {
        echo 'Aucune devis visible';
     } else {
      $k= new Devis();
    for( $i=0 ;$i<count($res); $i++){
      $id_devis= $res[$i]['id_devis'];
   
         ?>
     <div class='total_container' style = 'height: 21px;'>
    
              <ul class="list_type_11">
                <li style="background :url('public/images/blog_icon_03.png') no-repeat 91% 50%; color: #000; "><a href="#"><i class="icon_container" ></i><?php echo $res[$i]['sujet_devis']?></a><a href="voir_devis.php?id_dev=<?php echo $res[$i]['id_devis'] ;?>" style="float: right;"></li>
              </ul>

                <br>           
          </div>
           <?php  }}
?>
              </figure>
          </div>
	     </div>
        </div>
      </div>
      </div>
  <?php include 'footer.php'; ?>
  <?php include 'js.php'; ?>
  </body>
</html>
