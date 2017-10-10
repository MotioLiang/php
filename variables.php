<?php 
     
     // echo "Hello World!"

     // 单行注释
     // 单行注释 shift + 3
     /*
         多行注释
     */

     # variable 变量
     // $output = "hello world";
     /*
         - 前缀 $
         - 以字母数字下划线组成
         - 数字不能开头
         - 大小写敏感
         - 驼峰命名法
     */
    

     # 数据类型
     /*
        String Integer Float Boolean Array Object Resource(函数)
     */

     $num = "22";
     $float = "22.22";
     $bool = true;

     # 运算符
     $num1 = 10;
     $num2 = 20;
     $num = $num1 + $num2;

     # 字符串拼接
     $string1 = "hello";
     $string2 = "world";
     #在php中＋号就是＋号，没有拼接功能
     # $greeting = $string1 + $String2;
     #$greeting = $string1." ".$String2."!";

     # php 中引号的区别
     #单引中的内容是单纯的字符串
     $greeting2 = '$string1 $string2';
     #双引中的变量是可以正常解析
     $greeting3 = "$string1 $string2";

     # 转意字符
     $string3 = 'they\'re hrer';
     $string4 = "they're hrer";

     echo $string4."<br>";
     echo "<hr>";
     #printf($string4);

     # 常量

     # 常量的第三个参数为bool，ture为不分大小写
     define("GREETING", "WhatEver!");
     define("GREETING", "WhatEver!",true);
     // echo GREETING."<br>";
     // echo greeting;

     var_dump(greeting);


 ?>



















