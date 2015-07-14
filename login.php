<?php

session_start();

include ('mysql.php');

if (isset($_GET['logout']))
{
	if (isset($_SESSION['user_id']))
		unset($_SESSION['user_id']);
		
	setcookie('login', '', 0, "/");
	setcookie('password', '', 0, "/");
	// и переносим его на главную
	header('Location: index.php');
	exit;
}

if (isset($_SESSION['user_id']))
{
	// юзер уже залогинен, перекидываем его отсюда на закрытую страницу
	
	header('Location: #');
	exit;

}



if (!empty($_POST))
{
	$login = (isset($_POST['login'])) ? mysql_real_escape_string($_POST['login']) : '';
	
	$query = "SELECT `salt`
				FROM `users`
				WHERE `login`='{$login}'
				LIMIT 1";
	$sql = mysql_query($query) or die(mysql_error());
	
	if (mysql_num_rows($sql) == 1)
	{
		$row = mysql_fetch_assoc($sql);
		
		// итак, вот она соль, соответствующая этому логину:
		$salt = $row['salt'];
		
		// теперь хешируем введенный пароль как надо и повторям шаги, которые были описаны выше:
		$password = md5(md5($_POST['password']) . $salt);
		
		// и пошло поехало...

		// делаем запрос к БД
		// и ищем юзера с таким логином и паролем

		$query = "SELECT `id`
					FROM `users`
					WHERE `login`='{$login}' AND `password`='{$password}'
					LIMIT 1";
		$sql = mysql_query($query) or die(mysql_error());

		// если такой пользователь нашелся
		if (mysql_num_rows($sql) == 1)
		{
			// то мы ставим об этом метку в сессии (допустим мы будем ставить ID пользователя)

			$row = mysql_fetch_assoc($sql);
			$_SESSION['user_id'] = $row['id'];
			
			
			// если пользователь решил "запомнить себя"
			// то ставим ему в куку логин с хешем пароля
			
			$time = 86400; // ставим куку на 24 часа
			
			if (isset($_POST['remember']))
			{
				setcookie('login', $login, time()+$time, "/");
				setcookie('password', $password, time()+$time, "/");
			}
			
			// и перекидываем его на закрытую страницу
			header('Location: index.php');
			exit;

			// не забываем, что для работы с сессионными данными, у нас в каждом скрипте должно присутствовать session_start();
		}
		else
		{
			
header('Refresh: 5; URL=login.php');
echo 'Такой логин с паролем не найдены в базе данных!<br />Через 5 сек. вы будете перенаправлены на новую страницу.';
exit;


		
		}
	}
	else
	{
header('Refresh: 5; URL=login.php');
echo 'Пользователь с таким логином не найден!<br />Через 5 сек. вы будете перенаправлены на новую страницу.';
exit;

		
	}
}


	$page_num = 'login';

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
			
						<form action="login.php" method="post">
						Введите данные для авторизации<br /><br />
							<input type="text" name="login" size="6" placeholder="    login">
							<input type="password" name="password" size="6" placeholder="    pass">
							<input type="submit" value=" Ok ">
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

?>