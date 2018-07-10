
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <title>Liste Catégories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'styles.php'; ?>
   <link rel="shortcut icon" href="public/img/logo.ico">
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
        <h2><i class="glyphicon glyphicon-list"></i> Liste Des Catégorie</h2>
    </div>
    <div class="box-content">
    <div class="alert alert-info"><a href="ajout_categ.php">Ajouter Catégorie</a></div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Titre Catégorie</th>
        <th>Déscription</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
   <?php
    include 'model/mcategorie.php';
    $i= new Categorie();
    $res=$i->AffCat();
    for ($i=0; $i <count($res) ; $i++) { 
      ?>
    <tr>
         <td>  <?php echo $res[$i]['titre_cat']; ?></td>
         <td>  <?php echo $res[$i]['description_cat']; ?></td>
         <td> <img src="public/img/categorie/<?php echo $res[$i]['image_cat'] ; ?>"  style="width:80px;height:50px;"></td>
         
            <td class="center">
            <a class="btn btn-info" href="modif_categorie.php?id=<?php echo $res[$i]['id_cat']; ?>" style="
    width: 110px;">
                <i class="glyphicon glyphicon-edit icon-white"></i>
               Modifier            </a>  <br><br>
                 <a class="btn btn-danger" href="controller/csuppcategorie.php?id=<?php echo $res[$i]['id_cat'];?>"
                 data-confirm="Etes-vous certain de vouloir supprimer?">
                <i class="glyphicon glyphicon-trash icon-white"></i>
              Supprimer 
            </a>             </td>
    </tr> 
    <?php } ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    <hr>
<?php  include 'js.php'; ?>
</body>
</html>