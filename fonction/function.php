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
    
    if($nb>=75){
        return $couleur="border-color: red";
    }

    if($nb>=50){
        return $couleur="border-color: orange";
    }
    else{
        return $couleur="border-color: green";
    }

}

// recupere le tableau de la liste des ferrure
function getferrureListe(){
    include '../api/config/databaseChevaux.php' ;
    $sqlferrure = 'SELECT `date`, `Commentaire` FROM `ferrure` WHERE propriétaire = "'.$_SESSION["name"].'" 
    AND cheval ="'.$_GET['id'].'" 
    ORDER BY `date` DESC LIMIT 10';
    $queryResult = $pdo ->query($sqlferrure);
    return $ferrureList = $queryResult ->fetchAll(PDO::FETCH_ASSOC);
}

function getVermifugesListe(){
    include '../api/config/databaseChevaux.php' ;
    $sqlferrure = 'SELECT * FROM `ListVermifuge`';
    $queryResult = $pdo ->query($sqlferrure);
    return $VermifugesList = $queryResult ->fetchAll(PDO::FETCH_ASSOC);
}


/*$dateFerrure = "2019-12-01";
$res= calculDate($dateFerrure);
var_dump($res);
$toto =pourcentage($res,55);
var_dump($toto);*/
?>