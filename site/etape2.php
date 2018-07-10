<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
<body style="background-color: #F26103">
<?php $id_en = $_GET['id_ent'];
?>
<img src="public/images/a.png" width="200" style="margin-top: 10%; margin-left: 40%">
<form method="post" action="controller/update_entreprise.php?id_ent=<?php echo $id_en ?>">

  <div style="padding: 70px; border: 3px solid white; margin-left: 35%;margin-right: 40%;margin-top: 1%;background-color: #EA5E03">
      
  <style type="text/css">
  .btn {
  background: #000000;
  background-image: -webkit-linear-gradient(top, #000000, #5c5c5c);
  background-image: -moz-linear-gradient(top, #000000, #5c5c5c);
  background-image: -ms-linear-gradient(top, #000000, #5c5c5c);
  background-image: -o-linear-gradient(top, #000000, #5c5c5c);
  background-image: linear-gradient(to bottom, #000000, #5c5c5c);
  text-shadow: 1px 1px 3px #666666;
  font-family: Georgia;
  color: #ffffff;
  font-size: 20px;
  padding: 5px 10px 5px 10px;
  text-decoration: none;
}

.btn:hover {
  background: #5c5c5c;
  background-image: -webkit-linear-gradient(top, #5c5c5c, #000000);
  background-image: -moz-linear-gradient(top, #5c5c5c, #000000);
  background-image: -ms-linear-gradient(top, #5c5c5c, #000000);
  background-image: -o-linear-gradient(top, #5c5c5c, #000000);
  background-image: linear-gradient(to bottom, #5c5c5c, #000000);
  text-decoration: none;
}
    ::-webkit-input-placeholder{
      color: white; 
    }</style>
      <input  type="text" placeholder ="Nom de Votre Société" name="ns" style="background-color: #F26103;border: 1px solid white;padding: 10px; width: 199px;height: 39px; color: white"  required><br><br>
        <select name="cat" style="background-color: #F26103;border: 1px solid white;padding: 10px; color: white"  required>
         <option value="">Choisissez Votre Catégorie</option>
          <?php include("model/mcategorie.php");
            $ins= new  Categorie();
            $res=$ins->AffCat();
            for($i=0;$i<count($res);$i++){
             ?>
                        <option value="<?php echo $res[$i]['id_cat'];?>"><?php echo $res[$i]['titre_cat'];?></option>
                        
                        <?php }?>
                        
        </select><br><br>
      
      
      <input class="btn" type="submit" value="Inscription" style="margin-left: 80px;margin-top: 20px;" >
      </div>
      </form>
      </body>