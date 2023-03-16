<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>switch konstruksiyası</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <h1>switch konstruksiyası</h1>
    <?php
	$favcolor = "1";

	switch ($favcolor) {
		case "1":
			echo "bu işçi gündür";
			break;
		case "2":
			echo "bu işçi gündür";
			break;
		case "3":
			echo "bu işçi gündür";
			break;
		case "4":
			echo "bu işçi gündür";
			break;
		case "5":
			echo "bu işçi gündür";
		case "6":
			echo "bu gun dinceliriki";
		case "7":
			echo "bu gun dinceliriki";
			break;
		default:
			echo "namelum gun";
	}
	?>
</body>

</html>