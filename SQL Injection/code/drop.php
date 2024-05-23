<?php
$host = 'localhost';
$user='root';//user和password要根据自己的MySQL数据库进行修改
$password='root';
$conn = mysqli_connect($host,$user,$password);
if(!$conn){
    die('连接失败');
}

$dro='DROP DATABASE vuldb';
$resdro=mysqli_query($conn,$dro);
if(!$resdro){
    die('删除数据库失败'. mysqli_error($conn));
}
echo '数据库vuldb删除成功';
mysqli_close($conn);
?>