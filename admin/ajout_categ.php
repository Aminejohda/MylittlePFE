<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Ajouter Catégories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'styles.php';  ?>
    <link rel="shortcut icon" href="public/img/logo.ico">
    <script src="public/js/wysihtml5-0.3.0.js"></script>
<script src="public/js/bootstrap-wysihtml5.js"></script>
</head>
<body>
    <?php include 'header.php';  ?>
<div class="ch-container">
    <div class="row">
        <div class="col-sm-2 col-lg-2"><?php include("menu.php");?></div>
        <div id="content" class="col-lg-10 col-sm-10">
            <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Liste des Catégories</h2>
            </div>
            <div class="box-content">
                <form id="defaultForm" method="post" action="controller/cajouter_categorie.php" enctype="multipart/form-data">
                   <div class="box col-md-6">
                  

                    <div class="form-group">
                        <label>Titre Catégorie</label>
                        <input type="text" name='titre' class="form-control" placeholder="Entrer Titre sous catégorie" style="width: 426px" required>
                    </div>
                    <div class="form-group">
                        <label for="textarea_1">Déscription:</label>

<textarea id="textarea_1" class="textarea" style="width :426px; height :196px"  name="des" placeholder="Entrer Votre Déscription" required></textarea>

<script>
    $(".textarea").wysihtml5();
</script>
                    </div>
                    </div>
                       <div class="box col-md-6">
                      <div class="form-group">
                        <label>Choisissez une image</label>
                         <span class="btn btn-default btn-file"><span class="fileupload-new">Votre image</span>
        <input type='file' id="files" name="image" accept=".jpg,.jpeg,.gif,.png" required /></span><br><br>
                        <img id="image" width= '256' height= '256' />
           
             </div>
             </div>
             <div style="margin-left: 36%">
                <input type="submit" class="btn btn-primary" name="ajouter" id="ajouter" value="Ajouter" style="margin-right: 30px" />
                <a href="categorie.php" class="btn btn-danger" >Annuler</a>
        </div>
                </form>

            </div>
        </div>
    </div>
 <script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm').formValidation({
        message: 'cette valeur est non valide',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            titre: {
                message: 'Titre catégorie non valide',
                validators: {
                    notEmpty: {
                        message: 'Titre catégorie est nécessaire et ne peut pas être vide'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'doit être plus que 6 et moins de 30 caractères'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z/_\.]+$/,
                        message: 'ne peut consister qu\'en alphabet , des points et des /'
                    }
                }
            }
           
        }
    });
});
</script>
    <hr>
<?php include 'js.php';  ?>

</body>
</html>