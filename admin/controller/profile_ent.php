  <div class="container">
<?php
include '../model/config.php';
if($_POST['rowid']) {
    $id = $_POST['rowid'];
    
    $sql="select * from entreprise where id_entreprise = :id";
        $res=$db->prepare($sql);
        $res->execute(array(':id'=>$id));
        $donne=$res->fetch($db::FETCH_ASSOC);
       
      ?>
  <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="../site/public/images/logo_ent/<?php echo $donne['image'] ; ?>" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                           <?php echo $donne['nom_commerciale']?></h4>
                        
                        <p>
                           <i class="glyphicon glyphicon-user"></i> <?php echo $donne['civilite']." ".$donne['nom']." ".$donne['prenom'];?><br>
                          <i class="glyphicon glyphicon-envelope"></i>  Email : <?php echo" ".$donne['email'];?>
                            <br />
                            <i class="glyphicon glyphicon-home"></i>  Adresse : <?php echo" ".$donne['adresse'];?>
                            <br />
                          <i class="glyphicon glyphicon-headphones"></i> Tel/Fax : <?php echo " ".$donne['telephone']." / ".$donne['gsm']." / ".$donne['fax'];?>
                            <br />

                            <i class="glyphicon glyphicon-globe"></i>  Site Web : <?php echo" ".$donne['site_web'];?>
                            <br />
                             <i class="glyphicon glyphicon-screenshot"></i>  Description : <?php echo" ".$donne['description'];?>
                            <br />
                          <i class="glyphicon glyphicon-signal"></i> Derniére connexion :  <?php echo " ".$donne['dernier_cnx'];?>
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