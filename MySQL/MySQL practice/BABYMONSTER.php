<?php
$host ='localhost';
$user='root';
$password='root';
$conn=mysqli_connect($host,$user,$password);
if(!$conn){
    die('连接失败');
}
echo '连接成功！<br>';
mysqli_query($conn , "set names utf8");
$cb='CREATE DATABASE BABYMONSTER';
$rcb=mysqli_query($conn,$cb);
if(!$rcb){
    die('创建数据库失败<br>'. mysqli_error($conn));
}
echo '数据库BABYMONSTER创建成功<br>';
$ct="CREATE TABLE member(".
    "id INT NOT NULL AUTO_INCREMENT,".
    "name CHAR(10) NOT NULL ,". 
    "age INT NOT NULL ,".
    "role CHAR(10) NOT NULL ,". 
    "nationality CHAR(10) NOT NULL ,".
    "PRIMARY KEY (id))ENGINE=InnoDB DEFAULT CHARSET=utf8;";
mysqli_select_db($conn,'BABYMONSTER');
$rct=mysqli_query($conn,$ct);
if(!$rct){
    die('数据表创建失败: ' . mysqli_error($conn));
}
echo "数据表创建成功<br>";
$datainto ="INSERT INTO member". 
            "(name,age,role,nationality)". 
            "VALUES". 
            "('RUKA',22,'rap,dance','Japan'),".
            "('PHARITA',19,'vocal','Tailand'),".
            "('ASA',18,'rap,dance','Japan'),". 
            "('AHYEON',17,'ace','Korea'),". 
            "('RAMI',17,'vocal','Korea'),". 
            "('RORA',16,'face,vocal','Korea'),". 
            "('CHIQUITA',15,'dance','Tailand')";
            

mysqli_select_db($conn,'BABYMONSTER');
$dinto=mysqli_query($conn,$datainto);
if(!$dinto){
    die('无法插入数据: ' . mysqli_error($conn));
}
echo "数据插入成功<br>";
$sel='SELECT * FROM member';
mysqli_select_db($conn,'BABYMONSTER');
$rsel=mysqli_query($conn,$sel);
if(!$rsel){
    die('无法读取数据: ' . mysqli_error($conn));
}
echo '<h1>BABYMONSTER</h1>';
echo '<table border="1"><tr><td>名字</td><td>年龄</td><td>队内担当</td><td>国籍</td>';
while($row=mysqli_fetch_assoc($rsel)){
    echo "<tr><td>{$row['name']}</td>". 
         "<td>{$row['age']}</td>". 
         "<td>{$row['role']}</td>". 
         "<td>{$row['nationality']}</td>". 
         "</tr>";
}
echo '</table>';
mysqli_close($conn);
?>