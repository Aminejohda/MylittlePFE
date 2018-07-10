<?php
    $i= new Categorie();
    $res=$i->AffCat(); 
      ?>
<span class="span1"></span>
	<?php for ($i=0; $i <count($res) ; $i++) {?>
<section id="toolbox" >

<ul>
<li class="cat">
<a href="liste_activite.php?id=<?php echo $res[$i]['id_cat'];?>" title="<?php echo $res[$i]['titre_cat'];?>">
<span><?php echo $res[$i]['titre_cat']; ?></span>
<i class="glyphicon">
<img src="../admin/public/img/categorie/<?php echo $res[$i]['image_cat'] ; ?>" style="width:30px;height:30px;">
</i>
</a>
</li>
<?php } ?>
</ul>

</section>
<br><br>