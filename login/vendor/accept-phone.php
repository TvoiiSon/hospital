<?php
require_once("../../db/db.php");

$userphone = $_POST['phone'];
$identcode = $_POST['identcode'];

$sel_phone = mysqli_query($link, "SELECT * FROM `pation` WHERE `identcode` = $identcode AND `phone` = $userphone");
$post = mysqli_fetch_array($sel_phone);

if($post == true) {
    if($post["idrole"] == "1") {
        header("Location: ../../dashboard/pages/4admin/main/index.php");
    } elseif($post["idrole"] == "2") {
        header("Location: ../../dashboard/pages/4doctor/index.php");
    } elseif($post["idrole"] == "3") {
        header("Location: ../../dashboard/pages/4pation/main/index.php");
    }
} else {
    echo "err";
}

?>