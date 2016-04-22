<?php

$serve = mysql_connect('localhost', 'root', '12345');
if(!$serve){ echo 'erro';}
$db = mysql_select_db('youhere', $serve);


?>  
