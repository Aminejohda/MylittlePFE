<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Ajouter Abonnement</title>
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
            <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Liste des Abonnements</h2>
            </div>
            <div class="box-content">
                <form  method="post" action="controller/cajouter_ab.php">
                    <div class="form-group">
                        <label>Type d'abonnement</label>
                        <input type="text" name='type' class="form-control" placeholder="Entrer le Type d'abonnement" required autofocus />
                    </div>
                      <div class="form-group">
                        <label>Durée</label>
                        <input type="number" class="form-control" name="duree" placeholder="Entrer Durée d'abonnement" required>
                    </div>
                   
                   <div class="form-group">
                        <label>Prix</label>
                        <input type="text" class="form-control" name="prix" placeholder="Entrer Prix d'abonnement"
                        pattern="[0-9]*.[0-9]*" required>
                    </div>
                <input type="submit" class="btn btn-default" name="ajouter" id="ajouter" value="Ajouter" />  
                </form>
            </div>
        </div>
    </div>
    <hr>
<?php  include 'js.php'; ?>
</body>
</html>