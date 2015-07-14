<?php



session_start();

include ('mysql.php');

	include('authentification.php');
	
		$page_num=18;

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
������������ � �����������</p><br />

<i></i><br />


<p>
����� Circle �������� �� ������ ������ Point, � �������������� ��������� ������������.
 ����� Circle ��������� ���� ������� ������ (radius) � ��� ����� ������. ����� ����, ��
 �������������� ��������� ������� ������ Point. ���� ���������� ������ ����������� ������:
 </p><br />
 
 <p id="code">
class Circle(Point):<br />
&nbsp;&nbsp;&nbsp;&nbsp;
	def	__init__(self, radius, x=0, y=0):<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		super().__init__(x, y) <br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		self.radius = radius<br />
	&nbsp;&nbsp;&nbsp;&nbsp;
	def edge_distance_from_origin(self):<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		return abs(self.distance_from_origin() - self.radius)<br />
	&nbsp;&nbsp;&nbsp;&nbsp;
	def area(self):<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		return math.pi * (self.radius ** 2) # ** - ���������� � �������<br />
	&nbsp;&nbsp;&nbsp;&nbsp;
	def circumference(self):<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		return 2 * math.pi * self.radius<br />
	&nbsp;&nbsp;&nbsp;&nbsp;
	def __eq__(self, other):<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		return self.radius == other.radius and super().	eq	(other)<br />
	&nbsp;&nbsp;&nbsp;&nbsp;
	def __repr__(self):<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		return �Circle({0.radius!r}, {0.x!r}, {0.y!r})".format(self)<br />
	&nbsp;&nbsp;&nbsp;&nbsp;
	def __str__(self):<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		return repr(self)<br />
</p><br />

<p>
������������ ����������� ������, ����������� ������������ ������ (��� �������), ������� ������ ����
 ����������� ����� �������, � ������ � ����������� class. � ������ ������ �� ��������� ����� Point.
������ ������	init() �� ���������� ������� super() ��� ������
������	init() �������� ������ - �� ������� � �������������� �������� self.x � self.�. 
������ ����() � circumference() ���������� ��������. ����� edge_distance_from_origin() � ���� ������������
���������� �������� ����� distance_from_origin(). ��� ��� ����� Circle �� ��������� ���� �����
distance_from_origin(), ������������� ������ � ����� ������������ ����� �������� ������ Point. �������� ��� � 
���������������� ������ eq(). ���� ����� ���������� ������ ���������� � �������� ������
����������, � ���� ��� �����, �� ��� ������ ������� super() ���� ���������� �����	eq() �������� ������. 
���� �� �� �� ������������ ������� super(), �� ����� �� ������� � ����������� ��������, ��������� ����� Circle.
	eq() ��������� �� �������� ��� ����. �������� ����� �������� �� ��, ��� � ����� super() �� �� �������� 
	�������� self, ������ ��� ������������� ������� ��� �������������.
���� ���������� ���� �������� �������������:
</p><br />

<p id="code">
� = Shape.Point(28, 45)<br />
� = Shape.Circle(5, 28, 45) <br />
p.distance_from_origin()	# ������: 53.0<br />
�.distance_from_origin()	# ������: 53.0<br />
</p><br />

<p>
�� ����� ������� ����� distance_from_origin() ��� ��� ���������� ������ Point, ��� � ��� ���������� ������ Circle,
 ������ ��� ����� Circle ��������� ����� Point.
 </p><br />
 
 <p>
����������� �������������, ��� ����� ������ ������� ������ ����� ��������������, ��� ���� �� ��� ��� ������ ������
 �� ������� ��� �������. �� ���� �������, ����� ��������� ��������, ��� ��������� ����������� ������ ����������� 
 �������������� ������ � �������������� ������ �� ������������ ������, ������� ��� �������� �� ��������. ������������� 
 ������, �� ����� � ������ ������������� ������������ ���������� ������� �������, �������� ������� super() ������ 
 ���������������� �������.
 </p><br />
 
 <p>
� ������ � ������� Circle �� ����������� �������������� ������, ����� ��� ����() � circumference(), � �������������� 
������, ������� ���������� ���� ��������. �������������� ������	����() � str()
���� ���������� ������, ��� ��� ����� �������������� �� ������ �������� ������, ������������ ������ � �������������� 
������ Point, � �� Circle. �������������� ������	init() �	eq() ���� ���������� ������, ��� ��� ���������� 
���� ������ ��� ����, ��� ����� Circle ����� ���� �������������� �������; � � ����� ������� ���� ������������ ����������
 �������� ������, ����� �������������� ����� ������, ������� ���������� ���� ���������.
</p><br />

 <p>
������ Point � Circle ����� ������� �������, ��������� ��� ������������� ����� �����������. �� ����� �������� � ��� 
�������������� ������, ��������, ������ ����������� ������ ���������, ���� �� ��� ���� ���������� ������������� ������� 
������� Point � Circle. ��� ����� ���� �� ����������� � ������� Point � Circle ����� �����������. � ����������� ������� Python 
����������� ����� ����() (�� ����������� diet.����() � set.����(). ���� ��� ����������� ����������� ��������� ������ Point
 ��� Circle, �� ����� ����� ������� ���, ������������ ������ ���� � ����������� ������� ����, ����(). 
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