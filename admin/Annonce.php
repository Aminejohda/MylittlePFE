<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Annonce</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "styles.php"; ?>
     <link rel="shortcut icon" href="public/img/logo.ico">
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
        <h2><i class="glyphicon glyphicon-info-sign"></i> Liste Des Annonces</h2>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Titre Annonce</th>
        <th>Nom Entreprise</th>
        <th>Titre Activités</th>
        <th>Date Inscription</th>
        <th>Statut</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
   <?php
    include 'model/mannonce.php';
    $ib= new Annonce();
    $res=$ib->AffAnn();
    for ($i=0; $i <count($res) ; $i++) { 
          $row['ID']= $res[$i]['id_annonce'];
      ?>
    <tr>
         <td>  <?php echo $res[$i]['titre_annonce']; ?></td>
         <td>  <?php echo $res[$i]['nom_commerciale']; ?></td>
         <td>  <?php echo $res[$i]['titre_ac']; ?></td>
         <td>  <?php echo $res[$i]['date_ins_an']; ?></td>
         <?php if($res[$i]['statut_an'] == 0){
            echo "<td class='center'>
            <span class='label-default label label-danger'>Inactive</span>
        </td>";
            } else {
                echo '<td class="center">
            <span class="label-success label label-default">Active</span>
        </td>';
            }
        ?>
        <td class="center">
               <?php echo '<a href="#myModa" class="btn btn-success" id="custId" data-toggle="modal" data-id="'.$row['ID'].'"><i class="glyphicon glyphicon-zoom-in icon-white"></i>Voir</a>';?>
            <a class="btn btn-danger" href="controller/csuppannonce.php?id=<?php echo $res[$i]['id_annonce'];?>"
            data-confirm="Etes-vous certain de vouloir supprimer?" >
                <i class="glyphicon glyphicon-trash icon-white"></i>
              Supprimer
            </a>
            <a class="btn btn-info" href="controller/cvalide_annonce.php?id=<?php echo $res[$i]['id_annonce'];?>" >
                <i class=" glyphicon glyphicon-ok"></i>
              Valider
            </a> 
            </td>
    </tr> 
    <?php  } ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    <hr>
    <script>
    $(document).ready(function(){
    $('#myModa').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'controller/cannonce.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
});
</script>
<?php include 'js.php';?>

<div class="modal fade" id="myModa" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Annonce</h4>
            </div>
            <div class="modal-body">
                <div class="fetched-data"></div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
