<?php



session_start();

include ('mysql.php');

	include('authentification.php');
	
		$page_num=12;

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
������ � ������ ������ � ������ ��������</p><br />

<i>������ � ������ ������</i><br /><br />


<p>
���������� ������� open() ���������� ������-���� (file) � ������ ������������ � ����� �����������: �open(filename, mode)�.
</p><br />

<p id="code">
>>> f=open("/tmp/workfile", "wb")<br />
>>> print f<br />
<open file "/tmp/workfile", mode "wb" at 80a0960><br />
</p><br />

<p>
������ �������� � ������, ���������� ��� �����, ������ �������� � ������, ���������� ��������� ��������, ����������� ����� ������������� �����. ����� ����� ���� "r", ���� ���� ����������� ������ ��� ������, "w" � ������ ��� ������ (������������ ���� ����� �����������), � "a" � ��� ����������� � ����� �����. � ������ "r+" ���� ����������� ����� ��� ������ � ������. �������� mode �� �������� ������������: ���� �� ������, ��������������� "r" .
� Windows (� � ��������� ������� � � Macintosh) ����� �� ��������� ����������� � ��������� ������ � ��� ����, ����� ������� ���� � �������� ������, ���������� � ������ ������ �������� "b". ������� �������, ��� �������� ������, ����� ��� �������� � ������� JPEG � ���� ����� � UNICODE, ��� ������ �� ����� ��� ������ � ����, �������� � ��������� ������, ����� ���������! ������ ������ �������� ���� �� ������������� � ������ ��������� ����� � �������� ������, ���� �� ��� ����������, ��� �������� ����� ������������ �� ��������� (�������� � ��� �����-������ ��������� ������� ��������� ��������� �� ������ ���������).
</p><br />


<i>������ ��������-������</i><br /><br />
		
		
<p>		
������� � ���� ������� ���������� �� ��, ��� ������-���� f ��� ������.
</p><br />

<p>
f .read(size) ��������� � ���������� ��������� ���������� ������ �� �����. �������� size �� �������� ������������. ���� �� ������ ��� �������������, ����� ������� ��� ���������� �����, � ��������� ������, ����� ������� �� ����� size ���� ������. �� ���������� ����� �����, ������������ ������ ������ ().
</p><br />

<p id="code">
>>> f.read() # ��������� ��� ���������� ����� "This is the entire file.\012"<br />
>>> f.read()<br />
""<br />
</p><br />

<p>
f .readline() ��������� �� ����� ���� ������. ������������ ������ ������ ������������� �������� ����� ������ (\n), �� ����������� ��������� ������ �����, ���� ���� �� ������������� �������� ����� ������. ��� ������ ������������ �������� ���������������: ���� readline() ���������� ������ ������ � ������, ��������� ����� �����, � �� ����� ��� ������ ������ ����� ������������ ��� "\n".
</p><br />


<p id="code">
>>> f.readline() # ��������� ������ ������ "This is the first line of the file.\012"<br />
>>> f.readline() # ��������� ������ ������ "Second line of the file\012"<br />
>>> f.readline() # �������� ����� �����<br />
I I<br />
</p><br />

<p>
f .readlines() ��������� ��� ���������� �����, � ���������� ������ �����.
</p><br />

<p id="code">
>>> f.readlines()<br />
["This is the first line of the file.\012",<br />
"Second line of the file\012"]<br />
</p><br />

<p>
f .write(s) ���������� ���������� ������ s � ����.
</p><br />

<p id="code">
>>> f.write("This is a test\n")<br />
</p><br />

<p>
f .tell() ���������� ������� ��������� � ����� � ������, ������������� �� ������ �����. ����� �������� ������� ���������, ����������� �f .seek(offset, from_what) �. ����� ��������� ����������� ����� ���������� offset � ����� �������. ����� ������� ���������� � ����������� �� �������� ��������� from_what:
0		������������� ������ ����� (������������ �� ���������, ���� ����� ���������� � ����� ����������), 1 � �������� ��������� � 2 � ����� �����.
</p><br />

<p id="code">
>>> f=open("/tmp/workfile", "rb+")<br />
>>> f.write("0123456789abcdef")<br />
>>> f.seek(5)	# Go to the 5th byte in the file<br />
>>> f.read(1)<br />
"5"<br />
>>> f.seek(-3, 2) # Go to the 3rd byte before the end >>> f.read(1)<br />
"d"<br />
</p><br />

<p>
����� ����, ��� �� ��������� ��� �������� � ������, �������� ���� � ������� f .close(). ��� ������� ������������ �������� ���� ��� �������� ������/������ ������������ ���������� ValueError:
</p><br />

<p id="code">
>>> f.close()<br />
>>> f.read()<br />
Traceback (innermost last):<br />
File "<stdin>", line 1, in ?<br />
ValueError: I/O operation on closed file<br />
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