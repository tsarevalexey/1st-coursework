<?php	
if (!isset($_SESSION['user_id']))
{

	if($page_num=='login'){
		print '<div><a href="login.php" id="registration_left"><div class="gradient">Авторизация  </div></a>  ';
	}else{
		print '<div><a href="login.php" id="registration_left">Авторизация </a>  ';
	}

	if($page_num=='reg'){
		print '&nbsp;|&nbsp;<a href="register.php" id="registration_right"><div class="gradient"> Регистрация</div></a></div>';
	}else{
		print '&nbsp;|&nbsp;<a href="register.php" id="registration_right"> Регистрация</a></div>';
	}

}
else
{
	print 'Здраствуйте, ' . $welcome . '. ';
	print '<a href="login.php?logout">[Выход]</a>';
}

?>