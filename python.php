<?php



session_start();

include ('mysql.php');


	include('authentification.php');

	$page_num = 'python';

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
Python
</p><br />
<p>
Python � ��� ��������� ���������������� ��������-��������������� ����������� ������������ ���� ���������������� ����� �������� ������.
-		��������� � ��� �������� ������ �������������� � ��������� �������� ��� ������, ������� ������������, �������������;
-		���������������� � ������ ��� ���������� �������� ����������";
-		��������-��������������� � ������������ �� ������, ������� �������������� ������������;
-		����������� � ����� ������ ������������ API ��� �������� �������, ����� � ������� �� C ��� C++;
-		������������ � ����� ������ ������������ API ��� ����������� �������������� � ������ ���������;
-		����� �������� ������ � ������������ ���������, ���������� ���� ������ �������� ������, ������, ������, �������� ����������.
</p><br />
<p>
Python � ���� �������������, �� ������ ������������ �� ���� ���� ��� ����� ������ ����� � ���� ������ � ��������� �������, ����������� �������������� � ����, ���������������� GUI � ������� �������� ���������� (RAD). �, ������� ��, Python ������������ ��� ���������������� Internet � Web ���������� � ��������� (CGI), ���������� (������), Web-�������� � �������� ����������. Python �������� ������� ����������� �����������, � ��� ����� ������� ������� �������, ���������� �������� ������. Python � ����������, ���������� �� ���, ���������� ����� ��������� � ������� ����� � IBM, Yahoo!, Google.com, Hewlett Packard, Infoseek, NASA, Red Hat, CBS MarketWatch, Microsoft.
</p>	<br />	
<p>	
�� ���� ����� ��������:<br />
-		Mailman � �������� ������� �������� (mailing list manager), ������� ����������� ���������� ������� �������� ������� GNU;<br />
-		Medusa � ����������� ��� ���������������������� �������� TCP/IP ��������, ����� ��� HTTP, FTP, NNTP, XML-RPC � SOAP;<br />
-		Zope � ������ Web-���������� (Web application server)<br />
</p><br />
<p>
Python � ���������������� ����, ��� �������� ��� ���������� ������������ ���������� �������, ������ ������������ �� ����������. ������������� ����� ������������ ������������, ��� ��������� ������������������ � ������������� �����, ������ �������� �������� ��� ����������� ������� ��� ���������� ������ ������. �� ����� ������ � �������� ����������� ������������.
Python ��������� ������ ����� ���������� � ������������� ���������. ���������, ���������� �� ����� Python, ������ ����������� ������ ����������� �� C ���
C++ �� ���������� ��������:</p>	<br /><br />
�		���� ������ �������� ������ �������� ��� �������� ������� �������� ����� �����������;<br />
�		������������� ���������� ����������� � ������� �������� ������ �������� ������;<br />
�		��� ������������� � ���������� ����������.<br /><br />
<p>	
Python �����������: ������ C �������� ��� ��������� ����� ������������ ������� ��� ������ ��� ���������� ��������� �������� � ������������ ��������� ��� ��������� ���������� � ������������ �����������, ��������� ������ � �������� ����. �� ������ �������� ������������� ����� Python � ����������, ���������� �� C, � ������������ ��� � �������� ���������� ��� ���������� ����� ��� ����� ����������.
</p><br />	

<p>	
������������ ����� Python �������������� ����������� ��������� ����������������, ���������� �The Zen of Python� (����� ������, ��� ����� �������). Ÿ ����� ������� ��������������� ������ �� ������� import this (�������� ���� ��� �� ������). ������� ���� ��������� ��������� ��� �������.
����� ���������:<br />
<br />
<ul id="philosoph">	
<li>�������� �����, ��� ���������.</li><br />
<li>����� �����, ��� �������.</li><br />
<li>������� �����, ��� �������.</li><br />
<li>������� �����, ��� ����������.</li><br />
<li>������� �����, ��� ���������.</li><br />
<li>����������� �����, ��� �������.</li><br />
<li>���������� ����� ��������.</li><br />
<li>������ ������ �� ��������� ������, ����� �������� �������.</li><br />
<li>��� ���� ������������ ������ �������������.</li><br />
<li>������ ������� �� ������ �������������.</li><br />
<li>���� �� ������������� ����.</li><br />
<li>�������� ���������������, ������� ��������� �������.</li><br />
<li>������ ������������ ���� � �, ����������, ������ ���� � ��������� ������ ������� ���.</li><br />
<li>���� �� �������� ����� ���� � �� ��������, ���� �� �� ���������.</li><br />
<li>������ �����, ��� �������.</li><br />
<li>���� ������� �������� �����, ��� ����� ������.</li><br />
<li>���� ���������� ������ ��������� � ���� �����.</li><br />
<li>���� ���������� ����� ��������� � ����, ��������, ������.</li><br />
<li>������������ ��� � �������� �����! ����� ������ �� ��������!</li><br />
</ul>
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