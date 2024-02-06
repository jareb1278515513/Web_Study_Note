# <center><font face="黑体" font color=SeaGreen >CSS学习笔记</font></center>
<center><font face="楷体" size =5 >Jaren</font></center> 

[CSS 参考手册](https://www.runoob.com/cssref/css-reference.html)<br/>
[CSS 属性](https://www.runoob.com/cssref/css3-pr-align-content.html)<br/>
[CSS 实例](https://www.runoob.com/css/css-examples.html)
## 一、CSS语法
### CSS实例
CSS 规则由两个主要的部分构成：选择器，以及一条或多条声明:
![alt text](img/632877C9-2462-41D6-BD0E-F7317E4C42AC.jpg)
选择器通常是您需要改变样式的 HTML 元素。

每条声明由一个属性和一个值组成。

属性（property）是您希望设置的样式属性（style attribute）。
每个属性有一个值。
==属性和值被冒号分开。== 

### CSS 实例
CSS声明总是以分号 `;` 结束，
声明总以大括号` { } `括起来:
`p {color:red;text-align:center;}`
为了让CSS可读性更强，你可以每行只描述一个属性:
```
p
{
    color:red;
    text-align:center;
}
```
### CSS 注释
注释是用来解释你的代码，并且可以随意编辑它，浏览器会忽略它。

CSS注释以 `/*` 开始, 以 `*/` 结束, 实例如下:
```
/*这是个注释*/
p
{
    text-align:center;
    /*这是另一个注释*/
    color:black;
    font-family:arial;
}
```

## 二、CSS id 和 class 选择器
如果你要在HTML元素中设置CSS样式，你需要在元素中设置"id" 和 "class"选择器。
### id 选择器
id 选择器可以为标有特定 id 的 HTML 元素指定特定的样式。

HTML元素以id属性来设置id选择器,CSS 中 id 选择器以 "`#`" 来定义。

以下的样式规则应用于元素属性 id="para1":
```
#para1
{
    text-align:center;
    color:red;
}
```
- 注意：ID属性不要以数字开头，数字开头的ID在 Mozilla/Firefox 浏览器中不起作用。

### class 选择器
class 选择器用于描述一组元素的样式，class 选择器有别于id选择器，class可以在多个元素中使用。

class 选择器在 HTML 中以 class 属性表示, 在 CSS 中，类选择器以一个点 `.` 号显示：

在以下的例子中，所有拥有 center 类的 HTML 元素均为居中。
`.center {text-align:center;}`
你也可以指定特定的 HTML 元素使用 class。

在以下实例中,==所有的 p 元素==使用 class="center" 让该元素的文本居中:
`p.center {text-align:center;}`
![alt text](<img/prtsc 2024-02-04 110916.png>)

多个 class 选择器可以使用空格分开：
```
.center { text-align:center; }
.color { color:#ff0000; }
```
- 注意：类名的第一个字符不能使用数字！它无法在 Mozilla 或 Firefox 中起作用。

## 三、CSS 创建
当读到一个样式表时，浏览器会根据它来格式化 HTML 文档。

### 如何插入样式表
插入样式表的方法有三种:
- 外部样式表(External style sheet)
- 内部样式表(Internal style sheet)
- 内联样式(Inline style)

### 外部样式表
当样式需要应用于很多页面时，外部样式表将是理想的选择。在使用外部样式表的情况下，你可以通过改变一个文件来改变整个站点的外观。每个页面使用 `<link>` 标签链接到样式表。 `<link>` 标签在（文档的）头部：
```
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
```
浏览器会从文件 mystyle.css 中读到样式声明，并根据它来格式文档。

外部样式表可以在任何文本编辑器中进行编辑。
文件不能包含任何的 html 标签。
样式表应该以 .css 扩展名进行保存。
下面是一个样式表文件的例子：
```
hr {color:sienna;}
p {margin-left:20px;}
body {background-image:url("/images/back40.gif");}
```
- 注意：不要在属性值与单位之间留有空格（如："margin-left: 20 px" ），正确的写法是 "margin-left: 20px" 。

### 内部样式表
当单个文档需要特殊的样式时，就应该使用内部样式表。你可以使用 `<style>` 标签在文档头部定义内部样式表，就像这样:
```
<head>
<style>
hr {color:sienna;}
p {margin-left:20px;}
body {background-image:url("images/back40.gif");}
</style>
</head>
```
### 内联样式
由于要将表现和内容混杂在一起，内联样式会损失掉样式表的许多优势。请慎用这种方法，例如当样式仅需要在一个元素上应用一次时。

要使用内联样式，你需要在相关的标签内使用样式（style）属性。Style 属性可以包含任何 CSS 属性。本例展示如何改变段落的颜色和左外边距：
`<p style="color:sienna;margin-left:20px">这是一个段落。</p>`

### 多重样式
如果某些属性在不同的样式表中被同样的选择器定义，那么属性值将从==更具体==的样式表中被==继承==过来。 

例如，外部样式表拥有针对 h3 选择器的三个属性：
```
h3
{
    color:red;
    text-align:left;
    font-size:8pt;
}
```
而内部样式表拥有针对 h3 选择器的两个属性：
```
h3
{
    text-align:right;
    font-size:20pt;
}
```
假如拥有内部样式表的这个页面同时与外部样式表链接，那么 h3 得到的样式是：
```
color:red;
text-align:right;
font-size:20pt;
```
==即颜色属性将被继承于外部样式表，而文字排列（text-alignment）和字体尺寸（font-size）会被内部样式表中的规则取代==
运行结果：
![alt text](<img/02-04 120010.png>)

### 多重样式优先级
样式表允许以多种方式规定样式信息。样式可以规定在单个的 HTML 元素中，在 HTML 页的头元素中，或在一个外部的 CSS 文件中。甚至可以在同一个 HTML 文档内部引用多个外部样式表。

一般情况下，优先级如下：

- ==**（内联样式）Inline style > （内部样式）Internal style sheet >（外部样式）External style sheet > 浏览器默认样式**==

- ==**如果外部样式放在内部样式的后面，则外部样式将覆盖内部样式**==

实例：
```
<head>
    <!-- 外部样式 style.css -->
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <!-- 设置：h3{color:blue;} -->
    <style type="text/css">
      /* 内部样式 */
      h3{color:green;}
    </style>
</head>
<body>
    <h3>显示绿色，是内部样式</h3>
</body>
```
style.css 文件样式代码如下：
```
h3 {
    color:blue;
}
```
运行结果：
![alt text](<img/ps 2024-02-04 111824.png>)
注意：如果外部样式放在内部样式的后面，则外部样式将覆盖内部样式，实例如下：
```
<head>
    <!-- 设置：h3{color:blue;} -->
    <style type="text/css">
      /* 内部样式 */
      h3{color:green;}
    </style>
    <!-- 外部样式 style.css -->
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <h3>显示蓝色，是外部样式</h3>
</body>
```
运行结果：
![alt text](<img/-04 113910.png>)

## 四、CSS Backgrounds（背景）
CSS 背景属性用于定义HTML元素的背景。
CSS 属性定义背景效果:
- background-color
- background-image
- background-repeat
- background-attachment
- background-position

### 背景颜色
background-color 属性定义了元素的背景颜色.

页面的背景颜色使用在body的选择器中:
`body {background-color:#b0c4de;}`
CSS中，颜色值通常以以下方式定义:
- 十六进制 - 如："#ff0000"
- RGB - 如："rgb(255,0,0)"
- 颜色名称 - 如："red"

### 背景图像
background-image 属性描述了元素的背景图像.

默认情况下，背景图像进行平铺重复显示，以覆盖整个元素实体.

页面背景图片设置实例:
`body {background-image:url('paper.gif');}`

### 背景图像 - 水平或垂直平铺
默认情况下 background-image 属性会在页面的水平或者垂直方向平铺。

一些图像如果在水平方向与垂直方向平铺，这样看起来很不协调，如下所示: 
```
body
{
background-image:url('gradient2.png');
}
```
![alt text](<img/屏幕截图 2024-02-04 154032.png>)

如果图像只在水平方向平铺 (repeat-x), 页面背景会更好些:
```
body
{
background-image:url('gradient2.png');
background-repeat:repeat-x;
}
```
![alt text](<img/屏幕截图 2024-02-04 154140.png>)

### 背景图像- 设置定位与不平铺
让背景图像不影响文本的排版

如果你不想让图像平铺，你可以使用 background-repeat 属性:
```
body
{
background-image:url('img_tree.png');
background-repeat:no-repeat;
}
```
![alt text](<img/屏幕截图 2024-02-04 154327.png>)
以上实例中，背景图像与文本显示在同一个位置，为了让页面排版更加合理，不影响文本的阅读，我们可以改变图像的位置。

可以利用 background-position 属性改变图像在背景中的位置:
```
body
{
background-image:url('img_tree.png');
background-repeat:no-repeat;
background-position:right top;
}
```
![alt text](<img/屏幕截图 2024-02-04 154334.png>)

### 背景- 简写属性
在以上实例中我们可以看到页面的背景颜色通过了很多的属性来控制。

为了简化这些属性的代码，我们可以将这些属性合并在同一个属性中.

背景颜色的简写属性为 "background":
`body {background:#ffffff url('img_tree.png') no-repeat right top;}`

当使用简写属性时，属性值的顺序为：:
1. background-color
2. background-image
3. background-repeat
4. background-attachment
5. background-position

以上属性无需全部使用，你可以按照页面的实际需要使用.

### CSS 背景属性
|Property|	描述|
|:-|:-|
|background|简写属性，作用是将背景属性设置在一个声明中|
|background-attachment|	背景图像是否固定或者随着页面的其余部分滚动|
|background-color|设置元素的背景颜色|
|background-image|把图像设置为背景|
|background-position|设置背景图像的起始位置|
|background-repeat|设置背景图像是否及如何重复|

## 五、CSS Text（文本）
### 文本颜色
颜色属性被用来设置文字的颜色。
 颜色是通过CSS最经常的指定：

- 十六进制值 - 如: ＃FF0000
- 一个RGB值 - 如: RGB(255,0,0)
- 颜色的名称 - 如: red

一个网页的背景颜色是指在主体内的选择：
```
body {color:red;}
h1 {color:#00ff00;}
h2 {color:rgb(255,0,0);}
```
对于W3C标准的CSS：如果你定义了颜色属性，你还必须定义背景色属性。

### 文本的对齐方式
文本排列属性是用来设置文本的水平对齐方式。

文本可居中或对齐到左或右,两端对齐.

当text-align设置为"justify"，每一行被展开为宽度相等，左，右外边距是对齐（如杂志和报纸）。
```
h1 {text-align:center;}
p.date {text-align:right;}
p.main {text-align:justify;}
```
### 文本修饰
text-decoration 属性用来设置或删除文本的装饰。

从设计的角度看 text-decoration属性主要是用来删除链接的下划线：
`a {text-decoration:none;}`
也可以这样装饰文字：
```
h1 {text-decoration:overline;}
h2 {text-decoration:line-through;}
h3 {text-decoration:underline;}
```

<small>不建议强调指出不是链接的文本，因为这常常混淆用户。</small>

### 文本转换
文本转换属性是用来指定在一个文本中的大写和小写字母。

可用于所有字句变成大写或小写字母，或每个单词的首字母大写。

实例
```
p.uppercase {text-transform:uppercase;}
p.lowercase {text-transform:lowercase;}
p.capitalize {text-transform:capitalize;}
```
### 文本缩进
文本缩进属性是用来指定文本的第一行的缩进。
`p {text-indent:50px;}`

### 所有CSS文本属性。
|属性|描述|
|:-|:-|
|color|设置文本颜色|
|direction|设置文本方向|
|letter-spacing|设置字符间距|
|line-height|设置行高|
|text-align|对齐元素中的文本|
|text-decoration|向文本添加修饰|
|text-indent|缩进元素中文本的首行|
|text-shadow|设置文本阴影|
|text-transform|控制元素中的字母|
|unicode-bidi|设置或返回文本是否被重写|
|vertical-align|设置元素的垂直对|齐
|white-space|设置元素中空白的处理方式|
|word-spacing|设置字间距|

## 六、CSS Fonts（字体）
CSS字体属性定义字体，加粗，大小，文字样式。
### serif和sans-serif字体之间的区别
![alt text](<img/屏幕截图 2024-02-04 155835.png>)
在计算机屏幕上，sans-serif字体被认为是比serif字体容易阅读
### CSS字型
在CSS中，有两种类型的字体系列名称：

- **通用字体系列** - 拥有相似外观的字体系统组合（如 "Serif" 或 "Monospace"）
- **特定字体系列** - 一个特定的字体系列（如 "Times" 或 "Courier"）
![alt text](<img/屏幕截图 2024-02-04 160007.png>)

### 字体系列
font-family 属性设置文本的字体系列。

font-family 属性应该设置几个字体名称作为一种"后备"机制，如果浏览器不支持第一种字体，他将尝试下一种字体。

注意: 如果字体系列的名称超过一个字，它必须用引号，如Font Family："宋体"。

多个字体系列是用一个逗号分隔指明：
`p{font-family:"Times New Roman", Times, serif;}`

### 字体样式
主要是用于指定斜体文字的字体样式属性。

这个属性有三个值：

- 正常 - 正常显示文本
- 斜体 - 以斜体字显示的文字
- 倾斜的文字 - 文字向一边倾斜（和斜体非常类似，但不太支持）

```
p.normal {font-style:normal;}
p.italic {font-style:italic;}
p.oblique {font-style:oblique;}
```

### 字体大小
font-size 属性设置文本的大小。

能否管理文字的大小，在网页设计中是非常重要的。但是，你不能通过调整字体大小使段落看上去像标题，或者使标题看上去像段落。

请务必使用正确的HTML标签，就`<h1>` - `<h6>`表示标题和`<p>`表示段落：

字体大小的值可以是绝对或相对的大小。

绝对大小：
- 设置一个指定大小的文本
- 不允许用户在所有浏览器中改变文本大小
- 确定了输出的物理尺寸时绝对大小很有用

相对大小：
- 相对于周围的元素来设置大小
- 允许用户在浏览器中改变文字大小

如果你不指定一个字体的大小，默认大小和普通文本段落一样，是16像素（16px=1em）。

### 设置字体大小像素
设置文字的大小与像素，让您完全控制文字大小：
```
h1 {font-size:40px;}
h2 {font-size:30px;}
p {font-size:14px;}
```
上面的例子可以在 Internet Explorer 9, Firefox, Chrome, Opera, 和 Safari 中通过缩放浏览器调整文本大小。

虽然可以通过浏览器的缩放工具调整文本大小，但是，这种调整是整个页面，而不仅仅是文本

### 用em来设置字体大小
为了避免Internet Explorer 中无法调整文本的问题，许多开发者使用 em 单位代替像素。

em的尺寸单位由W3C建议。

1em和当前字体大小相等。在浏览器中默认的文字大小是16px。

因此，1em的默认大小是16px。可以通过下面这个公式将像素转换为em：px/16=em
```
h1 {font-size:2.5em;} /* 40px/16=2.5em */
h2 {font-size:1.875em;} /* 30px/16=1.875em */
p {font-size:0.875em;} /* 14px/16=0.875em */
```
在上面的例子，em的文字大小是与前面的例子中像素一样。不过，如果使用 em 单位，则可以在所有浏览器中调整文本大小。

不幸的是，仍然是IE浏览器的问题。调整文本的大小时，会比正常的尺寸更大或更小。

### 使用百分比和em组合
在所有浏览器的解决方案中，设置 `<body>`元素的默认字体大小的是百分比：

实例
```
body {font-size:100%;}
h1 {font-size:2.5em;}
h2 {font-size:1.875em;}
p {font-size:0.875em;}
```
我们的代码非常有效。在所有浏览器中，可以显示相同的文本大小，并允许所有浏览器缩放文本的大小。

### 所有CSS字体属性
|Property|描述|
|:-|:-|
|font|在一个声明中设置所有的字体属性|
|font-family	|指定文本的字体系列|
|font-size|指定文本的字体大小|
|font-style|指定文本的字体样式|
|font-variant|以小型大写字体或者正常字体显示文本|
|font-weight|指定字体的粗细|

## 七、CSS Link（链接）
不同的链接可以有不同的样式。
### 链接样式
链接的样式，可以用任何CSS属性（如颜色，字体，背景等）。

特别的链接，可以有不同的样式，这取决于他们是什么状态。

这四个链接状态是：

- a:link - 正常，未访问过的链接
- a:visited - 用户已访问过的链接
- a:hover - 当用户鼠标放在链接上时
- a:active - 链接被点击的那一刻
```
a:link {color:#000000;}      /* 未访问链接*/
a:visited {color:#00FF00;}  /* 已访问链接 */
a:hover {color:#FF00FF;}  /* 鼠标移动到链接上 */
a:active {color:#0000FF;}  /* 鼠标点击时 */
```
当设置为若干链路状态的样式，也有一些顺序规则：

- ==a:hover 必须跟在 a:link 和 a:visited后面==
- ==a:active 必须跟在 a:hover后面==

### 文本修饰
`text-decoration` 属性主要用于删除链接中的下划线：
```
a:link {text-decoration:none;}
a:visited {text-decoration:none;}
a:hover {text-decoration:underline;}
a:active {text-decoration:underline;}
```

### 背景颜色
背景颜色属性指定链接背景色：
```
a:link {background-color:#B2FF99;}
a:visited {background-color:#FFFF85;}
a:hover {background-color:#FF704D;}
a:active {background-color:#FF704D;}
```
## 八、CSS列表
CSS 列表属性作用如下：
- 设置不同的列表项标记为有序列表
- 设置不同的列表项标记为无序列表
- 设置列表项标记为图像

### 列表
在 HTML中，有两种类型的列表：

- 无序列表 `ul` - 列表项标记用特殊图形（如小黑点、小方框等）
- 有序列表 `ol` - 列表项的标记有数字或字母

使用 CSS，可以列出进一步的样式，并可用图像作列表项标记。
### 不同的列表项标记
`list-style-type`属性指定列表项标记的类型是：
```
ul.a {list-style-type: circle;}
ul.b {list-style-type: square;}
 
ol.c {list-style-type: upper-roman;}
ol.d {list-style-type: lower-alpha;}
```
一些值是无序列表，以及有些是有序列表。
运行效果：
![alt text](<img/屏幕截图 2024-02-04 161247.png>)

### 作为列表项标记的图像
要指定列表项标记的图像，使用列表样式图像属性：
```
ul
{
    list-style-image: url('sqpurple.gif');
}
```
### 所有的CSS列表属性
|属性|	描述|
|:-|:-|
|list-style	|简写属性。用于把所有用于列表的属性设置于一个声明中|
|list-style-image|	将图像设置为列表项标志|
|list-style-position|	设置列表中列表项标志的位置。
|list-style-type|	设置列表项标志的类型|

## 九、CSS Table（表格）
[CSS Table（表格）](https://www.runoob.com/css/css-table.html)
使用 CSS 可以使 HTML 表格更美观。
## 十、CSS 盒子模型
[CSS 盒子模型](https://www.runoob.com/css/css-boxmodel.html)

<small>（这部分内容对我不是很重要，就简单的水一下吧）</small>

所有HTML元素可以看作盒子，在CSS中，"box model"这一术语是用来设计和布局时使用。

CSS盒模型本质上是一个盒子，封装周围的HTML元素，它包括：边距，边框，填充，和实际内容。

盒模型允许我们在其它元素和周围元素边框之间的空间放置元素。

不同部分的说明：

- Margin(外边距) - 清除边框外的区域，外边距是透明的。
- Border(边框) - 围绕在内边距和内容外的边框。
- Padding(内边距) - 清除内容周围的区域，内边距是透明的。
- Content(内容) - 盒子的内容，显示文本和图像。
为了正确设置元素在所有浏览器中的宽度和高度，你需要知道的盒模型是如何工作的。
### CSS Border（边框）
[CSS 边框](https://www.runoob.com/css/css-border.html)
CSS边框属性允许你指定一个元素边框的样式和颜色。
### CSS outline（轮廓）
[CSS 轮廓（outline）](https://www.runoob.com/css/css-outline.html)
轮廓（outline）是绘制于元素周围的一条线，位于边框边缘的外围，可起到突出元素的作用。

轮廓（outline）属性指定元素轮廓的样式、颜色和宽度。


### CSS margin(外边距)
[CSS margin(外边距)](https://www.runoob.com/css/css-margin.html)
CSS margin(外边距)属性定义元素周围的空间。
### CSS padding（填充）
[CSS padding（填充）](https://www.runoob.com/css/css-padding.html)
CSS padding（填充）是一个简写属性，定义元素边框与元素内容之间的空间，即上下左右的内边距。

## 十一、CSS分组和嵌套选择器
### 分组选择器
在样式表中有很多具有**相同样式**的元素。
```
h1 {
    color:green;
}
h2 {
    color:green;
}
p {
    color:green;
}
```
为了尽量减少代码，你可以使用分组选择器。

每个选择器用==逗号==分隔。

在下面的例子中，我们对以上代码使用分组选择器：
```
h1,h2,p
{
    color:green;
}
```
### 嵌套选择器
它可能适用于选择器内部的选择器的样式。

在下面的例子设置了四个样式：

- `p{ }`: 为所有 `p` 元素指定一个样式。
- `.marked{ }`: 为所有 `class="marked"` 的元素指定一个样式。
- `.marked p{ }`: 为所有 `class="marked"` 元素内的 `p` 元素指定一个样式。
- `p.marked{ }`: 为所有 `class="marked"` 的 `p` 元素指定一个样式。
```
p
{
    color:blue;
    text-align:center;
}
.marked
{
    background-color:red;
}
.marked p
{
    color:white;
}
p.marked{
    text-decoration:underline;
}
```

## 十二、CSS 尺寸 (Dimension)
CSS 尺寸 (Dimension) 属性允许你控制元素的高度和宽度。同样，它允许你增加行间距。

==这是一种属性==
`<img class="normal" src="logocss.gif" width="95" height="84" />`
### 所有CSS 尺寸 (Dimension)属性
|属性|	描述|
|:-|:-|
|height|	设置元素的高度|
|line-height|	设置行高|
|max-height|	设置元素的最大高度|
|max-width|	设置元素的最大宽度|
|min-height|	设置元素的最小高度|
|min-width|	设置元素的最小宽度|
|width|	设置元素的宽度|

## 十三、CSS Display(显示) 与 Visibility（可见性）
display属性设置一个元素应如何显示，visibility属性指定一个元素应可见还是隐藏。

### 隐藏元素 - display:none或visibility:hidden
隐藏一个元素可以通过把display属性设置为"none"，或把visibility属性设置为"hidden"。但是请注意，这两种方法会产生不同的结果。

##### visibility:hidden可以隐藏某个元素，但隐藏的元素仍需占用与未隐藏之前一样的空间。也就是说，该元素虽然被隐藏了，但仍然会影响布局。
`h1.hidden {visibility:hidden;}`
![alt text](<img/屏幕截图 2024-02-04 163653.png>)
#### display:none可以隐藏某个元素，且隐藏的元素不会占用任何空间。也就是说，该元素不但被隐藏了，而且该元素原本占用的空间也会从页面布局中消失。
`h1.hidden {display:none;}`
![alt text](<img/屏幕截图 2024-02-04 163700.png>)
### CSS Display - 块和内联元素
块元素是一个元素，占用了全部宽度，在前后都是换行符。

块元素的例子：

- `<h1>`
- `<p>`
- `<div>`

内联元素只需要必要的宽度，不强制换行。

内联元素的例子：

- `<span>`
- `<a>`

### 如何改变一个元素显示
可以更改内联元素和块元素，反之亦然，可以使页面看起来是以一种特定的方式组合，并仍然遵循web标准。

下面的示例把列表项显示为内联元素：
`li {display:inline;}`

下面的示例把span元素作为块元素：
`span {display:block;}`

- 注意：变更元素的显示类型看该元素是如何显示，它是什么样的元素。例如：一个内联元素设置为display:block是不允许有它内部的嵌套块元素。

## 十四、CSS Position(定位)
<small>这节的内容需要动态操作页面才能更好的理解</small>

position 属性指定了元素的定位类型。

position 属性的五个值：

- static
- relative
- fixed
- absolute
- sticky

元素可以使用的顶部，底部，左侧和右侧属性定位。然而，这些属性无法工作，除非是先设定position属性。他们也有不同的工作方式，这取决于定位方法。

### static 定位
HTML 元素的默认值，即没有定位，遵循正常的文档流对象。

静态定位的元素不会受到 top, bottom, left, right影响。
```
div.static {
    position: static;
    border: 3px solid #73AD21;
}
```
### fixed 定位
元素的位置相对于浏览器窗口是固定位置。

即使窗口是滚动的它也不会移动：
```
p.pos_fixed
{
    position:fixed;
    top:30px;
    right:5px;
}
```
注意： Fixed 定位在 IE7 和 IE8 下需要描述 !DOCTYPE 才能支持。
Fixed定位使元素的位置与文档流无关，因此不占据空间。
Fixed定位的元素和其他元素重叠。
### relative 定位
相对定位元素的定位是相对其正常位置。
```
h2.pos_left
{
    position:relative;
    left:-20px;
}
h2.pos_right
{
    position:relative;
    left:20px;
}
```
移动相对定位元素，但它原本所占的空间不会改变。
```
h2.pos_top
{
    position:relative;
    top:-50px;
}
```
相对定位元素经常被用来作为绝对定位元素的容器块。
### absolute 定位
绝对定位的元素的位置相对于最近的已定位父元素，如果元素没有已定位的父元素，那么它的位置相对于`<html>`:
```
h2
{
    position:absolute;
    left:100px;
    top:150px;
}
```
absolute 定位使元素的位置与文档流无关，因此不占据空间。

absolute 定位的元素和其他元素重叠。
### sticky 定位
sticky 英文字面意思是粘，粘贴，所以可以把它称之为粘性定位。

position: sticky; 基于用户的滚动位置来定位。

粘性定位的元素是依赖于用户的滚动，在 position:relative 与 position:fixed 定位之间切换。

它的行为就像 position:relative; 而当页面滚动超出目标区域时，它的表现就像 position:fixed;，它会固定在目标位置。

元素定位表现为在跨越特定阈值前为相对定位，之后为固定定位。

这个特定阈值指的是 top, right, bottom 或 left 之一，换言之，指定 top, right, bottom 或 left 四个阈值其中之一，才可使粘性定位生效。否则其行为与相对定位相同。

<small>注意: Internet Explorer, Edge 15 及更早 IE 版本不支持 sticky 定位。 Safari 需要使用 -webkit- prefix</small>
```
div.sticky {
    position: -webkit-sticky; /* Safari */
    position: sticky;
    top: 0;
    background-color: green;
    border: 2px solid #4CAF50;
}
```

### 重叠的元素
元素的定位与文档流无关，所以它们可以覆盖页面上的其它元素

z-index属性指定了一个元素的堆叠顺序（哪个元素应该放在前面，或后面）

一个元素可以有正数或负数的堆叠顺序：
```
img
{
    position:absolute;
    left:0px;
    top:0px;
    z-index:-1;
}
```
具有更高堆叠顺序的元素总是在较低的堆叠顺序元素的前面。

*注意*： 如果两个定位元素重叠，没有指定z - index，最后定位在HTML代码中的元素将被显示在最前面。

### 更改光标
[点击查看实例](https://www.runoob.com/try/try.php?filename=trycss_cursor)
```
<span style="cursor:auto">auto</span><br>
<span style="cursor:crosshair">crosshair</span><br>
<span style="cursor:default">default</span><br>
<span style="cursor:e-resize">e-resize</span><br>
<span style="cursor:help">help</span><br>
<span style="cursor:move">move</span><br>
<span style="cursor:n-resize">n-resize</span><br>
<span style="cursor:ne-resize">ne-resize</span><br>
<span style="cursor:nw-resize">nw-resize</span><br>
<span style="cursor:pointer">pointer</span><br>
<span style="cursor:progress">progress</span><br>
<span style="cursor:s-resize">s-resize</span><br>
<span style="cursor:se-resize">se-resize</span><br>
<span style="cursor:sw-resize">sw-resize</span><br>
<span style="cursor:text">text</span><br>
<span style="cursor:w-resize">w-resize</span><br>
<span style="cursor:wait">wait</span><br>
```
### 所有的CSS定位属性
"CSS" 列中的数字表示哪个CSS(CSS1 或者CSS2)版本定义了该属性。
|属性|说明|值|CSS|
|:-|:-|:-|:-:|
|bottom|定义了定位元素下外边距边界与其包含块下边界之间的偏移|auto<br/>length<br/>%<br/>inherit|2|
|clip|剪辑一个绝对定位的元素|shape<br/>auto<br/>inherit	|2|
|cursor|显示光标移动到指定的类型|url<br/>auto<br/>crosshair<br/>default<br/>pointer<br/>move<br/>e-resize<br/>ne-resize<br/>nw-resize<br/>n-resize<br/>se-resize<br/>sw-resize<br/>s-resize<br/>w-resize<br/>text<br/>wait<br/>help|2|
|left|定义了定位元素左外边距边界与其包含块左边界之间的偏移|auto<br/>length<br/>%<br/>inherit|2|
|overflow|设置当元素的内容溢出其区域时发生的事情|auto<br/>hidden<br/>scroll<br/>visible<br/>inherit|2|
|overflow-y|指定如何处理顶部/底部边缘的内容溢出元素的内容区域|auto<br/>hidden<br/>scroll<br/>visible<br/>no-display<br/>no-content	|2|
|overflow-x|指定如何处理右边/左边边缘的内容溢出元素的内容区域|auto<br/>hidden<br/>scroll<br/>visible<br/>no-display<br/>no-content	|2|
|position|指定元素的定位类型|bsolute<br/>fixed<br/>relative<br/>static<br/>inherit	|2|
|right|定义了定位元素右外边距边界与其包含块右边界之间的偏移|auto<br/>length<br/>%<br/>inherit|2|
|top|定义了一个定位元素的上外边距边界与其包含块上边界之间的偏移|auto<br/>length<br/>%<br/>inherit|2|
|z-index|设置元素的堆叠顺序|number<br/>auto<br/>inherit	|2|

## 十五、CSS 布局 - Overflow
CSS overflow 属性用于控制内容溢出元素框时显示的方式。
### CSS Overflow
CSS overflow 属性可以控制内容溢出元素框时在对应的元素区间内添加滚动条。
overflow属性有以下值：
|值	|描述|
|:-|:-|
|visible|	默认值。内容不会被修剪，会呈现在元素框之外|
|hidden|	内容会被修剪，并且其余内容是不可见的|
|scroll|	内容会被修剪，但是浏览器会显示滚动条以便查看其余的内容|
|auto|	如果内容被修剪，则浏览器会显示滚动条以便查看其余的内容|
|inherit|	规定应该从父元素继承 overflow 属性的值|

- 注意:overflow 属性只工作于指定高度的块元素上。

### overflow: visible
默认情况下，overflow 的值为 visible， 意思是内容溢出元素框

## 十六、CSS Float(浮动)
CSS 的 Float（浮动），会使元素向左或向右移动，其周围的元素也会重新排列。
Float（浮动），往往是用于图像，但它在布局时一样非常有用。
### 元素怎样浮动
元素的水平方向浮动，意味着元素只能左右移动而不能上下移动。

一个浮动元素会尽量向左或向右移动，直到它的外边缘碰到包含框或另一个浮动框的边框为止。

浮动元素之后的元素将围绕它。

浮动元素之前的元素将不会受到影响。

如果图像是右浮动，下面的文本流将环绕在它左边：
```
img
{
    float:right;
}
```
### 彼此相邻的浮动元素
如果你把几个浮动的元素放到一起，如果有空间的话，它们将彼此相邻。

在这里，我们对图片廊使用 float 属性：
```
.thumbnail 
{
    float:left;
    width:110px;
    height:90px;
    margin:5px;
}
```
### 清除浮动 - 使用 clear
元素浮动之后，周围的元素会重新排列，为了避免这种情况，使用 clear 属性。

clear 属性指定元素两侧不能出现浮动元素。

使用 clear 属性往文本中添加图片廊：
```
.text_line
{
    clear:both;
}
```

### CSS 中所有的浮动属性
"CSS" 列中的数字表示不同的 CSS 版本（CSS1 或 CSS2）定义了该属性。

|属性|	描述|	值|	CSS|
|:-|:-|:-|:-|
|clear|	指定不允许元素周围有浮动元素|	left<br/>right<br/>both<br/>none<br/>inherit|1|
|float|	指定一个盒子（元素）是否可以浮动|	left<br/>right<br/>none<br/>inherit	|1|

## 十七、CSS 布局 - 水平 & 垂直对齐
[CSS 布局 - 水平 & 垂直对齐](https://www.runoob.com/css/css-align.html)

## 十八、CSS 导航栏
[CSS 导航栏](https://www.runoob.com/css/css-navbar.html)
熟练使用导航栏，对于任何网站都非常重要。
使用CSS你可以转换成好看的导航栏而不是枯燥的HTML菜单。

### 导航栏=链接列表
作为标准的 HTML 基础一个导航栏是必须的。

在我们的例子中我们将建立一个标准的 HTML 列表导航栏。

导航条基本上是一个链接列表，所以使用 `<ul>` 和 `<li>`元素非常有意义

## 十九、CSS 下拉菜单
[CSS 下拉菜单](https://www.runoob.com/css/css-dropdowns.html)
使用 CSS 创建一个鼠标移动上去后显示下拉菜单的效果。

## 二十、CSS 提示工具(Tooltip)
[CSS 提示工具(Tooltip)](https://www.runoob.com/css/css-tooltip.html)

## 二十一、CSS图像与媒体
### CSS 图片廊
[CSS 图片廊](https://www.runoob.com/css/css-image-gallery.html)
### CSS 图像透明/不透明
[CSS 图像透明/不透明](https://www.runoob.com/css/css-image-transparency.html)
### CSS 图像拼合技术
[CSS 图像拼合技术](https://www.runoob.com/css/css-image-sprites.html)
### CSS 媒体类型
[CSS 媒体类型](https://www.runoob.com/css/css-mediatypes.html)
## 二十二、CSS 网页布局
[CSS 网页布局](https://www.runoob.com/css/css-website-layout.html)

## 二十三、CSS组合选择符
组合选择符说明了两个选择器之间的关系。
在 CSS3 中包含了四种组合方式:

- 后代选择器(以空格 `   ` 分隔)
- 子元素选择器(以大于 `>` 号分隔) 
- 相邻兄弟选择器（以加号 `+` 分隔）
- 普通兄弟选择器（以波浪号 `～` 分隔）
### 后代选择器
后代选择器用于选取某元素的后代元素。
以下实例选取所有 `<p>` 元素插入到 `<div>` 元素中: 
```
div p
{
  background-color:yellow;
}
```
![alt text](<img/屏幕截图 2024-02-04 185425.png>)

### 子元素选择器
与后代选择器相比，子元素选择器（Child selectors）只能选择作为某元素直接/一级子元素的元素。

以下实例选择了`<div>`元素中所有直接子元素 `<p>` ：
```
div>p
{
  background-color:yellow;
}
```
![alt text](<img/屏幕截图 2024-02-04 185709.png>)

### 相邻兄弟选择器
相邻兄弟选择器（Adjacent sibling selector）可选择紧接在另一元素后的元素，且二者有相同父元素。

如果需要选择紧接在另一个元素后的元素，而且二者有相同的父元素，可以使用相邻兄弟选择器（Adjacent sibling selector）。

以下实例选取了所有位于 `<div>` 元素后的第一个 `<p>` 元素:
```
div+p
{
  background-color:yellow;
}
```
![alt text](<img/屏幕截图 2024-02-04 185911.png>)

### 后续兄弟选择器
后续兄弟选择器选取所有指定元素之后的相邻兄弟元素。

以下实例选取了所有 `<div>` 元素之后的所有相邻兄弟元素 `<p>` : 
```
div~p
{
  background-color:yellow;
}
```
![alt text](<img/屏幕截图 2024-02-04 185959.png>)

## 二十四、CSS 伪类(Pseudo-classes)
CSS伪类是用来添加一些选择器的特殊效果。
### 语法
伪类的语法：
`selector:pseudo-class {property:value;}`

CSS类也可以使用伪类：
`selector.class:pseudo-class {property:value;}`

### anchor伪类
在支持 CSS 的浏览器中，链接的不同状态都可以以不同的方式显示
```
a:link {color:#FF0000;} /* 未访问的链接 */
a:visited {color:#00FF00;} /* 已访问的链接 */
a:hover {color:#FF00FF;} /* 鼠标划过链接 */
a:active {color:#0000FF;} /* 已选中的链接 */
```
注意： 在CSS定义中，a:hover 必须被置于 a:link 和 a:visited 之后，才是有效的。

注意： 在 CSS 定义中，a:active 必须被置于 a:hover 之后，才是有效的。

注意：伪类的名称不区分大小写。

### 伪类和CSS类
伪类可以与 CSS 类配合使用
```a.red:visited {color:#FF0000;}
 
<a class="red" href="css-syntax.html">CSS 语法</a>
```
如果在上面的例子的链接已被访问，它会显示为红色。

### CSS :first-child 伪类
您可以使用 :first-child 伪类来选择父元素的第一个子元素。

注意：在IE8的之前版本必须声明<!DOCTYPE> ，这样 :first-child 才能生效。

#### 匹配第一个 `<p>` 元素
在下面的例子中，选择器匹配作为任何元素的第一个子元素的 `<p>` 元素：
```
p:first-child
{
    color:blue;
}
```
![alt text](<img/屏幕截图 2024-02-04 190551.png>)

#### 匹配所有`<p>` 元素中的第一个 `<i>` 元素
在下面的例子中，选择相匹配的所有`<p>`元素的第一个 `<i>` 元素：
```
p > i:first-child
{
    color:blue;
}
```
![alt text](<img/屏幕截图 2024-02-04 190658.png>)

#### 匹配所有作为第一个子元素的 `<p>` 元素中的所有 `<i>` 元素
在下面的例子中，选择器匹配所有作为元素的第一个子元素的 `<p>` 元素中的所有 `<i>` 元素：
```
p:first-child i
{
    color:blue;
}
```
![alt text](<img/屏幕截图 2024-02-04 190807.png>)

### CSS - :lang 伪类
:lang 伪类使你有能力为不同的语言定义特殊的规则

- 注意：IE8必须声明<!DOCTYPE>才能支持 ：lang伪类。

在下面的例子中，:lang 类为属性值为 no 的q元素定义引号的类型：
`q:lang(no) {quotes: "~" "~";}`
![alt text](<img/屏幕截图 2024-02-04 190959.png>)

### 所有CSS伪类/元素
|选择器	|示例|	示例说明|
|:-|:-|:-|
|:checked|	input:checked|	选择所有选中的表单元素|
|:disabled	|input:disabled	|选择所有禁用的表单元素|
|:empty	|p:empty|	选择所有没有子元素的p元素|
|:enabled	|input:enabled	|选择所有启用的表单元素|
|:first-of-type|	p:first-of-type|	选择的每个 p 元素是其父元素的第一个 p 元素|
|:in-range|	input:in-range	|选择元素指定范围内的值|
|:invalid	|input:invalid	|选择所有无效的元素|
|:last-child|	p:last-child	|选择所有p元素的最后一个子元素|
|:last-of-type|	p:last-of-type	|选择每个p元素是其母元素的最后一个p元素|
|:not(selector)|	:not(p)	|选择所有p以外的元素|
|:nth-child(n)|	p:nth-child(2)	|选择所有 p 元素的父元素的第二个子元素|
|:nth-last-child(n)|	p:nth-last-child(2)	|选择所有p元素倒数的第二个子元素|
|:nth-last-of-type(n)|	p:nth-last-of-type(2)|	选择所有p元素倒数的第二个为p的子元素|
|:nth-of-type(n)|	p:nth-of-type(2)	|选择所有p元素第二个为p的子元素|
|:only-of-type|	p:only-of-type	|选择所有仅有一个子元素为p的元素|
|:only-child|	p:only-child	|选择所有仅有一个子元素的p元素|
|:optional	|input:optional	|选择没有"required"的元素属性|
|:out-of-range|	input:out-of-range	|选择指定范围以外的值的元素属性|
|:read-only|	input:read-only	|选择只读属性的元素属性|
|:read-write|	input:read-write	|选择没有只读属性的元素属性|
|:required|	input:required	|选择有"required"属性指定的元素属性|
|:root	|root	|选择文档的根元素|
|:target|	#news:target	|选择当前活动#news元素(点击URL包含锚的名字)|
|:valid|	input:valid|	选择所有有效值的属性|
|:link|	a:link	|选择所有未访问链接|
|:visited|	a:visited	|选择所有访问过的链接|
|:active|	a:active	|选择正在活动链接|
|:hover|	a:hover|	把鼠标放在链接上的状态|
|:focus|	input:focus	|选择元素输入后具有焦点|
|:first-letter|	p:first-letter	|选择每个`<p>` 元素的第一个字母|
|:first-line	|p:first-line	|选择每个`<p>` 元素的第一行|
|:first-child|	p:first-child	|选择器匹配属于任意元素的第一个子元素的 `<p>` |元素
|:before	|p:before	|在每个`<p>`元素之前插入内容|
|:after	|p:after	|在每个`<p>`元素之后插入内容|
|:lang(language)|	p:lang(it)	|为`<p>`元素的lang属性选择一个开始值|

## 二十五、CSS 伪元素
CSS 伪元素是用来添加一些选择器的特殊效果。
###语法
伪元素的语法：
`selector:pseudo-element {property:value;}`

CSS类也可以使用伪元素：
`selector.class:pseudo-element {property:value;}`

### first-line 伪元素
"first-line" 伪元素用于向文本的首行设置特殊样式。

在下面的例子中，浏览器会根据 "first-line" 伪元素中的样式对 p 元素的第一行文本进行格式化：
```
p:first-line 
{
    color:#ff0000;
    font-variant:small-caps;
}
```
![alt text](<img/屏幕截图 2024-02-04 191448.png>)
注意："first-line" 伪元素只能用于块级元素。

注意： 下面的属性可应用于 "first-line" 伪元素：
- font properties
- color properties 
- background properties
- word-spacing
- letter-spacing
- text-decoration
- vertical-align
- text-transform
- line-height
- clear

### :first-letter 伪元素
"first-letter" 伪元素用于向文本的首字母设置特殊样式：
```
p:first-letter 
{
    color:#ff0000;
    font-size:xx-large;
}
```
![alt text](<img/屏幕截图 2024-02-04 191601.png>)
注意： "first-letter" 伪元素只能用于块级元素。

注意： 下面的属性可应用于 "first-letter" 伪元素： 
- font properties
- color properties 
- background properties
- margin properties
- padding properties
- border properties
- text-decoration
- vertical-align (only if "float" is "none")
- text-transform
- line-height
- float
- clear

### 伪元素和CSS类
伪元素可以结合CSS类： 
```
p.article:first-letter {color:#ff0000;}
<p class="article">文章段落</p>
```
上面的例子会使所有 class 为 article 的段落的首字母变为红色。

### 多个伪元素
可以结合多个伪元素来使用。

在下面的例子中，段落的第一个字母将显示为红色，其字体大小为 xx-large。第一行中的其余文本将为蓝色，并以小型大写字母显示。

段落中的其余文本将以默认字体大小和颜色来显示：
```
p:first-letter
{
    color:#ff0000;
    font-size:xx-large;
}
p:first-line 
{
    color:#0000ff;
    font-variant:small-caps;
}
```
![alt text](<img/屏幕截图 2024-02-04 191852.png>)
### CSS - :before 伪元素
":before" 伪元素可以在元素的内容前面插入新内容。

下面的例子在每个 `<h1>`元素前面插入一幅图片：
```
h1:before 
{
    content:url(smiley.gif);
}
```
![alt text](<img/屏幕截图 2024-02-04 191859.png>)
### CSS - :after 伪元素
":after" 伪元素可以在元素的内容之后插入新内容。

下面的例子在每个 `<h1>` 元素后面插入一幅图片：
```
h1:after
{
    content:url(smiley.gif);
}
```
![alt text](<img/屏幕截图 2024-02-04 191905.png>)

### 所有CSS伪类/元素
|选择器|示例|	示例说明|
|:-|:-|:-|
|:link|	a:link	|选择所有未访问链接|
|:visited	|a:visited	|选择所有访问过的链接|
|:active|	a:active|	选择正在活动链接|
|:hover	|a:hover	|把鼠标放在链接上的状态|
|:focus|	input:focus|	选择元素输入后具有焦点|
|:first-letter	|p:first-letter|	选择每个`<p>` 元素的第一个字母|
|:first-line|	p:first-line|	选择每个`<p>` 元素的第一行|
|:first-child|	p:first-child	|选择器匹配属于任意元素的第一个子元素的 `<p>` 元素|
|:before|	p:before|	在每个`<p>`元素之前插入内容|
|:after	|p:after|	在每个`<p>`元素之后插入内容|
|:lang(language)|	p:lang(it)	|为`<p>`元素的lang属性选择一个开始值|

## 二十六、CSS 属性选择器
### 具有特定属性的HTML元素样式
具有特定属性的HTML元素样式不仅仅是class和id。

注意：IE7和IE8需声明!DOCTYPE才支持属性选择器！IE6和更低的版本不支持属性选择器。

### 属性选择器
下面的例子是把包含标题（title）的所有元素变为蓝色：
```
[title]
{
    color:blue;
}
```
![alt text](<img/屏幕截图 2024-02-04 193526.png>)

### 属性和值选择器
下面的实例改变了标题title='runoob'元素的边框样式:
```
[title=runoob]
{
    border:5px solid green;
}
```
![alt text](<img/屏幕截图 2024-02-04 193701.png>)
### 属性和值的选择器 - 多值
下面是包含指定值的title属性的元素样式的例子，使用（~）分隔属性和值:
`[title~=hello] { color:blue; }`
![alt text](<img/屏幕截图 2024-02-04 193742.png>)

下面是包含指定值的lang属性的元素样式的例子，使用（|）分隔属性和值:
`[lang|=en] { color:blue; }`
![alt text](<img/屏幕截图 2024-02-04 193827.png>)
### 表单样式
属性选择器样式无需使用class或id的形式:
```
input[type="text"]
{
    width:150px;
    display:block;
    margin-bottom:10px;
    background-color:yellow;
}
input[type="button"]
{
    width:120px;
    margin-left:35px;
    display:block;
}
```
![alt text](<img/屏幕截图 2024-02-04 194016.png>)

## 二十七、CSS 表单
一个表单案例，我们使用 CSS 来渲染 HTML 的表单元素：
```
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
 
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
 
input[type=submit]:hover {
  background-color: #45a049;
}
 
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
```
![alt text](<img/屏幕截图 2024-02-04 194131.png>)


### 输入框(input) 样式
使用 width 属性来设置输入框的宽度：
```
input {
  width: 100%;
}
```
以上实例中设置了所有 <input> 元素的宽度为 100%，如果你只想设置指定类型的输入框可以使用以下属性选择器：

- input[`type=text`] - 选取文本输入框
- input[`type=password`] - 选择密码的输入框
- input[`type=number`] - 选择数字的输入框

### 输入框填充
使用 padding 属性可以在输入框中添加内边距。

CSS 实例
```
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
```

注意我们设置了 box-sizing 属性为 border-box。这样可以确保浏览器呈现出带有指定宽度和高度的输入框是把边框和内边距一起计算进去的。

### 输入框(input) 边框
使用 border 属性可以修改 input 边框的大小或颜色，使用 border-radius 属性可以给 input 添加圆角：
```
input[type=text] {
  border: 2px solid red;
  border-radius: 4px;
}
```
如果你只想添加底部边框可以使用 border-bottom 属性:
```
input[type=text] {
  border: none;
  border-bottom: 2px solid red;
}
```

### 输入框(input) 颜色
可以使用 background-color 属性来设置输入框的背景颜色，color 属性用于修改文本颜色：
```
input[type=text] {
  background-color: #3CBC8D;
  color: white;
}
```
### 输入框(input) 聚焦
默认情况下，一些浏览器在输入框获取焦点时（点击输入框）会有一个蓝色轮廓。我们可以设置 input 样式为 outline: none; 来忽略该效果。

使用 :focus 选择器可以设置输入框在获取焦点时的样式：
```
input[type=text]:focus {
  background-color: lightblue;
}
```
```
input[type=text]:focus {
  border: 3px solid #555;
}
```

### 输入框(input) 图标
如果你想在输入框中添加图标，可以使用 background-image 属性和用于定位的background-position 属性。注意设置图标的左边距，让图标有一定的空间：
```
input[type=text] {
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding-left: 40px;
}
```

### 带动画的搜索框
以下实例使用了 CSS transition 属性，该属性设置了输入框在获取焦点时会向右延展。你可以在 CSS 动画 章节查看更多内容。
```
input[type=text] {
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}
 
input[type=text]:focus {
  width: 100%;
}
```

### 文本框（textarea）样式
注意: 使用 resize 属性来禁用文本框可以重置大小的功能（一般拖动右下角可以重置大小）。
```
textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
}
```
### 下拉菜单（select）样式
```
select {
  width: 100%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}
```

### 按钮样式
```
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
 
/* 提示: 使用 width: 100% 设置全宽按钮 */
```
### 响应式表单
响应式表单可以根据浏览器窗口的大小重新布局各个元素，我们可以通过重置浏览器窗口大小来查看效果：
```
* {
  box-sizing: border-box;
}
 
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
 
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
 
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
 
input[type=submit]:hover {
  background-color: #45a049;
}
 
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
 
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}
 
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
 
/* 清除浮动 */
.row:after {
  content: "";
  display: table;
  clear: both;
}
 
/* 响应式布局 layout - 在屏幕宽度小于 600px 时， 设置为上下堆叠元素 */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
```

## 二十八、CSS 计数器
CSS 计数器通过一个变量来设置，根据规则递增变量。
### 使用计数器自动编号
CSS 计数器根据规则来递增变量。
CSS 计数器使用到以下几个属性：

- counter-reset - 创建或者重置计数器
- counter-increment - 递增变量
- content - 插入生成的内容
- counter() 或 counters() 函数 - 将计数器的值添加到元素
  
要使用 CSS 计数器，得先用 counter-reset 创建：
以下实例在页面创建一个计数器 (在 body 选择器中)，每个 `<h2>` 元素的计数值都会递增，并在每个 `<h2>` 元素前添加 "Section <计数值>:"
```
body {
  counter-reset: section;
}
 
h2::before {
  counter-increment: section;
  content: "Section " counter(section) ": ";
}
```
![alt text](<img/屏幕截图 2024-02-06 105537.png>)

### 嵌套计数器
以下实例在页面创建一个计数器，在每一个 `<h1>` 元素前添加计数值 "Section <主标题计数值>.", 嵌套的计数值则放在 `<h2>` 元素的前面，内容为 "<主标题计数值>.<副标题计数值>":
```
body {
  counter-reset: section;
}
 
h1 {
  counter-reset: subsection;
}
 
h1::before {
  counter-increment: section;
  content: "Section " counter(section) ". ";
}
 
h2::before {
  counter-increment: subsection;
  content: counter(section) "." counter(subsection) " ";
}
```
计数器也可用于列表中，列表的子元素会自动创建。这里我们使用了 counters() 函数在不同的嵌套层级中插入字符串:
```
ol {
  counter-reset: section;
  list-style-type: none;
}
 
li::before {
  counter-increment: section;
  content: counters(section,".") " ";
}
```
### CSS 计数器属性
|属性|	描述|
|:-|:-|
|`content`	|使用 `::before` 和 `::after` 伪元素来插入自动生成的内容|
|`counter-increment`|	递增一个或多个值|
|`counter-reset`|	创建或重置一个或多个计数器|

## 二十九、CSS !important 规则
什么是 !important
CSS 中的 !important 规则用于增加样式的权重。

`!important` 与优先级无关，但它与最终的结果直接相关，使用一个 !important 规则时，此声明将覆盖任何其他声明。
```
#myid {
  background-color: blue;
}
 
.myclass {
  background-color: gray;
}
 
p {
  background-color: red !important;
}
```
以上实例中，尽管 ID 选择器和类选择器具有更高的优先级，但三个段落背景颜色都显示为红色，因为 !important 规则会覆盖 background-color 属性。

### 重要说明
**使用 !important 是一个==坏习惯==，应该尽量==避免==，因为这破坏了样式表中的固有的级联规则 使得调试找 bug 变得更加困难了。**

当两条相互冲突的带有 !important 规则的声明被应用到相同的元素上时，拥有更大优先级的声明将会被采用。

以下实例我们在查看 CSS 源码时就不是很清楚哪种颜色最重要：
```
#myid {
  background-color: blue !important;
}
 
.myclass {
  background-color: gray !important;
}
 
p {
  background-color: red !important;
}
```
使用建议：

- 一定要优先考虑使用样式规则的优先级来解决问题而不是 !important
- 只有在需要覆盖全站或外部 CSS 的特定页面中使用 !important
- 永远不要在你的插件中使用 !important
- 永远不要在全站范围的 CSS 代码中使用 !important

### 何时使用 !important
如果要在你的网站上设定一个全站样式的 CSS 样式可以使用 !important。

比如我们要让网站上所有按钮的样式都一样：
```
.button {
  background-color: #8c8c8c;
  color: white;
  padding: 5px;
  border: 1px solid black;
}
```
如果我们将按钮放在另一个具有更优先级的元素中，按钮的外观就会发生变化，并且属性会发生冲突，如下实例：
```
.button {
  background-color: #8c8c8c;
  color: white;
  padding: 5px;
  border: 1px solid black;
}
 
#myDiv a {
  color: red;
  background-color: yellow;
}
```
如果想要设置所有按钮具有相同的外观，我们可以将 !important 规则添加到按钮的样式属性中，如下所示：
```
.button {
  background-color: #8c8c8c !important;
  color: white !important;
  padding: 5px !important;
  border: 1px solid black !important;
}
 
#myDiv a {
  color: red;
  background-color: yellow;
}
```