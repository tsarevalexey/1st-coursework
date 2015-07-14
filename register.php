<?php

session_start();

include ('mysql.php');

/*
** Функция для генерации соли, используемоей в хешировании пароля
** возращает 3 случайных символа
*/

function GenerateSalt($n=3)
{
	$key = '';
	$pattern = '1234567890abcdefghijklmnopqrstuvwxyz.,*_-=+';
	$counter = strlen($pattern)-1;
	for($i=0; $i<$n; $i++)
	{
		$key .= $pattern{rand(0,$counter)};
	}
	return $key;
}

if (empty($_POST))
{
	
	$page_num = 'reg';
	
echo '	
	
<!--  -->
<!DOCTYP html>
<html>
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html;charset=windows-1251" />
		<link rel="stylesheet" href="style.css" type="text/css">		
		</head>

<body>

	<header id="page_header">
		<nav>			
				<div id="oglavlenie">
				
					<ul id="ul1">
					
					
';
					
 include('oglavlenie.php');
 
 echo '
					</ul>
				
				</div>	
				<div id="zakladki">					
					<ul id="ul1">
					
';

 include('zakladky.php');
 
 echo '
					</ul>						
				</div>	
				
				<div id="reg">
					<div>
					
';

include('auth.php');
							
echo '							
					</div>
				</div>
				
				<div id="menu">

';
 include('menu.php');
 
 echo '
				</div>
		</nav>
	</header>

	<section id="content">
		<div id="content1">
			<div id="content3">	
			<br><br><br><br><br>
						<form action="register.php" method="post">
							Введите данные для регистрации:<br /><br />
							Логин : <input type="text" name="login" size="" placeholder="   [более 2-х символов]"><br /><br />
							Пароль:<input type="password" name="password" size="" placeholder="   [более 6-ти символов]"><br /><br />
							<input type="submit" value=" Зарегистрироваться ">
						</form>				
			</div>
		</div>
	</section>

	<footer id="page_footer">
		<hr color="CFDBF5">
		<a href="http://vk.com/id36162788">Царев А.</a> 2013
	</footer>

</body>

</html>

';	


}
else
{
	// обрабатывае пришедшие данные функцией mysql_real_escape_string перед вставкой в таблицу БД
	
	$login = (isset($_POST['login'])) ? mysql_real_escape_string($_POST['login']) : '';
	$password = (isset($_POST['password'])) ? mysql_real_escape_string($_POST['password']) : '';
	
	
	// проверяем на наличие ошибок (например, длина логина и пароля)
	
	$error = false;
	$errort = '';
	
	if (strlen($login) < 2)
	{
		$error = true;
		$errort .= 'Длина логина должна быть не менее 2х символов.<br />';
	}
	if (strlen($password) < 6)
	{
		$error = true;
		$errort .= 'Длина пароля должна быть не менее 6 символов.<br />';
	}
	
	// проверяем, если юзер в таблице с таким же логином
	$query = "SELECT `id`
				FROM `users`
				WHERE `login`='{$login}'
				LIMIT 1";
	$sql = mysql_query($query) or die(mysql_error());
	if (mysql_num_rows($sql)==1)
	{
		$error = true;
		$errort .= 'Пользователь с таким логином уже существует в базе данных, введите другой.<br />';
	}
	
	
	// если ошибок нет, то добавляем юзаре в таблицу
	
	if (!$error)
	{
		// генерируем соль и пароль
		
		$salt = GenerateSalt();
		$hashed_password = md5(md5($password) . $salt);
		
		$query = "INSERT
					INTO `users`
					SET
						`login`='{$login}',
						`password`='{$hashed_password}',
						`salt`='{$salt}'";
		$sql = mysql_query($query) or die(mysql_error());
		
		echo 'Вы зарегестрированы!';
		header('Refresh: 3; URL=login.php');
	}
	else
	{
		print '<h4>Возникли следующие ошибки</h4>' . $errort;
		header('Refresh: 5; URL=register.php');
		echo 'Через 5 сек. вы будете перенаправлены на новую страницу.';
	}
}

?>