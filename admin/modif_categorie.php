<!DOCTYPE html>
<html lang="fr">
<head>


    <meta charset="utf-8">
    <title> Catégorie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "styles.php"; ?>
    <script src="public/js/wysihtml5-0.3.0.js"></script>
<script src="public/js/bootstrap-wysihtml5.js"></script>

</head>
<body>
       <?php include "header.php"; ?>
       

<div class="ch-container">
    <div class="row">
        <div class="col-sm-2 col-lg-2"><?php include("menu.php");?></div>

        <div id="content" class="col-lg-10 col-sm-10">
    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-th-list"></i> Modifier Catégorie</h2>
    </div>
    <div class="box-content">  
    <?php 
	$id=$_GET['id'];
	include "model/mcategorie.php";
	$i=new Categorie();
	$res=$i->Affscbyid($id);	
	?>
   <form action="controller/cmodif_categorie.php?id=<?php echo $id;?>" method="post"  enctype="multipart/form-data">
   <div class="box col-md-6">
                    <div class="form-group">
                        <label>Titre catégorie</label>
                        <input name="tc" type="text" class="form-control" placeholder="Entrer Titre catégorie" value="<?php echo $res['titre_cat'];?>" style="width :426px;" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Déscription Catégorie</label>
                        <textarea name="des" class="textarea" placeholder="Entrer Description" style="width :426px; height :196px" required><?php echo $res['description_cat'];?></textarea>
                        <script>
    $(".textarea").wysihtml5();
</script>
                    </div>
                    </div>
                    <div class="box col-md-6">
                    <div class="form-group">
                      <label>Choisissez une image</label>
     
                 <div class="fileupload fileupload-new" data-provides="fileupload">
    <span class="btn btn-default btn-file"><span class="fileupload-new">Votre image</span>
    <span class="fileupload-exists">Changer</span>    <input type='file' id="imgInp" name="image" accept=".jpg,.jpeg,.gif,.png"/>     </span>
    <span class="fileupload-preview"></span>
    <a href="#" class="close fileupload-exists" id='remove2' style="float: none">×</a>
  </div>
          
    
        <img id="blah" src="public/img/categorie/<?php echo $res['image_cat'];?>" alt="ton image" style="width: 256px; height: 256px" />                
             </div>
             </div>
             <input type="hidden" value="<?php echo $res['image_cat'];?>" name="logo"></input>
             <div style="margin-left: 36%">
               <input type="submit" class="btn btn-primary" name="ajouter" id="ajouter" value="Modifier" style="margin-right: 30px" />
                <a href="categorie.php" class="btn btn-danger" >Annuler</a>
                </div>
     </form>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <?php include "js.php"; ?>
</body>
</html>