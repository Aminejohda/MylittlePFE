<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Liste des Clients</title>
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
        <h2><i class="glyphicon glyphicon-user"></i> Liste Des Clients</h2>

        <div class="box-icon">
            
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Adresse</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
   <?php
    include 'model/mclients.php';
  
    $j= new Clients();
    $res=$j->AffCli();
    for ($i=0; $i <count($res) ; $i++) { 
       $row['ID']= $res[$i]['id_client'];

      ?>
    <tr>
         <td>  <?php echo $res[$i]['nom']; ?></td>
         <td>  <?php echo $res[$i]['prenom']; ?></td>
         <td>  <?php echo $res[$i]['email']; ?></td>
         <td>  <?php echo $res[$i]['adresse']; ?></td>
    
        <td class="center">
   <?php echo '<a href="#myModa" class="btn btn-success" id="custId" data-toggle="modal" data-id="'.$row['ID'].'"><i class="glyphicon glyphicon-zoom-in icon-white"></i>Voir</a>';?>
           
            
                 <a class="btn btn-danger" href="controller/csuppclients.php?id=<?php echo $res[$i]['id_client'];?>" 
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
    <!--/span-->

    </div>
    <hr>
    <script>
    $(document).ready(function(){
    $('#myModa').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'controller/profile_cli.php', //Here you will fetch records 
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
                <h4 class="modal-title">Profile Client</h4>
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

