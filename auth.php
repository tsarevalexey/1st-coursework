<?php	
if (!isset($_SESSION['user_id']))
{

	if($page_num=='login'){
		print '<div><a href="login.php" id="registration_left"><div class="gradient">�����������  </div></a>  ';
	}else{
		print '<div><a href="login.php" id="registration_left">����������� </a>  ';
	}

	if($page_num=='reg'){
		print '&nbsp;|&nbsp;<a href="register.php" id="registration_right"><div class="gradient"> �����������</div></a></div>';
	}else{
		print '&nbsp;|&nbsp;<a href="register.php" id="registration_right"> �����������</a></div>';
	}

}
else
{
	print '�����������, ' . $welcome . '. ';
	print '<a href="login.php?logout">[�����]</a>';
}

?>