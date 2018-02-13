<?php
/**
 * Created by PhpStorm.
 * User: mathildehenry
 * Date: 08/02/2018
 * Time: 10:45
 */

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

$conn = $bdd->query("INSERT INTO mecano (firstname, lastname, email, password, phone) VALUES ('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['email'] . "', '" . password_hash($_POST['password'], PASSWORD_DEFAULT) . "', '" . $_POST['phone'] . "')");
// use exec() because no results are returned
//echo "New record created successfully";