<?php
//on enleve un cheval
session_start();
require '../config/database.php';

$database = new Database();
$pdo = $database->getConnection();

if($_POST['removeCheval'] != "--Selectionner un cheval--" ){
    $sqlremove = 'DELETE FROM chevaux WHERE propriétaire = "'.$_SESSION["name"].'" AND cheval ="'.$_POST["removeCheval"].'"';
    $pdo ->query($sqlremove);
    // supprime aussi les donnée dans la base ferrure
    $sqlremove = 'DELETE FROM ferrure WHERE propriétaire = "'.$_SESSION["name"].'" AND cheval ="'.$_POST["removeCheval"].'"';
    $pdo ->query($sqlremove);


}

header('location: ../../home.php?user='.$_SESSION['id']);

?>