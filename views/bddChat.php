<?php
/**
 * Created by PhpStorm.
 * User: mathildehenry
 * Date: 27/03/2018
 * Time: 11:15
 */

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

    if(!empty($_POST['message'])){ // si la variable n'est pas vides

        $conn = $bdd->query("INSERT INTO chat (message) VALUES ('" . $_POST['message'] . "')");

    }

