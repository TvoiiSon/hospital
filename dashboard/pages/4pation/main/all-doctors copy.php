<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require_once("../../../../db/db.php");
session_start();
$user_id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/main/style.css">
    <link rel="stylesheet" href="../style/main/reset.css">
    <link rel="stylesheet" href="../style/main/media.css">
    <title>Мой Кабинет | Главная</title>
</head>
<body>
    <main>
        <header>
            <div class="company">
                <a href="index.php">Lorem</a>
            </div>
            <div class="logo"></div>
            <button class="header-humburger">
                <img src="../img/humburger.png">
            </button>
        </header>
        <aside>
            <nav class="nav-menu">
                <p class="nm-panel">Панель управления</p>
                <ul class="nm-url" style="margin-top: 24px;">
                    <a href="index.php" class="nm-url-link">Консоль</a>
                    <a href="create-appointment.php" class="nm-url-link">Записаться на прием</a>
                </ul>
                <ul class="nmu-i" style="margin-top: 24px;">
                    <a href="index.php" class="nm-url-link nmul-i"><i class="fa-solid fa-house fa-lg"></i></a>
                    <a href="create-appointment.php" class="nm-url-link nmul-i"><i class="fa-solid fa-user-doctor fa-lg"></i></a>
                </ul>
            </nav>
        </aside>
        <article>
            <div class="main-info" style="position: relative;">
                <?php
                $infdoc = mysqli_query($link, "SELECT * FROM `pation` WHERE idrole = 2 AND id = '$user_id'");
                $infdoc = mysqli_fetch_assoc($infdoc);
                $infdocid = $infdoc['id'];
                ?>
                <p>Запись к врачу <strong><?php echo $infdoc["direction"]; ?></strong> - <?php echo $infdoc["fio"]; ?></p>
                <div class="mi-date">
                    <div class="mid-day">
                        <form action="vendor/push-appointment.php" method="post" class="timegrid">
                            <input type="hidden" name="id" value='<?php echo $infdoc['id']; ?>'>
                            <?php
                                $timeticket = mysqli_query($link, "SELECT * FROM `timework` ORDER BY id");
                                $timeticket = mysqli_fetch_all($timeticket);

                                $freetime = mysqli_query($link, "SELECT * FROM `appointment` ORDER BY id");
                                $freetime = mysqli_fetch_assoc($freetime);
                                $today = date("Y.m.d");
                                $datedayago = (new DateTime('+1 day'))->format('Y.m.d');
                                $datenow = date('Y-m-d');

                                //$test = mysqli_query($link, "SELECT * FROM `timework` LEFT JOIN `appointment` ON `appointment`.`timeticket`=`timework`.`time` WHERE `appointment`.`timeticket` IS NULL ORDER BY `timework`.`id`");
                                //$test = mysqli_query($link, "SELECT * FROM timework WHERE CONCAT(`time`) IN (SELECT CONCAT(`time`) FROM appointment WHERE `appointment`.`date` = '$datenow')");
                                $test = mysqli_query($link, "SELECT * FROM `timework` LEFT JOIN `appointment` ON `appointment`.`timeticket`=`timework`.`time` WHERE `appointment`.`date` = '$datenow' AND `appointment`.`iddoctor` = '$infdocid' ORDER BY `timework`.`id`");
                                $test = mysqli_fetch_all($test);

                                foreach($test as $tst) { ?>
                                    <input type="submit" name="time" class="btn-save" value="<?php echo $tst[1]; ?>">
                                <?php }

                                //$test = mysqli_query($link, "SELECT * FROM `timework` LEFT JOIN `appointment` ON `appointment`.`time`=`timework`.`time` WHERE `appointment`.`time` IS NULL");
                                //$test = mysqli_query($link, "SELECT * FROM timework WHERE CONCAT(`time`) IN (SELECT CONCAT(`time`) FROM appointment) AND `appointment`.`date` != '$datedayago'");
                                
                                //$test = mysqli_query($link, "SELECT * FROM `timework` LEFT JOIN `appointment` ON `appointment`.`timeticket`=`timework`.`time` WHERE `appointment`.`date` = '$datenow' AND `appointment`.`iddoctor` = '$infdocid' ORDER BY `timework`.`id`");
                                //$test = mysqli_query($link, "SELECT * FROM `timework` LEFT JOIN `appointment` ON `appointment`.`timeticket`=`timework`.`time` WHERE `appointment`.`day`=`timework`.`today` AND `appointment`.`date` != '$datenow' AND `appointment`.`date` != '$datenow' AND `appointment`.`iddoctor` = '$infdocid' ORDER BY `timework`.`id`");
                                ?>

                                
                        </form>
                        <?php
                        if(empty($test)) { ?>
                            <p><?php echo "На сегодня запись к врачам завершена."; ?></p>
                            <p><?php echo "Обратитесь за талоном завтра!"; ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="today">
                    <p>
                        <?php
                            echo $today;
                        ?>
                    </p>
                </div>
            </div>
        </article>
    </main>

    <div class="mobile-menu">
        <div class="header-humburger header-humburger-close">
            <img src="img/humburger.png" id="closeMobileNav">
        </div>
        <nav class="mobile-nav">
            <ul>
                <li><a href="index.php">Консоль</a></li>
                <li><a href="create-appointment.php">Записаться на прием</a></li>
            </ul>
        </nav>
    </div>

    <script src="../script/main/humburger.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/61b86703fe.js" crossorigin="anonymous"></script>
</body>
</html>