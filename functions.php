<?php 

    # function: 函数 - 具有某一功能的代码块呢
    /*
        Camel Case - myFunction()
        Lower Case- my_function()
        Pascal Case - MyFunction()
    */ 

    # 定义函数(php 函数名字不区分大小写执行时)
    function simpleFunction(){
    	echo "Hello World!";
    } 
    SimpleFunction();
    echo "<br>";

    # 有参数无返回值
    function buy($money="20快"){
        echo $money."给了，但是没有买东西！";
    }
    buy("100块钱");
    echo "<br>";

    # 多参有返回值
    function sumValue($num1,$num2){
    	$sum = $num1 + $num2;
    	return $sum;
    }
    $result = sumValue(52,62);
    echo $result;
    echo "<br>";

    # 无参数，有返回值
    function buyDrink(){
    	return "饮料";
    }
    echo buyDrink();
    echo "<br>";

    # 函数传引用
    $myNum = 10;
    function addFive(&$num){
       $num += 5;
    }
    addFive($myNum);
    echo $myNum; # 拿到了myNum的引用，改变了内存中的数值，所以是15





 ?>













