<?php
/* Connexion à une base MySQL avec l'invocation de pilote
ou host=localhost */
$dsn = 'mysql:dbname=GALOAP;host=127.0.0.1;charset=UTF8';
$user = 'root';
$password = 'Ereul9Aeng';

try {
    $pdo = new PDO($dsn,
                   $user,
                   $password,
                   array(
                        // Rend les erreurs SQL explicites (message à l'écran)
                         PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
                    )
                );
            
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}


//lLE NOM DE USERNAME EST DANS $SESSION SUPER GLOBALE
$sql ='SELECT cheval, created, id FROM chevaux WHERE propriétaire ="'.$_SESSION["name"].'"';

// PDO transmet cette requete a Mysql
$queryResult = $pdo ->query($sql);
// on va récupérer les résultats depuis $queryResult
$chevauxList = $queryResult ->fetchAll(PDO::FETCH_ASSOC);
//var_dump(session_id());
//$sql ='INSERT INTO ...;';
//$queryResult =$pdo->exec($sql);

//var_dump($_POST['chevalname']);

/*if(!empty($_POST['chevalname'])){
    $sqlinsert = 'INSERT INTO chevaux (propriétaire, cheval)VALUE ("'.$_SESSION["name"].'","'.$_POST["chevalname"].'")';
    $pdo ->query($sqlinsert);
    echo "COUCOU";
   
}*/

