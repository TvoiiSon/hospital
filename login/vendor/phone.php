<?php
require_once("../../db/db.php");


?>

<!DOCTYPE html>
<html>
<head>
	<title>Авторизация</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
	<div class="container">
		<div class="login-content">
			<form action="accept-phone.php" method="post">
				<img src="../img/avatar.svg">
				<h2 class="title">АВТОРИЗАЦИЯ</h2>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Ваш Номер Телефон</h5>
           		    	<input type="text" class="input" name="phone">
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="Войти">
            </form>
        </div>
    </div>
	<img src="../img/foo1.svg" class="img">
	<img src="../img/foo2.svg" class="img">

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script type="text/javascript" src="../script/main.js"></script>
</body>
</html>