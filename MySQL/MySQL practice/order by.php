<?php
$dbhost = 'localhost';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = 'root';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('连接失败: ');
}
// 设置编码，防止中文乱码
mysqli_query($conn , "set names utf8");
 
$sql = 'SELECT *
        FROM babymonster
        ORDER BY  nationality ASC , age DESC';
 
mysqli_select_db( $conn, 'YG' );
$rsel_bm = mysqli_query( $conn, $sql );
if(! $rsel_bm)
{
    die('无法读取数据: ' . mysqli_error($conn));
}
echo '<table border="1"><tr><td>名字</td><td>年龄</td><td>队内担当</td><td>国籍</td>';
while($row_bm=mysqli_fetch_assoc($rsel_bm)){
    echo "<tr><td>{$row_bm['name']}</td>". 
         "<td>{$row_bm['age']}</td>". 
         "<td>{$row_bm['role']}</td>". 
         "<td>{$row_bm['nationality']}</td>". 
         "</tr>";
}
echo '</table>';
mysqli_close($conn);
?>