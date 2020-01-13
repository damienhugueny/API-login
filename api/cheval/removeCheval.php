<?php
//on enleve un cheval
session_start();
require '../config/databaseChevaux.php';
if($_POST['removeCheval'] != "--Selectionner un cheval--" ){
    $sqlremove = 'DELETE FROM chevaux WHERE propriétaire = "'.$_SESSION["name"].'" AND cheval ="'.$_POST["removeCheval"].'"';
    $pdo ->query($sqlremove);
}

header('location: ../../home.php?user='.$_SESSION['id']);

?>