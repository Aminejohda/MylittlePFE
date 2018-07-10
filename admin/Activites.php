<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Liste Des Activit&eacute;s</title>
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
        <h2><i class="glyphicon glyphicon-tasks"></i> Liste Des Activit&eacute;s</h2>
    </div>
    <div class="box-content">
    <div class="alert alert-info"><a href="ajout_activites.php">Ajouter une Activit&eacute;</a></div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Titre Activit&eacute;s</th>
        <th>D&eacute;scription</th>
        <th>Image</th>   
        <th>Titre Cat&eacute;gorie</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
   <?php
    include 'model/mactivites.php';
    $i= new Activites();
    $res=$i->AffActivites();
    for ($i=0; $i <count($res) ; $i++) { 
      ?>
    <tr>
         <td>  <?php echo $res[$i]['titre_ac']; ?></td>
         <td>  <?php echo $res[$i]['description_ac']; ?></td>
         <td> <img src="public/img/activite/<?php echo $res[$i]['image_ac'] ; ?>"  style="width:80px;height:50px;"></td>
         <td>  <?php echo $res[$i]['titre_cat']; ?></td>
         <td class="center">
           
            <a class="btn btn-info" href="modif_activites.php?id=<?php echo $res[$i]['id_ac']; ?>" style="
    width: 110px;">
                <i class="glyphicon glyphicon-edit icon-white"></i>
               Modifier            </a>  
               <br><br>
                 <a class="btn btn-danger" href="controller/csuppactivites.php?id=<?php echo $res[$i]['id_ac'];?>"
                 data-confirm="Etes-vous certain de vouloir supprimer?">
                <i class="glyphicon glyphicon-trash icon-white"></i>
              Supprimer
            </a>             
        </td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    <hr>
<?php include 'js.php'; ?>
</body>
</html>