<?php



session_start();

include ('mysql.php');

	include('authentification.php');
	
		$page_num=15;

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
����������� � ������������ Python</p><br />

<i></i><br />


<i>����������� � ����������</i><br /><br />

<p>
�� ���� ���������� �������� ����� �������� ���� ��� ������ �� ����������� � �����
���������: �� ������ ������� ������. � ������ ��������� ������ �������� ��� �� �����, ���
���� �� ��� ���� �������� �� ������������ �����, ��, � ����� �������, ������������ �����
��� �� �� ����� ����� ������ ���������� ����� �������� �������� � ���������, � �
������ � ���������� ����������������� �������� �������� � ���������� ��������
������� �����. ������� ��� ��������� ���������� ����, ��� ������� ��������
������������� �� ������������ �����, � ����������� ������ ����������������, ��
�������� �����, ������������� ����� �����������.
</p><br />

<p>
��������������� ���� ��������� �������� ��������� ����, ������� �� ���������
��� ����������� � ���� �� � ���� ��������� �����.
����� ��� ���������� �������� ���� �����������, �� ���������� ������������
�������������� ������� ������� ���� (����, �������, ���� ��� ��� ������� � ������������
���������), �� ��� ������ � �������, �� ������� ������������, ����������� ������
����������. ����� ����, ����� �����-�� ����� �� ���� �� ������� ����������� � �����
���������, ���� � ��� �� ����� ������� �������������� ���������.
</p><br />

<p>
� ������ ����������� ���������� �������� # � ������, ������������ � �����
�������, ������ ������������ ��������������� � ����� �� ������ �� �� ���������� �
����������:
</p><br />

<p id="code">
# ������� ����������� ����������� ���� �������: 20 � 80<br />
print 100 * 20 / 80, "%"<br />
</p><br />

<p>
����������� ����� ��������� � ����� ����������, �.�. ���������� �� � ������ ������ ������:<br />
</p><br />

<p id="code">
>>> print 100 * 20 / 80, "%" # ������������� �������<br />
25 %<br />
</p><br />

<p>
����� ����, ������������� ����� �������� � �������. ��� ����� ������������ ���
���� ������ ���������������:
</p><br />

<p id="code">
def printTwice(value):<br />
&nbsp;&nbsp;&nbsp;&nbsp;
"""�������� ������� printTwice()<br />
&nbsp;&nbsp;&nbsp;&nbsp;
������ ������� �������� �������� � ������� ��� ������, �������� ��������."""<br />
&nbsp;&nbsp;&nbsp;&nbsp;
print value, value<br />
</p><br />

<p>
��� ������, ����������� � ��������� ������� ������ ���������� ����� �����
��������� �������. ��� ����������� � ������� ������� ��� ���� � ����� ��������
��������� �����. ����� ����, � ������ ������������� ����������� ������ ����
������������. ��� ����� ���������� ��������������� ���������� ���������� __doc__
(���������� � ������������� ������ �������� �������������):
</p><br />

<p id="code">
>>> print printTwice.__doc__<br />
&nbsp;&nbsp;&nbsp;&nbsp;
�������� ������� printTwice()<br />
&nbsp;&nbsp;&nbsp;&nbsp;
������ ������� �������� �������� � ������� ��� ������, �������� ��������.<br />
</p><br />

<p>
���� �� ����������� ������� ������� ���������� ������� ������
help(printTwice).
</p><br />

<p>
�������� �������� ���������� ������� � ��� ��������� ����� ������� ����������
�������������� �� � ��� �� �����, ����� ������ ������������� ���� �����
���������������� � � ����� ��������� ��� ��� ��������.
</p><br />


	<i>����������� � ������������ �������</i><br /><br />
		
		
<p>	
� ���� ������� �� ������� ���������� �� ������, ����� ������ ������� � ������
����������� ��������� �������������������, � ����� �� ������� �� ��� ����������� �
���������� �������: "\t". ���� � ���, ��� � ������� �������� (������� �������� �����,
������������ ��������� �������, ������� ��������� ����� �������� �� �����) ����
����� ������ ��� ���������� ������������ ��������. ������������ ������� ������������
��� ���������� ������/�������. ����� ����� ������������ �� ���: ���� ���������,
������� �� ����� ������ � ���� ��������� �������. �.�. � ������� ������� ��� ��������,
������������ �� ������, ��� �� ����������� ��������� ����������� ������������������:
<br />
\t  - ���������<br />
\n  - ������� �� ����� ������<br />
\r  - ������� �������� (�������) � ������ ������<br />
</p><br />


<p>
����� �������, ���� � ��������� ����� ������� ����� �� ���������� �����, �� ��
������ �������� ����������� ������������������:
</p><br />

<p id="code">
>>> print "hello\rH\n\tworld"<br />
Hello<br />
&nbsp;&nbsp;&nbsp;&nbsp;
world<br />
</p><br />

<p>
��������, ��� ���������� ��� ������ ������ "hello\rH\n\tworld". �������
��������� ������ "hello" � ������ ����� ��� ������������� ��������� ������ �����������
������������������: "\r" � ������ �������� �������� �� ������ ������. ����� ���������
������ "H", �� ���������� ��� �� ������� ������� �������! ��� ���� ��� ��������� ��
���� ������� ������ ���������� �����14. ����� ����� ������������������ "\n" � "\t"
���� �������� ���������� ������� �� ����� ������ � �������� ������ � ���� ���������.
����� ��������� ���������� ����� ������ "world".
</p><br />

<p>
����������, �� ����� ��������� ����������� ������������������ ���, ��� ��� ��
�����������: ��������, ����� ���� ��������� ������ ������ ������ ������ ����������
"\rH". ����� ���� ��������� ����� ������� ������.
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