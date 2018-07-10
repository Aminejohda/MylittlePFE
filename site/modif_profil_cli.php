<?php include 'session_client.php'; ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Sa3edni.tn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
     <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
    <?php include 'style.php';?>
    
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
<form method="post" action="controller/cmodif_profil_cli.php" enctype="multipart/form-data">
            <div class="span6">
              <article style="margin-bottom: 0px;">
                <hr class="devider_type_5">
                <header>
                  <br>
                  <h4>Modifier mon profil personnel</h4>
                </header>
              <?php
$id= $_SESSION['client'];

    include 'model/mclient.php';
 
    $i= new client();
  
    $res=$i->Aff_Cord($id);
?>

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
<label>Nom : </label><input style="width: 65%;" id="innn" type="text" name="nom" value="<?php echo $res['nom'] ?>"required></input><br><br><br>
<label>Prenom : </label><input style="width: 65%;" id="innn" type="text" name="pren" value="<?php echo $res['prenom'] ?>"required></input><br><br><br>
<label>Email : </label><input style="width: 65%;" id="innn" type="email" name="email" value="<?php echo $res['email'] ?>"required></input><br><br><br>

<label>Mot de Passe : </label><input style="width: 65%;" id="innn" type="password" name="pass" value="<?php echo $res['password'] ?>" required></input><br><br><br>
<label>Adresse: </label>
<input style="width: 65%;" id="txtautocomplete" class="innn" type="text" name="adr" value="<?php echo $res['adresse'] ?>"  required></input><br><br><br> 
<input type="hidden" id="lat" name="lat" required/>
<input type="hidden" id="long" name="long" required/>
<input  type="hidden" name="logo" value="<?php echo $res['image'] ?>"></input>
<label>Telephone : </label><input style="width: 65%;" id="innn" type="text" name="tel" value="<?php echo $res['telephone'] ?>" ></input><br><br>
<label>GSM : </label><input style="width: 65%;" id="innn" type="text" name="gsm" value="<?php echo $res['gsm'] ?>" ></input><br><br>
   

              </article>
              </div>
              <div class="span6">
              <article style="margin-bottom: 0px;">
                <br><br><br><br>

                <div class="form-group">
                     
     <br><br>
                 <div class="fileupload fileupload-new" data-provides="fileupload">
    <span class="btn btn-default btn-file">
    <input type='file' id="imgInp" name="image" accept=".jpg,.jpeg,.gif,.png"/>     </span>
    <br><br><br>
    <span class="fileupload-preview"></span>
    <a href="#" class="close fileupload-exists" id='remove2' style="float: none">×</a>
  </div>
          
    
        <img id="blah" src="public/images/client/<?php echo $res['image'];?>" alt="ton image" style="width: 256px; height: 256px; margin-left: 20px" />                
             </div>
             <input type="hidden" value="<?php echo $res['image'];?>" name="logo"></input>
             </div>
             


                </article></div>
            </div><input id="btnn" style="width: 150px;margin-left: 45%" type="submit" value="Modifier"></input>
</form>
          </div>
        </div>
      </div>
      </div>
<?php include 'footer.php'; ?>
<?php include 'js.php'; ?>
  </body>
</html>


