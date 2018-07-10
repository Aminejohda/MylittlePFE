<?php
// PDO connect *********
include 'model/config.php';

$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM activites WHERE titre_ac LIKE (:keyword) ORDER BY id_ac ASC LIMIT 0, 10";
$query = $db->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$country_name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['titre_ac']);
	// add new option
    echo '<li onclick="set_item2(\''.str_replace("'", "\'", $rs['titre_ac']).'\')">'.$country_name.'</li>';
}
?>