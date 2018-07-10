<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4>Mon Profile</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                    <?php
                    $id=$_SESSION['admin'];
   include 'model/madmin.php';
   $i= new admin();
   $resultat= $i->Affscbyid($id);
   ?>  
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="public/img/photo/<?php echo $resultat['img_admin'] ; ?>" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                           <?php echo $resultat['nom_admin']." ".$resultat['prenom_admin'];?></h4>
                        
                        <p>
                           
                          <i class="glyphicon glyphicon-envelope"></i>  Email : <?php echo" ".$resultat['email_admin'];?>
                            <br />
                          <i class="glyphicon glyphicon-user"></i> Nom & Prénom: <?php echo " ".$resultat['nom_admin']." ".$resultat['prenom_admin'];?>
                            <br />
                          <i class="glyphicon glyphicon-lock"></i> Mot de Passe :  <?php echo " ".$resultat['pwd'];?>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Fermer</a>
                    <a href="modif_admin.php?id=<?php echo $resultat['id_admin']; ?>" class="btn btn-primary" >Modifier Mon Profile</a>
                </div>
                  
            </div>
        </div>
    </div>
  






