<?php


if($page_num==index){
print'<a href="index.php" id="menu_link"><div id="menu_div2" class="gradient">|  ������� |</div></a>';
}else{
print'<a href="index.php" id="menu_link"><div id="menu_div">|  ������� |</div></a>';
}

if($page_num==python){
print'<a href="python.php" id="menu_link"><div id="menu_div2" class="gradient">| Python�|</div></a>';
}else{
print'<a href="python.php" id="menu_link"><div id="menu_div">| Python�|</div></a>';
}

if($page_num==ref){
print'<a href="references.php" id="menu_link"><div id="menu_div2" class="gradient">| C����� |</div></a>';
}else{
print'<a href="references.php" id="menu_link"><div id="menu_div">| C����� |</div></a>';
}



?>