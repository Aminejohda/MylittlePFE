<?php include 'session.php';
 ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Sa3edni.tn</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta charset="utf-8">
	     <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
       <script type="text/javascript" src="public/js/jquery-1.8.3.js"></script>
    <script src="public/js/wysihtml5-0.3.0.js"></script>
    <script src="public/js/bootstrap-wysihtml5.js"></script>
	</head>
<body>
<?php
  include 'style.php';

?>
    <a href="#" class="scrollup"></a>
        <div class="boxed_layout" >
   <?php include 'header.php'; ?>
           <img src="public/images/fondpub.jpg" style="height: 320px;">
           <?php include 'animation_annonce.php'; ?>
<br><br><br><br>
            <div class="container">
             <form method="post" action="controller/cajouter_annonce.php" enctype="multipart/form-data">
            <div class="row m_bottom_30">
                        <div class="span8">
                            <hr class="devider_type_4">
                            <figure>
                                <figcaption id="annonce">
                                    <h2>Ajouter Votre Annonce</h2>
                                </figcaption>



                                 <label>Où êtes vous situé ?</label>
                                 <?php
$id= $_SESSION['entreprise'];
    include 'model/mentreprise.php';
    $a= new Entreprise();
    $res5=$a->Aff_Cord($id);
    ?>
<br>
<input style="width: 520px;" id="txtautocomplete" class="innn" type="text" name="adr" value="<?php  echo $res5['adresse'] ?>" required></input><br> 
<input type="hidden" id="lat" name="lat" value="<?php  echo $res5['lat'] ?>" required>
<input type="hidden" id="long" name="long" value="<?php  echo $res5['lon'] ?>" required>
                                   <label> Choisissez votre Metier</label><br>
                        <select name="ac" id="innn" required>
                        <option value="">Activité</option>
                        <?php include("model/mactivite.php");
                        $id= $_SESSION['entreprise'];
                        $ind=new  Activites();
                        $res=$ind->AffActivitesbycateg($id);
                        for($i=0;$i<count($res);$i++){
                         ?>
                        <option value="<?php echo $res[$i]['id_ac'];?>"><?php echo $res[$i]['titre_ac'];?></option>   
                        <?php }?>
                        </select>                      
              <br><br>
                        <label>Titre Annonce</label><br>
                        <input type="text" name='titre' id="innn" placeholder="Entrer Titre Annonce" required>
                    <br><br>



                                <label for="textarea_1">Description Annonce:</label>

<textarea id="textarea_1 innn" class="textarea" style="width: 500px;"  name="des"; placeholder="Entrer Description Annonce" ></textarea>

<script>
    $(".textarea").wysihtml5();
</script>


              
                   
                         <br><br>
                 
                        <label>Choisissez une image</label>
                    
                         
                        <img id="image" width= '256' height= '256' /><br><br>
                        <span class="btn btn-default btn-file">
        <input type='file' id="files" name="image" accept=".jpg,.jpeg,.gif,.png" required/></span><br><br>
           
                        
             <br><br>
                <input id="btnn" style="width : 120px;margin-left: 0px;" type="submit" class="btn btn-default" name="ajouter" value="Ajouter" />
                <br>
                            </figure>
                        </div>

                        <div class="span4">
                            <hr class="devider_type_4">
                            <figure>
                                <figcaption>
                                    <h2>Les Annonces Les plus publier</h2>
                                </figcaption>
                                <dl class="skills">
                                    <dt>Développeur (40%)</dt>
                                    <dd><span style="width:40%;"></span></dd>
                                    <dt>Plombier ( 70% )</dt>
                                    <dd><span style="width:70%"></span></dd>
                                    <dt>Web Design ( 30% )</dt>
                                    <dd><span style="width:30%;"></span></dd>
                                    <dt>Garde Enfant ( 90% )</dt>
                                    <dd><span style="width:90%;"></span></dd>
                                </dl>
                            </figure>
                        </div>
                    </div>




            <div class="row m_bottom_15">
                        <!--Start 1/2 columns-->
                        <div class="span6">
                      
                        </div>
                        <div class="span6">
                            
                        </div>
                        <!--End 1/2 columns-->
                    
        </div>
 
                   
                </form>
    
                </div>
</div>
            <?php include 'footer.php'; ?>
              <?php  include 'js.php';?>
</body>
</html>