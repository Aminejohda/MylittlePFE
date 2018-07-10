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
  <div class="page_padding">
        <div class="container">
          <div class="row">
          <hr class="devider_type_5">
            <div class="span9" style="padding-left: 100px">

              <article style="margin-bottom: 0px; ">
                
                <header>
                  <br>
                  <h2>MON PROFIL PERSONNEL</h2>
                </header>
           <?php
$id= $_SESSION['client'];

    include 'model/mclient.php';
 
    $i= new client();
  
    $res=$i->Aff_Cord($id);
               echo'<div class="fancybox_container f_left" style="margin: 6px 20px 100px 0;">';
               echo'<a href="public/images/client/'.$res['image'].'" class="fancybox_link" width="200"></a>';
               echo'<img src="public/images/client/'.$res['image'].'" width="200">';
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

         
             echo "<div class='total_container'>";
              echo "<span> Derniere connexion : ".$res['dernier_cnx'];
            echo "</div>";
            echo "<div class='total_container'>";
               echo "<span> Telephone :".$res['telephone']."</span>";
           echo "</div>";
          
           echo "<div class='total_container'>";
               echo "<span> GSM :".$res['gsm']."</span>";
           echo "</div>";
            echo "<div class='total_container'>";
              echo "<span> Mot de passe : <input type ='password' value='".$res['password']."' readonly id='pwd' /></span>";
              echo '  <button type="button" id="eye" style ="margin-left : 10px; width :15px">
        <img src="https://cdn0.iconfinder.com/data/icons/feather/96/eye-16.png" alt="eye" />
    </button>';
           echo "</div>";
                ?>
                 <a id="btnn" style="margin-left: 450px;  " href="modif_profil_cli.php">Modifier</a>
</div>
              </article>
            <script type="text/javascript">
     function show() {
        var p = document.getElementById('pwd');
        p.setAttribute('type', 'text');
    }

    function hide() {
        var p = document.getElementById('pwd');
        p.setAttribute('type', 'password');
    }

    var pwShown = 0;

    document.getElementById("eye").addEventListener("click", function () {
        if (pwShown == 0) {
            pwShown = 1;
            show();
        } else {
            pwShown = 0;
            hide();
        }
    }, false);
</script>
            
            </div>

 
          </div>
        </div>
      </div>
      </div>
  <?php include 'footer.php'; ?>
  </body>
</html>


