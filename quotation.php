<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	<title>客戶用詢價頁面</title>
</head>

<body>
<div id="wrapper">
	<h2>客戶用詢價頁面</h2>
	
	<?php
	
	if($_SESSION['username'] != null)
	{
	        echo "歡迎您&nbsp;&nbsp;".$_SESSION['username'].'&nbsp;&nbsp;<a href="logout.php">登出</a>';
	        echo "<a href='history.php'>我的詢價紀錄</a>&nbsp;&nbsp;";
	}
	else
	{
	        echo '您無權限觀看此頁面!';
	        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
	}
	?>
	
<section id="main" style="width:80%;">

	<form method="post" action="quotation_finish.php">
		<img style="width: 100%" src="images/pm5005.jpg">
		<div>商品1</div>
		<div>規 格：Marantz PM5005<br /></div>
		<div>定 價：16000 元</div>
		<div>庫 存：20 件</div>
		<!-- <div><input class="product_bt"
	    style="cursor: pointer;" onclick="location='addItem.php?sn=1';"
	    value="加入詢價單" type="button"/><div> -->
	    <div class="field">
			<div class="select-wrapper">
				欲詢價數量<select name="product1" >
			    	<option value="0" selected>0</option>
				　	<option value="1">1</option>
				　	<option value="2">2</option>
				　	<option value="3">3</option>
				　	<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				</select>
			</div>
		</div>

	    <img style="width: 100%" src="images/speaker.jpg">
		<div>商品2</div>
		<div>規 格：Crystal AudioVideo THX SELECT<br /></div>
		<div>定 價：18000 元</div>
		<div>庫 存：25 件</div>
		<div class="field">
			<div class="select-wrapper">
				欲詢價數量<select name="product2" >
			    	<option value="0" selected>0</option>
				　	<option value="1">1</option>
				　	<option value="2">2</option>
				　	<option value="3">3</option>
				　	<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				</select>
			</div>
		</div>

	    <img style="width: 100%" src="images/denon.jpg">
		<div>商品3</div>
		<div>規 格：Denon AVR-X4100W<br /></div>
		<div>定 價：79900 元</div>
		<div>庫 存：15 件</div>
		<div class="field">
			<div class="select-wrapper">
				欲詢價數量<select name="product3" >
			    	<option value="0" selected>0</option>
				　	<option value="1">1</option>
				　	<option value="2">2</option>
				　	<option value="3">3</option>
				　	<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				</select>
			</div>
		</div>
		<hr />
		
	    <div class="field">
			<textarea name="message" id="message" placeholder="留言給我們：" rows="4"></textarea>
		</div>
		<div><input class="product_bt"
	    style="cursor: pointer;" value="送出詢價單" type="submit"/><div>

	</form>


</section>
</div>

</body>
</html>



