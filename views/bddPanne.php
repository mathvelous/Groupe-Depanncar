<?php
/**
 * Created by PhpStorm.
 * User: mathildehenry
 * Date: 08/02/2018
 * Time: 10:45
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
    print_r($_POST);
    $conn = $bdd->query("INSERT INTO panne (step1, step2, step3, more, car, year, email) VALUES ('" . $_POST['step1'] . "', '" . $_POST['step2'] . "', '" . $_POST['step3'] . "', '" . $_POST['more'] . "', '" . $_POST['car'] . "', '" . $_POST['year'] . "', '" .$_POST['mail'] . "')");
    // use exec() because no results are returned
    //echo "New record created successfully";



