<?php

require_once("../component/header.php");
require_once("../db/db.php");

?>
	<div class="container">
		<div class="login-content">
			<form action="vendor/registr.php" method="post">
				<img src="img/avatar.svg">
				<h2 class="title">РЕГИСТРАЦИЯ</h2>
           		<div class="input-div pass">
           		   	<div class="i"> 
						<i class="fa-solid fa-envelope"></i>
           		   	</div>
           		   	<div class="div">
           		    	<h5>E-Mail</h5>
           		    	<input type="text" class="input" name="email">
            	   	</div>
            	</div>
				<div class="input-div pass">
           		   	<div class="i"> 
						  <i class="fa-solid fa-phone"></i>
           		   	</div>
           		   	<div class="div">
           		    	<h5>Телефон</h5>
           		    	<input type="text" class="input" name="phone">
            	   	</div>
            	</div>
            	<input type="submit" class="btn" value="Зарегестрироваться">
            </form>
        </div>
    </div>
	<img src="img/foo1.svg" class="img">
	<img src="img/foo2.svg" class="img">
<?php

require_once("../component/footer.php")

?>