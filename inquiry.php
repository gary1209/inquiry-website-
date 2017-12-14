

<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	<title>業務用報價頁面</title>
</head>

<body>
<div id="wrapper">
	<h2>業務用報價頁面</h2>
	
	<?php
	
	if($_SESSION['username'] != null)
	{
	        echo "歡迎您&nbsp;&nbsp;".$_SESSION['username'].'&nbsp;&nbsp;<a href="logout.php">登出</a>';
	}
	else
	{
	        echo '您無權限觀看此頁面!';
	        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
	}
	?>
	
<section id="main" style="width:80%;min-height: 800px">
 
<?php

	include("mysql.php");
	$sql = "select id, email,p1, p2,p3,text,answer from history where answer IS NULL ";
	//$sql = select * from ask where email='$email';

	$result = mysqli_query($my_link,$sql);

	if (mysqli_num_rows($result) > 0) {
		echo "尚未回覆的詢價<br>";

		
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        echo "詢價單編號：" . $row["id"]. "&nbsp;&nbsp;email：".$row["email"] ."&nbsp;&nbsp;商品1數量：".$row["p1"] ."&nbsp;&nbsp;商品2數量：".$row["p2"] ."&nbsp;&nbsp;商品3數量：".$row["p3"] . "&nbsp;&nbsp;留言內容". $row["text"]."<br>";
	    }
	    echo '<hr /><form action="inquiry_finish.php" method="post"><textarea name="id" placeholder="詢價單編號" rows="1"></textarea><br><textarea name="price" placeholder="price" rows="1"></textarea><br><button style="width:85px;font-size: 14px;"  type="submit">報價</button></form>';
	} 

	else {
	    echo "沒有尚未回覆的詢價紀錄！";
	}
	?>



</section>
</div>

</body>
</html>