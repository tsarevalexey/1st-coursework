<?php



session_start();

include ('mysql.php');

	include('authentification.php');

	$page_num=2;

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
������ ��������, ���������� �� ������</p><br />

<i>� UNIX-�������� ��</i><br />
<p>
��� ����, ����� ��������� ���������, ���������� �� ������, � UNIX-��������
���������� ������� ������������� ������ � �������� ��� � �������� ��������� ��������
�����, � ������� ��������� ����������� ���������:
</p>
<p id="code">
$ python my_program.py
</p>
<p>
����� ����, � ������������ �������� UNIX ���� ����������� � ��������� �������,
����� ������������� ���������� ������� ��� �� ����������. ��� ����� � ������ ������
��������� ����� ��������:
</p>
<p id="code">
#! /usr/bin/env python
</p>
<p>
����� ����� ������� ���� �� �������� �����������:
</p>
<p id="code">
$ chmod u+x my_program.py
</p>
<p>
����� ����� ������ ����� ����� ���������, ������ ������ � ��������� ������ ���
���:
</p>
<p id="code">
$ my_program.py
</p>
<p>
���, ���� ������ ������� �� ��������:
</p>
<p id="code">
$ ./my_program.py
</p>
<p>
������������������ �������� #! ������������ ������ ������ ��� �she-bang!�.
</p><br />
<i>� �� Windows</i><br />
<p>
� Windows ���������, ���������� �� ������ ����������� ��������� �������� �
������� ��� ������ ���������� ����, ���������� ���������, � ������ �������� �� ���
������ ����� ������� ����. ����� ��� ��������� ��������� ���������� ����� .py �
��������������� ������, ������� ��� ������� ������ �� ����� ����� ����� �������
�����, ������� �������� ���������, ���������� � �����. ���� ���� ��������� �� �����
������������ ����������, �� ���������� ������ ��������� ����� ���������� � ����������
����. ����� ���������� ������ ��������� ��� ���� ����� ����� �� �������, ������� ��
������ �� ������ ������� ��������� �� ������. �������� ����� �����, ������� � �����
��������� ��������� ������:
</p>
<p id="code">
raw_input("Press any key to exit")
</p>
<p>
��� �������� ������������� ��������� ������� ������� [Enter], ������ ���
��������� ���������.
���� �� �� ������ ������ ����������, �� ����� ������� ������� ������� ��
���������. � Windows �����-��������� ������ ������ ����� ���������� .py ��� .pyw.
���������� .pyw ������������ ��� ��������, ������������ ����������� ���������. ���
������������� ����� �������� ������������ ������� ������� �������������� ������.
������ ������� � ��� ������� ���� ���������� �������������� (��� ��������� FAR) �
��������� ��������� �������:
</p>
<p id="code">
C:\Examples> python my_program.py
</p>
<p>
���� �������� �� ��������� ������������� ������ � ��������� ���, ��������� ��
������ ����� �� ������ ���������.
</p>

<p></p>								
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