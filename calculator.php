<!DOCTYPE html>
<html>

<head>
    <title>Calculator</title>
</head>

<body>
    <?php 
	if(isset($_POST['submit'])){
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operator = $_POST['operator'];

		switch ($operator) {
			case '+':
				$result = $num1 + $num2;
				break;
			case '-':
				$result = $num1 - $num2;
				break;
			case '*':
				$result = $num1 * $num2;
				break;
			case '/':
				if($num2 == 0){
					echo "0-a bölünmə yoxdur.";
				}else{
					$result = $num1 / $num2;
				}
				break;
			default:
				echo "Düzgün əməliyyat seçilməyib.";
				break;
		}

		if(isset($result)){
			echo "Nəticə: ".$result;
		}
	}
	?>
</body>

</html>