import turtle as t
import random

t.setup(1000, 600)#为了避免绘制正多边形时超出绘图区域,可以首先设置绘图区域的大小（书上写的）
t.colormode(255)# 设置颜色模式为255 
def draw_n(n,s):
    #参数声明：n - N边形边数；s - 边长；c - 画笔颜色
    angle=360/n #外角
    for i in range(n):
        t.forward(s)
        t.left(angle)

t.speed(100) #控制速度

for i in range(30):
    x = random.randint(-400, 400)  # 随机生成x坐标
    y = random.randint(-200, 100)  # 随机生成y坐标

    t.penup()  # 抬起画笔
    t.goto(x, y)  # 将画笔移动到指定位置
    t.pendown()  # 放下画笔

    n = random.randint(3, 12)  # 随机生成边数
    s = random.randint(10, 60)  # 随机生成边长
    r = random.randint(0,255)  
    g = random.randint(0,255)
    b = random.randint(0,255)
    t.color(r, g, b) 

    draw_n(n,s) # 调用函数 绘制正N边形