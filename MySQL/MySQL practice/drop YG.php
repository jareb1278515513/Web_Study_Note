<?php
$host = 'localhost';
$user='root';
$password='root';
$conn = mysqli_connect($host,$user,$password);
if(!$conn){
    die('连接失败');
}
echo '连接成功！<br>';
$dro='DROP DATABASE YG';
$resdro=mysqli_query($conn,$dro);
if(!$resdro){
    die('删除数据库失败'. mysqli_error($conn));
}
echo '数据库YG删除成功';
?>