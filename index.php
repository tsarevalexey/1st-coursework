<?php



session_start();

include ('mysql.php');

	include('authentification.php');

	$page_num = 'index';

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
			<br><br>
						
<p id="k_r">						
РОССИЙСКИЙ УНИВЕРСИТЕТ ДРУЖБЫ НАРОДОВ
</p><br />
<p id="k_r">	
Факультет физико-математических и естественных наук
</p><br />	
<p id="k_r">	
Кафедра Информационных технологий	
</p><br />	
<p id="k_r">	
КУРСОВАЯ РАБОТА
</p><br />	
<p id="k_r">	
на тему
</p><br />	

<br />
<br />

<p id="k_r_tema">	
 «Создание электронного образовательного ресурса: Программирование на языке Python.»
 </p><br />	  
 

<br />
<br />

<p id="k_r2">	
Выполнил
</p>
<p id="k_r2">	
Студент группы 	НИ-101
</p>
<p id="k_r2">	
Студенческий билет №: 1032110109  
</p>
<p id="k_r2">	                        
 И.О. Фамилия: А.С. Царев   
</p>
<p id="k_r2">	
«  14   »  мая  2013    г.
</p><br />

<br />	

<p id="k_r2">
Руководитель
</p>
<p id="k_r2">
       С.И. Салпагаров
</p>

<p id="k_r">
Москва 2013
</p>
								
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

