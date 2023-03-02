<?php

require_once("../../../../../db/db.php");
$idrole = 1;
$identcode = rand(100000, 999999);
$fio = $_POST['fio'];
$email = $_POST['email'];
$phone = $_POST['phone'];

mysqli_query($link, "INSERT INTO `pation` (`idrole`, `identcode`, `fio`, `email`, `phone`) VALUES ('$idrole', '$identcode', '$fio', '$email', '$phone')");

header("Location: ../index.php");
?>