<script src='https://www.google.com/recaptcha/api.js'></script>
  <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>                 
                        <p style="padding-left: 70px;">
                        Connectez-vous pour accéder à toutes les fonctionnalités du site
                        </p>
                </div>
                <div class="modal-body">
                <div class="span6">
                <div style="padding-left : 160px;"> 
                </div>
                    <br>
<div class="container" style="margin-right: 0px;
    margin-left: 0px; width: 480.2px;">
    <br>
    <form method="post" action="controller/cnx_entreprise.php">
  <div style="padding-left: 70px;">
      <input id="innn" type="email" placeholder ="Adresse email" name="email1" required><br><br>
      <input id="innn" type="password" placeholder ="Mot de passe" name="pass" required><br><br>
      <input id="btnn" type="submit" value="Connexion" >
      </form>
  </div>
</div>
                </div>
                    </div>
                <div class="modal-footer">
                    Vous n'avez pas de compte ?<a data-toggle="modal" data-target="#myModal3" href="#" data-dismiss="modal"> Inscrivez-vous</a>
                    
                </div>
            </div>
        </div>
    </div>
















  <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                                       
                        <p style="padding-left: 70px;">
                        Connectez-vous pour accéder à toutes les fonctionnalités du site
                        </p>
                </div>
                
                <div class="modal-body">
                <div class="span6">
                <br>   
<div class="container" style="margin-right: 0px;
    margin-left: 0px; width: 480.2px;">

    <br>
    <form method="post" action="controller/cajout_entreprise.php">

  <div style="padding-left: 70px;">
      
  
      <input id="innn" type="text" placeholder ="Nom de votre société" name="ns"  required autofocus><br><br>
        <select name="cat" id="innn" required>
         <option value="">Choisissez la catégorie de vos services</option>
          <?php include("model/mcategorie.php");
            $ins= new  Categorie();
            $res=$ins->AffCat();
            for($i=0;$i<count($res);$i++){
             ?>
                        <option value="<?php echo $res[$i]['id_cat'];?>"><?php echo $res[$i]['titre_cat'];?></option>
                        
                        <?php }?>
                        
        </select><br><br>
      <input id="innn" type="email" placeholder ="Adresse email" name="email" autocomplete="off" required> <br><br>
      <input id="password" type="password" placeholder ="Mot de passe" name="pwd"  class="innn" style="width: 80%" required><br><br>
      <input id="confirm_password" type="password" placeholder ="Confirmer Mot de passe" name="pwd1" class="innn" style="width: 80%"  required><br><br>
      <div class="g-recaptcha" data-sitekey="6LcN_hwTAAAAAN6T-h4crlCaubIY1imeHOFOSVw8"></div>
      <input id="btnn" type="submit" value="Inscription" >
      </form>
<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("les mots de passe ne se correspondent pas. voulez-vous réessayer");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

  </div>

</div>
                </div>
                    </div>
                <div class="modal-footer">
                    Vous avez déjà un compte ? <a data-toggle="modal" data-target="#myModal4" href="#" data-dismiss="modal">Connectez-vous</a>
                    
                </div>
            </div>
        </div>
    </div>























  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                                       
                        <p style="padding-left: 10px;">
                        Connectez-vous pour accéder à toutes les fonctionnalités du site du site
                        </p>
                </div>
                
                <div class="modal-body">
                <div class="span6">
           
                   
<div class="container" style="margin-right: 0px;
    margin-left: 0px; width: 480.2px;">

  
  
    <br>
    <form method="post" action="controller/cnx_client.php">

  <div style="padding-left: 70px;">
      <input id="innn" type="email" placeholder ="Adresse email" name="email1" required><br><br>
      <input id="innn" type="password" placeholder ="Mot de passe" name="pass" required><br><br>
    
      <input id="btnn" type="submit" value="Connexion" >
      </form>


  </div>

</div>
                </div>
                    </div>
                <div class="modal-footer">
                    Vous n'avez pas de compte ?<a data-toggle="modal" data-target="#myModal" href="#" data-dismiss="modal"> Inscrivez-vous</a>
                    
                </div>
            </div>
        </div>
    </div>
















  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                                       
                        <p style="padding-left: 70px;">
                        Connectez-vous pour accéder à toutes les fonctionnalités du site
                        </p>
                </div>
                
                <div class="modal-body">
                <div class="span6">
                <div style="padding-left : 160px;"> 
                    <?php 
                    error_reporting(0);
                     include 'fb/index.php';
                    include 'google-login/index.php';
                    ?>
                </div>
                    <br>
                    <hr class="devider_type_4" style="border-top-width : 1px; border-top-color : #7c7c7c;">
                   
<div class="container" style="margin-right: 0px;
    margin-left: 0px; width: 480.2px;">

  <a type="button" href="#demo"   data-toggle="collapse">
  <img src="public/images/insc2.png"  width="200" style="padding-left: 150px;"/>
  </a>
  <div id="demo" class="collapse" >
    <br>
    <form method="post" action="controller/cajout_client.php">

  <div style="padding-left: 70px;">
      <input id="innn" type="text" placeholder ="Nom" name="nom" required><br><br>
      <input id="innn" type="text" placeholder ="Prénom" name="pren" required><br><br>
      <input id="innn" type="email" placeholder ="Adresse email" name="email" required><br><br>
      <input id="pass" class ="innn" type="password" style="width: 330px" placeholder ="Mot de passe" name="pwd" required><br><br>
      <input id="conf" class ="innn" type="password"  style="width: 330px" placeholder ="Confirmer Mot de passe" name="pwd1" required><br><br>
      
      
      <input id="btnn" type="submit" value="Inscription" >
      </form>
      <script>
var password22 = document.getElementById("pass")
  , confirm_password22 = document.getElementById("conf");

function validatePassword2(){
  if(password22.value != confirm_password22.value) {
    confirm_password22.setCustomValidity("les mots de passe ne se correspondent pas. voulez-vous réessayer");
  } else {
    confirm_password22.setCustomValidity('');
  }
}

password22.onchange = validatePassword2;
confirm_password22.onkeyup = validatePassword2;
</script>
</div>

  </div>

</div>
                </div>
                    </div>
                <div class="modal-footer">
                    Vous avez déjà un compte ? <a data-toggle="modal" data-target="#myModal2" href="#" data-dismiss="modal">Connectez-vous</a>
                    
                </div>
            </div>
        </div>
    </div>
