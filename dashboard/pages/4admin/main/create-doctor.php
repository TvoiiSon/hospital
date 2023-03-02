<?php

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
    <title>Мой Кабинет | Создание Доктора</title>
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
                    <a href="create-doctor.php" class="nm-url-link">Добавить Врача</a>
                    <a href="create-admin.php" class="nm-url-link">Добавить Администратора</a>
                </ul>
                <ul class="nmu-i" style="margin-top: 24px;">
                    <a href="index.php" class="nm-url-link nmul-i"><i class="fa-solid fa-house fa-lg"></i></a>
                    <a href="create-doctor.php" class="nm-url-link nmul-i"><i class="fa-solid fa-user-doctor fa-lg"></i></a>
                    <a href="create-admin.php" class="nm-url-link nmul-i"><i class="fa-solid fa-hospital-user"></i></a>
                </ul>
                <div class="mn-logout">
                    <i class="fa-solid fa-arrow-right-from-bracket fa-lg" style="color: #84828A; cursor: pointer;"></i>
                    <a href="#!">Выйти</a>
                </div>
            </nav>
        </aside>
        <article>
            <div class="main-info">
                <div class="mi-wrapper">
                    <div class="my-info">
                        <div class="adoc-title">
                            <p>ДОБАВИТЬ ВРАЧА</p>
                        </div>
                        <form action="vendor/create-cart-doctor.php" method="post">
                            <div class="text-field text-field_floating-2">
                                <input class="text-field__input" type="text" id="fio" name="fio" placeholder="test">
                                <label class="text-field__label" for="fio">ФИО</label>
                            </div>
                            <div class="text-field text-field_floating-2">
                                <input class="text-field__input" type="text" id="phone" name="phone" placeholder="test">
                                <label class="text-field__label" for="phone">Телефон</label>
                            </div>
                            <div class="text-field text-field_floating-2">
                                <input class="text-field__input" type="text" id="email" name="email" placeholder="test">
                                <label class="text-field__label" for="email">E-Mail</label>
                            </div>
                            <div class="text-field text-field_floating-2">
                                <input class="text-field__input" type="text" id="direct" name="direct" placeholder="test">
                                <label class="text-field__label" for="direct">Направление</label>
                            </div>
                            <input type="submit" class="btn-save" value="Добавить">
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
                <li><a href="create-doctor.php">Добавить Врача</a></li>
                <li><a href="create-admin.php">Добавить Администратора</a></li>
                <li><a href="#!">Выйти</a></li>
            </ul>
        </nav>
    </div>

    <script src="../script/main/humburger.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/61b86703fe.js" crossorigin="anonymous"></script>
</body>
</html>