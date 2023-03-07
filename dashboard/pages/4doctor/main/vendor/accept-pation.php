<?php

require_once("../../../../../db/db.php");
session_start();

$userid = $_SESSION['iduser'];
$code = $_POST["idcodeticket"];

echo $code;

$sel_code = mysqli_query($link, "SELECT * FROM `appointment` WHERE `identcode` = '$code' UNION SELECT * FROM `appointment-2` WHERE `identcode` = '$code' UNION SELECT * FROM `appointment-3` WHERE `identcode` = '$code' UNION SELECT * FROM `appointment-4` WHERE `identcode` = '$code' UNION SELECT * FROM `appointment-5` WHERE `identcode` = '$code' UNION SELECT * FROM `appointment-6` WHERE `identcode` = '$code' UNION SELECT * FROM `appointment-7` WHERE `identcode` = '$code' UNION SELECT * FROM `appointment-8` WHERE `identcode` = '$code' UNION SELECT * FROM `appointment-9` WHERE `identcode` = '$code' UNION SELECT * FROM `appointment-10` WHERE `identcode` = '$code'");
$sel_code = mysqli_fetch_assoc($sel_code);

$sel_date = $sel_code['date'];
$sel_idpat = $sel_code["idpation"];

$today = date("Y-m-d");
if($sel_date != $today) {
    $update_appoint = mysqli_query($link, "UPDATE `appointment` SET `free` = 0 WHERE `identcode`= '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-2` SET `free` = 0 WHERE `identcode` = '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-3` SET `free` = 0 WHERE `identcode` = '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-4` SET `free` = 0 WHERE `identcode` = '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-5` SET `free` = 0 WHERE `identcode` = '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-6` SET `free` = 0 WHERE `identcode` = '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-7` SET `free` = 0 WHERE `identcode` = '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-8` SET `free` = 0 WHERE `identcode` = '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-9` SET `free` = 0 WHERE `identcode` = '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-10` SET `free` = 0 WHERE `identcode` = '$code'");
    header("Location: ../index.php");
} else {
    $push_appoint = mysqli_query($link, "INSERT INTO `accept-pation`(`iddoctor`, `idpation`, `ticket`) VALUES ('$userid','$sel_idpat', '$code')");
    $update_appoint = mysqli_query($link, "UPDATE `appointment` SET `free` = 0 WHERE `identcode`= '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-2` SET `free` = 0 WHERE `identcode` = '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-3` SET `free` = 0 WHERE `identcode` = '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-4` SET `free` = 0 WHERE `identcode` = '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-5` SET `free` = 0 WHERE `identcode` = '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-6` SET `free` = 0 WHERE `identcode` = '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-7` SET `free` = 0 WHERE `identcode` = '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-8` SET `free` = 0 WHERE `identcode` = '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-9` SET `free` = 0 WHERE `identcode` = '$code'");
    $update_appoint = mysqli_query($link, "UPDATE `appointment-10` SET `free` = 0 WHERE `identcode` = '$code'");
    header("Location: ../index.php");
}

?>