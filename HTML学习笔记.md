# <center><font face="黑体" font color=SeaGreen >HTML学习笔记</font></center>
## <center><font face="楷体" size =5 >Jaren</font></center> 
[HTML速查列表](https://www.runoob.com/html/html-quicklist.html)<br/>
[HTML标签简写及全称](https://www.runoob.com/html/html-tag-name.html)

### 一、HTML 简介
#### html 实例
```
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>
 
<h1>我的第一个标题</h1>
 
<p>我的第一个段落。</p>
 
</body>
</html>
```
#### 实例解析
-  `<!DOCTYPE html>声明为HTML5文档`
- `<html> 元素是 HTML 页面的根元素`
- `<head> 元素包含了文档的元（meta）数据，如 <meta  - charset="utf-8"> 定义网页编码格式为 utf-8。`
- `<title> 元素描述了文档的标题`
- `<body> 元素包含了可见的页面内容`
- `<h1> 元素定义一个大标题`
- `<p> 元素定义一个段落`

#### HTML 标签
- HTML 标记标签通常被称为 HTML 标签 (HTML tag)。

- HTML 标签是由尖括号包围的关键词，比如`<html>` 
- HTML 标签通常是成对出现的，比如 `<b>` 和 `</b>`
- 标签对中的第一个标签是开始标签，第二个标签是结束标签
- 开始和结束标签也被称为开放标签和闭合标签
  `<标签> 内容 </标签>`

#### HTML 元素
- "HTML 标签" 和 "HTML 元素" 通常都是描述同样的意思.

- 但是严格来讲, 一个 HTML 元素包含了开始标签与结束标签，如下实例:

- HTML 元素:
`<p>这是一个段落。</p>`

#### 中文编码
目前在大部分浏览器中，直接输出中文会出现中文乱码的情况，这时候我们就需要在头部将字符声明为 UTF-8 或 GBK。
例如： `<meta cahrset ="UTF-8">`

### 二、HTML元素
HTML 文档由 HTML 元素定义。
大多数 HTML 元素可以==嵌套==（HTML 元素可以包含其他 HTML 元素）。
HTML 文档由相互嵌套的 HTML 元素构成。
#### HTML 元素
|开始标签|元素内容|结束标签|
|:--:|:--:|:--:|
|`<p>`|这是一个段落|`</p>`|
|`<a href="default.htm">`|这是一个链接|	`</a>`|
|`<br>`|换行||
- 开始标签常被称为起始标签（opening tag），结束标签常称为闭合标签（closing tag）。
  
#### HTML 元素语法
- HTML 元素以开始标签起始
- HTML 元素以结束标签终止
- 元素的内容是开始标签与结束标签之间的内容
- 某些 HTML 元素具有空内容（empty content）
- 空元素在开始标签中进行关闭（以开始标签的结束而结束）
- 大多数 HTML 元素可拥有属性

#### HTML 空元素
没有内容的 HTML 元素被称为空元素。空元素是在开始标签中关闭的。
`<br>` 就是没有关闭标签的空元素（`<br>` 标签定义换行）
在 XHTML、XML 以及未来版本的 HTML 中，所有元素都必须被关闭。
在开始标签中添加斜杠，比如 `<br />`，是关闭空元素的正确方法，HTML、XHTML 和 XML 都接受这种方式。
即使 `<br>` 在所有浏览器中都是有效的，但使用 `<br />` 其实是更长远的保障。

##### HTML 提示：使用小写标签
HTML 标签对大小写不敏感：`<P>` 等同于 `<p>`。许多网站都使用大写的 HTML 标签。
万维网联盟（W3C）在 HTML 4 中推荐使用小写，而在未来 (X)HTML 版本中强制使用小写。

### 三、HTML属性
属性是 HTML 元素提供的附加信息。
#### HTML 属性
- HTML 元素可以设置属性
- 属性可以在元素中添加附加信息
- 属性一般描述于开始标签
- 属性总是以名称/值对的形式出现，比如：name="value"。

#### 属性实例
- HTML 链接由 `<a>`标签定义。链接的地址在 href 属性中指定：
  `<a href="http://www.runoob.com">这是一个链接</a>`

#### HTML 属性常用引用属性值
属性值应该始终被包括在引号内。
双引号是最常用的，不过使用单引号也没有问题。

提示: 在某些个别的情况下，比如属性值本身就含有双引号，那么您必须使用单引号，例如：name='John "ShotGun" Nelson'

#### HTML 提示：使用小写属性

属性和属性值对大小写不敏感。
不过，万维网联盟在其 HTML 4 推荐标准中推荐小写的属性/属性值。
而新版本的 (X)HTML 要求使用小写属性。

#### HTML 属性参考手册
下面列出了适用于大多数 HTML 元素的属性：
|属性|描述|
|:--:|:--|
|class|为html元素定义一个或多个类名（classname）(类名从样式文件引入)|
|id|定义元素的唯一id|
|style|规定元素的行内样式（inline style）|
|title|描述了元素的额外信息 (作为工具条使用)| 

- 查看完整的HTML属性列表：[HTML 标签参考手册](https://www.runoob.com/tags/html-reference.html)

- 更多标准属性说明: [HTML 标准属性参考手册](https://www.runoob.com/tags/ref-standardattributes.html)

### 四、HTML标题
 在HTML文档中，标题很重要
#### HTML标题
标题（Heading）是通过 `<h1> - <h6>` 标签进行定义的。
`<h1>` 定义最大的标题。 
`<h6>` 定义最小的标题。

- 注：浏览器会自动地在标题的前后添加空行

**==标题很重要==**
请确保将 HTML 标题 标签只用于标题。不要仅仅是为了生成粗体或大号的文本而使用标题。
搜索引擎使用标题为您的网页的结构和内容编制索引。
因为用户可以通过标题来快速浏览您的网页，所以用标题来呈现文档结构是很重要的。
应该将 h1 用作主标题（最重要的），其后是 h2（次重要的），再其次是 h3，以此类推。
1到6号标题与1到6号字体逆序对应，比如1号字体对应6号标题，2号字体对应5号标题。

#### HTML水平线
`<hr>` 标签在 HTML 页面中创建水平线。
hr 元素可用于分隔内容。

实例：
```
<p>这是一个段落。</p>
<hr>
<p>这是一个段落。</p>
<hr>
<p>这是一个段落。</p>
```


#### HTML注释
可以将注释插入 HTML 代码中，这样可以提高其可读性，使代码更易被人理解。浏览器会忽略注释，也不会显示它们。

+ 注释写法如下：
`<!-- 这是一个注释 -->`

#### HTML 提示 - 如何查看源代码
如果想看一些网页是如何实现的,只需要单击右键，然后选择"查看源文件"（IE）或"查看页面源代码"（Firefox），其他浏览器的做法也是类似的。这么做会打开一个包含页面 HTML 代码的窗口。

### 五、HTML段落
HTML 可以将文档分割为若干段落。
#### HTML段落
段落是通过 <p> 标签定义的。
```
<p>这是一个段落 </p>
<p>这是另一个段落</p>
```
- 注意：浏览器会自动地在段落的前后添加空行（`</p>` 是块级元素）

#### HTML折行
如果您希望在不产生一个新段落的情况下进行换行（新行），请使用 `<br>` 标签：
```
<p>这个<br>段落<br>演示了分行的效果</p>
```
`<br /> `元素是一个空的 HTML 元素。由于关闭标签没有任何意义，因此它没有结束标签。

#### HTML 输出- 使用提醒
我们无法确定 HTML 被显示的确切效果。屏幕的大小，以及对窗口的调整都可能导致不同的结果。

对于 HTML，您无法通过在 HTML 代码中添加额外的空格或换行来改变输出的效果。

当显示页面时，浏览器会移除源代码中多余的空格和空行。所有连续的空格或空行都会被算作一个空格。需要注意的是，HTML 代码中的所有连续的空行（换行）也被显示为一个空格。

### 六、HTML文本格式化
HTML 文本格式化标签
|标签|描述|
|:-|:-|
|`<b>`	|<b>定义粗体文本</b>|
|`<em>`|<em>定义着重文字<em/>|
|`<i>`	|<i>定义斜体字</i>|
|`<small>`|<small>	定义小号字 </small>|
|`<strong>`|<strong>	定义加重语气 </strong>|
|`<sub>`|<sub>	定义下标字 </sub>|
|`<sup>`|<sup>	定义上标字 </sup>|
|`<ins>`|<ins>	定义插入字 </ins>|
|`<del>`|<del>	定义删除字 </del>|

HTML"计算机输出"标签
|标签|描述|
|:-|:-|
|`<code>`	|<code>定义计算机代码</code>|
|`<kbd>`	|<kbd>定义键盘码</kbd>|
|`<samp>`	|<samp>定义计算机代码样本</samp>|
|`<var>`	|<var>定义变量</var>|
|`<pre>`	|<pre>定义预格式文本</pre>|

HTML 引文, 引用, 及标签定义
|标签|描述|
|:-|:-|
|`<abbr>`	|<abbr>定义缩写</abbr>|
|`<address>`|	<address>定义地址</address>|
|`<bdo>`	|<bdo>定义文字方向</bdo>|
|`<blockquote>`	|<blockquote>定义长的引用</blockquote>|
|`<q>`	|<q>定义短的引用语</q>|
|`<cite>`	|<cite>定义引用、引证</cite>|
|`<dfn>`	|<dfn>定义一个定义项目</dfn>|

### 七、HTML链接
HTML 使用超级链接与网络上的另一个文档相连。

HTML中的链接是一种用于在不同网页之间导航的元素。

链接通常用于将一个网页与另一个网页或资源（如文档、图像、音频文件等）相关联。

链接允许用户在浏览网页时单击文本或图像来跳转到其他位置，从而实现网页之间的互联。

#### HTML 超链接（链接）
HTML使用标签 `<a>` 来设置超文本链接。

超链接可以是一个字，一个词，或者一组词，也可以是一幅图像，您可以点击这些内容来跳转到新的文档或者当前文档中的某个部分。

当您把鼠标指针移动到网页中的某个链接上时，箭头会变为一只小手。

在标签 `<a>`中使用了 `href` 属性来描述链接的地址。

默认情况下，链接将以以下形式出现在浏览器中：

- 一个未访问过的链接显示为蓝色字体并带有下划线。
- 访问过的链接显示为紫色并带有下划线。
- 点击链接时，链接显示为红色并带有下划线。
<br />
- <small>注意：如果为这些超链接设置了 CSS 样式，展示样式会根据 CSS 的设定而显示。</small>
  
#### HTML 链接语法

以下是 HTML 中创建链接的基本语法和属性：
`<a>` 元素：创建链接的主要HTML元素是`<a>`（锚）元素。

`<a>`元素具有以下属性：

- href：指定链接目标的URL，这是链接的最重要属性。可以是另一个网页的URL、文件的URL或其他资源的URL。
- target（可选）：指定链接如何在浏览器中打开。常见的值包括`_blank`（在新标签或窗口中打开链接）和 `_self`（在当前标签或窗口中打开链接）。
- title（可选）：提供链接的额外信息，通常在鼠标悬停在链接上时显示为工具提示。
- rel（可选）：指定与链接目标的关系，如 nofollow、noopener 等。

链接的 HTML 代码很简单，它类似这样：
`<a href="url">链接文本</a>`

href 属性描述了链接的目标。
实例：
`<a herf="https://www.runoob.com/">访问菜鸟教程</a>`

上面这行代码显示为：访问菜鸟教程

点击这个超链接会把用户带到菜鸟教程的首页。

- <small>提示: "链接文本" 不必一定是文本。图片或其他 HTML 元素都可以成为链接。</small>
  
- 文本链接：最常见的链接类型是文本链接，它使用 `<a>` 元素将一段文本转化为可点击的链接，例如：
`<a href="https://www.example.com">访问示例网站</a>`

- 图像链接：您还可以使用图像作为链接。在这种情况下，`<a>` 元素包围着` <img>` 元素。例如：
`<a href="https://www.example.com">
  <img src="example.jpg" alt="示例图片">
</a>`

- 锚点链接：除了链接到其他网页外，您还可以在同一页面内创建内部链接，这称为锚点链接。要创建锚点链接，需要在目标位置使用 `<a>` 元素定义一个标记，并使用#符号引用该标记。例如：
  ```
  <a href="#section2">跳转到第二部分</a>
  <!-- 在页面中的某个位置 -->
  <a name="section2"></a>
  ```

- 下载链接：如果您希望链接用于下载文件而不是导航到另一个网页，可以使用 download 属性。例如：
`<a href="document.pdf" download>下载文档</a>`

#### HTML 链接 - target 属性
使用 target 属性，你可以定义被链接的文档在何处显示。
下面的这行会在新窗口打开文档：
实例:
`<a href="https://www.runoob.com/" target="_blank" rel="noopener noreferrer">访问菜鸟教程!</a>`

#### HTML 链接- id 属性
id 属性可用于创建一个 HTML 文档书签。

提示: 书签不会以任何特殊方式显示，即在 HTML 页面中是不显示的，所以对于读者来说是隐藏的。

实例
在HTML文档中插入ID:
`<a id="tips">有用的提示部分</a>`
在HTML文档中创建一个链接到"有用的提示部分(id="tips"）"：

`<a href="#tips">访问有用的提示部分</a>`
或者，从另一个页面创建一个链接到"有用的提示部分(id="tips"）"：

`<a href="https://www.runoob.com/html/html-links.html#tips">
访问有用的提示部分</a>`

#### 基本的注意事项 - 有用的提示
注意：请始终将正斜杠添加到子文件夹。
假如这样书写链接：`href="https://www.runoob.com/html"`，就会向服务器产生两次 HTTP 请求。这是因为服务器会添加正斜杠到这个地址，然后创建一个新的请求，就像这样：`href="https://www.runoob.com/html/"`。

### 八、HTML头部
#### HTML`<head>`元素 
`<head>` 元素包含了所有的头部标签元素。在 `<head>`元素中你可以插入脚本（scripts）, 样式文件（CSS），及各种meta信息。

可以添加在头部区域的元素标签为: `<title>`, `<style>`,` <meta>`, `<link>`, `<script>`,` <noscript> `和 `<base>`。

#### HTML `<title>` 元素
`<title> `标签定义了不同文档的标题。

`<title> `在 HTML/XHTML 文档中是必需的。

`<title>` 元素:

- 定义了浏览器工具栏的标题
- 当网页添加到收藏夹时，显示在收藏夹中的标题
- 显示在搜索引擎结果页面的标题
  
#### HTML `<base>` 元素
`<base>` 标签描述了基本的链接地址/链接目标，该标签作为HTML文档中所有的链接标签的默认链接:
实例
```
<head>
<base href="http://www.runoob.com/images/" target="_blank">
</head>
```

#### HTML `<link>` 元素
`<link>` 标签定义了文档与外部资源之间的关系。
`<link>` 标签通常用于链接到样式表
实例
```
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
```

#### HTML`<style>`元素
`<style>`标签定义了HTML文档的样式文件引用地址.
在`<style>` 元素中你也可以直接添加样式来渲染 HTML 文档:
实例
```
<head>
<style type="text/css">
body {
    background-color:yellow;
}
p {
    color:blue
}
</style>
</head>
```

#### HTML <meta> 元素
meta标签描述了一些基本的元数据。
`<meta>`标签提供了元数据。元数据也不显示在页面上，但会被浏览器解析。
META 元素通常用于指定网页的描述，关键词，文件的最后修改时间，作者，和其他元数据。
元数据可以使用于浏览器（如何显示内容或重新加载页面），搜索引擎（关键词），或其他Web服务。
`<meta>` 一般放置于 `<head>` 区域

##### `<meta>` 标签- 使用实例
- 为搜索引擎定义关键词:
`<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript">`
- 为网页定义描述内容:
`<meta name="description" content="免费 Web & 编程 教程">`
- 定义网页作者:
`<meta name="author" content="Runoob">`
- 每30秒钟刷新当前页面:
`<meta http-equiv="refresh" content="30">`
#### HTML `<script>` 元素
`<script>`标签用于加载脚本文件，如： JavaScript。

### 九、HTML样式--CSS
CSS (Cascading Style Sheets) 用于渲染HTML元素标签的样式。

#### 如何使用CSS
CSS 是在 HTML 4 开始使用的,是为了更好的渲染HTML元素而引入的.

CSS 可以通过以下方式添加到HTML中:

- 内联样式- 在HTML元素中使用"style" 属性
- 内部样式表 -在HTML文档头部`<head>`区域使用`<style>` 元素 来包含CSS
- 外部引用 - 使用外部 CSS 文件

最好的方式是通过外部引用CSS文件.
<small>(详细内容见后续css笔记)</small>

#### 内联样式
当特殊的样式需要应用到个别元素时，就可以使用内联样式。 使用内联样式的方法是在相关的标签中使用样式属性。样式属性可以包含任何 CSS 属性。以下实例显示出如何改变段落的颜色和左外边距。
`<p style="color:blue;margin-left:20px;">这是一个段落。</p>`

#### HTML样式实例 - 背景颜色
背景色属性（background-color）定义一个元素的背景颜色：
```
<body style="background-color:yellow;">
<h2 style="background-color:red;">这是一个标题</h2>
<p style="background-color:green;">这是一个段落。</p>
</body>
```

早期背景色属性（background-color）是使用`bgcolor` 属性定义。

#### HTML 样式实例 - 字体, 字体颜色 ，字体大小
我们可以使用font-family（字体），color（颜色），和font-size（字体大小）属性来定义字体的样式:
```
<h1 style="font-family:verdana;">一个标题</h1>
<p style="font-family:arial;color:red;font-size:20px;">一个段落。</p>
```
现在通常使用`font-family`（字体），`color`（颜色），和`font-size`（字体大小）属性来定义文本样式，而不是使用`<font>`标签。

#### HTML 样式实例 - 文本对齐方式
使用 text-align（文字对齐）属性指定文本的水平与垂直对齐方式：
```
<h1 style="text-align:center;">居中对齐的标题</h1>
<p>这是一个段落。</p>
```
文本对齐属性`text-align`取代了旧标签 `<center>` 。

#### 内部样式表
当单个文件需要特别样式时，就可以使用内部样式表。你可以在`<head>`部分通过`<style>`标签定义内部样式表:
```
<head>
<style type="text/css">
body {background-color:yellow;}
p {color:blue;}
</style>
</head>
```

#### 外部样式表
当样式需要被应用到很多页面的时候，外部样式表将是理想的选择。使用外部样式表，你就可以通过更改一个文件来改变整个站点的外观。
```
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
```

#### HTML 样式标签
|标签|描述|
|:-|:-|
|`<style>`|定义文本样式|
|`<link>`|定义资源引用地址|

#### 已弃用的标签和属性
在HTML 4, 原来支持定义HTML元素样式的标签和属性已被弃用。这些标签将不支持新版本的HTML标签。
不建议使用的标签有: `<font>`, `<center>`, `<strike>`
不建议使用的属性: color 和 bgcolor.

### 十、HTML图像
#### HTML 图像- 图像标签（·）和源属性（Src）
在 HTML 中，图像由`<img>` 标签定义。
`<img> `是空标签，意思是说，它只包含属性，并且没有闭合标签。
要在页面上显示图像，你需要使用源属性（src）。`src` 指 "source"。源属性的值是图像的 URL 地址。
定义图像的语法是：
`<img src="url" >`
URL 指存储图像的位置。如果名为 "pulpit.jpg" 的图像位于 `www.runoob.com `的 images 目录中，那么其 URL 为 `http://www.runoob.com/images/pulpit.jpg。`
浏览器将图像显示在文档中图像标签出现的地方。如果你将图像标签置于两个段落之间，那么浏览器会首先显示第一个段落，然后显示图片，最后显示第二段。

#### HTML 图像- Alt属性
alt 属性用来为图像定义一串预备的可替换的文本。

替换文本属性的值是用户定义的。

`<img src="boat.gif" alt="Big Boat">`

在浏览器无法载入图像时，替换文本属性告诉读者她们失去的信息。此时，浏览器将显示这个替代性的文本而不是图像。
为页面上的图像都加上替换文本属性是个好习惯，这样有助于更好的显示信息，并且对于那些使用纯文本浏览器的人来说是非常有用的。

#### HTML 图像- 设置图像的高度与宽度
height（高度） 与 width（宽度）属性用于设置图像的高度与宽度。

属性值默认单位为像素:

`<img src="pulpit.jpg" alt="Pulpit rock" width="304" height="228">`
提示: 指定图像的高度和宽度是一个很好的习惯。如果图像指定了高度宽度，页面加载时就会保留指定的尺寸。如果没有指定图片的大小，加载页面时有可能会破坏HTML页面的整体布局。

#### 基本的注意事项 - 有用的提示：
注意: 
- 假如某个 HTML 文件包含十个图像，那么为了正确显示这个页面，需要加载 11 个文件。加载图片是需要时间的，所以我们的建议是：慎用图片。

- 加载页面时，要注意插入页面图像的路径，如果不能正确设置图像的位置，浏览器无法加载图片，图像标签就会显示一个破碎的图片。

#### HTML 图像标签
|标签|描述|
|:-|:-|
|`<img>`|	定义图像|
|`<map>`|	定义图像地图|
|`<area>`|	定义图像地图中的可点击区域|

### 十一、HTML表格
HTML 表格由 `<table>` 标签来定义。

HTML 表格是一种用于展示结构化数据的标记语言元素。

每个表格均有若干行（由 `<tr>` 标签定义），
每行被分割为若干单元格（由 `<td>` 标签定义），
表格可以包含标题行（`<th>`）用于定义列的标题。

- tr：tr 是 table row 的缩写，表示表格的一行。
- td：td 是 table data 的缩写，表示表格的数据单元格。
- th：th 是 table header的缩写，表示表格的表头单元格。
  
数据单元格可以包含文本、图片、列表、段落、表单、水平线、表格等等。

<small>HTML 表格生成器：https://c.runoob.com/front-end/7688/。</small>

以下是一个简单的 HTML 表格实例:
```
<table>
  <thead>
    <tr>
      <th>列标题1</th>
      <th>列标题2</th>
      <th>列标题3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>行1，列1</td>
      <td>行1，列2</td>
      <td>行1，列3</td>
    </tr>
    <tr>
      <td>行2，列1</td>
      <td>行2，列2</td>
      <td>行2，列3</td>
    </tr>
  </tbody>
</table>
```
以上的表格实例代码中，`<table>` 元素表示整个表格，它包含两个主要部分：`<thead>` 和 `<tbody>`。

`<thead>` 用于定义表格的标题部分: 在 `<thead>` 中，使用 `<th>` 元素定义列的标题，以上实例中列标题分别为"列标题1"，"列标题2"和"列标题3"。

`<tbody>`用于定义表格的主体部分: 在`<tbody>`中，使用`<tr>`元素定义行，并在每行中使用`<td>`元素定义单元格数据，以上实例中有两行数据，每行包含三个单元格。

通过使用`<th>`元素定义列标题，可以使其在表格中以粗体显示，与普通单元格区分开来。

HTML 表格还可以具有其他部分，如 `<tfoot>`（表格页脚）和`<caption>`（表格标题），`<tfoot>`可用于在表格的底部定义摘要、统计信息等内容。`<caption>`可用于为整个表格定义标题。

HTML 表格还支持合并单元格和跨行/跨列的操作，以及其他样式和属性的应用，以满足各种需求。

我们也可以使用 CSS 来进一步自定义表格的样式和外观。

#### 表格实例
```
<table border="1">
    <tr>
        <td>row 1, cell 1</td>
        <td>row 1, cell 2</td>
    </tr>
    <tr>
        <td>row 2, cell 1</td>
        <td>row 2, cell 2</td>
    </tr>
</table>
```

#### HTML 表格和边框属性
如果不定义边框属性，表格将不显示边框。有时这很有用，但是大多数时候，我们希望显示边框。

使用边框属性来显示一个带有边框的表格：
```
<table border="1">
    <tr>
        <td>Row 1, cell 1</td>
        <td>Row 1, cell 2</td>
    </tr>
</table>
```
#### HTML 表格表头
表格的表头使用 `<th>` 标签进行定义。

大多数浏览器会把表头显示为==粗体居中==的文本：
```
<table border="1">
    <tr>
        <th>Header 1</th>
        <th>Header 2</th>
    </tr>
    <tr>
        <td>row 1, cell 1</td>
        <td>row 1, cell 2</td>
    </tr>
    <tr>
        <td>row 2, cell 1</td>
        <td>row 2, cell 2</td>
    </tr>
</table>
```

#### HTML 表格标签
|标签	|描述|
|:-|:-|
|`<table>`|	定义表格|
|`<th>`	|定义表格的表头|
|`<tr>`	|定义表格的行|
|`<td>`	|定义表格单元|
|`<caption>`	|定义表格标题|
|`<colgroup>`	|定义表格列的组|
|`<col>`	|定义用于表格列的属性|
|`<thead>`	|定义表格的页眉|
|`<tbody>`|	定义表格的主体|
|`<tfoot>`|	定义表格的页脚|

### 十二、HTML列表
HTML 支持有序、无序和定义列表
#### HTML无序列表
无序列表是一个项目的列表，此列项目使用粗体圆点（典型的小黑圆圈）进行标记。

无序列表使用 `<ul>` 标签

```
<ul>
<li>Coffee</li>
<li>Milk</li>
</ul>
```
浏览器显示如下：
<ul>
<li>Coffee</li>
<li>Milk</li>
</ul>

#### HTML 有序列表
同样，有序列表也是一列项目，列表项目使用数字进行标记。 
有序列表始于 `<ol>` 标签。
每个列表项始于 `<li>` 标签。

列表项使用数字来标记。
```
<ol>
<li>Coffee</li>
<li>Milk</li>
</ol>
```
浏览器中显示如下：
<ol>
<li>Coffee</li>
<li>Milk</li>
</ol>

#### HTML 自定义列表
自定义列表不仅仅是一列项目，而是项目及其注释的组合。

自定义列表以 `<dl>` 标签开始。
每个自定义列表项以 `<dt>` 开始。
每个自定义列表项的定义以 `<dd>` 开始。
```
<dl>
<dt>Coffee</dt>
<dd>- black hot drink</dd>
<dt>Milk</dt>
<dd>- white cold drink</dd>
</dl>
```
浏览器显示如下：
<dl>
<dt>Coffee</dt>
<dd>- black hot drink</dd>
<dt>Milk</dt>
<dd>- white cold drink</dd>
</dl>

#### 注意事项 - 有用提示
提示: 列表项内部可以使用段落、换行符、图片、链接以及其他列表等等。

#### HTML列表标签
|标签|	描述|
|:-|:-|
|`<ol>`	|定义有序列表|
|`<ul>`	|定义无序列表|
|`<li>`	|定义列表项|
|`<dl>`	|定义列表|
|`<dt>`|自定义列表项目|
|`<dd>`	|定义自定列表项的描述|

- ul是unordered lists的缩写 (无序列表)
- li是list item的缩写 （列表项目）
- ol是ordered lists的缩写（有序列表）
- dl是definition lists的英文缩写 (自定义列表)
- dt是definition term的缩写 (自定义列表组)
- dd是definition description的缩写（自定义列表描述）
- nl是navigation lists的英文缩写 （导航列表）
- tr是table row的缩写 （表格中的一行）
- th是table header cell的缩写 （表格中的表头）
- td是table data cell的缩写 （表格中的一个单元格

### 十三、HTML区块
HTML 可以通过 `<div>` 和 `<span>`将元素组合起来。
#### HTML 区块元素
大多数 HTML 元素被定义为 块级元素 或 内联元素。

块级元素在浏览器显示时，通常会以新行来开始（和结束）。

实例: `<h1>`, `<p>`, `<ul>`, `<table>`

#### HTML 内联元素
内联元素在显示时通常不会以新行开始。

实例:`<b>`, `<td>`, `<a>`, `<img>`

#### HTML `<div>` 元素
html `<div>` 元素是块级元素，它独占一行，可以设置宽度、高度以及边距等样式属性。它适合用于创建页面的大块结构，例如页面的主体区域、容器、布局等。

`<div>` 元素没有特定的含义。除此之外，由于它属于块级元素，浏览器会在其前后显示折行。

如果与 CSS 一同使用，`<div>` 元素可用于对大的内容块设置样式属性。

`<div>` 元素的另一个常见的用途是文档布局。它取代了使用表格定义布局的老式方法。使用 `<table>` 元素进行文档布局不是表格的正确用法。`<table>` 元素的作用是显示表格化的数据。

#### HTML `<span>` 元素
html `<span>` 元素是内联元素，是行内元素，它不会独占一行，宽度默认由其内容决定。它适合用于对文本或其他行内元素进行样式化、标记或包裹。

`<span>` 元素也没有特定的含义。

当与 CSS 一同使用时，`<span>` 元素可用于为部分文本设置样式属性。

#### HTML 分组标签
|标签	|描述|
|:-|:-|
|`<div>`|定义了文档的区域，块级 |(block-level)
|`<span>`|用来组合文档中的行内元素， 内联元素(inline)|

### 十四、HTML布局
网页布局对改善网站的外观非常重要。
#### 网站布局
大多数网站会把内容安排到多个列中（就像杂志或报纸那样）。

大多数网站可以使用 `<div>` 或者 `<table>` 元素来创建多列。CSS 用于对元素进行定位，或者为页面创建背景以及色彩丰富的外观。

虽然我们可以使用HTML table标签来设计出漂亮的布局，但是table标签是不建议作为布局工具使用的 (表格不是布局工具。)
#### HTML 布局 - 使用`<div>` 元素
div 元素是用于分组 HTML 元素的块级元素。

下面的例子使用五个 div 元素来创建多列布局：
```
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8"> 
<title>菜鸟教程(runoob.com)</title> 
</head>
<body>
 
<div id="container" style="width:500px">
 
<div id="header" style="background-color:#FFA500;">
<h1 style="margin-bottom:0;">主要的网页标题</h1></div>
 
<div id="menu" style="background-color:#FFD700;height:200px;width:100px;float:left;">
<b>菜单</b><br>
HTML<br>
CSS<br>
JavaScript</div>
 
<div id="content" style="background-color:#EEEEEE;height:200px;width:400px;float:left;">
内容在这里</div>
 
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
版权 © runoob.com</div>
 
</div>
 
</body>
</html>
```
上面的 HTML 代码会产生如下结果：
![alt text](img/26291745-6A59-45C0-847E-322B55AB6339-1.jpg)
#### HTML 布局 - 使用表格
使用 HTML `<table>` 标签是创建布局的一种简单的方式。

大多数站点可以使用 `<div>` 或者 `<table>` 元素来创建多列。CSS 用于对元素进行定位，或者为页面创建背景以及色彩丰富的外观。

- 即使可以使用 HTML 表格来创建漂亮的布局，但设计表格的目的是呈现表格化数据 - 表格不是布局工具！

下面的例子使用三行两列的表格 - 第一和最后一行使用 colspan 属性来横跨两列：
```
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8"> 
<title>菜鸟教程(runoob.com)</title> 
</head>
<body>
 
<table width="500" border="0">
<tr>
<td colspan="2" style="background-color:#FFA500;">
<h1>主要的网页标题</h1>
</td>
</tr>
 
<tr>
<td style="background-color:#FFD700;width:100px;">
<b>菜单</b><br>
HTML<br>
CSS<br>
JavaScript
</td>
<td style="background-color:#eeeeee;height:200px;width:400px;">
内容在这里</td>
</tr>
 
<tr>
<td colspan="2" style="background-color:#FFA500;text-align:center;">
版权 © runoob.com</td>
</tr>
</table>
 
</body>
</html>
```
上面的 HTML 代码会产生以下结果：
![alt text](img/F3B0C373-35D3-4DA4-8449-A7C08E83AC97.jpg)
#### HTML 布局 - 有用的提示
Tip: 使用 CSS 最大的好处是，如果把 CSS 代码存放到外部样式表中，那么站点会更易于维护。通过编辑单一的文件，就可以改变所有页面的布局。

Tip: 由于创建高级的布局非常耗时，使用模板是一个快速的选项。通过搜索引擎可以找到很多免费的网站模板（您可以使用这些预先构建好的网站布局，并优化它们）。

#### HTML 布局标签
|标签	|描述|
|:-|:-|
|`<div>`	|定义文档区块，块级(block-level)|
|`<span>`	|定义 span，用来组合文档中的行内元素|

### 十五、HTML表单和输入
HTML 表单用于收集用户的输入信息。

HTML 表单表示文档中的一个区域，此区域包含交互控件，将用户收集到的信息发送到 Web 服务器。

HTML 表单通常包含各种输入字段、复选框、单选按钮、下拉列表等元素。

以下是一个简单的HTML表单的例子：

- `<form>` 元素用于创建表单，action 属性定义了表单数据提交的目标 URL，method 属性定义了提交数据的 HTTP 方法（这里使用的是 "post"）。
- `<label>` 元素用于为表单元素添加标签，提高可访问性。
- `<input>` 元素是最常用的表单元素之一，它可以创建文本输入框、密码框、单选按钮、复选框等。type 属性定义了输入框的类型，id 属性用于关联 `<label>` 元素，name 属性用于标识表单字段。
- `<select>` 元素用于创建下拉列表，而 `<option>` 元素用于定义下拉列表中的选项。
  
实例：
```
<form action="/" method="post">
    <!-- 文本输入框 -->
    <label for="name">用户名:</label>
    <input type="text" id="name" name="name" required>

    <br>

    <!-- 密码输入框 -->
    <label for="password">密码:</label>
    <input type="password" id="password" name="password" required>

    <br>

    <!-- 单选按钮 -->
    <label>性别:</label>
    <input type="radio" id="male" name="gender" value="male" checked>
    <label for="male">男</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">女</label>

    <br>

    <!-- 复选框 -->
    <input type="checkbox" id="subscribe" name="subscribe" checked>
    <label for="subscribe">订阅推送信息</label>

    <br>

    <!-- 下拉列表 -->
    <label for="country">国家:</label>
    <select id="country" name="country">
        <option value="cn">CN</option>
        <option value="usa">USA</option>
        <option value="uk">UK</option>
    </select>

    <br>

    <!-- 提交按钮 -->
    <input type="submit" value="提交">
</form>
```
#### HTML 表单
表单是一个包含表单元素的区域。

表单元素是允许用户在表单中输入内容，比如：文本域（textarea）、下拉列表（select）、单选框（radio-buttons）、复选框（checkbox） 等等。

我们可以使用 `<form>` 标签来创建表单:
```
<form>
.
input 元素
.
</form>
```

#### HTML 表单 - 输入元素
多数情况下被用到的表单标签是输入标签 `<input>`。
输入类型是由 type 属性定义。

#### 文本域（Text Fields）
文本域通过 `<input type="text">` 标签来设定，当用户要在表单中键入字母、数字等内容时，就会用到文本域。
```
<form>
First name: <input type="text" name="firstname"><br>
Last name: <input type="text" name="lastname">
</form>
```
浏览器显示如下：
<form>
First name: <input type="text" name="firstname"><br>
Last name: <input type="text" name="lastname">
</form>
注意:表单本身并不可见。同时，在大多数浏览器中，文本域的默认宽度是 20 个字符。

#### 密码字段
密码字段通过标签 `<input type="password">` 来定义:
```
<form>
Password: <input type="password" name="pwd">
</form>
```
浏览器显示效果如下:
<form>
Password: <input type="password" name="pwd">
</form>
注意：密码字段字符不会明文显示，而是以星号 `*` 或圆点 `.` 替代。

#### 单选按钮（Radio Buttons）
`<input type="radio">` 标签定义了表单的单选框选项:
```
<form action="">
<input type="radio" name="sex" value="male">男<br>
<input type="radio" name="sex" value="female">女
</form>
```
浏览器显示效果如下:
<form action="">
<input type="radio" name="sex" value="male">男<br>
<input type="radio" name="sex" value="female">女
</form>

#### 复选框（Checkboxes）
`<input type="checkbox">` 定义了复选框。
复选框可以选取一个或多个选项：
```
<form>
<input type="checkbox" name="vehicle" value="Bike">我喜欢自行车<br>
<input type="checkbox" name="vehicle" value="Car">我喜欢小汽车
</form>
```
浏览器显示效果如下:
<form>
<input type="checkbox" name="vehicle" value="Bike">我喜欢自行车<br>
<input type="checkbox" name="vehicle" value="Car">我喜欢小汽车
</form>

#### 提交按钮(Submit)
`<input type="submit">` 定义了提交按钮。

当用户单击确认按钮时，表单的内容会被传送到服务器。表单的动作属性 action 定义了服务端的文件名。

`action` 属性会对接收到的用户输入数据进行相关的处理:
```
<form name="input" action="html_form_action.php" method="get">
Username: <input type="text" name="user">
<input type="submit" value="Submit">
</form>
```
浏览器显示效果如下:
<form name="input" action="html_form_action.php" method="get">
Username: <input type="text" name="user">
<input type="submit" value="Submit">
</form>
假如您在上面的文本框内键入几个字母，然后点击确认按钮，那么输入数据会传送到 html_form_action.php 文件，该页面将显示出输入的结果。

以上实例中有一个 method 属性，它用于定义表单数据的提交方式，可以是以下值：

- post：指的是 HTTP POST 方法，表单数据会包含在表单体内然后发送给服务器，用于提交敏感数据，如用户名与密码等。
- get：默认值，指的是 HTTP GET 方法，表单数据会附加在 action 属性的 URL 中，并以 ?作为分隔符，一般用于不敏感信息，如分页等。例如：`https://www.runoob.com/?page=1`，这里的 `page=1` 就是 get 方法提交的数据。

实例：
```
<!-- 以下表单使用 GET 请求发送数据到当前的 URL，method 默认位 GET。 -->
<form>
  <label>Name:
    <input name="submitted-name" autocomplete="name">
  </label>
  <button>Save</button>
</form>

<!-- 以下表单使用 POST 请求发送数据到当前的 URL。 -->
<form method="post">
  <label>Name:
    <input name="submitted-name" autocomplete="name">
  </label>
  <button>Save</button>
</form>

<!-- 表单使用 fieldset, legend, 和 label 标签 -->
<form method="post">
  <fieldset>
    <legend>Title</legend>
    <label><input type="radio" name="radio"> Select me</label>
  </fieldset>
</form>
```
#### HTML 表单标签
HTML5新标签
|标签|	描述|
|:-|:-|
|`<form>`|	定义供用户输入的表单|
|`<input>`	|定义输入域|
|`<textarea>`	|定义文本域 (一个多行的输入控件)|
|`<label>`	|定义了 `<input>` 元素的标签，一般为输入标题|
|`<fieldset>`	|定义了一组相关的表单元素，并使用外框包含起来|
|`<legend>`	|定义了 `<fieldset>` 元素的标题|
|`<select>`	|定义了下拉选项列表|
|`<optgroup>`	|定义选项组|
|`<option>`	|定义下拉列表中的选项|
|`<button>`	|定义一个点击按钮|
|`<datalist>`	|指定一个预先定义的输入控件选项列表|
|`<keygen>`	|定义了表单的密钥对生成器字段|
|`<output>`	|定义一个计算结果|

### 十六、HTML框架
通过使用框架，你可以在同一个浏览器窗口中显示不止一个页面。

iframe语法:
`<iframe src="URL"></iframe>`
该URL指向不同的网页。
#### iframe - 设置高度与宽度
height 和 width 属性用来定义iframe标签的高度与宽度。

属性默认以像素为单位, 但是你可以指定其按比例显示 (如："80%")。
`<iframe src="demo_iframe.htm" width="200" height="200"></iframe>`
#### iframe - 移除边框
frameborder 属性用于定义iframe表示是否显示边框。

设置属性值为 "0" 移除iframe的边框:

实例
`<iframe src="demo_iframe.htm" frameborder="0"></iframe>`

#### 使用 iframe 来显示目标链接页面
iframe 可以显示一个目标链接的页面

目标链接的属性必须使用 iframe 的属性，如下实例:

实例
```
<iframe src="demo_iframe.htm" name="iframe_a"></iframe>
<p><a href="https://www.runoob.com" target="iframe_a" rel="noopener">RUNOOB.COM</a></p>
```
#### HTML iframe 标签
|标签|	说明|
|:-|:-|
|`<iframe>`|定义一个内联的iframe|

### 十七、HTML颜色、颜色名、颜色值
- 颜色：https://www.runoob.com/html/html-colors.html
- 颜色名：https://www.runoob.com/html/html-colornames.html
- 颜色值：https://www.runoob.com/html/html-colorvalues.html

### 十八、HTML脚本
JavaScript 使 HTML 页面具有更强的动态和交互性。
#### HTML `<script>` 标签
`<script>` 标签用于定义客户端脚本，比如 JavaScript。

`<script>` 元素既可包含脚本语句，也可通过 `src` 属性指向外部脚本文件。

JavaScript 最常用于图片操作、表单验证以及内容动态更新。

下面的脚本会向浏览器输出"Hello World!"：
```
<script>
document.write("Hello World!");
</script>
```
#### HTML`<noscript>` 标签
`<noscript>` 标签提供无法使用脚本时的替代内容，比方在浏览器禁用脚本时，或浏览器不支持客户端脚本时。

`<noscript>`元素可包含普通 HTML 页面的 body 元素中能够找到的所有元素。

只有在浏览器不支持脚本或者禁用脚本时，才会显示 `<noscript>` 元素中的内容：
```
<script>
document.write("Hello World!")
</script>
<noscript>抱歉，你的浏览器不支持 JavaScript!</noscript>
```

#### HTML 脚本标签
|标签	|描述|
|:-|:-|
|`<script>`	|定义了客户端脚本|
|`<noscript>`	|定义了不支持脚本浏览器输出的文本|

### 十九、HTML字符实体
HTML 中的预留字符必须被替换为字符实体。
一些在键盘上找不到的字符也可以使用字符实体来替换。
#### HTML 实体
在 HTML 中，某些字符是预留的。
在 HTML 中不能使用小于号（<）和大于号（>），这是因为浏览器会误认为它们是标签。

如果希望正确地显示预留字符，我们必须在 HTML 源代码中使用字符实体（character entities）。 字符实体类似这样：
```
&entity_name;
或
&#entity_number;
```
如需显示小于号，我们必须这样写：`&lt; `或 `&#60;` 或 `&#060;`

- 提示： 使用实体名而不是数字的好处是，名称易于记忆。不过坏处是，浏览器也许并不支持所有实体名称（对实体数字的支持却很好）。

#### 不间断空格(Non-breaking Space)
HTML 中的常用字符实体是不间断空格(`&nbsp;`)。

浏览器总是会截短 HTML 页面中的空格。如果您在文本中写 10 个空格，在显示该页面之前，浏览器会删除它们中的 9 个。如需在页面中增加空格的数量，您需要使用 `&nbsp;` 字符实体。

#### 结合音标符
发音符号是加到字母上的一个"glyph(字形)"。

一些变音符号, 如 尖音符 (  ̀) 和 抑音符 (  ́) 。

变音符号可以出现字母的上面和下面，或者字母里面，或者两个字母间。

变音符号可以与字母、数字字符的组合来使用。

以下是一些实例:

|音标符|	字符|	Construct	|输出结果|
|:-|:-|:-|:-|
|  ̀	|a|	`a&#768;`|	à|
|  ́	|a|	`a&#769;`	|á|
|̂	|a|	`a&#770;`	|â|
|  ̃	|a|	`a&#771;`|	ã|
|  ̀	|O|	`O&#768;`	|Ò|
|  ́	|O|`O&#769;`	|Ó|
|^|O|`O&#770;`|O&#770;
| ̃	|O	|`O&#771;`|	Õ|

#### HTML字符实体
==实体名称对大小写敏感！==
|显示结果	|描述	|实体名称|	实体编号|
|:-:|:-|:-|:-|
| 	|空格	|`&nbsp;`	|`&#160;`|
|<	|小于号|	`&lt;`|	`&#60;`|
|>	|大于号|	`&gt;`	|`&#62;`|
|&	|和号|	`&amp;`	|`&#38;`|
|"	|引号|	`&quot;`|	`&#34;`|
|'	|撇号| 	`&apos;`| `(IE不支持)&#39;`|
|￠	|分|	`&cent;`	|`&#162;`|
|£	|镑|	`&pound;`|	`&#163;`|
|¥	|人民币/日元|	`&yen;`	|`&#165;`|
|€	|欧元|	`&euro;`	|`&#8364;`|
|§	|小节|	`&sect;`|	`&#167;`|
|©	|版权|	`&copy;`	|`&#169;`|
|®	|注册商标|	`&reg;`	|`&#174;`|
|™	|商标|	`&trade;`|	`&#8482;`|
|×	|乘号|	`&times;`	|`&#215;`|
|÷	|除号|	`&divide;`	|`&#247;`|

虽然 html 不区分大小写，但实体字符对大小写敏感。

### HTML 统一资源定位器(Uniform Resource Locators)
URL 是一个网页地址。

URL可以由字母组成，如"runoob.com"，或互联网协议（IP）地址： 192.68.20.50。大多数人进入网站使用网站域名来访问，因为 名字比数字更容易记住。

#### URL - 统一资源定位器
Web浏览器通过URL从Web服务器请求页面。

当您点击 HTML 页面中的某个链接时，对应的 `<a>` 标签指向万维网上的一个地址。

一个统一资源定位器(URL) 用于定位万维网上的文档。

一个网页地址实例: http://www.runoob.com/html/html-tutorial.html

 语法规则:
`scheme://host.domain:port/path/filename`

说明:
- scheme - 定义因特网服务的类型。最常见的类型是 http
- host - 定义域主机（http 的默认主机是 www）
- domain - 定义因特网域名，比如 runoob.com
- :port - 定义主机上的端口号（http 的默认端口号是 80）
- path - 定义服务器上的路径（如果省略，则文档必须位于网站的根目录中）。
- filename - 定义文档/资源的名称

#### 常见的 URL Scheme
以下是一些URL scheme：
|Scheme	|访问	|用于...|
|:-|:-|:-|
|http|超文本传输协议|	以 http:// 开头的普通网页。不加密|
|https|	安全超文本传输协议|	安全网页，加密所有信息交换|
|ftp|	文件传输协议|	用于将文件下载或上传至网站|
|file|	 	|您计算机上的文件|

#### URL 字符编码
URL 只能使用 ASCII 字符集.

来通过因特网进行发送。由于 URL 常常会包含 ASCII 集合之外的字符，URL 必须转换为有效的 ASCII 格式。

URL 编码使用 "%" 其后跟随两位的十六进制数来替换非 ASCII 字符。

URL 不能包含空格。URL 编码通常使用 `+` 来替换空格。

#### URL 编码实例
|字符|	URL编码|
|:-|:-|
|€	|%80|
|£	|%A3|
|©	|%A9|
|®	|%AE|
|À	|%C0|
|Á	|%C1|
|Â	|%C2|
|Ã	|%C3|
|Ä	|%C4|
|Å	|%C5|

如需完整的 URL 编码参考，请访问:[URL编码参考手册](https://www.runoob.com/tags/html-urlencode.html)