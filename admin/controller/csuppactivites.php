<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id=$_GET['id'];

include("../model/mactivites.php");
$i= new Activites();
$i->suppActivites($id);
echo "<script language='javascript'>parent.location.href='../Activites.php'</script>";


?>