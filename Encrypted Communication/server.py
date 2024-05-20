import socket
from Crypto.Cipher import AES
from Crypto.Random import get_random_bytes

# 16字节的密钥，需要与客户端保持一致
key = b'ThisIsASecretKey'

def decrypt_data(data):
    cipher = AES.new(key, AES.MODE_ECB)
    decrypted_data = cipher.decrypt(data)
    return decrypted_data.rstrip(b'\0')

def main():
    server_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    server_socket.bind(('192.168.42.131', 2000))
    server_socket.listen(10)
    print("正在等待连接...")
    connection, address = server_socket.accept()
    print("连接来自于:", address)

    while True:
        encrypted_data = connection.recv(1024)
        if not encrypted_data:
            break

        print("收到密文为:",encrypted_data)

        # 解密数据
        decrypted_data = decrypt_data(encrypted_data)

        if decrypted_data :
            print("解密后明文为:", decrypted_data.decode())
            # 将解密后的数据发送回客户端
            connection.sendall(decrypted_data)
            print("已将数据发送回客户端！")
        else:
            print("解密失败.")

    connection.close()

if __name__ == "__main__":
    main()
