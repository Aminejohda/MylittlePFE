<?php

								$id= $_SESSION['entreprise'];
								
								 include 'model/mmessage.php';
   
    $l= new Message();
 
     $res2=$l->Affmsgnoti($id);
	 $noti = count($res2);
								

								
?>

<style type="text/css">
  [data-notifications] {
  position: relative;
}

[data-notifications]:after {
  content: attr(data-notifications);
  position: absolute;
  background: #ff7400;
  border-radius: 50%;
  display: inline-block;
  padding: 0.3em;
  color: #f2f2f2;
  right: 70px;
  top: 0px;
}
</style>

      <div class="banner_type_3" style="margin-top: 99px;">
        <div class="container" style="margin-right: 150px;">
            <div class="row m_bottom_15" style="
    width: 1100px;
">
             <a href="tableau_bord_ent.php" title="Tableau de Bord">
            <div class="span2" >
              <img src="public/images/setting.png" width="130.281" >
              <br><label style=" color: black">Tableau de Bord</label>
            </div></a> 
               <a href="voir_profil_ent.php" title="Mon Profil">
            <div class="span2">
              <img src="public/images/icone-verte.png" width="80.281" style="margin-left: 30px;">
              <br><label style="
    margin-left: 35px; color: black">Mon Profil</label>
            </div></a> 
               <a href="msg_recu.php" title="Ma Messagerie" >
               <?php 
			   if($noti == 0){
			   echo   '<div class="span2">';
			   }else {
			   ?>
            <div class="span2"  data-notifications="<?php echo $noti; ?>"> <?php } ?>
             <img src="public/images/mails.png"  width="80.281"style="
    margin-left: 10px;" >              <br><label style=" color: black;" >Ma Messagerie</label>
            </div></a> 
              <a href="avis_ent.php" title="Mes Avis">
            <div class="span2" style="
    width: 120px;
">
              <img src="public/images/sta.png" width="80.281" >
              <br><label style="
    margin-left: 10px; color: black">Mes Avis</label>
            </div></a> 
             
             <a href="devis_ent.php" title="Mes Demande de Devis">
            <div class="span2" style="width: 152px">
              <img src="public/images/devis.png" width="80.281" style="
    margin-left: 30px;">
              <br><label style=" color: black;">Mes Demande de Devis</label>
            </div></a>
             
        
           <a href="annonce.php" title="Mes Annonces">
           <div class="span2">
              <img src="public/images/votre-annonce.png" width="80.281" alt="Mes Annonces" style="
    margin-left: 30px;">
              <br><label style=" color: black;margin-left: 20px;">Mes Annoces</label>
            </div></a> 
          </div>

        </div>
      </div>