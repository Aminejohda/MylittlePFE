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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<div class="container">
  <hr class="devider_type_4">
<section class="m_bottom_30" style="margin-bottom: 10px;">
<hr class="devider_type_4">
<h2>Mes avis et recommandations</h2>
<?php
#pour le client
$id= $_SESSION['entreprise'];
    include 'model/mavis.php';
    $i= new Avis();
    $res=$i->AffAvcli($id);
    for( $i=0 ;$i<count($res); $i++){ ?>
      							<div class="comment_container">
										<header>
											<img src="public/images/client/<?php echo $res[$i]['image']; ?>" width="100" style="margin-right:60px">
											<div class="comment_content" style="margin-left: 20px;">
												<p><?php echo $res[$i]['nom'].' '.$res[$i]['prenom']; ?><ul style="float: right;">
                        Annonce : <?php echo $res[$i]['titre_annonce']; ?>

                      </ul></p>
                <br>
												<p><?php echo $res[$i]['commentaire']; ?></p>
											</div>
										</header>
										<footer>
											
											<ul class="social_icons_list clearfix">
												<?php echo $res[$i]['date_rec']; ?>
											</ul>
										</footer>
									</div>
								
								<?php  } ?>

                
<?php
#pour lentreprise
$id= $_SESSION['entreprise'];
$k= new Avis();
    $res1=$k->AffAvent($id);
    for( $j=0 ;$j<count($res1); $j++){ ?>
                        <div class="comment_container">
                    <header>
                      <img src="public/images/logo_ent/<?php echo $res1[$j]['image']; ?>" width="100" style="margin-right:60px">
                      <div class="comment_content" style="margin-left: 20px;">
                        <p><?php echo $res1[$j]['nom_commerciale']; ?><ul style="float: right;">
                        Annonce : <?php echo $res1[$j]['titre_annonce']; ?>
                      </ul></p>
                <br>
                        <p><?php echo $res1[$j]['commentaire']; ?></p>
                      </div>
                    </header>
                    <footer>
                      
                      <ul class="social_icons_list clearfix">
                        <?php echo $res1[$j]['date_rec']; ?>
                      </ul>
                    </footer>
                  </div>
                </section>
                <?php  } ?>






 <h2>Mes évaluations</h2>



    <div class="banner_type_3">
              <div class="span2">
                <?php
                  

                  $k= new Avis();
    $res3=$k->Affetoile1($id);
    $res4=$k->Affetoile2($id);
    $res5=$k->Affetoile3($id);
    $res6=$k->Affetoile4($id);
    $res7=$k->Affetoile5($id);
    $res2=$k->Affetoilevide($id);
    $count2=count($res2);
    $etoile1=count($res3);
    $etoile2=count($res4);
    $etoile3=count($res5);
    $etoile4=count($res6);
    $etoile5=count($res7);
$a = $etoile1 ;
$b = $etoile2 * 2 ;
$c = $etoile3 * 3 ;
$d = $etoile4 * 4 ;
$e = $etoile5 * 5 ;
$nbr_etoile = $a + $b + $c + $d + $e ;
$moy= $nbr_etoile/$count2;    
$tot= round($moy);
    
      // $tot= number_format($moy,1,'.',' '); moyenne avec virgule
                  echo '<br><div style ="
                  font-size: 60px;">'.$tot.'/5</div><br><br>';
                  echo'<div id="star-container" style="margin-left: 20px;">';
                  for ($f=0; $f<$tot; $f++) { 

                    echo'<i class="fa fa-star fa-2 star2"></i>';
                  }
                  echo'</div>';
                  echo '<img src="public/images/custom-icon-author.png" alt=""> '.$count2.' au total.<br><br>';
                  echo '</div>';

                  ?>
                  <div class="span4">
                    <br>
                   
                   <div style="display: inline-flex;"><i class="fa fa-star fa-2 star"> 1 </i><progress value="<?php echo $etoile1 ?>" max="<?php echo $count2 ?>" style="margin-left: 20px;"></progress></div><br>
                  <div style="display: inline-flex;"><i class="fa fa-star fa-2 star"> 2 </i><progress value="<?php echo $etoile2 ?>" max="<?php echo $count2 ?>" style="margin-left: 20px;"></progress></div><br>
                  <div style="display: inline-flex;"><i class="fa fa-star fa-2 star"> 3 </i><progress value="<?php echo $etoile3 ?>" max="<?php echo $count2 ?>" style="margin-left: 20px;"></progress></div><br>
                  <div style="display: inline-flex;"><i class="fa fa-star fa-2 star"> 4 </i><progress value="<?php echo $etoile4 ?>" max="<?php echo $count2 ?>" style="margin-left: 20px;"></progress></div><br>
                  <div style="display: inline-flex;"><i class="fa fa-star fa-2 star"> 5 </i><progress value="<?php echo $etoile5 ?>" max="<?php echo $count2 ?>" style="margin-left: 20px;"></progress></div><br>
                   
                  </div><br><br><br><br><br><br></div>


         <section class="m_bottom_30">
<hr class="devider_type_4">
<h2>Les avis que j'ai déposés</h2>
<?php
$id= $_SESSION['entreprise'];
    
    $i= new Avis();
    $res=$i->AffAv4($id);
    if (count($res) == 0) {
        echo 'Aucune avis visible';
     } 
    for( $i=0 ;$i<count($res); $i++){ ?>
                        <div class="comment_container">
                    <header>
                      <img src="public/images/logo_ent/<?php echo $res[$i]['image']; ?>" width="100" style="margin-right:60px">
                      <div class="comment_content">
                      <p><?php echo $res[$i]['nom_commerciale']; ?></p>
                      <ul style="float: right;">
                        Annonce : <?php echo $res[$i]['titre_annonce']; ?>
                      </ul>
                        <p><?php echo $res[$i]['commentaire']; ?></p>

                        <a href="controller/csupp_avis.php?id=<?php echo $res[$i]['id_avis'] ;?>" data-confirm="Etes-vous certain de vouloir  de supprimer?"><img src="public/images/trash.png" width="20px" style="float: right;padding-left: 10px;"></a>
                      </div>
                    </header>
                    <footer>
                    
                      <ul class="social_icons_list clearfix">
                        <?php echo $res[$i]['date_rec']; ?>
                      </ul>
                    </footer>
                  </div>
                    <?php  } ?>
                </section>



</div></div>
<?php include 'footer.php'; ?>
  </body>
</html>