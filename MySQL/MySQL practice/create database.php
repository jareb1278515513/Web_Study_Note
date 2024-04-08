<?php
$host = 'localhost';
$user='root';
$password='root';
$conn = mysqli_connect($host,$user,$password);
if(!$conn){
    die('连接失败');
}
echo '连接成功！<br>';
$cre='CREATE DATABASE BM';
$rescre=mysqli_query($conn,$cre);
if(!$rescre){
    die('创建数据库失败'. mysqli_error($conn));
}
echo '数据库BM创建成功';
?>