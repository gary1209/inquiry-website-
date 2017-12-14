<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include("mysql.php");
    $id=$_POST['id'];
    $answer=$_POST['price'];
    $sql = "update history set answer='$answer' where id ='$id'";
    if(mysqli_query($my_link,$sql)){
                echo "<script>alert('報價成功!'); location.href = 'inquiry.php';</script>";
                //echo '<meta http-equiv=REFRESH CONTENT=2;url=quotation.php>';
        }
        else{
                echo "<script>alert('報價失敗!'); location.href = 'inquiry.php';</script>";
        }
?>
