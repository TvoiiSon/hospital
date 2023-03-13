<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require_once("../../../../../db/db.php");
session_start();
$user_id = $_SESSION['iduser'];
if(!isset($_COOKIE["id"])) {
    $_SESSION["errMes"] = 'Вы не авторизованы, авторизуйтесь!';
    header("Location: ../../../../login/index.php");
}
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
    <link rel="stylesheet" href="../../style/main/style.css">
    <link rel="stylesheet" href="../../style/main/reset.css">
    <link rel="stylesheet" href="../../style/main/media.css">
    <title>Мой Кабинет | Все Доктора</title>
</head>
<body>
    <main>
        <header>
            <div class="company">
                <a href="../index.php">Lorem</a>
            </div>
            <div class="logo"></div>
            <button class="header-humburger">
                <img src="../../img/humburger.png">
            </button>
        </header>
        <aside>
            <nav class="nav-menu">
                <p class="nm-panel">Панель управления</p>
                <ul class="nm-url" style="margin-top: 24px;">
                    <a href="../index.php" class="nm-url-link">Консоль</a>
                    <a href="../create-appointment.php" class="nm-url-link">Записаться на прием</a>
                </ul>
                <ul class="nmu-i" style="margin-top: 24px;">
                    <a href="../index.php" class="nm-url-link nmul-i"><i class="fa-solid fa-house fa-lg"></i></a>
                    <a href="../create-appointment.php" class="nm-url-link nmul-i"><i class="fa-solid fa-user-doctor fa-lg"></i></a>
                </ul>
            </nav>
        </aside>
        <article>
            <div class="main-info" style="position: relative;">
                <p>Запись к врачу <strong>Хирург</strong> - Милай Алексей Николаевич</p>
                <div class="mi-date">
                    <div class="mid-day">
                        <form action="push/push-appoint-3.php" method="post" class="timegrid">
                            <input type="hidden" name="id" value='7'>
                            <?php
                                $freedate = mysqli_query($link, "SELECT `date` FROM `appointment` ORDER BY id DESC");
                                $freedate = mysqli_fetch_assoc($freedate);
                                $today = date("Y.m.d");
                                $datenow = date('Y-m-d');

                                if($freedate = $datenow) {
                                    $test = mysqli_query($link, "SELECT * FROM `timework-3` LEFT JOIN `appointment-3` ON `appointment-3`.`timeticket`=`timework-3`.`time` WHERE `appointment-3`.`timeticket` IS NULL");
                                    $test = mysqli_fetch_all($test);

                                    foreach($test as $tst) { ?>
                                        <input type="submit" name="time" class="btn-save" value="<?php echo $tst[1]; ?>">
                                    <?php }
                                }
                                
                                ?>
                        </form>
                        <?php
                        if(empty($test)) { ?>
                            <p><?php echo "Запись на прием прекращена!" ?></p>
                            <p><?php echo "Приходите и записывайтесь завтра" ?></p>
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
            <img src="../../img/humburger.png" id="closeMobileNav">
        </div>
        <nav class="mobile-nav">
            <ul>
                <li><a href="../index.php">Консоль</a></li>
                <li><a href="../create-appointment.php">Записаться на прием</a></li>
            </ul>
        </nav>
    </div>

    <script src="../../script/main/humburger.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/61b86703fe.js" crossorigin="anonymous"></script>
</body>
</html>