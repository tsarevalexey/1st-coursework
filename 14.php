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
Ввод данных с клавиатуры</p><br />

<i></i><br />

<p>
Программы, которые мы писали до этого, немного скучные, т.к. они каждый раз делают
одно и то же, не спрашивая у пользователя, над какими данными следует произвести те или
иные действия.
</p><br />

<p>
Но это поправимо. В Питоне имеются встроенные функции, которые позволяют
получать данные с клавиатуры. Самая простая из них – raw_input(). Вызов этой функции
останавливает выполнение программы и заставляет компьютер дождаться, пока
пользователь не введет данные с клавиатуры. Завершение ввода осуществляется нажатием
клавиши [Enter]: сразу после нажатия этой клавиши, функция raw_input() завершается и
возвращает значение введенное с клавиатуры:
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
Прежде чем предоставлять пользователю возможность ввода данных хорошо бы
объяснить ему, что именно нужно ввести, с помощью строки приглашения (по-английски
prompt). Для этого достаточно передать эту строку в качестве параметра функции
raw_input():
</p><br />

<p id="code">
>>> name = raw_input("What is your name? ")<br />
What is your name? Arthur, King of the Britons!<br />
>>> print name<br />
Arthur, King of the Britons!<br />
</p><br />

<p>
Если нам нужно, чтобы пользователь ввел целое число, то мы можем использовать
функцию input().
</p><br />

<p id="code">
>>> prompt = "How old are you?"<br />
>>> age = input(prompt)<br />
How old are you? 17<br />
>>> print age<br />
17<br />
</p><br />

<p>
Введенная пользователем строка цифр будет приведена к типу int и присвоена
переменной age. Но если пользователь введет строку букв, то возникнет исключительная
ситуация (исключение):
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
		<a href="http://vk.com/id36162788">Царев А.</a> 2013
	</footer>

</body>

</html>

';

?>