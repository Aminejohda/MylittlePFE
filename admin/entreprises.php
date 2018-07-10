<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Liste des Entreprises</title>
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
        <h2><i class="glyphicon glyphicon-lock"></i> Liste Des Entreprises</h2>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Nom Entreprise</th>
        <th>Nom & Prénom</th>
        <th>Email</th>
        <th>Statut</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
   <?php
    include 'model/mentreprise.php';
    $i= new Entreprise();
    $res=$i->AffEntreprise();
    for ($i=0; $i <count($res) ; $i++) { 
         $row['ID']= $res[$i]['id_entreprise'];
      ?>
    <tr>
         <td>  <?php echo $res[$i]['nom_commerciale']; ?></td>
         <td>  <?php echo $res[$i]['nom']; echo ' '.$res[$i]['prenom']; ?></td>
         <td>  <?php echo $res[$i]['email']; ?></td>
          <?php if($res[$i]['id_ab'] != 0){
            echo "<td class='center'>
            <span class='label-default label label-warning'>Premium</span>
        </td>";
            } else {
                echo '<td class="center">
            <span class="label-success label label-default">Simple</span>
        </td>';
            }
        ?>
    
        <td>
          <?php echo '<a href="#myModa" class="btn btn-success" id="custId" data-toggle="modal" data-id="'.$row['ID'].'"><i class="glyphicon glyphicon-zoom-in icon-white"></i>Voir</a>';?>
            
                 <a class="btn btn-danger" href="controller/csuppentreprise.php?id=<?php echo $row['ID'];?>" 
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
 <script>
    $(document).ready(function(){
    $('#myModa').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'controller/profile_ent.php', //Here you will fetch records 
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
                <h4 class="modal-title">Profile Entreprise</h4>
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

