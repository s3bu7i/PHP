<?php
/*
TAPŞIRIQ 1
- $age dəyişəni yaradın
- $age dəyişəninə ixtiyari qiymət mənimsədin
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>if-elseif-else konstruksiyası</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <h1>if-elseif-else konstruksiyası</h1>
    <?php
		$age = 35;
		if ($age >= 18 && $age <= 65) {
			echo "You still have to work, you have to work";
		} elseif ($age > 65) {
			echo "It's time for you to retire";
		} elseif ($age >= 1 && $age <= 17) {
			echo "Too early for you to work";
		} else {
			echo "Unknown age";
		}
	?>
</body>

</html>