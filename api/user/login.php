<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);
// set ID property of user to be edited
$user->username = isset($_POST['username']) ? $_POST['username'] : die();
$user->password = isset($_POST['password']) ? $_POST['password'] : die();
// read the details of user to be edited
$stmt = $user->login();
if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Login!",
        "id" => $row['id'],
        "username" => $row['username']
    );

    
    //REDIRECTION VERS PAGE PROTEGER
    session_start();
    session_regenerate_id();
    $_SESSION['id']=session_id();
    $_SESSION["name"]=$row['username'];
    header('Location: ../../home.php?user='.session_id());
  
 
    
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Invalid Username or Password!",
    );
    header('Location: ../../index.php');
    exit();
}

var_dump($_SESSION["name"]);

// make it json format
print_r(json_encode($user_arr));
?>