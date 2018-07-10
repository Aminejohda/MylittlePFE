<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Modifier Activit&eacute;s</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'styles.php'; ?>
    <link rel="shortcut icon" href="public/img/logo.ico">
    <script src="public/js/wysihtml5-0.3.0.js"></script>
<script src="public/js/bootstrap-wysihtml5.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>
 

<div class="ch-container">
    <div class="row">
        <div class="col-sm-2 col-lg-2"><?php include("menu.php");?></div>
        <div id="content" class="col-lg-10 col-sm-10">

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-tasks"></i> Liste Activit&eacute;s</h2>
    </div>
    <div class="box-content">
    <?php 
	$id=$_GET['id'];
	include "model/mactivites.php";
	$i=new Activites();
	$res=$i->AffAcbyid($id);	
	?>
   <form action="controller/cmodif_activites.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
   <div class="box col-md-6">
                    <div class="form-group">
                        <label>Titre Activit&eacute;s</label>
                        <input name="tac" type="text" class="form-control" placeholder="Entrer Titre Activit&eacute;s" value="<?php echo $res['titre_ac'];?>" style="width: 426px" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>D&eacute;scription Activit&eacute;s</label>
                        <textarea name="des" class="textarea form-control" placeholder="Entrer D&eacute;scription" required style="width :426px; height :196px"><?php echo $res['description_ac'];?></textarea>
                                <script>
    $(".textarea").wysihtml5();
</script>
                    </div>
                    </div>
                    <div class="box col-md-6">
                      <div class="form-group">
                        <label>Titre cat&eacute;gorie</label><br />

                        <select name="tc"  data-rel="chosen" style="width: 325px">
                        <option value="<?php echo $res['id_cat'];?>"><?php echo $res['titre_cat'];?></option>
                        <?php include("model/mcategorie.php");
						$ins=new  Categorie();
						$idcat=$res['id_cat'];
						$res2=$ins->AffCat2($idcat);
						for($i=0;$i<count($res2);$i++){
						
						 ?>
                        <option value="<?php echo $res2[$i]['id_cat'];?>"><?php echo $res2[$i]['titre_cat'];?></option>
                        
                        <?php }?>
                        
                        </select>
                    </div><br>
                     <div class="form-group">
                                   <label>Choisissez une image</label><br>
                                           <img id="blah" src="public/img/activite/<?php echo $res['image_ac'];?>" alt="your image" style="width: 256px; height: 256px" />                
<br><br>
     
                 <div class="fileupload fileupload-new" data-provides="fileupload">
    <span class="btn btn-default btn-file"><span class="fileupload-new">Votre image</span>
    <span class="fileupload-exists">Changer</span>    <input type='file' id="imgInp" name="image" accept=".jpg,.jpeg,.gif,.png"/>     </span>
    <span class="fileupload-preview"></span>
    <a href="#" class="close fileupload-exists" id='remove2' style="float: none">×</a>
  </div>
             </div>
             <input type="hidden" value="<?php echo $res['image_ac'];?>" name="logo"></input>
             </div>
             <div style="margin-left: 36%">
               <input type="submit" class="btn btn-primary" name="Modifier" id="Modifier" value="Modifier" style="margin-right: 30px"/>
                <a href="activites.php" class="btn btn-danger" >Annuler</a>
             </div>
     </form>
    </div>
    </div>
    </div>
    </div><!--/row-->
<hr>
   <?php  include 'js.php'; ?>
</body>
</html>