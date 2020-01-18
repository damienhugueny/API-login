<?php

session_start();

require '../api/config/database.php';
require '../fonction/function.php';

$add = new event();

(!empty($_POST['chevalname']))? $add-> addCheval() : "";
(isset($_POST['removeCheval']))? $add-> removeCheval() : "";
(isset($_POST['addChevalEventChevalType']))? $add-> AddEventCheval(): "";

header('location: ../home.php?user='.$_SESSION['id']);

?>