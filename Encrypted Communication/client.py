import socket
from Crypto.Cipher import AES
from Crypto.Random import get_random_bytes

# 16字节的密钥，需要与服务器端保持一致
key = b'ThisIsASecretKey'

def encrypt_data(data):
    cipher = AES.new(key, AES.MODE_ECB)
    return cipher.encrypt(data.ljust(32 * (len(data) // 16 + 1)))

def main():
    IP=input("请输入服务端IP: ")
    client_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    client_socket.connect((IP, 2000))

    while True:
        message = input("请输入传输数据(输入'quit'以退出): ")
        if message.lower() == 'quit':
            break

        # 加密数据
        encrypted_data = encrypt_data(message.encode())
        print("所发送密文为:",encrypted_data)
        # 发送数据
        client_socket.sendall(encrypted_data)

        # 接收服务器响应
        response = client_socket.recv(1024)
        print("服务器响应,返回数据:", response.decode())

        print ("对比输入数据与返回数据\n输入数据为:%s  \n返回数据为:%s  "%(message,response.decode()))

    client_socket.close()

if __name__ == "__main__":
    main()
