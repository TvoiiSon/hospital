<?php

require_once("../../../../db/db.php");

session_start();

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
    <title>Мой Кабинет | Принять Пациента</title>
</head>
<body>
    <main>
        <header>
            <div class="company">
                <a href="#!">Lorem</a>
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
                    <a href="accept-pation.php" class="nm-url-link">Принять Пациента</a>
                </ul>
                <ul class="nmu-i" style="margin-top: 24px;">
                    <a href="index.php" class="nm-url-link nmul-i"><i class="fa-solid fa-house fa-lg"></i></a>
                    <a href="create-doctor.php" class="nm-url-link nmul-i"><i class="fa-solid fa-user-doctor fa-lg"></i></a>
                    <a href="create-admin.php" class="nm-url-link nmul-i"><i class="fa-solid fa-hospital-user"></i></a>
                </ul>
            </nav>
        </aside>
        <article>
            <div class="main-info">
                <div class="mi-wrapper">
                    <div class="my-info">
                        <div class="adoc-title">
                            <p>Принять Пациента</p>
                        </div>
                        <form action="vendor/update-profile.php" method="post">
                            <div class="text-field text-field_floating-2">
                                <input class="text-field__input" type="text" id="idcodeticket" name="idcodeticket" placeholder="test">
                                <label class="text-field__label" for="fio">Индивидуальный номер талона</label>
                            </div>
                            <input type="submit" class="btn-save" value="Принять">
                        </form>
                    </div>
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
                <li><a href="accept-pation.php">Принять Пациента</a></li>
            </ul>
        </nav>
    </div>

    <script src="../script/main/humburger.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/61b86703fe.js" crossorigin="anonymous"></script>
</body>
</html>