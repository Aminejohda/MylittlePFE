<?php
session_start();
$id_ab = '1';
$id_ent = '16';
include("../model/mabonnement.php");
$i= new Abonnement();
$i->id_ab=$id_ab;
$i->id_ent=$id_ent;
$i->modif_ab_ent($i);
?>