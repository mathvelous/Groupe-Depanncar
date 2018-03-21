<?php

$servername = "mysql-mathvelous.alwaysdata.net";
$username = "155185_depanncar";
$password = "totolola42";
$dbname = "mathvelous_depanncar";

try {
    //for windows
    //$db = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, '');
    //for mac
    $bdd = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
} catch(Exception $e) {
    die("Error: ". $e);
}
$save = $bdd->query("SELECT * FROM mecano WHERE email LIKE '". $_POST['email']."'");

$data = $save->fetch(PDO::FETCH_OBJ);

if(empty($data)){
    return "";
}

if (password_verify($_POST['password'], $data->password)) {
    echo $_POST['email'];
}

return "";