<?php include 'session.php'; ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Sa3edni.tn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <?php include 'style.php';?>
    <?php include 'js.php'; ?>
  </head>
  <body>
<a href="#" class="scrollup"></a>
<div class="boxed_layout_secondary">
<?php include 'header.php'; 
      include 'header_ent.php';
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
$id= $_SESSION['entreprise'];

    include 'model/mentreprise.php';
 
    $i= new Entreprise();
  
    $res=$i->Aff_Cord($id);
               echo'<div class="fancybox_container f_left" style="margin: 6px 20px 100px 0;">';
               echo'<a href="public/images/logo_ent/'.$res['image'].'" class="fancybox_link"></a>';
               echo'<img src="public/images/logo_ent/'.$res['image'].'" width="100">';
               echo'<div class="fancybox_color_wrap"></div>';
               echo'</div>';
            
    
       echo "<div class='total_container'>";
              echo "<span> Nom Commerciale : ".$res['nom_commerciale'];
            echo "</div>";
            
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
                   
           require_once 'public/php/calcul_cor.php';
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
              <a id="btnn" href="voir_profil_ent.php" style="padding-right: 20px;margin-left: 170px;"> Voir Mon Profil </a>
              <a id="btnn" href="modif_profil_ent.php"> Modifier Mon Profil</a>
              <br><br>
              <hr class="devider_type_4">
              
                <section class="table_cart_type_2_container">
                






            <table class="table_cart_type_2">
                <thead>
                <tr>
                  <td>Expéditeur</td>
                  <td>Objet</td>
                  <td>Date de reception</td>
                  <td>Voir</td>
                </tr>
              </thead>
          <?php  $id= $_SESSION['entreprise'];
    
    $k= new Message();
    $res1=$k->Affmessage2($id);
            if (count($res1) == 0) {
        echo ' ';
       } else {
if (count($res1)>4) {
       $y=4;
      }else {
        $y =count($res1);
      }
      ?>
          
              <?php 

                 for( $x=0 ;$x<$y; $x++){ ?>
              <tbody>
  
                <tr>

                  <td>
                   <?php echo '<img src="public/images/client/'.$res1[$x]['image'].'" style = "width : 60px;"/>'.' ';
                    echo ' '.$res1[$x]['nom'].' '.$res1[$x]['prenom'];?>
                  </td>
                  <td>
                   <?php echo $res1[$x]['sujet_msg'].'<br>';?>
                  </td>
                  <td>
                    <?php echo $res1[$x]['date_reception'].'<br>';?>
                  </td>
                  <td>                    
                    <a  style="color: grey;" href="voir_msg_ent.php?id_msg=<?php echo $res1[$x]['id_cont']; ?>">Ouvrir</a>
                  </td>
                </tr>
              </tbody>
               <?php } }  





                $l= new Message();
    $res2=$l->Affmessagebyent2($id);
            if (count($res2) == 0) {
        echo ' ';
       } else {
if (count($res2)>4) {
       $y=4;
      }else {
        $y =count($res2);
      }
      ?>
          
              <?php 

                 for( $x=0 ;$x<$y; $x++){ ?>
              <tbody>
  
                <tr>

                  <td>
                   <?php echo '<img src="public/images/logo_ent/'.$res2[$x]['image'].'" style = "width : 60px;"/>'.' ';
                    echo ' '.$res2[$x]['nom_commerciale']?>
                  </td>
                  <td>
                   <?php echo $res2[$x]['sujet_msg'].'<br>';?>
                  </td>
                  <td>
                    <?php echo $res2[$x]['date_reception'].'<br>';?>
                  </td>
                  <td>                    
                    <a  style="color: grey;" href="voir_msg_ent.php?id_msg=<?php echo $res2[$x]['id_cont']; ?>">Ouvrir</a>
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
                  <h2>Mes annonces</h2>
                </figcaption>



<?php
   $id= $_SESSION['entreprise'];
    include 'model/mannonce.php';
    $i= new Annonce();
    $res=$i->AffAnn2($id);
    if (count($res) == 0) {
        echo 'Aucune annonce visible';
     } else {
if (count($res)>4) {
       $h=4;
      }else {
        $h =count($res);
      }
    for( $i=0 ;$i<$h; $i++){
      ?>
      <div class='total_container' style = 'height: 21px;'>
              
             
              <ul class="list_type_11">
                <li><a href="controller/csupp_annonce.php?id=<?php echo $res[$i]['id_annonce'] ;?>" data-confirm="Etes-vous certain de vouloir supprimer cette Annonce?"><img src="public/images/trash.png" width="20px" style="float: right;padding-left: 10px;"></a><a href="annonce.php"><i class="icon_container" ></i><?php echo $res[$i]['titre_annonce']?></a></li>
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
                  <h2>MES AVIS ET RECOMMANDATIONS</h2>
                </figcaption>
                     <?php
$id= $_SESSION['entreprise'];
    include 'model/mavis.php';
    $i= new Avis();
    $res=$i->AffAvcli($id);
    if (count($res) == 0) {
        echo ' ';
     } else{
      if (count($res)>4) {
       $a=4;
      }else {
        $a =count($res);
      }
    for( $i=0 ;$i<$a; $i++){?>
    



            <div class='total_container'>
       <ul class="list_type_9" style="margin-bottom: 0px">
  <li><a href="avis_ent.php"><i class="icon_container"></i><?php echo $res[$i]['commentaire'];?></a></li>
            
                 </ul>
            </div>
   <?php  }} ?>
<?php

    $j= new Avis();
    $res3=$j->AffAvent($id);
    if (count($res3) == 0) {
        echo ' ';
     } else{
      if (count($res3)>4) {
       $a=4;
      }else {
        $a =count($res3);
      }
    for( $i=0 ;$i<$a; $i++){?>
       <div class='total_container'>
       <ul class="list_type_9" style="margin-bottom: 0px">
  <li><a href="avis_ent.php"><i class="icon_container"></i><?php echo $res3[$i]['commentaire'];?></a></li>
            
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