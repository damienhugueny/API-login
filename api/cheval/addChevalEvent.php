<?php
// on ajoute le cheval
//TODO FAIRE UNE VERIFICATION ICI POUR QUE LE CHEVAL N EXISTE PAS POUR L USER
session_start();
require '../config/database.php';
require '../../fonction/function.php';

$database = new Database();
$pdo = $database->getConnection();

if($_POST['addChevalEventChevalType']== "ferrure" || $_POST['addChevalEventChevalType']== "vermifuge"){
   
    if($_POST['addChevalEventChevalType']== "ferrure"){
        $sqlinsert = 'INSERT INTO ferrure (propriétaire, cheval, `date`, Commentaire)
        VALUE ("'.$_SESSION["name"].'","'.$_POST["addChevalEventCheval"].'",
        "'.$_POST["addChevalEventChevalDate"].'","'.$_POST["addChevalEventChevalCom"].'")';
        $pdo ->query($sqlinsert);
    }
    
    if($_POST['addChevalEventChevalType']== "vermifuge"){
        $sqlinsert = 'INSERT INTO vermifuge (propriétaire, cheval, typeVermifuge,`date`, Commentaire)
        VALUE ("'.$_SESSION["name"].'","'.$_POST["addChevalEventCheval"].'","'.$_POST["addChevalEventChevalTypeVermifuge"].'",
        "'.$_POST["addChevalEventChevalDate"].'","'.$_POST["addChevalEventChevalCom"].'")';
        $pdo ->query($sqlinsert);
    }
    
}

header('location: ../../home.php?user='.$_SESSION['id']);
?>