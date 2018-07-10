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
            <h2>Ma Messagerie</h2>
            
          </section>
                    <h4><a href="message_ent.php" >Messages Envoyer</a>
                    <a href="msg_recu.php" style="float: right;">Messages Recu</a>
          </h4>
  <section class="table_cart_type_4_container">   
  <?php  $id= $_SESSION['entreprise'];
    $k= new Message();
    $res1=$k->Affmessagebyent($id);
    $res2=$k->Affmessage($id);
          ?>       
         <div id="users">
  <input class="search" placeholder="Rechercher" />
  <button class="sort" data-sort="name">
    Trier par Expéditeur :
  </button>         
  <br><br>
      
           
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
   #pour l'affichage d un msg a partir d une entreprise
    for( $x=0 ;$x<count($res1); $x++){

      
     ?>
              <tbody class="list">
                <tr>
                  <td class="name">
                   <?php echo '<img src="public/images/logo_ent/'.$res1[$x]['image'].'"  width="80" style ="margin-right : 30px"/>'. ' ';
                    echo  ' '.$res1[$x]['nom_commerciale']?>
                  </td>
                  <td>
                   <?php echo $res1[$x]['sujet_msg'].'<br>';?>
                  </td>
                  <td>
                    <?php echo $res1[$x]['date_reception'].'<br>';?>
                  </td>
                   <td>
                    <?php if ( $res1[$x]['reponse_msg'] != "") {
                     echo "répondu";
                    }else {echo " pas de réponse";
                    }?>
                  </td>
                  <td>
                   <a  style="color: grey;" href="voir_msg_ent.php?id_msg=<?php echo $res1[$x]['id_cont']; ?>">Ouvrir</a>
              
   
                  </td>
                </tr>
            <?php } 
             echo '</tbody>';
           #  fin msg a partir dune entreprise
                ?>






                <?php 
   #pour l'affichage d un msg a partir d un client
    for( $y=0 ;$y<count($res2); $y++){

      
     ?>
              <tbody class="list">
                <tr>
                  <td class="name">
                   <?php echo '<img src="public/images/client/'.$res2[$y]['image'].'"  width="80" style ="margin-right : 30px"/>'. ' ';
                    echo  ' '.$res2[$y]['nom'].' '.$re2[$y]['prenom'];?>
                  </td>
                  <td>
                   <?php echo $res2[$y]['sujet_msg'].'<br>';?>
                  </td>
                  <td>
                    <?php echo $res2[$y]['date_reception'].'<br>';?>
                  </td>
                    <td>
                    <?php if ( $res2[$y]['reponse_msg'] != "") {
                     echo "répondu";
                    }else {echo " pas de réponse";
                    }?>
                  </td>
                  <td>
                   <a  style="color: grey;" href="voir_msg_ent.php?id_msg=<?php echo $res2[$y]['id_cont']; ?>">Ouvrir</a>
              
   
                  </td>
                </tr>
            <?php } 
             echo '</tbody>';
           #  fin msg a partir dun client
                ?>


 </table>   
            <br><br>   <div class="clearfix">
              <!--Start pagination-->
              <div class="pagination_type_1 f_left">
              
              <ul class="pagination_page_list"></ul>
            
              </div>
    
  </div> </div>   
          

           <script>
  var options = {
  valueNames: [ 'name' ]
};

var userList = new List('users', options);
</script>
<script>var monkeyList = new List('users', {
  valueNames: ['name'],
  page: 9,
  plugins: [ ListPagination({}) ] 
});</script>
          </section>
          
         </div>
      <br><br><br>
</div>  
  

      <?php include 'footer.php'; ?>
  </body>
</html>