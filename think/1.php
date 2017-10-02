<?php
  namespace beijing;
  header("content-type:text/html;charset=utf-8");
  class Animals{
      public $obj = 'dog';
      static $name = '大黄';
  }

  function getmsg(){
    echo '北京海淀';
  }

  include("./2.php");

  // getmsg();

  const MN = "haoshuai0";

  echo \MN;

  echo MN;//在当前空间内可以找到的不会去公共空间内进行
