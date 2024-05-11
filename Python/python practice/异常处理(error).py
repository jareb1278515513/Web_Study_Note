'''在执行代码前为了测试方便，我们可以先去掉 testfile 文件的写权限，命令如下：
chmod -w testfile'''
try:
    fh = open("testfile", "w")
    fh.write("这是一个测试文件，用于测试异常!!")
except IOError:
    print ("Error: 没有找到文件或读取文件失败")
else:
    print ("内容写入文件成功")
    fh.close()