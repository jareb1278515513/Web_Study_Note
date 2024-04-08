<?php
//MySQL建立链接
$host ='localhost';
$user='root';
$password='root';
$conn=mysqli_connect($host,$user,$password);
if(!$conn){
    die('连接失败');
}
echo '连接成功！<br>';

//创建数据库
mysqli_query($conn , "set names utf8");
$cb='CREATE DATABASE YG';
$rcb=mysqli_query($conn,$cb);
if(!$rcb){
    die('创建数据库失败<br>'. mysqli_error($conn));
}
echo '数据库YG创建成功<br>';

//创建数据表_babymonster
$ct_bm="CREATE TABLE babymonster(".
    "id INT NOT NULL AUTO_INCREMENT,".
    "name CHAR(10) NOT NULL ,". 
    "age INT NOT NULL ,".
    "role CHAR(10) NOT NULL ,". 
    "nationality CHAR(10) NOT NULL ,".
    "PRIMARY KEY (id))ENGINE=InnoDB DEFAULT CHARSET=utf8;";
mysqli_select_db($conn,'YG');
$rct_bm=mysqli_query($conn,$ct_bm);
if(!$rct_bm){
    die('数据表babymonster创建失败: ' . mysqli_error($conn));
}
echo "数据表babymonster创建成功<br>";

//创建数据表_blackpink
$ct_bp="CREATE TABLE blackpink(".
    "id INT NOT NULL AUTO_INCREMENT,".
    "name CHAR(10) NOT NULL ,". 
    "age INT NOT NULL ,".
    "role CHAR(10) NOT NULL ,". 
    "nationality CHAR(10) NOT NULL ,".
    "PRIMARY KEY (id))ENGINE=InnoDB DEFAULT CHARSET=utf8;";
mysqli_select_db($conn,'YG');
$rct_bp=mysqli_query($conn,$ct_bp);
if(!$rct_bp){
    die('数据表blackpink创建失败: ' . mysqli_error($conn));
}
echo "数据表blackpink创建成功<br>";

//插入数据_babymonster
$datainto_bm ="INSERT INTO babymonster". 
            "(name,age,role,nationality)". 
            "VALUES". 
            "('RUKA',22,'rap,dance','Japan'),".
            "('PHARITA',19,'vocal','Tailand'),".
            "('ASA',18,'rap,dance','Japan'),". 
            "('AHYEON',17,'ace','Korea'),". 
            "('RAMI',17,'vocal','Korea'),". 
            "('RORA',16,'face,vocal','Korea'),". 
            "('CHIQUITA',15,'dance','Tailand')";
            
//插入数据_blackpink
$datainto_bp ="INSERT INTO blackpink". 
            "(name,age,role,nationality)". 
            "VALUES". 
            "('ROSÉ',27,'vocal','Korea'),".
            "('JENNIE',28,'ace,rap','Korea'),".
            "('JISOO',29,'vocal,face','Korea'),". 
            "('LISA',27,'dance,rap','Tailand')";

$dinto_bp=mysqli_query($conn,$datainto_bp);
if(!$dinto_bp){
    die('无法在blackpink中插入数据: ' . mysqli_error($conn));
}
echo "blackpink数据插入成功<br>";

//设置标题
echo "<h1>YG Family</h1>";

//输出数据_babymonster
$sel_bm='SELECT * FROM babymonster';
$rsel_bm=mysqli_query($conn,$sel_bm);
if(!$rsel_bm){
    die('无法在babymonster中读取数据: ' . mysqli_error($conn));
}
echo '<h2>BABYMONSTER</h2>';
echo '<table border="1"><tr><td>名字</td><td>年龄</td><td>队内担当</td><td>国籍</td>';
while($row_bm=mysqli_fetch_assoc($rsel_bm)){
    echo "<tr><td>{$row_bm['name']}</td>". 
         "<td>{$row_bm['age']}</td>". 
         "<td>{$row_bm['role']}</td>". 
         "<td>{$row_bm['nationality']}</td>". 
         "</tr>";
}
echo '</table>';

//输出数据_blackpink
$sel_bp='SELECT * FROM blackpink';
$rsel_bp=mysqli_query($conn,$sel_bp);
if(!$rsel_bp){
    die('无法在blackpink中读取数据: ' . mysqli_error($conn));
}
echo '<h2>BLACKPINK</h2>';
echo '<table border="1"><tr><td>名字</td><td>年龄</td><td>队内担当</td><td>国籍</td>';
while($row_bp=mysqli_fetch_assoc($rsel_bp)){
    echo "<tr><td>{$row_bp['name']}</td>". 
         "<td>{$row_bp['age']}</td>". 
         "<td>{$row_bp['role']}</td>". 
         "<td>{$row_bp['nationality']}</td>". 
         "</tr>";
}
echo '</table>';

mysqli_close($conn);
?>