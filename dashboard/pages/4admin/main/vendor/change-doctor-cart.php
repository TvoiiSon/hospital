<?php

require_once("../../../../../db/db.php");

$id = $_POST['id'];
$fio = $_POST['fio'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$direct = $_POST['direct'];

mysqli_query($link, "UPDATE `pation` SET `fio` = '$fio', `phone` = '$phone', `email` = '$email', `direction` = '$direct' WHERE `pation`.`id` = '$id'");

header("Location: ../index.php");

?>