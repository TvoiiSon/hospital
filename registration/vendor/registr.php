<?php

require_once("../../db/db.php");
$usermail = $_POST['email'];
$userphone = $_POST['phone'];
$identcode = rand(100000, 999999);
$idrole = 3;

$usermail = htmlspecialchars($usermail);
$usermail = urldecode($usermail);
$usermail = trim($usermail);

$userphone = htmlspecialchars($userphone);
$userphone = urldecode($userphone);
$userphone = trim($userphone);

mysqli_query($link, "INSERT INTO `pation` (`idrole`, `identcode`,`phone`, `email`) VALUES ('$idrole', '$identcode', '$userphone', '$usermail')");

header("Location: ../../login/index.php");

?>