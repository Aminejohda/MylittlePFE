  <div class="container">
<?php
include '../model/config.php';
if($_POST['rowid']) {
    $id = $_POST['rowid'];
    
    $sql="select * 
		from devis, entreprise, activites
		where devis.id_devis = :id and devis.id_ac= activites.id_ac and devis.id_em = entreprise.id_entreprise ";
        $res=$db->prepare($sql);
        $res->execute(array(':id'=>$id));
        $donne=$res->fetch($db::FETCH_ASSOC);
        if(isset($donne['id_entreprise'])){
  
 ?>
 <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    
                    <div class="col-sm-6 col-md-8">
                        <h4>
                           <?php echo $donne['nom_commerciale']?></h4>
                        
                        <p>
                           
                          <i class="glyphicon glyphicon-text-width"></i>  Titre Devis : <?php echo" ".$donne['sujet_devis'];?>
                            <br />
                            <i class="glyphicon glyphicon-bookmark"></i>  Description : <?php echo" ".$donne['demande_devis'];?>
                            <br />
                          <i class="glyphicon glyphicon-text-height"></i> Titre d'Activité : <?php echo " ".$donne['titre_ac']?>
                            <br />
                              <i class="glyphicon glyphicon-home"></i> Adresse Devis : <?php echo " ".$donne['adresse_devis']?>
                            <br />
                          <i class="glyphicon glyphicon-calendar"></i> Date D'insertion :  <?php echo " ".$donne['date_deb_devis'];?>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>



 <?php 
} else {

    $sql="select * 
    from devis, client, activites
    where devis.id_devis = :id and  devis.id_ac= activites.id_ac and devis.id_em= client.id_client ";
        $res=$db->prepare($sql);
        $res->execute(array(':id'=>$id));
        $donne=$res->fetch($db::FETCH_ASSOC);
?>



<div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    
                   <div class="col-sm-6 col-md-4">
                        <img src="../site/public/images/client/<?php echo $donne['image'] ; ?>" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                           <?php echo $donne['civilite']." ".$donne['nom']." ".$donne['prenom'];?></h4>
                        
                        <p>
                           
                          <i class="glyphicon glyphicon-text-width"></i>  Titre Devis : <?php echo" ".$donne['sujet_devis'];?>
                            <br />
                            <i class="glyphicon glyphicon-bookmark"></i>  Description : <?php echo" ".$donne['demande_devis'];?>
                            <br />
                          <i class="glyphicon glyphicon-text-height"></i> Titre d'Activité : <?php echo " ".$donne['titre_ac']?>
                            <br />
                              <i class="glyphicon glyphicon-home"></i> Adresse Devis : <?php echo " ".$donne['adresse_devis']?>
                            <br />
                          <i class="glyphicon glyphicon-calendar"></i> Date D'insertion :  <?php echo " ".$donne['date_deb_devis'];?>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php } } ?>


</div>


