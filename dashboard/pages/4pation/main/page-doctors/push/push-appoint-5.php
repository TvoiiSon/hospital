<?php

require_once("../../../../../../db/db.php");
session_start();
$doc_id = $_POST['id'];
$idtime = $_POST['time'];
$userid = $_SESSION['iduser'];

$doc = mysqli_query($link, "SELECT * FROM `pation` WHERE `id` = '$doc_id'");
$doc = mysqli_fetch_assoc($doc);
$pat = mysqli_query($link, "SELECT * FROM `pation` WHERE `id` = '$userid'");
$pat = mysqli_fetch_assoc($pat);

$test = 1;
$today = getdate();
if($today["weekday"] == "Friday") {
    $test = 3;
}

$identcode = rand(10000000, 99999999);

$patidcl = $pat['fio'];
$docidcl = $doc['fio'];
$docdircl = $doc['direction'];
$datedayago = (new DateTime("+$test day"))->format('Y.m.d');
$free = 1;

$query = "INSERT INTO `appointment-5` (`identcode`, `fiodoctor`, `fiopation`, `idpation`, `direction`, `date`, `timeticket`, `free`) VALUES ('$identcode', '$docidcl', '$patidcl', '$userid', '$docdircl', '$datedayago', '$idtime', '$free')";
$asd = mysqli_query($link, $query) or trigger_error(mysqli_error().$query);
header("Location: ../../index.php");
?>