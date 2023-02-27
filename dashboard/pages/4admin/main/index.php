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
    <title>Мой Кабинет</title>
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
                    <a href="/index.html" class="nm-url-link">Консоль</a>
                    <a href="/page-create-doc.html" class="nm-url-link">Добавить Врача</a>
                    <a href="/page-create-pation.html" class="nm-url-link">Добавить Пациента</a>
                    <a href="/page-accept-pation.html" class="nm-url-link">Принять Пациента</a>
                </ul>
                <ul class="nmu-i" style="margin-top: 24px;">
                    <a href="/index.html" class="nm-url-link nmul-i"><i class="fa-solid fa-house fa-lg"></i></a>
                    <a href="/page-create-doc.html" class="nm-url-link nmul-i"><i class="fa-solid fa-user-doctor fa-lg"></i></a>
                    <a href="/page-create-pation.html" class="nm-url-link nmul-i"><i class="fa-solid fa-hospital-user"></i></a>
                    <a href="/page-accept-pation.html" class="nm-url-link nmul-i"><i class="fa-solid fa-clipboard-check"></i></a>
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
                    <div class="all-doctors">
                        <div class="adoc-title">
                            <p>ВСЕ ВРАЧИ</p>
                        </div>
                        <div class="adoc-links">
                            <a href="!#" class="adoc-url">Пупкин Василий Журенкович</a>
                            <a href="!#" class="adoc-url">Пупкин Василий Журенкович</a>
                            <a href="!#" class="adoc-url">Пупкин Василий Журенкович</a>
                            <a href="!#" class="adoc-url">Пупкин Василий Журенкович</a>
                            <a href="!#" class="adoc-url">Пупкин Василий Журенкович</a>
                            <a href="!#" class="adoc-url">Пупкин Василий Журенкович</a>
                            <a href="!#" class="adoc-url">Пупкин Василий Журенкович</a>
                        </div>
                        <div class="adoc-btn">
                            <a href="/all-doctors.html">Посмотреть все</a>
                        </div>
                    </div>
                    <div class="all-direction">
                        <div class="adoc-title">
                            <p>ВСЕ НАПРАВЛЕНИЯ</p>
                        </div>
                        <div class="adir-list">
                            <p>Терапевт</p>
                            <p>Терапевт</p>
                            <p>Терапевт</p>
                            <p>Терапевт</p>
                            <p>Терапевт</p>
                            <p>Терапевт</p>
                        </div>
                        <div class="adoc-btn">
                            <a href="!#">Посмотреть все</a>
                        </div>
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
                <li><a href="/index.html">Консоль</a></li>
                <li><a href="/page-create-doc.html">Добавить Врача</a></li>
                <li><a href="/page-accept-pation.html">Принять Пациента</a></li>
                <li><a href="#!">Выйти</a></li>
            </ul>
        </nav>
    </div>

    <script src="../script/main/humburger.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/61b86703fe.js" crossorigin="anonymous"></script>
</body>
</html>