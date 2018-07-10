<?php include 'session_client.php'; ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Sa3edni.tn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <style type="text/css">
      [data-notifications] {
  position: relative;
}

[data-notifications]:after {
  content: attr(data-notifications);
 
  background: red;
  border-radius: 50%;

  padding: 0.1em;
  color: #f2f2f2;

  float: right;
  text-align: center;
}

    </style>
    <?php include 'style.php';?>
    <?php include 'js.php'; ?>
  </head>
  <body>
<a href="#" class="scrollup"></a>
<div class="boxed_layout_secondary">
<?php include 'header.php'; 
      include 'header_cli.php';
?>
   <div class="page_padding">
        <div class="container">
          <div class="row">

            <div class="span8">
              <article style="margin-bottom: 0px;">
                <hr class="devider_type_5">
                <header>
                  <br>
                  <h2>Mon Profil</h2>
                </header>
          <?php
$id= $_SESSION['client'];

    include 'model/mclient.php';
 
    $i= new client();
  
    $res=$i->Aff_Cord($id);
               echo'<div class="fancybox_container f_left" style="margin: 6px 20px 100px 0;">';
               echo'<a href="public/images/client/'.$res['image'].'" class="fancybox_link"></a>';
               echo'<img src="public/images/client/'.$res['image'].'" width="100">';
               echo'<div class="fancybox_color_wrap"></div>';
               echo'</div>';
      
            
               echo "<div class='total_container'>";
              echo "<span> Civilité : ".$res['civilite'];
            echo "</div>";
            
              echo "<div class='total_container'>";
              echo "<span> Nom : ".$res['nom']." ".$res['prenom']."</span>";
            echo "</div>";

            echo "<div class='total_container'>";
               echo "<span> Email :".$res['email']."</span>";
              
            echo "</div>";
            echo "<div class='total_container'>";
              echo "<span> Adresse :".$res['adresse']."</span>";
           echo "</div>";
                ?>
                 <?php 
                   
           require_once 'public/php/calcul_cor_cli.php';
                   ?>
              </article>
               <div class="fancybox_container f_left"  style="margin-left: 130px">
                <dl class="skills">
                  <dt> Remplissage de votre profil (<?php echo $cor.'%' ?>)</dt>
                  <dd>
                  <span style="width: <?php echo $cor.'%' ?> ;"></span>               
                  </dd>
                </dl>
                   
                </div><br><br><br><br>
                <br>
              <a id="btnn" href="voir_profil_cli.php" style="padding-right: 20px;margin-left: 170px;"> Voir Mon Profil </a>
              <a id="btnn" href="modif_profil_cli.php"> Modifier Mon Profil</a>
              <br><br>
              <hr class="devider_type_4">





              
               <section class="table_cart_type_2_container">
                  
            <table class="table_cart_type_2">
                <?php  $id= $_SESSION['client'];
    
    $k= new Message();
    $res1=$k->Affmessage($id);
      if (count($res1) == 0) {
        echo 'Aucun Message Trouvé';
     } else { if (count($res1)>4) {
       $y=4;
      }else {
        $y =count($res1);
      }
      ?>
              <thead>
                <tr>
                  <td>Nom Client</td>
                  <td>Objet</td>
                  <td>Date de reception</td>
                  <td>Voir</td>
                </tr>
              </thead>
              <?php 
                 for( $x=0 ;$x<$y; $x++){ ?>
              <tbody>
  
                <tr>

                  <td>
                   <?php echo '<img src="public/images/logo_ent/'.$res1[$x]['image'].'" style = "width : 60px;"/>'.' ';
                    echo  ' '.$res1[$x]['nom'].' '.$res1[$x]['prenom'];?>
                  </td>
                  <td>
                   <?php echo $res1[$x]['sujet_msg'].'<br>';?>
                  </td>
                  <td>
                    <?php echo $res1[$x]['date_reception'].'<br>';?>
                  </td>
                  <td>                    
                    <a  style="color: grey;" href="voir_msg_client.php?id_msg=<?php echo $res1[$x]['id_cont']; ?>">Ouvrir</a>
                  </td>
                </tr>
              </tbody>
               <?php } } ?> 
            </table>                
          </section>

            </div>
          




            <aside class="span4">
              <br><br><br>
              <figure>
                <figcaption>
                  <h2>Mes Demande de Devis</h2>
                </figcaption>
           
<?php
    include 'model/mdevis.php';
    $i= new devis();
    $res=$i->Affmesdev($id);
    if (count($res) == 0) {
        echo 'Aucune devis visible';
     } else {
if (count($res)>4) {
       $h=4;
      }else {
        $h =count($res);
      }
      $k= new Devis();
        
       
    for( $i=0 ;$i<$h; $i++){
      $id_devis= $res[$i]['id_devis'];
      $res1=$k->AffDevbyid($id_devis);
      ?>
      <div class='total_container' style = 'height: 21px;'>
              
             
              <ul class="list_type_11">
                <li style="background :url('public/images/blog_icon_03.png') no-repeat 91% 50%; color: #000; "><a href="controller/csupp_dev.php?id_dev=<?php echo $res[$i]['id_devis'] ;?>" data-confirm="Etes-vous certain de vouloir supprimer cette Devis?"><img src="public/images/trash.png" width="20px" style="float: right;padding-left: 10px;"></a><a href="voir_devis_cli.php?id_dev=<?php echo $res[$i]['id_devis'] ;?>"><i class="icon_container" ></i><?php echo $res[$i]['sujet_devis']?></a><a href="voir_devis_cli.php?id_dev=<?php echo $res[$i]['id_devis'] ;?>" style="float: right;margin-right: 20px"><?php echo count($res1) ;?></a></li>
              </ul>

                <br>
             </div>
                
              <?php }
            
           }
?>
              </figure>
              <br><br><br>
              <figure>
                <hr class="devider_type_4">
                <figcaption>
                  <a href="avis_client.php" style="color: black;"><h2>Mes avis</h2></a>
                </figcaption>
                  <?php
$id= $_SESSION['client'];
    include 'model/mavis.php';
    $i= new Avis();
    $res=$i->AffAv3($id);
    if (count($res) == 0) {
        echo 'Aucune avis visible';
     } 
    else{
      if (count($res)>4) {
       $a=4;
      }else {
        $a =count($res);
      }
    for( $i=0 ;$i<$a; $i++){ ?>


       <div class='total_container'>
       <ul class="list_type_9" style="margin-bottom: 0px">
  <li><a href="avis_client.php"><i class="icon_container"></i><?php echo $res[$i]['commentaire'];?></a></li>
            
                 </ul>
            </div>
   <?php  }} ?>

              </figure>
            </aside>







          </div>
        </div>
      </div>
      </div>
      <?php include 'footer.php'; ?>
  </body>
</html>