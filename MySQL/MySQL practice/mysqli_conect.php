<?php
$dbhost='localhost';
$dbuser = 'root';            // mysql用户名
$dbpass = 'root';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('Could not connect');
}
echo '数据库连接成功！';
mysqli_close($conn);
?>