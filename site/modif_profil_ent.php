<?php include 'session.php'; ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Sa3edni.tn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
     <script type="text/javascript" src="public/js/jquery-1.8.3.js"></script>
     <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
      <script src="public/js/wysihtml5-0.3.0.js"></script>
    <script src="public/js/bootstrap-wysihtml5.js"></script>
    
    <?php include 'style.php';?>
   

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
                  <h4>Modifier mon profil personnel</h4>
                </header>
          <?php
$id=$_SESSION['entreprise'];
include 'model/mentreprise.php';
    $i= new Entreprise();
    $res=$i->Aff_Cord($id);
?>
<form method="post" action="controller/cmodif_profil_ent.php" enctype="multipart/form-data">
  <div class="form_row">
<?php $radio2 = $res['civilite'] ;?>
                  <label>Civilité </label><br>
  <input type="radio" name="civ" id="radio_8" value="Monsieur"
<?php echo ($radio2=='Monsieur')?'checked':'' ?>
  ><label for="radio_8">Monsieur</label>
                  <input type="radio" name="civ" id="radio_9" value="Madame"
<?php echo ($radio2=='Madame')?'checked':'' ?>
                  ><label for="radio_9">Madame</label>
                  
                </div>
<label>Nom : </label><input style="width: 65%;" id="innn" type="text" name="nom" value="<?php echo $res['nom'] ?>" required></input><br><br><br>
<label>Prenom : </label><input style="width: 65%;" id="innn" type="text" name="pren" value="<?php echo $res['prenom'] ?>" required></input><br><br><br>
<label>Email : </label><input style="width: 65%;" id="innn" type="text" name="email" value="<?php echo $res['email'] ?>" required></input><br><br><br>
<label>Mot de Passe : </label><input style="width: 65%;" id="innn" type="password" name="pass" value="<?php echo $res['password'] ?>" required></input><br><br><br>
<div class="form-group">
                     
     <br><br>
                 <div class="fileupload fileupload-new" data-provides="fileupload">
    <span class="btn btn-default btn-file">
    <input type='file' id="imgInp" name="image" accept=".jpg,.jpeg,.gif,.png"/>     </span>
    <br><br><br>
    <span class="fileupload-preview"></span>
    <a href="#" class="close fileupload-exists" id='remove2' style="float: none">×</a>
  </div>
          
    
        <img id="blah" src="public/images/logo_ent/<?php echo $res['image'];?>"  style="width: 256px; height: 256px; margin-left: 20px" />                
             </div>
             <input type="hidden" value="<?php echo $res['image'];?>" name="logo"></input>
             <br><br>
<input id="btnn" style="width: 150px;" type="submit" value="Modifier"></input>
</form>
              </article>
            </div>
            <div class="span6">
              <article style="margin-bottom: 0px;">
                <hr class="devider_type_5">
                <header>
                  <br>
                  <h4>Modifier mon profil professionnel</h4>
                </header>
<form method="post" action="controller/cmodif_profil2_ent.php">
  <label>Nom Commerciale : </label><input style="width: 65%;" id="innn" type="text" name="nom_ste" value="<?php echo $res['nom_commerciale'] ?>" required></input><br><br><br>
<label>Adresse: </label>




<input style="width: 65%;" id="txtautocomplete" class="innn" type="text" name="adr" value="<?php echo $res['adresse'] ?>" required></input><br><br><br> 


<input type="hidden" id="lat" name="lat" required/>
<input type="hidden" id="long" name="long" required/>

<label>Site Web : </label><input style="width: 65%;" id="innn" type="url" name="site" value="<?php echo $res['site_web'] ?>" placeholder="http://www.exemple.com"></input><br><br><br>
<label for="textarea_1">Description:</label>

<textarea id="textarea_1" class="textarea" style="width: 510px; height: 200px"  name="des"><?php echo $res['description'] ?></textarea>

<script>
    $(".textarea").wysihtml5();
</script>
<br>
<div class="form_row">
<?php $radio3 = $res['moyen_paiement'] ;?>
                  <label>Moyens de paiement acceptés : </label><br> 
                  <input type="checkbox" id="checkbox_1" name="mp[]" value="Chèque"
                  <?php echo (strpos($res['moyen_paiement'], 'Chèque') !== false)?'checked':'' ?>>
                  <label for="checkbox_1">Chèque</label>
                  <input type="checkbox" id="checkbox_2" name="mp[]" value="Virement"
                  <?php echo (strpos($res['moyen_paiement'], 'Virement') !== false)?'checked':'' ?>>
                  <label for="checkbox_2">Virement</label>
                  <input type="checkbox" id="checkbox_3" name="mp[]" value="Paypal"
                   <?php echo (strpos($res['moyen_paiement'], 'Paypal') !== false)?'checked':'' ?>>
                  <label for="checkbox_3">Paypal</label>
                  <input type="checkbox" id="checkbox_4" name="mp[]" value="Paiement comptant" 
                  <?php echo (strpos($res['moyen_paiement'], 'Paiement comptant') !== false)?'checked':'' ?>>
                  <label for="checkbox_4">Paiement comptant</label>
                  
                </div>

                <br>
<div class="form_row">
<?php $radio = $res['reponse_demande'] ;?>
									<label>En général, vous répondez aux demandes </label><br>
	<input type="radio" name="rd" id="radio_1" value="Dans la journée"
<?php echo ($radio=='Dans la journée')?'checked':'' ?>
	><label for="radio_1">Dans la journée</label><br>
									<input type="radio" name="rd" id="radio_2" value="Sous 48 heures"
<?php echo ($radio=='Sous 48 heures')?'checked':'' ?>
									><label for="radio_2">Sous 48 heures</label>
									<input type="radio" name="rd" id="radio_3" value="Je ne m'engage pas sur un délai de réponse"
<?php echo ($radio=="Je ne m'engage pas sur un délai de réponse")?'checked':'' ?>
									><label for="radio_3">Je ne m'engage pas sur un délai de réponse</label>
								</div>
<br>
<label>Telephone : </label><input style="width: 65%;" id="innn" type="text" name="tel" value="<?php echo $res['telephone'] ?>" required></input><br><br>
<label>Fax: </label><input style="width: 65%;" id="innn" type="text" name="fax" value="<?php echo $res['fax_ent'] ?>" ></input><br><br>
<label>GSM : </label><input style="width: 65%;" id="innn" type="text" name="gsm" value="<?php echo $res['gsm'] ?>" ></input><br><br>
<input id="btnn"style="width: 150px;" type="submit" value="Modifier"></input>
</form>
              </article>
            </div>
          </div>
        </div>
      </div>
      </div>
       <?php include 'js.php'; ?>
<?php include 'footer.php'; ?>
  </body>
</html>


