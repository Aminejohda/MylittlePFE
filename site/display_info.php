  <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="width: 660px;left: 578px;">
 <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #f4f4f4">
                    <button type="button" class="close" data-dismiss="modal">×</button>                 
                        <h5 style="text-align: center;">
                        Envoyer un message à ce pro
                        </h5>
                </div>
                <div class="modal-body">
                <div class="span2">
  <?php echo '<img src="public/images/logo_ent/'.$res['image'].'" width="120" height="100" style="border: solid 4px white; border-radius: 10px ;margin-left: 30px">';?>
</div>
          <div class="span4" style="margin-left: 50px;">
          <br>
<div style="font-size: 1.3em;"><?php echo $res['nom_commerciale'].' - '.$res['nom'].' '.$res['prenom'];?></div><br>
 <?php echo $res['titre_ac'].' - '.$res['adresse'];?>
</div>
<div style="margin-left: 50px;">
  <form method="post" action="controller/cajouter_msg.php?id=<?php echo $res['id_entreprise']?>">
  <br><br><br><br><br><br><br><br>
              <fieldset class="span6" style="background-color: #f0f0f0">
              
              <di
                  <span class="form_col" >
                  <label style="color: black ; ;margin-left: 20px; margin-bottom: 10px">Sujet</label><br>
                        <input type="text" name='objet'  style="width: 430px;background: white ;margin-left: 25px" placeholder="Entrez le sujet de votre message" required>
                   </span>
              <br>
                        <label style="color: black ; ;margin-left: 20px; margin-bottom: 10px">Message</label><br>
                        <textarea  name="msg" placeholder="Écrivez ici le message que vous souhaitez adresser au pro" style="background: white ;margin-left: 25px; width :430px" required></textarea>
<input type="hidden" value="<?php echo $_GET['id'];?>" name="id_an"></input>
                         <br><br>
                  <button type="submit" id="btnn" style="margin-left: 220px;">Envoyer votre message</button>
                <p class="form_message"></p>
                </fieldset>
              </form>
              </div>
                </div>
                    </div>
                <div class="modal-footer">
                  
                    
                </div>
            </div>
        </div>