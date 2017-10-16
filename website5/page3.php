<?php 

    $users = ["name" => "Heney","email" => "hesy@qq.com","age" => 12];
    $users = serialize($users);
    setcookie("users",$users,time() + 86400);

    $users = unserialize($_COOKIE["users"]);
    print_r($users);

 ?>