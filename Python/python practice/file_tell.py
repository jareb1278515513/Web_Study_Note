# 配合file_write.py文件食用~~~
#Python/python practice/file_write.py
# 打开一个文件
fo = open("foo.txt", "r+")
str = fo.read(10)
print ("读取的字符串是 : ", str)
 
# 查找当前位置
position = fo.tell()
print ("当前文件位置 : ", position)
 
# 把指针再次重新定位到文件开头
position = fo.seek(0, 0)
str = fo.read(10)
print ("重新读取字符串 : ", str)
# 关闭打开的文件
fo.close()