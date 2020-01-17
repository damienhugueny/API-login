<?php 





//calcul de la différence entre 2 dates
function calculDate($dateFerrure){
    $datetime2 = date_create(date("Y-m-d")); 
    $datetime1 = date_create($dateFerrure); 
    $interval = date_diff($datetime1, $datetime2);
    return $interval->format('%R%a');   
}

//floor retourne un nombre sans virgule
//$ir valeur a mettre en %
//$max corespond a la valeur 100%
function pourcentage($ir,$max){
    $result = ($ir*100)/$max;
    if($result>=100){
    $result=100;
    }
    if($result<=0){
        $result=0;
        }

    return floor($result);
}

function couleur($nb){
    
    if($nb>=40){
        return $couleur="border-color: red";
    }

    if($nb>=25 && $nb<40){
        return $couleur="border-color: orange";
    }
    else{
        return $couleur="border-color: green";
    }

}

// recupere le tableau de la liste des ferrure
function getferrureListe(){
    $database = new Database();
    $pdo = $database->getConnection();
    $sqlferrure = 'SELECT `date`, `Commentaire` FROM `ferrure` WHERE propriétaire = "'.$_SESSION["name"].'" 
    AND cheval ="'.$_GET['id'].'" 
    ORDER BY `date` DESC LIMIT 10';
    $queryResult = $pdo ->query($sqlferrure);
    return $ferrureList = $queryResult ->fetchAll(PDO::FETCH_ASSOC);
}

function getVermifugeUserListe(){
    $database = new Database();
    $pdo = $database->getConnection();
    $sqlferrure = 'SELECT * FROM `vermifuge` WHERE propriétaire = "'.$_SESSION["name"].'" 
    AND cheval ="'.$_GET['id'].'" 
    ORDER BY `date` DESC LIMIT 10';
    $queryResult = $pdo ->query($sqlferrure);
    return $ferrureList = $queryResult ->fetchAll(PDO::FETCH_ASSOC);
}


// retourne la liste des vermifuge
function getVermifugesListe(){
    $database = new Database();
    $pdo = $database->getConnection();
    $sqlferrure = 'SELECT * FROM `ListVermifuge`';
    $queryResult = $pdo ->query($sqlferrure);
    return $VermifugesList = $queryResult ->fetchAll(PDO::FETCH_ASSOC);
}

//retourn le dernier vermifuge $name:$_SESSION["name"] et $chevaux: $chevaux['cheval']
function getVermifugesListelast($name,$chevaux){
    $database = new Database();
    $pdo = $database->getConnection();
    $sql = 'SELECT `date`, `Commentaire`,`typeVermifuge` FROM `vermifuge` WHERE propriétaire = "'.$name.'" 
    AND cheval ="'.$chevaux.'" 
    ORDER BY `date` DESC LIMIT 1';
    $queryResult = $pdo ->query($sql);
    $vermifugeDateList = $queryResult ->fetchAll(PDO::FETCH_ASSOC);
    return $vermifugeDateList= $vermifugeDateList[0];
}


function getChevalUserList($name){
    $database = new Database();
    $pdo = $database->getConnection();
    //lLE NOM DE USERNAME EST DANS $SESSION SUPER GLOBALE
    $sql ='SELECT cheval, created, id FROM chevaux WHERE propriétaire ="'.$name.'"';
    // PDO transmet cette requete a Mysql
    $queryResult = $pdo ->query($sql);
    // on va récupérer les résultats depuis $queryResult
    return $chevauxList = $queryResult ->fetchAll(PDO::FETCH_ASSOC);

}

function getfirstFerrure($name,$cheval){
    $database = new Database();
    $pdo = $database->getConnection();
    //TRIE LA TABLE EN ordre décroissant et affiche la premiere ligne avec LIMIT 1
    $sql = 'SELECT `date`, `Commentaire` FROM `ferrure` WHERE propriétaire = "'.$name.'" 
    AND cheval ="'.$cheval.'" 
    ORDER BY `date` DESC LIMIT 1';
    $queryResult = $pdo ->query($sql);
    return $ferrureList = $queryResult ->fetchAll(PDO::FETCH_ASSOC);
    
}

/*$dateFerrure = "2019-12-01";
$res= calculDate($dateFerrure);
var_dump($res);
$toto =pourcentage($res,55);
var_dump($toto);*/
?>