<?php include 'session.php';
 ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Sa3edni.tn</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta charset="utf-8">
            <script type="text/javascript" src="public/js/jquery-1.8.3.js"></script>
         <script src="public/js/wysihtml5-0.3.0.js"></script>
<script src="public/js/bootstrap-wysihtml5.js"></script>

	     <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>

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

            <div class="container">
             <form  method="post" action="controller/cmodif_annonce.php" enctype="multipart/form-data">
            <div class="row m_bottom_30">
                        <div class="span8">
                            <hr class="devider_type_4">
                            <figure>
                                <figcaption>
                                    <h2>Modifier Votre Annonce</h2>
                                </figcaption>



                                 <label>Où êtes vous situé ?</label>
                                 <?php
$id= $_SESSION['entreprise'];
$id_an = $_GET['id_an'];
    include 'model/mentreprise.php';
    $a= new Entreprise();
    $res5=$a->Aff_Cord($id);
    ?>
<br>
<input style="width: 520px;" id="txtautocomplete" class="innn" type="text" name="adr" value="<?php  echo $res5['adresse'] ?>" required></input><br> 
<input type="hidden" id="lat" name="lat" required/>
<input type="hidden" id="long" name="long" required/>
                                   <label> Choisissez votre Metier</label><br>
                        <select name="ac" id="innn" required>
                        <option value="">Activité</option>
                        <?php include("model/mactivite.php");
                        $id= $_SESSION['entreprise'];
                        $ind=new  Activites();
                        $res=$ind->AffActivitesbycateg($id);


                        include("model/mannonce.php");
                        
                        $ann=new  Annonce();
                        $res2=$ann->AffAnnbyid2($id_an);
                        for($i=0;$i<count($res);$i++){
                         ?>
                        <option value="<?php echo $res[$i]['id_ac'];?>"><?php echo $res[$i]['titre_ac'];?></option>   
                        <?php }?>
                        </select> 

<input type="hidden" name="id_an" value="<?php echo $id_an; ?>" ></input>                     
              <br><br>
                        <label>Modifier Titre Annonce</label><br>
                        <input type="text" name='titre' id="innn" placeholder="ModifierTitre Annonce" value="<?php echo $res2['titre_annonce'];?>" required>
                    <br><br>
              <label for="textarea_1">Modifier Déscription Annonce</label>
<textarea id="textarea_1" class="textarea" style="width: 610px; height: 200px" name="des"  placeholder="Entrer une nouvelle Description Annonce ..." required><?php echo $res2['description_an'];?></textarea>
<script>
    $(".textarea").wysihtml5();
</script>


                      
                         <br><br>
                        <label>Choisissez une image</label><br>
                                <div class="form-group">
                     
     <br><br>
                 <div class="fileupload fileupload-new" data-provides="fileupload">
    <span class="btn btn-default btn-file">
    <input type='file' id="imgInp" name="image" accept=".jpg,.jpeg,.gif,.png"/>     </span>
    <br><br><br>
    <span class="fileupload-preview"></span>
    <a href="#" class="close fileupload-exists" id='remove2' style="float: none">×</a>
  </div>
          
    
        <img id="blah" src="public/images/annonce/<?php echo $res2['image_an'];?>" style="width: 256px; height: 256px; margin-left: 20px" />                
             </div>
             <input type="hidden" value="<?php echo $res2['image_an'];?>" name="logo"></input>                 
             <br><br>
                <input id="btnn" style="width : 120px;margin-left: 0px;" type="submit" class="btn btn-default" name="modif" value="Modifier" />
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
            <?php include 'footer.php';     include 'js.php';?>
</body>
</html>