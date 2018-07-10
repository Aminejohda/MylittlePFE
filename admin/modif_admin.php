<?php 
session_start();
include 'styles.php'; ?>
<meta charset="utf-8">
   <?php include 'header.php'; ?>
      <div class="container">
    <h1>Modifier Profil</h1>
  	<hr>
	<div class="row">
      <?php 
  $id=$_GET['id'];

  $i=new Admin();
  $res=$i->Affscbyid($id);  
  ?>
  <form class="form-horizontal" role="form" method="POST" action="controller/cmodif_admin.php?id=<?php echo $id;?>" enctype="multipart/form-data">
      <div class="col-md-3">
        <div class="text-center">
        <br><br><br><br><br>
         <div class="form-group">
                <label>Choisissez une image</label>
                 <div class="fileupload fileupload-new" data-provides="fileupload">
    <span class="btn btn-primary btn-file"><span class="fileupload-new">Votre image</span>
    <span class="fileupload-exists">Changer</span>    <input type='file' id="imgInp" name="image" accept=".jpg,.jpeg,.gif,.png"/>     </span>
    <span class="fileupload-preview"></span>
    <a href="#" class="close fileupload-exists" id='remove2' style="float: none">×</a>
  </div>
        <img id="blah" src="public/img/photo/<?php echo $res['img_admin'];?>"  style="width: 160px; height: 100px" />                
             </div>
             <input type="hidden" value="<?php echo $res['img_admin'];?>" name="logo"></input>    
        </div>
     
      </div>
   
      <!-- edit form column -->
      <div class="col-md-9 personal-info"> 
           
        <h3>Information Personnel</h3>
        
        
          <div class="form-group">
            <label class="col-lg-3 control-label">Nom:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="Tapez Votre Nom" name="nom" value="<?php echo $res['nom_admin'];?>" required autofocus>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Prénom:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="Tapez Votre Prénom" name="pren"value="<?php echo $res['prenom_admin'];?>" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="email" placeholder="Tapez Votre Adresse Email" name="email"
              value="<?php echo $res['email_admin'];?>" required>
            </div>
          </div>
         
            <div class="form-group">
            <label class="col-md-3 control-label">Nouveau Mot de Passe:</label>
            <div class="col-md-8">
              <input class="form-control" id="password" type="password" placeholder="Nouveau Mot de Passe" name="npwd" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirmer Mot de Passe:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" id="confirm_password" placeholder="Confirmer Mot de Passe" name="cpwd" required>
            </div>
           
          </div>
          <script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Les mots de passe ne se correspondent pas. Voulez-vous réessayer");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Enregistrer">
              <span>
                
              </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="dash.php" class="btn btn-default">Annuler</a>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
<?php include 'js.php';?>