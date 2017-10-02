<?php

  namespace kj1;

  function getmsg(){
    echo '123';
  }

  class Animals{
    public $obj = 'dog';
  }

  const MN = "haoshuai";

  // define('MN','haoshuai');

  namespace kj2;//命名空间只对const 函数 类 定义的常量起作用

  function getmsg(){
    echo '456';
  }

  class Animals{
    public $obj = 'pig';
  }

  const MN = "haoshuai1";

  $animals = new animals*();



  // \kj1\getmsg();//访问指定命名空间下的内容
  //
  // echo MN;
  // // define('MN','haoshuai1');
  //命名空间的多种访问方式：
  //1,非限定名称访问方式 ->访问的是当前命名空间内的元素
  //2，限定名称访问方式
  //3，完全限定名称访问方式 -> 绝对路径指定命名空间的访问方式
 ?>
