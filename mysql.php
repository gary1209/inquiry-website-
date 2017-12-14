<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$my_link = mysqli_connect("127.0.0.1","root","0");
	mysqli_select_db($my_link,"hw3");

if(!@mysqli_connect("127.0.0.1","root","0")){
        die("無法對資料庫連線");}

if(!@mysqli_select_db($my_link,"hw3")){
        die("無法使用資料庫");}
?> 