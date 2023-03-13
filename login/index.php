<?php
session_start();
require_once("../component/header.php");

?>
	<div class="container">
		<div class="login-content">
			<form action="vendor/accept-phone.php" method="post" id="logform">
				<img src="img/avatar.svg">
				<h2 class="title">АВТОРИЗАЦИЯ</h2>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Индивидуальный код</h5>
           		    	<input type="text" class="input" name="identcode" id="identcode" target='_blank'>
            	   </div>
            	</div>
				<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Номер телефона</h5>
           		    	<input type="text" class="input" name="phone" id="phone" target='_blank'>
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="Войти">
            </form>
			<div id="errorMes">
				<?php
					print_r($_SESSION["errMes"]);
				?>
			</div>
            <a href="../registration/index.php">Вы не зарагистрированы? Зарегистрироваться</a>
        </div>
    </div>
	<img src="img/foo1.svg" class="img">
	<img src="img/foo2.svg" class="img">

<?php

require_once("../component/footer.php");

?>

