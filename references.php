<?php



session_start();

include ('mysql.php');

	include('authentification.php');

	$page_num = 'ref';

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

echo'
				</div>
		</nav>
	</header>

	<section id="content">
		<div id="content1">
			<div id="content2">	

			<p id="ref_text">
			��� ��������  ������������ ���������������� ������� ��� ���� ���������������� Python 
			���� ������������ ��������� ���������:
			</p><br /><br />
						<ul id="philosoph">
							<li>�������� �. �. "������ ��������������� ������ � �������" ("Start with Python") Revision: 226</li>
							<li>Mark Summerfield "A Complete Introduction to the Python Language" (���������������� �� Python 3 , ��������� �����������)</li>
							<li>�.�����, �.�.��.�����, �.�.������� "���� ���������������� Phyton"</li>
							<li>����� ����� "Phyton. ��������� ����������"</li>
							<li>http://ru.wikipedia.org/wiki/Python</li>
						</ul><br /><br />
						
			<p id="ref_text2">
			��� ���������� �� ������ ������� ������������� ������������� � ��������������� �����,
			���� �� ���������������� ������ �����, �� ������������� ���������� ������������� ����������!
			</p><br />						
				
							
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

