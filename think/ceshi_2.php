<?php
  namespace beijing\haidian;
  header("content-type:text/html;charset=utf-8");
  class Animals{
      public $obj = 'dog';
      static $name = '大黄';
  }

  function getmsg(){
    echo '北京海淀';
  }

  namespace shanghai\putuo;

  class Animals{
      public $obj = 'pig';
      static $name = '大蓝';
  }

  function getmsg(){
    echo '上海普陀';
  }

  // $animals = new \beijing\haidian\Animals();

  // echo $animals -> obj;

  // echo \beijing\haidian\Animals::$name;

  use beijing\haidian;//引入空间

  use beijing\haidian\Animals;//引入空间中的类

  haidian\getmsg();

  $animals = new Animals();

  echo $animals -> obj;

  echo Animals::$name;
 ?>
