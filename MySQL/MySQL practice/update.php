<?php
$dbhost = 'localhost';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = 'root';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
echo '<h1>BABYMONSTER</h1>';
if(! $conn )
{
    die('连接失败: ');
}
// 设置编码，防止中文乱码
mysqli_query($conn , "set names utf8");
 
$sql = 'UPDATE member
        SET role="vocal"
        WHERE name="RORA"';
 
mysqli_select_db( $conn, 'BABYMONSTER' );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
    die('无法更新数据: ' . mysqli_error($conn));
}
echo '数据更新成功！';
echo '<table border="1"><tr><td>名字</td><td>年龄</td><td>队内担当</td><td>国籍</td>';
$sel='SELECT * FROM member';
$rsel=mysqli_query($conn,$sel);
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