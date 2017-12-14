



<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	<title>我的詢價紀錄</title>
</head>

<body>
<div id="wrapper">
	<h2>我的詢價紀錄</h2>
	
	<?php
	
	if($_SESSION['username'] != null)
	{
	        echo "歡迎您&nbsp;&nbsp;".$_SESSION['username'].'&nbsp;&nbsp;<a href="logout.php">登出</a>'.'<a href="quotation.php">回詢價頁面</a>';
	}
	else
	{
	        echo '您無權限觀看此頁面!';
	        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
	}
	?>
	
<section id="main" style="width:80%;min-height: 800px">
	<?php
	$email=$_SESSION['username'];

	include("mysql.php");
	$sql = "select id, p1, p2,p3,text,answer from history where email='$email' ";
	//$sql = select * from ask where email='$email';

	$result = mysqli_query($my_link,$sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        echo "詢價單編號：" . $row["id"]. "&nbsp;&nbsp;商品1數量：".$row["p1"] ."&nbsp;&nbsp;商品2數量：".$row["p2"] ."&nbsp;&nbsp;商品3數量：".$row["p3"] . "&nbsp;&nbsp;留言內容". $row["text"]."&nbsp;&nbsp;報價".$row["answer"]. "<br>";
	    }
	} 

	else {
	    echo "沒有詢價紀錄！";
	}
	?>


</section>
</div>

</body>
</html>