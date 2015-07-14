<?php


if($page_num==index){
print'<a href="index.php" id="menu_link"><div id="menu_div2" class="gradient">|  Главная |</div></a>';
}else{
print'<a href="index.php" id="menu_link"><div id="menu_div">|  Главная |</div></a>';
}

if($page_num==python){
print'<a href="python.php" id="menu_link"><div id="menu_div2" class="gradient">| Python |</div></a>';
}else{
print'<a href="python.php" id="menu_link"><div id="menu_div">| Python |</div></a>';
}

if($page_num==ref){
print'<a href="references.php" id="menu_link"><div id="menu_div2" class="gradient">| Cсылки |</div></a>';
}else{
print'<a href="references.php" id="menu_link"><div id="menu_div">| Cсылки |</div></a>';
}



?>