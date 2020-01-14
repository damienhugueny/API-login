<?php
// on ajoute le cheval
//TODO FAIRE UNE VERIFICATION ICI POUR QUE LE CHEVAL N EXISTE PAS POUR L USER
session_start();
require '../config/databaseChevaux.php';
if(!empty($_POST['addChevalEventCheval'])){
    $sqlinsert = 'INSERT INTO ferrure (propriétaire, cheval, `date`, Commentaire)
    VALUE ("'.$_SESSION["name"].'","'.$_POST["addChevalEventCheval"].'",
    "'.$_POST["addChevalEventChevalDate"].'","'.$_POST["addChevalEventChevalCom"].'")';
    $pdo ->query($sqlinsert);
}

header('location: ../../home.php?user='.$_SESSION['id']);
?>