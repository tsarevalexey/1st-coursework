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
Наследование и полиморфизм</p><br />

<i></i><br />


<p>
Класс Circle построен на основе класса Point, с использованием механизма наследования.
 Класс Circle добавляет один атрибут данных (radius) и три новых метода. Кроме того, он
 переопределяет несколько методов класса Point. Ниже приводится полное определение класса:
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
		return math.pi * (self.radius ** 2) # ** - возведение в квадрат<br />
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
		return ”Circle({0.radius!r}, {0.x!r}, {0.y!r})".format(self)<br />
	&nbsp;&nbsp;&nbsp;&nbsp;
	def __str__(self):<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		return repr(self)<br />
</p><br />

<p>
Наследование реализуется просто, посредством перечисления класса (или классов), который должен быть
 унаследован нашим классом, в строке с инструкцией class. В данном случае мы наследуем класс Point.
Внутри метода	init() мы используем функцию super() для вызова
метода	init() базового класса - он создает и инициализирует атрибуты self.x и self.у. 
Методы агеа() и circumference() достаточно очевидны. Метод edge_distance_from_origin() в ходе производимых
вычислений вызывает метод distance_from_origin(). Так как класс Circle не реализует свой метод
distance_from_origin(), интерпретатор найдет и будет использовать метод базового класса Point. Сравните это с 
переопределением метода eq(). Этот метод сравнивает радиус окружности с радиусом другой
окружности, и если они равны, то при помощи функции super() явно вызывается метод	eq() базового класса. 
Если бы мы не использовали функцию super(), мы могли бы попасть в бесконечную рекурсию, поскольку метод Circle.
	eq() продолжал бы вызывать сам себя. Обратите также внимание на то, что в вызов super() мы не передаем 
	аргумент self, потому что интерпретатор сделает это автоматически.
Ниже приводится пара примеров использования:
</p><br />

<p id="code">
р = Shape.Point(28, 45)<br />
с = Shape.Circle(5, 28, 45) <br />
p.distance_from_origin()	# вернет: 53.0<br />
с.distance_from_origin()	# вернет: 53.0<br />
</p><br />

<p>
Мы можем вызвать метод distance_from_origin() как для экземпляра класса Point, так и для экземпляра класса Circle,
 потому что класс Circle наследует класс Point.
 </p><br />
 
 <p>
Полиморфизм подразумевает, что любой объект данного класса может использоваться, как если бы это был объект любого
 из базовых его классов. По этой причине, когда создается подкласс, нам требуется реализовать только необходимые 
 дополнительные методы и переопределить только те существующие методы, которые нам хотелось бы заменить. Переопределяя 
 методы, мы можем в случае необходимости использовать реализацию базовых классов, применяя функцию super() внутри 
 переопределяемых методов.
 </p><br />
 
 <p>
В случае с классом Circle мы реализовали дополнительные методы, такие как агеа() и circumference(), и переопределили 
методы, которые необходимо было изменить. Переопределить методы	герг() и str()
было необходимо потому, что без этого использовались бы методы базового класса, возвращающие строки с представлением 
класса Point, а не Circle. Переопределить методы	init() и	eq() было необходимо потому, что нам необходимо 
было учесть тот факт, что класс Circle имеет один дополнительный атрибут; и в обоих случаях была использована реализация
 базового класса, чтобы минимизировать объем работы, которую необходимо было выполнить.
</p><br />

 <p>
Классы Point и Circle можно считать полными, поскольку они соответствуют нашим требованиям. Мы могли добавить в них 
дополнительные методы, например, другие специальные методы сравнения, если бы нам было необходимо упорядочивать объекты 
классов Point и Circle. Еще можно было бы реализовать в классах Point и Circle метод копирования. В большинстве классов Python 
отсутствует метод сору() (за исключением diet.сору() и set.сору(). Если нам потребуется скопировать экземпляр класса Point
 или Circle, мы легко можем сделать это, импортировав модуль сору и использовав функцию сору, сору(). 
</p><br />

					
			</div>
		</div>
	</section>

	<footer id="page_footer">
		<hr color="CFDBF5">
		<a href="http://vk.com/id36162788">Царев А.</a> 2013
	</footer>

</body>

</html>

';

?>