<?php



session_start();

include ('mysql.php');

	include('authentification.php');
	
		$page_num=14;

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
			<div id="content2">	
<p id="z">
���� ������ � ����������</p><br />

<i></i><br />

<p>
���������, ������� �� ������ �� �����, ������� �������, �.�. ��� ������ ��� ������
���� � �� ��, �� ��������� � ������������, ��� ������ ������� ������� ���������� �� ���
���� ��������.
</p><br />

<p>
�� ��� ���������. � ������ ������� ���������� �������, ������� ���������
�������� ������ � ����������. ����� ������� �� ��� � raw_input(). ����� ���� �������
������������� ���������� ��������� � ���������� ��������� ���������, ����
������������ �� ������ ������ � ����������. ���������� ����� �������������� ��������
������� [Enter]: ����� ����� ������� ���� �������, ������� raw_input() ����������� �
���������� �������� ��������� � ����������:
</p><br />

<p id="code">
>>> text = raw_input()<br />
What are you waiting for?<br />
>>> print text<br />
What are you waiting for?<br />
>>>type(text)<br />
<type "str"><br />
</p><br />

<p>
������ ��� ������������� ������������ ����������� ����� ������ ������ ��
��������� ���, ��� ������ ����� ������, � ������� ������ ����������� (��-���������
prompt). ��� ����� ���������� �������� ��� ������ � �������� ��������� �������
raw_input():
</p><br />

<p id="code">
>>> name = raw_input("What is your name? ")<br />
What is your name? Arthur, King of the Britons!<br />
>>> print name<br />
Arthur, King of the Britons!<br />
</p><br />

<p>
���� ��� �����, ����� ������������ ���� ����� �����, �� �� ����� ������������
������� input().
</p><br />

<p id="code">
>>> prompt = "How old are you?"<br />
>>> age = input(prompt)<br />
How old are you? 17<br />
>>> print age<br />
17<br />
</p><br />

<p>
��������� ������������� ������ ���� ����� ��������� � ���� int � ���������
���������� age. �� ���� ������������ ������ ������ ����, �� ��������� ��������������
�������� (����������):
</p><br />

<p id="code">
>>> age = input(prompt)<br />
How old are you?<br />
I"m 17th years old.<br />
SyntaxError: invalid syntax<br />
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