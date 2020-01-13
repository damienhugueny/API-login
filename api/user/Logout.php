<?php 

session_start();
//Detruit la variable session
session_unset();
//Detruit la session
session_destroy();
//redirection
header('location: ../../index.php')

?>
