<?php



session_start();

include ('mysql.php');

	include('authentification.php');
	
	$page_num=5;

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
������</p><br />

<i></i><br />
<p>
� Python ������� ��������� ����� ������, ������������ ��� ������������� ������ ���������� ��������. ����� ������ �������� ������ (list), ������� ����� ���� ������� � ���� ������ �������� (���������), ����������� ��������, ������������ � ���������� ������. ������ �� �����������, ����� �������� ������ ���� ������ ����

</p>
<p id="code">
>>> a = ["spam", "eggs", 100, 1234]<br />
>>> a<br />
["spam", "eggs", 100, 1234]<br />
</p>
	<p>
��� � ��� �����, ��� ������� ��������� �������� ���������� � ����. ��� ������ ����� �������� ����, ���������� ��������� ������� � ��� �����:
</p><br />
<p id="code">	
>>> a[0]<br />
"spam"<br />
>>> a[3]<br />
1234<br />
>>> a[-2]<br />
100<br />
>>> a[1:-1]<br />
["eggs", 10 0]<br />
>>> a[:2] + ["bacon", 2*2]<br />
["spam", "eggs", "bacon", 4]<br />
>>> 3*a[:3] + ["Boe!"]<br />
["spam", "eggs", 100, "spam", "eggs", 100, "spam",<br />
"eggs", 10 0, "Boe!"]<br />
</p>
<p>
� ������� �� �����, ������� ����������� (immutable), ���������� ����������� ��������� ��������� ��������� ������:
</p><br />
<p id="code">
>>> a<br />
["spam", "eggs", 100, 1234]<br />
>>> a[2] = a[2] + 23 >>> a<br />
["spam", "eggs", 123, 1234]<br />
</p>
<p>
������������ ����� ����� ��������, � ��� ����� �������� � ��������� ������� ������:
	</p>		<br />		
<p id="code">		
>>> # �������� ��������� ���������:<br />
... a[0:2] = [1, 12]<br />
>>> a<br />
[1, 12, 123, 1234]<br />
>>> # �������:<br />
... a[0:2] = []<br />
>>> a<br />
[123, 1234]<br />
>>> # ��������:<br />
... a[1:1] = ["bletch", "xyzzy"]<br />
>>> a<br />
[123, "bletch", "xyzzy", 1234]<br />
>>> # �������� ����� ������ ���� � ������:<br />
>>> a[:0] = a >>> a<br />
[123, "bletch", "xyzzy", 1234, 123, "bletch", "xyzzy", 1234]<br />
</p>
<p>
������ ����� ���� ���������� (������, ���������� ������ ������)
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