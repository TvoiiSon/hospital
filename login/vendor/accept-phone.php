<?php

session_start();
require_once("../../db/db.php");

$userphone = $_POST['phone'];
$identcode = $_POST['identcode'];
$err = false;

if($userphone == "" && $identcode == "") {
    $_SESSION["errMes"] = 'Заполните Форму!';
    $err = true;
    header("Location: ../index.php");
} else if($userphone == ""){
    $_SESSION["errMes"] = 'Укажите номер телефона!';
    $err = true;
    header("Location: ../index.php");
} else if ($identcode == "") {
    $_SESSION["errMes"] = 'Укажите индивидуальный код!';
    $err = true;
    header("Location: ../index.php");
}

if(!$err) {
    $sel_ident = mysqli_query($link, "SELECT `identcode` FROM `pation` WHERE `identcode` = $identcode");
    $sel_phone = mysqli_query($link, "SELECT `phone` FROM `pation` WHERE `phone` = $userphone");
    $post2 = mysqli_fetch_assoc($sel_ident);
    $post3 = mysqli_fetch_assoc($sel_phone);

    if(empty($post2)) {
        $_SESSION["errMes"] = 'Такого Индивидуального кода нет!';
        $err = true;
        header("Location: ../index.php");
    } else if(empty($post3)) {
        $_SESSION["errMes"] = 'Такого Телефона нет!';
        $err = true;
        header("Location: ../index.php");
    }
    if(!$err) {
        $sel_all = mysqli_query($link, "SELECT * FROM `pation` WHERE `identcode` = $identcode AND `phone` = $userphone ORDER BY `identcode` = $identcode");
        $post4 = mysqli_fetch_array($sel_all);

        $_SESSION['iduser'] = $post4["id"];
        $idus = $post4["id"];
        if($post4["locking"] == 0){
            if($post4) {
                if($post4["idrole"] == "1") {
                    setcookie("id", $idus, time()+23760, "/");
                    header("Location: ../../dashboard/pages/4admin/main/index.php");
                } elseif($post4["idrole"] == "2") {
                    setcookie("id", $idus, time()+23760, "/");
                    header("Location: ../../dashboard/pages/4doctor/main/index.php");
                } elseif($post4["idrole"] == "3") {
                    setcookie("id", $idus, time()+23760, "/");
                    header("Location: ../../dashboard/pages/4pation/main/index.php");
                }
            }
        } else {
            $_SESSION["errMes"] = 'Вы Заблокированны в этой системе';
            $err = true;
            header("Location: ../index.php");
        }
    }
    
}

?>