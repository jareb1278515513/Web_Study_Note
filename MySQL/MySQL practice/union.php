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
$un = "SELECT nationality FROM babymonster
        UNION
        SELECT nationality FROM blackpink
        ORDER BY nationality";

$run=mysqli_query($conn,$un);
if(! $run )
{
    die('无法读取数据: ' . mysqli_error($conn));
}
echo '<table border="1"><tr>';
while($row = mysqli_fetch_array($run))
{
    echo "<td>{$row['nationality']}</td>". 
         "</tr>";
}
echo '</table>';
?>
