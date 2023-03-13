<?php

require_once("../../../../db/db.php");

session_start();
if(!isset($_COOKIE["id"])) {
    $_SESSION["errMes"] = 'Вы не авторизованы, авторизуйтесь!';
    header("Location: ../../../../login/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
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
            <div class="main-info">
                <div class="mi-wrapper">
                    <div class="my-info-2">
                        <div class="adoc-title">
                            <p>МОИ ДАННЫЕ</p>
                        </div>
                        <?php

                        $idadm = $_SESSION['iduser'];
                        $myinfo = mysqli_query($link, "SELECT * FROM `pation` WHERE id = '$idadm'");
                        $myinfo = mysqli_fetch_assoc($myinfo);

                        ?>
                        <form action="vendor/update-profile.php" method="post">
                            <input type="hidden" name="id" value='<?php echo $myinfo['id']; ?>'>
                            <div class="text-field text-field_floating-2">
                                <input class="text-field__input" type="text" id="fio" name="fio" placeholder="test" value='<?php echo $myinfo['fio']; ?>'>
                                <label class="text-field__label" for="fio">ФИО</label>
                            </div>
                            <div class="text-field text-field_floating-2">
                                <input class="text-field__input" type="text" id="phone" name="phone" placeholder="test" value='<?php echo $myinfo['phone']; ?>'>
                                <label class="text-field__label" for="phone">Телефон</label>
                            </div>
                            <div class="text-field text-field_floating-2">
                                <input class="text-field__input" type="text" id="email" name="email" placeholder="test" value='<?php echo $myinfo['email']; ?>'>
                                <label class="text-field__label" for="email">E-Mail</label>
                            </div>
                            <input type="submit" class="btn-save" value="Сохранить">
                        </form>
                    </div>
                    <div class="visiting">
                        <div class="adoc-title">
                            <p>ОЖИДАЮТ ПОСЕЩЕНИЯ</p>
                        </div>
                        <?php
                        $visitappoint = mysqli_query($link, "SELECT * FROM `appointment` WHERE idpation = '$idadm' AND free = '1' UNION SELECT * FROM `appointment-2` WHERE idpation = '$idadm' AND free = '1' UNION SELECT * FROM `appointment-3` WHERE idpation = '$idadm' AND free = '1' UNION SELECT * FROM `appointment-4` WHERE idpation = '$idadm' AND free = '1' UNION SELECT * FROM `appointment-5` WHERE idpation = '$idadm' AND free = '1' UNION SELECT * FROM `appointment-6` WHERE idpation = '$idadm' AND free = '1' UNION SELECT * FROM `appointment-7` WHERE idpation = '$idadm' AND free = '1' UNION SELECT * FROM `appointment-8` WHERE idpation = '$idadm' AND free = '1' UNION SELECT * FROM `appointment-9` WHERE idpation = '$idadm' AND free = '1' UNION SELECT * FROM `appointment-10` WHERE idpation = '$idadm' AND free = '1'");
                        $visitappoint = mysqli_fetch_all($visitappoint);
                        ?>
                        <table class="visit-wrapper">
                            <tr>
                                <th>Инд. №</th>
                                <th>ФИО Доктора</th>
                                <th>ФИО Пациента</th>
                                <th>Направление доктора</th>
                                <th>Время Приема</th>
                            </tr>
                            <?php foreach($visitappoint as $vt) { ?>
                                <tr>
                                    <td><?php echo $vt[1]; ?></td>
                                    <td><?php echo $vt[2]; ?></td>
                                    <td><?php echo $vt[3]; ?></td>
                                    <td><?php echo $vt[5]; ?></td>
                                    <td><?php echo $vt[7]; ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="visiting">
                        <div class="adoc-title">
                            <p>УЖЕ ПОСЕЩЕННЫЕ</p>
                        </div>
                        <?php
                        $visitedappoint = mysqli_query($link, "SELECT * FROM `appointment` WHERE idpation = '$idadm' AND free = '0' UNION SELECT * FROM `appointment-2` WHERE idpation = '$idadm' AND free = '0' UNION SELECT * FROM `appointment-3` WHERE idpation = '$idadm' AND free = '0' UNION SELECT * FROM `appointment-4` WHERE idpation = '$idadm' AND free = '0' UNION SELECT * FROM `appointment-5` WHERE idpation = '$idadm' AND free = '0' UNION SELECT * FROM `appointment-6` WHERE idpation = '$idadm' AND free = '0' UNION SELECT * FROM `appointment-7` WHERE idpation = '$idadm' AND free = '0' UNION SELECT * FROM `appointment-8` WHERE idpation = '$idadm' AND free = '0' UNION SELECT * FROM `appointment-9` WHERE idpation = '$idadm' AND free = '0' UNION SELECT * FROM `appointment-10` WHERE idpation = '$idadm' AND free = '0'");
                        $visitedappoint = mysqli_fetch_all($visitedappoint);
                        ?>
                        <table class="visit-wrapper">
                            <tr>
                                <th>Инд. №</th>
                                <th>ФИО Доктора</th>
                                <th>ФИО Пациента</th>
                                <th>Направление доктора</th>
                                <th>Время Приема</th>
                            </tr>
                            <?php foreach($visitedappoint as $vted) { ?>
                                <tr>
                                    <td><?php echo $vted[1]; ?></td>
                                    <td><?php echo $vted[2]; ?></td>
                                    <td><?php echo $vted[3]; ?></td>
                                    <td><?php echo $vted[5]; ?></td>
                                    <td><?php echo $vted[7]; ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </article>
    </main>

    <div class="mobile-menu">
        <div class="header-humburger header-humburger-close">
            <img src="../img/humburger.png" id="closeMobileNav">
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