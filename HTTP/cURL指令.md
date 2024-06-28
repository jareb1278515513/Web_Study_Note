# <center><font face="黑体" font color=SeaGreen >cURL指令</font></center>
<center><font face="楷体" size =5 >Jaren</font></center> 

## 一、curl 简介
- cURL：全称 client URL，客户端 URL 工具。
- cURL 是一种常用的命令行工具，主要用来请求 Web 服务器，也可以用来下载文件。
- 一般情况下，Linux/Windows/Mac 系统都默认安装了 cURL 指令，所以我们可以直接使用。

- 官网：https://curl.se/
- GitHub源码：https://github.com/curl/curl

## 二、参数介绍 
查看帮助文档：`curl -h`

-v, 显示响应结果  -v参数可以查看http和https请求过程

X, --request : 指定HTTP请求方法，常见的方法有GET、POST、PUT、DELETE等。

-d, --data : 发送POST请求时，用于指定请求的数据。可以是普通文本、JSON、XML等格式。

-H, --header: 添加自定义的请求头。可以使用该参数多次来添加多个请求头。

-i, --include: 在输出中包含HTTP响应头。

-o, --output : 将服务器的响应保存到指定的文件中。

-O, --remote-name: 将服务器的响应保存为本地文件，文件名与服务器上的文件名相同。

-u, --user user:password: 指定用户名和密码，用于进行HTTP基本身份验证。

-A, --user-agent : 设置请求的User-Agent头，模拟不同的浏览器或客户端。

-k, --insecure: 忽略SSL证书验证，用于不信任的HTTPS连接。

-L, --location: 跟随重定向，自动请求重定向后的URL。

-c, --cookie : 发送请求时附带的Cookie信息。

-b, --cookie-jar : 将服务器返回的Cookie保存到指定的文件中。

-x, --proxy host:port: 使用指定的代理服务器发送请求。

-I, --head: 发送HEAD请求，只获取服务器的响应头。

-s, --silent: 静默模式，不输出任何信息。

–max-time : 设置请求的最长时间，超时后请求会被中断。

## 三、使用指南
###  1、发送各种方式的请求
> -X参数指定 HTTP 请求的方法。

- 发送 GET 请求（不携带数据）
`curl www.example.com`

- 发送 GET 请求（携带数据，借助 -G 和 -d ）
`curl -G -d 'q=kitties' -d 'count=20'  www.example.com`

- 发送 POST 请求（不携带数据）
`curl -X POST www.example.com`

- 发送 POST 请求（携带数据：借助 -d 参数）
`curl -X POST -d '{"user":"123","pass":"456"}' www.example.com `
  另外，使用 -d 参数以后，HTTP 请求会自动加上标头 Content-Type : application/x-www-form-urlencoded，并且会自动将请求转为 POST 方法，因此可以省略-X POST。
`curl -d '{"user":"123","pass":"456"}' www.example.com `

- 发送 PUT 请求
`curl -X PUT www.example.com`

- 发送 DELETE 请求
`curl -X DELETE www.example.com`

### 2、下载文件
>-O参数将服务器回应保存成文件，并将 URL 的最后部分当作文件名。

- 一般下载（默认路径 + 文件名）：命令行处于哪一个目录，该指令就会将文件保存在哪。
`curl -O www.example.com/123`

- 进阶下载（指定下载路径 + 文件名）：借助小写的-o参数，这里注意小写的 -o 要在前面。
`curl -o ./download/myIndex.html -O www.example.com`

- 断点续传（ -C - 标识续传）
`curl -C - -o ./download/myIndex.html -O www.example.com`

### 3、上传文件
>-F参数用来向服务器上传二进制文件。

- 一般上传：该命令会给 HTTP 请求加上标头 Content-Type: multipart/form-data ，然后将文件上传。
`curl -F 'file=@old.png' baidu.com`

- 进阶上传：指定上传类型 + 重命名上传文件
`curl -F 'file=@old.png;type=image/png;filename=new.png' baidu.com`

### 4、Header 信息
>-H参数会在请求当中添加 Header 参数。
>-I参数会打印服务器返回的 HEAD 信息。

- 单个请求头
`curl -H 'Accept-Language: en-US' www.example.com`

- 多个请求头
`curl -H 'Accept-Language: zh-CN' -H 'accept: text/html' www.example.com`

- 设置 Referer 标头（用来规避一些网站的防盗链设置）
`curl -H 'Referer: baidu.com' www.example.com`

- 打印服务器返回的 HEAD 信息
`curl -I https://www.example.com`

### 5、Cookie 管理
>-c参数保存服务器发送回来的 Cookie。
>-b参数向服务器发送 Cookie。

- 保存服务器返回的 Cookie 信息：命令行处于哪一个目录，Cookie文件就会保存在哪。
`curl -c cookie.txt baidu.com`

- 向服务器发送 Cookie ：
`curl -b 'name=123&pass=456' baidu.com`
或者
`直接读取本地文件中的 Cookie 信息`
`curl -b cookie.txt baidu.com`

### 6、其他使用情况
- -k参数指定跳过 SSL 检测。
`curl -k https://www.example.com`

- -L参数让 HTTP 请求跟随服务器的重定向（curl 默认不跟随重定向）。
`curl -L baidu.com`

- --limit-rate参数限制访问速度，可作下载限速（默认单位是“字节”）。
`curl --limit-rate 2048 -O baidu.com`

- -u参数用来设置服务器认证的用户名和密码。
`curl -u 'admin:123456' baidu.com`
上面命令设置用户名为 admin ，密码为 123456 ，然后自动为其加上 HTTP 标头 Authorization: Basic … 。

- -v参数输出通信的整个过程，用于调试。
`curl -v www.example.com`













