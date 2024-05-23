<?php
$host = "localhost";
$user = "root";      //user和password要根据自己的MySQL数据库进行修改
$password = "root";
$dbname = "vuldb";

// 创建连接
$conn = mysqli_connect($host, $user, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("连接失败: " . mysqli_error($conn));
}

// 获取POST请求中的用户名和密码
$user = $_POST['username'];
$pass = $_POST['password'];

// 使用MD5哈希密码
$hashed_password = md5($pass);

// 不安全的SQL查询（易受SQL注入攻击）
$sql = "SELECT username,realname,password FROM users WHERE username = '$user' AND password = '$hashed_password'";
$result = mysqli_query($conn,$sql);

while( $row = mysqli_fetch_assoc( $result ) ) {
    //获取数据表中的数据
    $un = $row["username"];
    $rn  = $row["realname"];

    // 返回username 和 realname
    echo "<pre>User: {$username}<br />username: {$un}<br />realname: {$rn}</pre>";
}
if ($result->num_rows > 0) {
    echo "登录成功";
} else {
    echo "用户名或密码错误";
}

mysqli_close($conn);
?>
