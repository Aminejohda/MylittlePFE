<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Devis</title>
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
        <h2><i class="glyphicon glyphicon-info-sign"></i> Liste Des Devis</h2>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Titre Devis</th>
        <th>Nom Emetteur</th>
        <th>Titre Activités</th>
        <th>Date Inscription</th>
        <th>Statut</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
   <?php
    include 'model/mdevis.php';
    $ib= new Devis();
    $res=$ib->AffDev();
    for ($i=0; $i <count($res) ; $i++) { 
          $row['ID']= $res[$i]['id_devis'];
      ?>
    <tr>
         <td>  <?php echo $res[$i]['sujet_devis']; ?></td>
         <td>  <?php echo $res[$i]['nom_commerciale']; ?></td>
         <td>  <?php echo $res[$i]['titre_ac']; ?></td>
         <td>  <?php echo $res[$i]['date_deb_devis']; ?></td>
         <?php if($res[$i]['statut_dev'] == 0){
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
            <a class="btn btn-danger" href="controller/csuppdevis.php?id=<?php echo $res[$i]['id_devis'];?>"
            data-confirm="Etes-vous certain de vouloir supprimer?" >
                <i class="glyphicon glyphicon-trash icon-white"></i>
              Supprimer
            </a> 
                 <a class="btn btn-info" href="controller/cvalide_devis.php?id=<?php echo $res[$i]['id_devis'];?>" >
                <i class=" glyphicon glyphicon-ok"></i>
              Valider
            </a>
            </td>
    </tr> 
    <?php  } ?>

    <?php
   
    $ib= new Devis();
    $res=$ib->AffDevcli();
    for ($i=0; $i <count($res) ; $i++) { 
         $row['ID']= $res[$i]['id_devis'];
      ?>
    <tr>
         <td>  <?php echo $res[$i]['sujet_devis']; ?></td>
         <td>  <?php echo $res[$i]['nom'].' '.$res[$i]['prenom']; ?></td>
         <td>  <?php echo $res[$i]['titre_ac']; ?></td>
         <td>  <?php echo $res[$i]['date_deb_devis']; ?></td>
         <?php if($res[$i]['statut_dev'] == 0){
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
            <a class="btn btn-danger" href="controller/csuppdevis.php?id=<?php echo $res[$i]['id_devis'];?>"
            data-confirm="Etes-vous certain de vouloir supprimer?" >
                <i class="glyphicon glyphicon-trash icon-white"></i>
              Supprimer
            </a> 
                   <a class="btn btn-info" href="controller/cvalide_devis.php?id=<?php echo $res[$i]['id_devis'];?>" >
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
            url : 'controller/cdevis.php', //Here you will fetch records 
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
                <h4 class="modal-title">Demande de Devis</h4>
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
