# <center><font face="黑体" font color=SeaGreen >加密通信实验简述</font></center>
<center><font face="楷体" size =5 >Jaren</font></center> 

## 一、实验环境（实验拓扑、节点介绍）
实验使用了两台windows虚拟机，一台用作服务端，一台用作客户端
实验在VMware Workstation上进行，两台虚拟机通过NAT模式联网
其中，服务端虚拟机IP：193.168.42.131、客户端虚拟机IP：193.168.42.128

## 二、程序概要设计(或使用的工具介绍)
### 服务端
服务端`server.py`源代码使用AES加密算法的ECB模式对接收到的数据进行解密，并将解密后的数据发送回客户端。
 
#### 导入模块
- `socket`库用于创建网络连接。
- `Crypto.Cipher`和`Crypto.Random`来自`PyCryptodome`库，用于加密和解密操作。
定义密钥
- 这里使用了一个16字节的密钥，AES算法要求密钥长度为16字节（128位）、24字节（192位）或32字节（256位）。
解密函数
- `decrypt_data(data)`: 这个函数使用AES解密算法中的ECB模式对数据进行解密。
- `AES.new(key, AES.MODE_ECB)`: 使用提供的密钥和ECB模式创建一个AES解密器。
- `cipher.decrypt(data)`: 对传入的数据进行解密。
- `return decrypted_data.rstrip(b'\0')`: 使用 `rstrip()` 方法去除解密后数据末尾的填充字节（这里假设数据使用了零填充）。


#### 主函数
- 创建一个TCP套接字。
- 将套接字绑定到指定的IP地址和端口。
- 开始监听连接，允许最多10个等待连接。
- 接受一个连接并获取客户端地址。
接收和处理数据
- 不断接收数据（每次最多1024字节）。
- 如果收到的数据为空，跳出循环。
- 打印接收到的加密数据。
- 调用`decrypt_data`函数解密数据。
- 如果解密成功，打印解密后的明文，并将其发送回客户端。
- 关闭连接。

#### 启动服务器
- 检查是否直接运行该脚本，如果是，则调用main函数启动服务器。

### 客户端
客户端client.py源代码使用AES加密算法对传输数据进行加密，并通过TCP协议与服务器进行通信。
 
#### 导入模块
- `socket`: 用于创建网络连接。
- `Crypto.Cipher.AES`: 用于AES加密。
- `Crypto.Random.get_random_bytes`: 用于生成随机字节。
#### 定义密钥
- key 是16字节的密钥，这里使用固定的密钥。注意：在实际应用中，应通过安全的方式管理和传输密钥。
加密函数
- `encrypt_data(data)`: 这个函数使用AES加密算法中的ECB模式加密数据。
- `AES.new(key, AES.MODE_ECB)`: 使用提供的密钥和ECB模式创建一个AES加密器。
- `data.ljust(32 * (len(data) // 16 + 1))`: 将数据填充到32字节的倍数（AES加密需要数据块大小为16字节的倍数，代码中填充到了32字节的倍数以简化处理）。
主函数
- `IP=input("请输入服务端IP: ")`: 从用户输入获取服务器的IP地址。
- `client_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)`: 创建一个TCP套接字。
- `client_socket.connect((IP, 2000))`: 连接到指定IP地址和端口2000的服务器。
循环发送数据
- `while True`: 无限循环，直到用户输入“quit”。
- `message = input("请输入传输数据(输入'quit'以退出): ")`: 获取用户输入的数据。
- `if message.lower() == 'quit': break`: 如果用户输入“quit”，则退出循环。
- `encrypted_data = encrypt_data(message.encode())`: 将用户输入的数据加密。
- `print("所发送密文为:", encrypted_data)`: 输出加密后的数据（密文）。
- `client_socket.sendall(encrypted_data)`: 将加密后的数据发送给服务器。
- `response = client_socket.recv(1024)`: 接收服务器的响应。
- `print("服务器响应,返回数据:", response.decode())`: 输出服务器的响应。
- `print ("对比输入数据与返回数据\n输入数据为:%s \n返回数据为:%s "%(message, response.decode()))`: 比较并输出原始输入数据和服务器返回的数据。
- `client_socket.close()`: 关闭客户端套接字。
#### 程序入口
- 检查脚本是否作为主程序运行，如果是，则调用 main() 函数。

## 实验步骤、实验结果、分析
部署好虚拟机后，首先运行服务端程序`server.py`，服务端进入等待连接状态
 
![alt text](<img/屏幕截图 2024-05-20 143631.png>)

接着运行客户端程序`client.py`
 
![alt text](<img/屏幕截图 2024-05-20 143646.png>)

输入服务端IP（192.168.42.131）后，服务端显示接收到来自于客户端IP（192.168.42.128）的连接，客户端显示等待数据输入

![alt text](<img/屏幕截图 2024-05-20 143727.png>)  

![alt text](<img/屏幕截图 2024-05-20 143738.png>)

接下来，客户端输入数据加密并发送，服务端收到密文后显示密文并解密，将明文返回到客户端，客户端打印输入和返回的数据，经对比可得：一致。 
接着可以继续传输数据，直至输入‘quit’结束。 

![alt text](<img/屏幕截图 2024-05-20 143825.png>)

![alt text](<img/屏幕截图 2024-05-20 143815.png>)

## 提示
- 若出现无法连接的情况可以使用`Ping`指令查看服务端主机是否可以正常使用IP通信

    ![alt text](<img/屏幕截图 2024-05-20 144044.png>)

- 端口选用时应注意避开已占用端口，建议使用1024~65535范围内的端口。
- Windows系统使用`ipconfig`，Linux系统使用`ifconfig`指令查看IP地址

## 源代码
[客户端 client.py](client.py)

![alt text](<img/屏幕截图 2024-05-20 143218.png>)

[服务端 server.py](server.py)

![alt text](<img/屏幕截图 2024-05-20 143224.png>)