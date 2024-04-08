<?php
$dbhost = 'localhost';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = 'root';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('连接失败: ' );
}
// 设置编码，防止中文乱码
mysqli_query($conn , "set names utf8");
mysqli_select_db( $conn, 'YG' );
$un =  "SELECT * FROM babymonster
        WHERE nationality = 'Korea'
        UNION ALL
        SELECT * FROM blackpink
        WHERE nationality = 'Korea'
        ORDER BY age";

$run=mysqli_query($conn,$un);
if(! $run )
{
    die('无法读取数据: ' . mysqli_error($conn));
}
echo '<table border="1"><tr><td>名字</td><td>年龄</td><td>队内担当</td><td>国籍</td>';
while($row = mysqli_fetch_array($run))
{
    echo "<tr><td>{$row['name']}</td>". 
         "<td>{$row['age']}</td>". 
         "<td>{$row['role']}</td>". 
         "<td>{$row['nationality']}</td>". 
         "</tr>";
}
echo '</table>';
?>
