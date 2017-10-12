<div class="container">
	<?php 

		# 检查是否存在data的name属性

	    /*
		if (filter_has_var(INPUT_POST, "data")) {
			
			# echo "data 存在！";
			$email = $_POST["data"];
			#echo $email;

			#过滤掉不合法的字符
			$email = filter_var($email,FILTER_SANITIZE_EMAIL);
			echo $email;
			
			# 验证是否是一个有效的邮箱
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "邮箱合法！";
			}else{
				echo "邮箱不合法！";
			}

		}else{
			echo "data 不存在！";
		}
		*/

		/*
		审核
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW
		
		验证
		FILTER_VALIDATE_BOOLEAN   - bool
		FILTER_VALIDATE_EMAIL     - 邮件
		FILTER_VALIDATE_FLOAT     - 小数
		FILTER_VALIDATE_INT       - 整数
		FILTER_VALIDATE_IP        - IP
		FILTER_VALIDATE_MAC       - 地址
		FILTER_VALIDATE_REGEXP    - 正则
		FILTER_VALIDATE_URL       - 路径
	*/
		# 练习 验证一个变量中的值，是否是合整形
		/*
		$var = "2";
		if (filter_var($var,FILTER_VALIDATE_INT)) {
			echo "合法";
		}else{
			echo "不合法";
		}
		*/

		# 获取字符串中的所有数值
		# $var = "2daf2asfadsdas2f2asf20";
		# var_dump(filter_var($var,FILTER_SANITIZE_NUMBER_INT));

		# 特殊字符
		# $var = "<script>alert(1)</script>";

		# echo $var;
		# echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);

		#验证数组中每个元素
		/*
		$filters = array(
            "data" => FILTER_VALIDATE_EMAIL,
            "data2" => array(
            	'filter' => FILTER_VALIDATE_INT,
            	'options' => array(
            		'min_range' => 1,
            		'max_range' => 150
            	)
            )
		);
		print_r(filter_input_array(INPUT_POST,$filters));
		*/

		# 把form表单中input的内容，第一个input一定是email，第二个input一定是数值，并
		# 且数值最小1，最大150
        
        /*
        if (filter_has_var(INPUT_POST, "data")) {
        	$email = $_POST["data"];
        	$email = filter_var($email,FILTER_VALIDATE_EMAIL);
        	echo $email;
        }else{
        	echo "";
        }

        if (filter_has_var(INPUT_POST, "data2")) {
        	$num = $_POST["data2"];
        	if(filter_var($num,FILTER_VALIDATE_INT) >= 0);
	            if ($num > 1 && $num < 150) {
	            	echo $num;
	            }else{
	            	echo "";
	            }
	        }else{
	        	echo "hello wold";
	        }
        	
        }else{
        	echo "";
        }
        */

        $array = array(
            "name" => "henry",
            "age" => "80",
            "email" => "henry@qq.com"
        );

        $filters = array(
            "name" => array(
                 "filter" => FILTER_CALLBACK,
                 "options" => "ucwords"
            ),
            "age" => array(
            	"filter" => FILTER_VALIDATE_INT,
            	'options' => array(
	            	"min_range" => 1,
	            	"max_range" => 100,
	            ),
            ),
            "email" => FILTER_VALIDATE_EMAIL,
        );

        print_r(filter_var_array($array,$filters));

			
		

	 ?>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filter / 过滤器</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form method="POST"
			  action="<?php echo $_SERVER["PHP_SELF"]; ?>">
			<input 
			type="text"
			name="data"
			class="form-control">
            <br>
			<input 
			type="text"
			name="data2"
			class="form-control">
			
			<br>
			<button class="btn btn-primary btn-block" type="submit">提交</button>
		</form>
	</div>
</body>
</html>