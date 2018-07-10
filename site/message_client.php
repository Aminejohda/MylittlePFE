<?php include 'session_client.php'; ?>
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
      include 'header_cli.php';

     
?>
<div class="container">
  <hr class="devider_type_4">
  <section class="cart_totals clearfix m_bottom_15">
            <hr class="devider_type_4">
            <h2>Ma Messagerie</h2>
            
          </section>
  <section class="table_cart_type_4_container">   
  <?php  $id= $_SESSION['client'];
    
    $k= new Message();
    $res1=$k->Affmessagecli($id);
      if (count($res1) == 0) {
        echo 'Aucun Message Trouvé';
     } else { ?>   
     <div id="users">
  <input class="search" placeholder="Search" />
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
                </tr>
              </thead>
       
              <tbody class="list">
                     <?php 
   
    for( $x=0 ;$x<count($res1); $x++){
     ?>
                <tr>
                  <td class="name">
                   <?php echo '<img src="public/images/logo_ent/'.$res1[$x]['image'].'" height="120" width="120"/>'. ' ';
                    echo  ' '.$res1[$x]['nom_commerciale'];?>
                  </td>
                  <td>
                   <?php echo $res1[$x]['sujet_msg'] ?>
                  </td>
                  <td>
                    <?php echo $res1[$x]['date_reception'].'<br>';?>
                  </td>
                  <td>
                    <?php if ( $res1[$x]['reponse_msg'] != "") {
                     echo "repondu";
                    }else {echo " not repondu";
                    }?>
                  </td>
                  <td>
                   <a  style="color: grey;" href="voir_msg_client.php?id_msg=<?php echo $res1[$x]['id_cont']; ?>">Ouvrir</a>
                  </td>
                </tr>
              <?php } ?>
          
              </tbody>
              
            </table>   
            <br><br>   <div class="clearfix">
              <!--Start pagination-->
              <div class="pagination_type_1 f_left">
              
              <ul class="pagination_page_list"></ul>
            
              </div>
    
  </div> </div>   
            <?php } ?> 

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