<?php 

   define("DB_HOST","localhost");
   define("DB_USER","root");
   define("DB_PASS","");
   define("DB_NAME","people");

   $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
   if (mysqli_connect_errno()) {
       echo "链接失败";
   };
   mysqli_query($conn,"set names utf8");

   // $query = "DELETE FROM customers WHERE id=19";
   // $query = "UPDATE customers SET name='艾琳' WHERE id=32";
   // $query = "INSERT INTO customers(name,email,address,city,state) VALUES('王昭君','123@qq.con','汉朝','中原','出塞')";
   $query = "SELECT * FROM customers";
   $result = mysqli_query($conn,$query);
   $post = mysqli_fetch_all($result,MYSQLI_ASSOC);
   var_dump($post);
   mysqli_close($conn);




 ?>