  <div class="container">
<?php
include '../model/config.php';
if($_POST['rowid']) {
    $id = $_POST['rowid'];
    
    $sql="select * 
		from annonce, entreprise, activites
		where annonce.id_ac= activites.id_ac and annonce.id_entreprise= entreprise.id_entreprise and annonce.id_annonce = :id";
        $res=$db->prepare($sql);
        $res->execute(array(':id'=>$id));
        $donne=$res->fetch($db::FETCH_ASSOC);
     
      
    
?>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="../site/public/images/annonce/<?php echo $donne['image_an'] ; ?>" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                           <?php echo $donne['nom_commerciale']?></h4>
                        
                        <p>
                           
                          <i class="glyphicon glyphicon-text-width"></i>  Titre Annonce : <?php echo" ".$donne['titre_annonce'];?>
                            <br />
                            <i class="glyphicon glyphicon-bookmark"></i>  Description : <?php echo" ".$donne['description_an'];?>
                            <br />
                          <i class="glyphicon glyphicon-text-height"></i> Titre d'Activité : <?php echo " ".$donne['titre_ac']?>
                            <br />
                          <i class="glyphicon glyphicon-calendar"></i> Date D'insertion :  <?php echo " ".$donne['date_ins_an'];?>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>




 <?php   
 }
?>
</div>