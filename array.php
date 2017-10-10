<?php 

    # array 数组 - 存储一堆数据的集合

    /*
        下标数组：下标以0开始
        关联数组： 关联以第一个名字开头
    */

    # 下标数组
    // $people = array("Kj","dasd","das");
    // echo $people[1];
    // echo $people[3];  数组越界

    // $ids = [23,56,85];
    // echo $ids[2];

    // $cars = ["Honda","Toyota","BYD"];
    // $cars[3] = "BWM";
    // echo $cars[3];

    // echo count($cars);

    # 打印数组的方法
    // print_r($cars);
    
    #万能打印方法
    // var_dump($cars);

    #关联数组

    $people = array("Henry"=>35,"Bukcy"=>25,"Emily"=>20);
    // echo $people["Emily"];

    $ids = [22=>"Henry",25=>"Bukcy"];
    // echo $ids[22];

    // $ids[35] = "Emily";
    // echo $ids[35];

    # 观察
    // $cars[] = "Bence";
    // print_r($cars);

    // $ids[] = "Join";
    // print_r($ids);

    // $people[] = 55;
    // print_r($people);

    // print_r($ids);

    # 多维数组
    $cars  = array(
    	array("Honda",20,10),
    	array("dz",20,20),
    	array("Ford",15,10)
    );

    echo $cars[2][1];



 ?>











