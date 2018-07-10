<?php include('usersontxt.php'); ?>
<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Tableau de bord</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'styles.php'; ?>
    <link rel="shortcut icon" href="public/img/logo.ico">
</head>
<body>
    <?php
    include 'header.php'; 
    include 'model/mdash.php';
    $i= new Dash();
    $j= new Dash();
    $k= new Dash();
    $l= new Dash();
    $res=$i->AffMsg();
    $res1=$k->AffNMsg();
    $res2=$j->AffAboP();
    $res3=$l->Affclie();
    $res4=$l->Affent();
    $res5=$l->Affannonce();
    $res6=$l->Affdevis();
    $y= count($res1);
    $x= count($res) ;
    $z=count($res2);
    $a=count($res3);
    $b=count($res4);
    $c= $a + $b;
     ?>
<div class="ch-container">
    <div class="row">
        <div class="col-sm-2 col-lg-2"><?php include("menu.php");?></div>
        <div id="content" class="col-lg-10 col-sm-10">
        
<div class="col-md-1 col-sm-1 col-xs-2">
        
    </div>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Members</div>
            <div><?php echo $c; ?></div>
           
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"  class="well top-block" href="#">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Pro Members</div>
            <div><?php echo $z ;?></div>
           
        </a>
    </div>

    

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="<?php echo $y; ?> Nouveau messages." class="well top-block" href="contactus.php">
            <i class="glyphicon glyphicon-envelope red"></i>
            <div>Messages</div>
            <div><?php echo $x ;?></div>
           <?php
           if( $y > 0){

            echo '<span class="notification red">'.$y.'</span>' ; }?>
        </a>
    </div>
</div>


  <div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class=""></i>  Nouvelle Annoce</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
             
                </div>
            </div>
            <div class="box-content">
                <ul class="dashboard-list">
                    <?php 
                    if (count($res5) == 0) {
                       echo 'aucune nouvelle annonce';
                    } else {
                    if (count($res5) < 8) {
                        $rowan = count($res5);
                    }else{ $rowan = 8; }
                        
                    for ($i=0; $i <$rowan ; $i++) { 
                    ?>
                    <li>
                        <a href="controller/csuppannonce.php?id=<?php echo $res5[$i]['id_annonce'];?>"
                 data-confirm="Etes-vous certain de vouloir supprimer?">
                             <i class="glyphicon glyphicon-trash red"></i> </a>
                            <a href="controller/cvalide_annonce.php?id=<?php echo $res5[$i]['id_annonce'];?>"> <span class="glyphicon glyphicon-ok green"></span> </a>
                            <a href="Annonce.php"> <?php echo $res5[$i]['titre_annonce'] ?> </a>
                       
                    </li>
                    <?php } }  ?>
                </ul>
            </div>
               
            </div>
        </div>
    

   <div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class=""></i>  Nouvelle devis</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                  
                </div>
            </div>
            <div class="box-content">
                <ul class="dashboard-list">
                    <?php 
                    if (count($res6) == 0) {
                       echo 'aucune nouvelle devis';
                    } else {
                    if (count($res6) < 8) {
                        $rowdev = count($res6);
                    }else{ $rowdev = 8; }
                        
                    for ($i=0; $i <$rowdev ; $i++) { 
                     
                    ?>
                    <li>
                        <a href="controller/csuppdevis.php?id=<?php echo $res6[$i]['id_devis'];?>"
                 data-confirm="Etes-vous certain de vouloir supprimer?">
                             <i class="glyphicon glyphicon-trash red"></i> </a>
                             <a href="controller/cvalide_devis.php?id=<?php echo $res6[$i]['id_devis'];?>">
                                <span class="glyphicon glyphicon-ok green"></span> </a>
                            <a href="#"> <?php echo $res6[$i]['sujet_devis'] ?> </a>
                       
                    </li>
                    <?php } }  ?>
                </ul>
            </div>
               
            </div>
        </div>
    <!--/span-->

    <div class="box col-md-4">
        <div class="box-inner homepage-box">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-list-alt"></i> Keep in touch</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <h3>Restez à jour avec nos projets et blogs - contactez nous</h3>
                <!-- Begin MailChimp Signup Form -->
                <div class="mc_embed_signup">
                    <form method="post" action="controller/feed.php">
                    
                            <label>Votre E-mail</label>
                            <input type="email" value="" name="EMAIL" class="email" placeholder="addresse Email" style="width :226px" required>


            
                        <label>Votre Question</label>
                        <textarea class="form-control" name="des" placeholder="Entrer Votre Question" style="width :226px;" required></textarea>
                        <br>

                            <div class="clear"><input type="submit" value="Envoyer" name="subscribe" class="button" style=" float: right;"></div>
                            <br>
                       
                    </form>
                </div>

                <!--End mc_embed_signup-->
                <br/>

                

            </div>
        </div>
    </div>
      
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-list-alt"></i> Statistique</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div id="piechart" style="height:400px"></div>
            </div>
        </div>
    </div>
    <!--/span-->
</div><!--/row-->

</div><!--/fluid-row-->

    </div>
<script src="public/bower_components/flot/jquery.flot.js"></script>
<script src="public/bower_components/flot/jquery.flot.pie.js"></script>
<?php 
require_once "public/js/init-chart.php"; ?>
    <?php include 'js.php'; ?>
</body>
</html>