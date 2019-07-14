<?php 

   function insertDate($sql){
   	  $mysqli = new mysqli("localhost","root","","people");
   	  if ($mysqli->connect_errno) {
   	  	  die($mysqli->connect_error);
   	  }
   	  $mysqli->query("set names utf8");
   	  $result = $mysqli->query($sql);
   	  if ($result) {
   	  	 echo "插入成功";
   	  }else{
   	  	echo "插入失败";
   	  }
   	  $mysqli->close();
   }

   $sql = "INSERT INTO customers(name,email,address,city,state) VALUES ('王昭君','wangzh@qq.com','定泗路','北京','昌平')";
   insertDate($sql);

   function deleteDate($sql){
   	  $mysqli = new mysqli("localhost","root","","people");
   	  if ($mysqli->connect_errno) {
   	  	  die($mysqli->connect_error);
   	  }
   	  $mysqli->query("set names utf8");
   	  $result = $mysqli->query($sql);
   	  if ($result) {
   	  	 echo "删除成功";
   	  }else{
   	  	echo "删除失败";
   	  }
   	  $mysqli->close();
   }

   $sql = "DELETE FROM customers WHERE id=2";
   deleteDate($sql);

   function updateDate($sql){
   	  $mysqli = new mysqli("localhost","root","","people");
   	  if ($mysqli->connect_errno) {
   	  	  die($mysqli->connect_error);
   	  }
   	  $mysqli->query("set names utf8");
   	  $result = $mysqli->query($sql);
   	  if ($result) {
   	  	 echo "更新成功";
   	  }else{
   	  	echo "更新失败";
   	  }
   	  $mysqli->close();
   }

   $sql = "UPDATE customers SET name='唐玉环' WHERE id=42";
   updateDate($sql);

   function selectDate($sql){
   	  $mysqli = new mysqli("localhost","root","","people");
   	  if ($mysqli->connect_errno) {
   	  	  die($mysqli->connect_error);
   	  }
   	  $mysqli->query("set names utf8");
   	  $result = $mysqli->query($sql);
   	  if ($result->num_rows) {
   	  	 $date = $result->fetch_all(MYSQLI_ASSOC);
   	  	 echo json_encode($date);
   	  }
   	  $mysqli->close();
   }

   $sql = "SELECT * FROM  customers";
   selectDate($sql);










 ?>