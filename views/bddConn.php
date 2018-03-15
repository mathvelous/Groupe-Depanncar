<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "depanncar";

try {
    //for windows
    //$db = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, '');
    //for mac
    $bdd = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
} catch(Exception $e) {
    die("Error: ". $e);
}
$save = $bdd->query("SELECT * FROM client WHERE email LIKE '". $_POST['email']."'");

$data = $save->fetch(PDO::FETCH_OBJ);

if (password_verify($_POST['password'], $data->password)) {
    echo 'Le mot de passe est valide !';
} else {
    echo 'Le mot de passe est invalide.';
}