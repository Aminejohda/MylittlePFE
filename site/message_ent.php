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

<div class="container">
  <hr class="devider_type_4">
  <section class="cart_totals clearfix m_bottom_15">
            <hr class="devider_type_4">
            <h2>Ma Messagerie</h2><br><br>
            
            
          </section>
          <h4><a href="msg_recu.php">Messages Recu</a>
          <a href="message_ent.php" style="float: right;">Messages Envoyer</a></h4>
  <section class="table_cart_type_4_container">   
  <?php  $id= $_SESSION['entreprise'];
   
   
    $l= new Message();
 
     $res2=$l->Affmessagebyentrecu($id);
      ?>            
            <table class="table_cart_type_2">
              <thead>
                <tr>
                  <td>Expéditeur</td>
                  <td>Objet</td>
                  <td>Date de reception</td>
                    <td> Statut </td>
                  <td style ="padding: 20px;"> Voir </td>
                </tr>
              </thead>
              <?php 
   
                 for( $i=0 ;$i<count($res2); $i++){
?>
                  <tbody>
                <tr>
                  <td>
                   <?php echo '<img src="public/images/logo_ent/'.$res2[$i]['image'].'"  width="80" style ="margin-right : 30px"/>'. ' ';
                    echo  ' '.$res2[$i]['nom_commerciale'];?>
                  </td>
                  <td>
                   <?php echo $res2[$i]['sujet_msg'].'<br>';?>
                  </td>
                  <td>
                    <?php echo $res2[$i]['date_reception'].'<br>';?>
                  </td>
                    <td>
                    <?php if ( $res2[$i]['statut_rep'] == 1) {
                     echo "répondu";
                    }else {echo " pas de réponse";
                    }?>
                  </td>
                  <td>
                   <a  style="color: grey;" href="voir_msg.php?id_msgent=<?php echo $res2[$i]['id_cont']; ?>">Ouvrir</a>
              
   
                  </td>
                </tr>
            
              </tbody>







           <?php   } ?> 
            </table>   
            
          </section>
          
         </div>
        
      <br><br><br>
</div>      
      <?php include 'footer.php'; ?>
  </body>
</html>