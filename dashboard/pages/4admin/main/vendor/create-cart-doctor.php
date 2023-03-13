<?php

require_once("../../../../../db/db.php");
$idrole = 2;
$identcode = rand(100000, 999999);
$fio = $_POST['fio'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$direct = $_POST['direct'];

mysqli_query($link, "INSERT INTO `pation` (`idrole`, `identcode`, `fio`, `phone`, `email`, `direction`) VALUES ('$idrole', '$identcode', '$fio', '$phone', '$email', '$direct')");

header("Location: ../index.php");

?>