<?php
session_start();
if (!isset($_SESSION['entreprise'])) {
header('Location: index.php');
}
?>