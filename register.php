<?php

session_start();

include ('mysql.php');

/*
** ������� ��� ��������� ����, ������������� � ����������� ������
** ��������� 3 ��������� �������
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
							������� ������ ��� �����������:<br /><br />
							����� : <input type="text" name="login" size="" placeholder="   [����� 2-� ��������]"><br /><br />
							������:<input type="password" name="password" size="" placeholder="   [����� 6-�� ��������]"><br /><br />
							<input type="submit" value=" ������������������ ">
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


}
else
{
	// ����������� ��������� ������ �������� mysql_real_escape_string ����� �������� � ������� ��
	
	$login = (isset($_POST['login'])) ? mysql_real_escape_string($_POST['login']) : '';
	$password = (isset($_POST['password'])) ? mysql_real_escape_string($_POST['password']) : '';
	
	
	// ��������� �� ������� ������ (��������, ����� ������ � ������)
	
	$error = false;
	$errort = '';
	
	if (strlen($login) < 2)
	{
		$error = true;
		$errort .= '����� ������ ������ ���� �� ����� 2� ��������.<br />';
	}
	if (strlen($password) < 6)
	{
		$error = true;
		$errort .= '����� ������ ������ ���� �� ����� 6 ��������.<br />';
	}
	
	// ���������, ���� ���� � ������� � ����� �� �������
	$query = "SELECT `id`
				FROM `users`
				WHERE `login`='{$login}'
				LIMIT 1";
	$sql = mysql_query($query) or die(mysql_error());
	if (mysql_num_rows($sql)==1)
	{
		$error = true;
		$errort .= '������������ � ����� ������� ��� ���������� � ���� ������, ������� ������.<br />';
	}
	
	
	// ���� ������ ���, �� ��������� ����� � �������
	
	if (!$error)
	{
		// ���������� ���� � ������
		
		$salt = GenerateSalt();
		$hashed_password = md5(md5($password) . $salt);
		
		$query = "INSERT
					INTO `users`
					SET
						`login`='{$login}',
						`password`='{$hashed_password}',
						`salt`='{$salt}'";
		$sql = mysql_query($query) or die(mysql_error());
		
		echo '�� ����������������!';
		header('Refresh: 3; URL=login.php');
	}
	else
	{
		print '<h4>�������� ��������� ������</h4>' . $errort;
		header('Refresh: 5; URL=register.php');
		echo '����� 5 ���. �� ������ �������������� �� ����� ��������.';
	}
}

?>