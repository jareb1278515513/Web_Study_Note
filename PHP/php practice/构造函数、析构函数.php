<?php
class Site {
  /* 成员变量 */
  var $url;
  var $title;
  
  /* 成员函数 */

  function __construct( $par1, $par2 ) {
    $this->url = $par1;
    $this->title = $par2;
 }
  function getUrl(){
   echo $this->url . PHP_EOL;
  }
  
  function getTitle(){
     echo $this->title . PHP_EOL;
  }


  //析构函数(destructor) 
  //当对象结束其生命周期时（例如对象所在的函数已调用完毕），系统自动执行析构函数。
  function __destruct(){
   print "销毁".$this->title.$this->url."\n";
  }
}
$runoob = new Site('www.runoob.com', '菜鸟教程');
$taobao = new Site('www.taobao.com', '淘宝');
$google = new Site('www.google.com', 'Google 搜索');

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();
?>