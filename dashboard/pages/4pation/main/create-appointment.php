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
    <title>Мой Кабинет | Главная</title>
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
                    <a href="create-appointment.php" class="nm-url-link">Записаться на прием</a>
                </ul>
                <ul class="nmu-i" style="margin-top: 24px;">
                    <a href="index.php" class="nm-url-link nmul-i"><i class="fa-solid fa-house fa-lg"></i></a>
                    <a href="create-appointment.php" class="nm-url-link nmul-i"><i class="fa-solid fa-user-doctor fa-lg"></i></a>
                </ul>
            </nav>
        </aside>
        <article>
            <div class="main-info mi-pat-doc">
                <?php

                $doctors = mysqli_query($link, "SELECT * FROM `pation` WHERE idrole = 2");
                $doctors = mysqli_fetch_all($doctors);

                foreach($doctors as $doctor) { ?>
                    <a href="all-doctors.php?id=<?php echo $doctor[0]; ?>" class="adoc-url"><?php echo $doctor[3]; ?> <br><br> <?php echo $doctor[6]; ?></a>
                <?php } ?>
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