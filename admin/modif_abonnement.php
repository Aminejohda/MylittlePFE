<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Abonnement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "styles.php"; ?>
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
        <h2><i class="glyphicon glyphicon-user"></i> Liste Abonnement</h2>
    </div>
    <div class="box-content">  
    <?php 
	$id=$_GET['id'];
	include "model/mabonnement.php";
	$i=new Abonnement();
	$res=$i->Affabbyid($id);	
	?>
   <form action="controller/cmodif_ab.php?id=<?php echo $id;?>" method="post" >
                    <div class="form-group">
                        <label>Type Abonnement</label>
                        <input type="text" name='type' class="form-control" placeholder="Entrer le Type d'abonnement" required autofocus value="<?php echo $res['type_ab'];?>" >
                    </div>
                    <div class="form-group">
                        <label>Durée Abonnement</label>
                        <input type="number" class="form-control" name="duree" placeholder="Entrer Durée d'abonnement" value="<?php echo $res['duree_ab'];?>" required>
                    </div>
                      <div class="form-group">
                        <label>Prix Abonnement</label>
                        <input type="text" class="form-control" name="prix" placeholder="Entrer Prix d'abonnement"
                        pattern="[0-9]*.[0-9]*" required value="<?php echo $res['prix_ab'];?>">
                    </div>
               <input type="submit" class="btn btn-default" name="ajouter" id="ajouter" value="Modifier" />
     </form>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <?php include "js.php"; ?>
</body>
</html>