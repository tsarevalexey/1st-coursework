<?php

session_start();

include ('mysql.php');

if (isset($_GET['logout']))
{
	if (isset($_SESSION['user_id']))
		unset($_SESSION['user_id']);
		
	setcookie('login', '', 0, "/");
	setcookie('password', '', 0, "/");
	// � ��������� ��� �� �������
	header('Location: index.php');
	exit;
}

if (isset($_SESSION['user_id']))
{
	// ���� ��� ���������, ������������ ��� ������ �� �������� ��������
	
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
		
		// ����, ��� ��� ����, ��������������� ����� ������:
		$salt = $row['salt'];
		
		// ������ �������� ��������� ������ ��� ���� � �������� ����, ������� ���� ������� ����:
		$password = md5(md5($_POST['password']) . $salt);
		
		// � ����� �������...

		// ������ ������ � ��
		// � ���� ����� � ����� ������� � �������

		$query = "SELECT `id`
					FROM `users`
					WHERE `login`='{$login}' AND `password`='{$password}'
					LIMIT 1";
		$sql = mysql_query($query) or die(mysql_error());

		// ���� ����� ������������ �������
		if (mysql_num_rows($sql) == 1)
		{
			// �� �� ������ �� ���� ����� � ������ (�������� �� ����� ������� ID ������������)

			$row = mysql_fetch_assoc($sql);
			$_SESSION['user_id'] = $row['id'];
			
			
			// ���� ������������ ����� "��������� ����"
			// �� ������ ��� � ���� ����� � ����� ������
			
			$time = 86400; // ������ ���� �� 24 ����
			
			if (isset($_POST['remember']))
			{
				setcookie('login', $login, time()+$time, "/");
				setcookie('password', $password, time()+$time, "/");
			}
			
			// � ������������ ��� �� �������� ��������
			header('Location: index.php');
			exit;

			// �� ��������, ��� ��� ������ � ����������� �������, � ��� � ������ ������� ������ �������������� session_start();
		}
		else
		{
			
header('Refresh: 5; URL=login.php');
echo '����� ����� � ������� �� ������� � ���� ������!<br />����� 5 ���. �� ������ �������������� �� ����� ��������.';
exit;


		
		}
	}
	else
	{
header('Refresh: 5; URL=login.php');
echo '������������ � ����� ������� �� ������!<br />����� 5 ���. �� ������ �������������� �� ����� ��������.';
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
						������� ������ ��� �����������<br /><br />
							<input type="text" name="login" size="6" placeholder="    login">
							<input type="password" name="password" size="6" placeholder="    pass">
							<input type="submit" value=" Ok ">
						</form>																
			</div>
		</div>
	</section>

	<footer id="page_footer">
		<hr color="CFDBF5">
		<a href="http://vk.com/id36162788">����� �.</a> 2013
	</footer>

</body>

</html>

';

?>