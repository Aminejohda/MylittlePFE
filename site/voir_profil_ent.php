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
            <div class="span6">
              <article style="margin-bottom: 0px;">
                <hr class="devider_type_5">
                <header>
                  <br>
                  <h2>MON PROFIL PERSONNEL</h2>
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
              echo "<span> Civilité : ".$res['civilite'];
            echo "</div>";
            
              echo "<div class='total_container'>";
              echo "<span> Nom : ".$res['nom']." ".$res['prenom']."</span>";
            echo "</div>";

            echo "<div class='total_container'>";
               echo "<span> Email :".$res['email']."</span>";
              
            echo "</div>";
            echo "<div class='total_container'>";
              echo "<span> Mot de passe : <input type ='password' value='".$res['password']."' readonly id='pwd' class='masked'/></span>";
              echo '  <button type="button" id="eye" style ="margin-left : 10px; width :15px">
        <img src="https://cdn0.iconfinder.com/data/icons/feather/96/eye-16.png" alt="eye" />
    </button>';
           echo "</div>";
             echo "<div class='total_container'>";
              echo "<span> Derniere connexion : ".$res['dernier_cnx'];
            echo "</div>";
                ?>
                <br><br>
   
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
              <br><br>
            </div>
            <div class="span6">
              <article style="margin-bottom: 0px;">
                <hr class="devider_type_5">
                <header>
                  <br>
                  <h2>MON PROFIL PROFESSIONNEL</h2>
                </header>
          <?php    
       echo "<div class='total_container'>";
              echo "<span> Nom Commerciale : ".$res['nom_commerciale'];
            echo "</div>";

           
            echo "<div class='total_container'>";
              echo "<span> Adresse :".$res['adresse']."</span>";
           echo "</div>";
            
               echo "<div class='total_container'>";
              echo "<span> Site Web : ".$res['site_web'];
            echo "</div>";
            
              echo "<div class='total_container'>";
              echo "<span> Description : ".$res['description']."</span>";
            echo "</div>";

            echo "<div class='total_container'>";
               echo "<span> Moyen de Paiement :".$res['moyen_paiement']."</span>";
           echo "</div>";
           echo "<div class='total_container'>";
               echo "<span> En général, vous répondez aux demandes :".$res['reponse_demande']."</span>";
           echo "</div>";
           echo "<div class='total_container'>";
               echo "<span> Telephone :".$res['telephone']."</span>";
           echo "</div>";
           echo "<div class='total_container'>";
               echo "<span> Fax :".$res['fax_ent']."</span>";
           echo "</div>";
           echo "<div class='total_container'>";
               echo "<span> GSM :".$res['gsm']."</span>";
           echo "</div>";
                ?>
              </article>
              <br><br>
            </div>
 <a id="btnn" style="margin-left: 450px;  " href="modif_profil_ent.php">Modifier</a>
          </div>
        </div>
      </div>
      </div>
  <?php include 'footer.php'; ?>
  </body>
</html>


