<?php
$arr=array("AAA","CCC","EEE","BBB","DDD");
$num=array(4,11,25,6,20);
$con=array("A"=>"4","C"=>"2","B"=>"3","D"=>"1");

echo "原始数据：";
echo "<br>";
print_r($arr);
echo "<br>"; 
print_r($num);
echo "<br>"; 
print_r($con);
echo "<br>"; 

echo "sort()函数：对数组进行升序排序";
echo "<br>"; 
sort($arr);
print_r($arr);
echo "<br>"; 

echo "rsort()函数：对数组进行降序排序";
echo "<br>"; 
rsort($num);
print_r($num);
echo "<br>"; 

echo "asort()函数：根据数组的值，对数组进行升序排列";
echo "<br>"; 
asort($con);
print_r($con);
echo "<br>";

echo "ksort()函数：根据数组的键，对数组进行升序排列";
echo "<br>"; 
ksort($con);
print_r($con);
echo "<br>";
?>