<?php 
   
   session_start();
   # 改变 SESSION 存储的值
   # $_SESSION["name"] = "haoliang";
   # 获取 SESSION存储的值
   $name = isset($_SESSION["name"]) ? $_SESSION["name"] : "name属性不存在";
   $email = isset($_SESSION["email"]) ? $_SESSION["email"] : "email属性不存在";
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Page 3</title>
 </head>
 <body>
 	<h2><?php echo $name; ?></h2>
 	<h2><?php echo $email; ?></h2>
 </body>
 </html>