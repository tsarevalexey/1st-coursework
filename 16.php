<?php



session_start();

include ('mysql.php');

	include('authentification.php');
	
		$page_num=16;

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
��������� �����</p><br />

<i></i><br />

<p>
����������� �������� ������ ���� � �� �� ��� ������ ����������, ������� �������,
��� ����� ��������� ������������. �������������� ������� ���� �� ��� ���, ���� ��
�������, ��� ���� � �� �� ���������� ������ ������ ���� � ��� �� ���������. ��� �� �����,
� ��������� ���������� �� ���������� ��������� �����������������. �������� ��������
�������� ����, �� ���� ����� ������ ����������: � ���������, ������������� ����������
��������� ��� �������������� ������������.
</p><br />

<p>
��������� ��������� ���� ������������� ��������������� ������ �� ����� �������, ��
���� ������� ��������� �� �������� ���������������. ����� �� ����� �������� ��������
������������� ��������� ����� � ������������� �� � ���������.
</p><br />

<p>
� ������ ���� ���������� ������, ������� ��������� ������������ ��������������
�����. ��� �� ������� ��������, � �������������� ����� ������, �� ��� ����� �����
������ ��������.
</p><br />

<p>
������ random �������� � ���� ������� random, ������� ���������� ��������������
����� � ��������� �� 0.0 �� 1.0. ������ ��� ��� ������ ������� random �� ��������
����� �� �������� ����. ����� ����������, ��� ��� ��������, �������� ���������
���������:
</p><br />

<p id="code">
>>> import random<br />
>>> for i in range(10):<br />
>>> x = random.random()<br />
>>> print x<br />
</p><br />

<p>
����� �������� ��������� ����� ����� 0.0 � ������� �������� high, ������
�������� x �� high.
</p><br />


	<i>������ ��������� �������</i><br /><br />


<p>
������ ����� �������� �������� ������ ��������� �������. randomList ���������
����� ����� � �������� ��������� � ���������� ������ ��������� ����� �������� �����.
��� �������� ���������� �� ������� �� n �����. ��� ������ ������� ����� ���� ���
�������� ���� �� ��������� ��������� ������. ������������ �������� �������� ������� ��
������ ������:
</p><br />

<p id="code">
def randomList(n):<br />
&nbsp;&nbsp;&nbsp;&nbsp;
s = [0] * n<br />
&nbsp;&nbsp;&nbsp;&nbsp;
for i in range(n):<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
s[i] = random.random()<br />
&nbsp;&nbsp;&nbsp;&nbsp;
return s<br />
</p><br />


<p>
�������� ��� ������� �� ������ �� ������ ���������. �� ����������� �������
������ ������ � ������.
</p><br />

<p id="code">
>>> randomList(8)<br />
0.15156642489<br />
0.498048560109<br />
0.810894847068<br />
0.360371157682<br />
0.275119183077<br />
0.328578797631<br />
0.759199803101<br />
0.800367163582<br />
</p><br />

<p>
�����, ���������� �������� random, ������������ ����������; ��� ������, ��� ���
�������� �������������.
���� ������� �������� ��������� �������� �� ���������� �� ������� ������� �
���������, ������� ��� ��������� ����� ������� � ������ �� �����, �� �� ������, ��� �
������ ������ ��� ���������� ����� ���� � �� ��.
��� ������ ����� ���������, ������� ���������, ������� ����� ��������� �������� ��
������ � ������� ���������� �������� � ������ �� ���.
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