<?php

require_once("../../../../../db/db.php");

$lockid = $_POST['id'];
$lockstatus = 1;
mysqli_query($link, "UPDATE `pation` SET `locking` = '$lockstatus' WHERE `pation`.`id` = '$lockid'");

header("Location: ../index.php");

?>