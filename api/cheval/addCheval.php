<?php
// on ajoute le cheval
//TODO FAIRE UNE VERIFICATION ICI POUR QUE LE CHEVAL N EXISTE PAS POUR L USER
session_start();
require '../config/databaseChevaux.php';
if(!empty($_POST['chevalname'])){
    $sqlinsert = 'INSERT INTO chevaux (propriétaire, cheval)VALUE ("'.$_SESSION["name"].'","'.$_POST["chevalname"].'")';
    $pdo ->query($sqlinsert);
}

header('location: ../../home.php?user='.$_SESSION['id']);
?>