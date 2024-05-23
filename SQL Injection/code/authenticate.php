<?php
$host = "localhost";
$user = "root";       //user和password要根据自己的MySQL数据库进行修改
$password = "root";
$dbname = "vuldb";

// 创建连接
$conn = mysqli_connect($host, $user, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("连接失败: " . mysqli_error($conn));
}

// 获取POST请求中的用户名和密码，并进行输入校验
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = trim($_POST['username']);
    $pass = trim($_POST['password']);

    if (empty($user) || empty($pass)) {
        echo "用户名和密码不能为空";
        exit();
    }

    // 使用MD5哈希密码
    $hashed_password = md5($pass);

    // 使用准备好的语句和参数化查询来防止SQL注入
    $sql = "SELECT username, realname, password FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);//预处理SQL语句。
    $stmt->bind_param("ss", $user, $hashed_password);//绑定用户输入的参数，从而防止SQL注入。
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($db_user, $db_realname, $db_password);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        echo "<pre>User: {$user}<br />username: {$db_user}<br />realname: {$db_realname}</pre>";
        echo "登录成功";
    } else {
        echo "用户名或密码错误";
    }

    $stmt->close();
} else {
    echo "非法请求";
}

mysqli_close($conn);

?>
