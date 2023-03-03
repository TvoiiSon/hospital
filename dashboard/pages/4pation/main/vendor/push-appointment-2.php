<?php

require_once("../../../../../db/db.php");
session_start();
$doc_id = $_POST['id'];
print_r($_POST);
$idtime = $_POST['time'];
echo $idtime;

$doc = mysqli_query($link, "SELECT * FROM `pation` WHERE `id` = '$doc_id'");
$doc = mysqli_fetch_assoc($doc);


$test = 1;
$today = getdate();
if($today["weekday"] == "Friday") {
    $test = 3;
}

$identcode = rand(10000000, 99999999);

$userid = $_SESSION['iduser'];
$docidcl = $doc['id'];
$datedayago = (new DateTime("+$test day"))->format('Y.m.d');
$free = 1;

// $query = "INSERT INTO `appointment` (`identcode`, `iddoctor`, `idpation`, `date`, `timeticket`, `free`) VALUES ('$identcode', '$docidcl', '$userid', '$datedayago', '$timeselect', '$free')";
// $asd = mysqli_query($link, $query) or trigger_error(mysqli_error().$query);
//header("Location: ../index.php");
?>