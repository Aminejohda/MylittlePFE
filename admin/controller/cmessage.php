<?php
include '../model/config.php';
if($_POST['rowid']) {
    $id = $_POST['rowid'];
    
    $sql="select * from contact where id_contact = :id";
        $res=$db->prepare($sql);
        $res->execute(array(':id'=>$id));
        $donne=$res->fetch($db::FETCH_ASSOC);
?>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="well well-sm">
                <div class="row">
                    
                    <div class="col-sm-6 col-md-12">
                        <h4>
                           <?php echo $donne['nom_client']?></h4>
                        
                        <p>
                           
                        
                            <i class="glyphicon glyphicon-bookmark"></i>  E-mail : <?php echo" ".$donne['email'];?>
                            <br />
                          <i class="glyphicon glyphicon-text-height"></i> Objet : <?php echo " ".$donne['objet']?>
                            <br />
                             <i class="glyphicon glyphicon-text-height"></i> Contenu : <?php echo " ".$donne['question']?>
                            <br />
                          <i class="glyphicon glyphicon-calendar"></i> Date D'insertion :  <?php echo " ".$donne['date_rec'];?>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
   

<style>
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd; 
}

div.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
}

div.panel.show {
    display: block !important;
}
</style>



<button class="accordion glyphicon glyphicon-transfer"> Répondre</button>
<div class="panel">
  <p>
    <form method="post" action="controller/crep_msg_admin.php?email=<?php echo $donne['email']?>">
                                <div class="form-group">
                                 <br>
                        <label>Votre Réponse : </label>
                        <textarea class="textarea form-control" name="rep" placeholder="Entrer Votre Réponse" style="width :426px; height :196px" required></textarea>
                        <script>
    $(".textarea").wysihtml5();
</script>
                        <input type="hidden" name="suj" value="<?php echo $donne['objet']?>"></input>
                        <input type="hidden" name="id" value="<?php echo $donne['id_contact']?>"></input>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Envoyer"></input>
                     </form>
                           </p>
</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>




 <?php   
$sql=$db->prepare('UPDATE contact set statut = 1 where id_contact= :id ');
$sql->execute(array(':id'=>$id));
}
?>
</div>