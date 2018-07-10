
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <title>Liste Cat&eacute;gories</title>
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
   <form action="controller/cajout_activites.php" method="post" enctype="multipart/form-data" >
   <div class="box col-md-6">
                    <div class="form-group">
                        <label>Titre Activit&eacute;s</label>
                        <input name="tac" type="text" class="form-control" placeholder="Entrer Titre Activit&eacute;s" style="width: 426px" required autofocus>
                    </div>
                    <div class="form-group">
                        <label >D&eacute;scription Activit&eacute;s</label>
                        <textarea name="des" class="textarea form-control" placeholder="Entrer D&eacute;scription" style="width :426px; height :275px" required></textarea>
                                           <script>
    $(".textarea").wysihtml5();
</script>
                    </div>
                    </div>
                       <div class="box col-md-6">
                      <div class="form-group">
                        <label>Titre cat&eacute;gorie</label><br />

                        <select name="tc" data-rel="chosen" style="width: 325px">
                        <option value="">Choisissez votre cat&eacute;gorie</option>
                        <?php include("model/mcategorie.php");
						$ins=new  Categorie();
						$res=$ins->AffCat();
						for($i=0;$i<count($res);$i++){
						 ?>
                        <option value="<?php echo $res[$i]['id_cat'];?>"><?php echo $res[$i]['titre_cat'];?></option>
                        
                        <?php }?>
                        
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Choisissez une image</label>
                        <br>
                         
                        <img id="image" width= '256' height= '256' /><br><br>
                        <span class="btn btn-default btn-file"><span class="fileupload-new">Votre image</span>
        <input type='file' id="files" name="image" accept=".jpg,.jpeg,.gif,.png"/></span><br><br>
           
             </div>
             </div>
             <div style="margin-left: 36%">
                 <input type="submit" class="btn btn-primary" name="ajouter" value="Ajouter" style="margin-right: 30px"/>
                 <a href="activites.php" class="btn btn-danger" >Annuler</a>
             </div>
               
     </form>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <?php  include 'js.php'; ?>
</body>
</html>