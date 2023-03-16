<?php
/*
TAPŞIRIQ 1
- Hər hansı konstant yaradıb ona qiymət verin
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="az" lang="az">

<head>
    <title>Konstantlar</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <h1>Konstantlar</h1>
    <?php
		// Check if the constant named PI exists
		if (defined("PI")) {
			// Display the value of the constant
			echo "The value of PI is " . PI . "<br>";
			
			// Attempt to change the value of the constant (this will generate a warning)
			define("PI", 3.14);
		} else {
			echo "The constant PI does not exist";
		}

	
	?>
</body>

</html>