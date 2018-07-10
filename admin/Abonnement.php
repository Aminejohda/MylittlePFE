<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <title>Liste Abonnement</title>
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
        <h2><i class="glyphicon glyphicon-list"></i> Liste Des Abonnements</h2>
    </div>
    <div class="box-content">
    <div class="alert alert-info"><a href="ajout_ab.php">Ajouter Abonnement</a></div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Type d'abonnement</th>
        <th>Durée</th>
        <th>Prix</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
   <?php
    include 'model/mabonnement.php';
    $i= new Abonnement();
    $res=$i->AffAb();
    for ($i=0; $i <count($res) ; $i++) { 
      ?>
    <tr>
         <td>  <?php echo $res[$i]['type_ab']; ?></td>
         <td>  <?php echo $res[$i]['duree_ab']." Mois"; ?> </td>
         <td><?php echo $res[$i]['prix_ab']; ?></td>
            <td class="center">
            <a class="btn btn-info" href="modif_abonnement.php?id=<?php echo $res[$i]['id_ab']; ?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
               Modifier            </a>  
                 <a class="btn btn-danger" href="controller/csuppabonnement.php?id=<?php echo $res[$i]['id_ab'];?>"
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