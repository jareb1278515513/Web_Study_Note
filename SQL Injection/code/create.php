<?php
$host ='localhost';
$user='root';//user和password要根据自己的MySQL数据库进行修改
$password='root';
$conn=mysqli_connect($host,$user,$password);
if (!$conn){
    die('连接失败');
}

mysqli_query($conn,"set names utf-8");
$cb = 'CREATE DATABASE vuldb';
$rcb =mysqli_query($conn,$cb);
if(!$rcb){
    die('创建数据库失败<br>'. mysqli_error($conn));
}

$ct="CREATE TABLE users(".
    "id INT NOT NULL AUTO_INCREMENT,".
    "username VARCHAR(50) NOT NULL UNIQUE,".
    "realname VARCHAR(50) NOT NULL ,".
    "password VARCHAR(255) NOT NULL,".
    "PRIMARY KEY (id))ENGINE=InnoDB DEFAULT CHARSET=utf8;";

$ctt="CREATE TABLE log(".      
    "id INT NOT NULL AUTO_INCREMENT,".
    "username VARCHAR(50) NOT NULL UNIQUE,".
    "PRIMARY KEY (id))ENGINE=InnoDB DEFAULT CHARSET=utf8;";
//log表其实没有什么作用，只是为了在注入时模拟数据库中不止一个表的场景，所以没有填写数据
mysqli_select_db($conn,'vuldb');
$rct=mysqli_query($conn,$ct);
if(!$rct){
    die('数据表users创建失败：'.mysqli_error($conn));
}
$rctt=mysqli_query($conn,$ctt);
if(!$rctt){
    die('数据表log创建失败：'.mysqli_error($conn));
}
$datainto="INSERT INTO users".
          "(username,realname,password)".
          "VALUES".
          "('liu', 'liujialun',MD5('211804')),".
          "('ming', 'xiaoming',MD5('123456')),". 
          "('hong', 'xiaohong',MD5('111111')),". 
          "('hua', 'huahua',MD5('333333')),". 
          "('zhuang', 'dazhuang',MD5('888888')),". 
          "('qiang', 'xiaoqiang',MD5('666666'))"; 

$din=mysqli_query($conn,$datainto);
if(!$din ){
    die('无法添加数据：'.mysqli_error($conn));
}
mysqli_close($conn);
