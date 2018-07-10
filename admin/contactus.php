<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Boite de Recéption</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once "styles.php";?>
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
        <h2><i class="glyphicon glyphicon-envelope"></i> Liste Des Messages</h2>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>E-mail</th>
        <th>Objet</th>
        <th>Date de reception</th>
        <th>Statut</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
   <?php
    include 'model/mboite_rec.php';
    $i= new Boite_Rec();
    $res=$i->AffMsg();
    for ($i=0; $i <count($res) ; $i++) { 
        $row['ID']= $res[$i]['id_contact'];
      ?>
    <tr>
         <td>  <?php echo $res[$i]['email']; ?></td>
        <td>  <?php echo $res[$i]['objet']; ?></td>
        <td>  <?php echo $res[$i]['date_rec']; ?></td>
        <?php if($res[$i]['statut'] == 1){
            echo "<td class='center'>
      <span class='label-success label label-default'>Lu</span>
        </td>";
            } else {
                echo '<td class="center">
                <span class="label-default label label-danger">Non Lu</span>  
        </td>';
            }
        ?>
        <td class="center">
                <?php echo '<a href="#myModa" class="btn btn-success" id="custId" data-toggle="modal" data-id="'.$row['ID'].'"><i class="glyphicon glyphicon-zoom-in icon-white"></i>Voir</a>';?>
                <a class="btn btn-danger" href="controller/csuppcontact.php?id=<?php echo $res[$i]['id_contact'];?>"
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
    </div>
</div>
    <hr>
   <script>
    $(document).ready(function(){
    $('#myModa').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'controller/cmessage.php', //Here you will fetch records 
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
                <button type="button" class="close" onclick="myFunction()">x</button>
                <h4 class="modal-title">Message</h4>
            </div>
            <div class="modal-body">
                <div class="fetched-data"></div> 

            </div>
            <div class="modal-footer">
            
                <button type="button" class="btn btn-default" onclick="myFunction()">Fermer</button>
                
            </div>
        </div>
    </div>
</div>
<script>
function myFunction() {
    location.reload();
}
</script>
</body>
</html>

