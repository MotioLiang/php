<div class="container">
	<?php 
		#echo $_GET["sbqname"];
	    #检查sbqname是否能获取到

	    /*
	    if (isset($_GET["sbqname"]) && isset($_GET["sbqemail"])) {
	    	#echo $_GET["sbqname"];
	    	$name = $_GET["sbqname"];
	    	$email = $_GET["sbqemail"];
	    	echo $name." : ".$email;
	    }
	    */
        
        /*
	    if (isset($_POST["sbqname"]) && isset($_POST["sbqemail"])) {
	    	#echo $_post["sbqname"];
	    	$name = $_POST["sbqname"];
	    	$email = $_POST["sbqemail"];
	    	if (!empty($name) && !empty($email)) {
	    		echo $name." : ".$email;
	    	}
	    	print_r($_POST);
	    }
	    */

	    if (isset($_REQUEST["sbqname"]) && isset($_REQUEST["sbqemail"])) {
	    	#echo $_post["sbqname"];
	    	$name = $_REQUEST["sbqname"];
	    	$email = $_REQUEST["sbqemail"];
	    	if (!empty($name) && !empty($email)) {
	    		echo $name." : ".$email;
	    	}
	    	print_r($_REQUEST);
	    }
	    # 查询URL地址后面的参数
	    #$echo $_SERVER['QUWEY_STRING'];

	 ?>
</div>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GET & POST</title>
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
    	<form action="get_post.php" method="GET">
    		<div class="form_group">
    			<label for="">Name</label>
    			<input type="text" class="form-control" 
    			name="sbqname">
    		</div>

			<br>	
    		<div class="form_group">
    			<label for="">Email</label>
    			<input type="email" class="form-control" name="sbqemail">
    		</div>
			<br>
    		<input class="btn btn-primary btn-block" type="submit" value="提交">
    	</form>

    	<ul class="list-group">
    		<li class="list-group-item">
    			<a href="<?php  echo $_SERVER['PHP_SELF']."?name=艾琳"; ?>" class="btn btn-success btn-block">
    				艾琳
    			</a>
    		</li>
    		<li class="list-group-item">
    			<a href="<?php  echo $_SERVER['PHP_SELF']."?name=爱林"; ?>" class="btn btn-info btn-block">
    				爱林
    			</a>
    		</li>
    	</ul>
    	<h1>
    		<?php if(isset($_GET['name'])){echo $_GET['name'];} ?>
    	</h1>
    </div>
  </body>
</html>