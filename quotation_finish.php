<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    $product1_number=$_POST['product1'];
    $product2_number=$_POST['product2'];
    $product3_number=$_POST['product3'];
    $message=$_POST['message'];
    $email=$_SESSION['username'];
    include("mysql.php");
    $sql = "insert into history (email,p1,p2,p3,text) values ('$email','$product1_number','$product2_number','$product3_number','$message')";
    if(mysqli_query($my_link,$sql)){
                echo "<script>alert('詢價單成功送出，可以到我的詢價紀錄查詢!'); location.href = 'quotation.php';</script>";
                //echo '<meta http-equiv=REFRESH CONTENT=2;url=quotation.php>';
        }
        else{
                echo "<script>alert('詢價單送出失敗!'); location.href = 'quotation.php';</script>";
        }
?>
