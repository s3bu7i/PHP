<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="az" lang="az">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>while dovru</title>
</head>

<body>
    <h1>while dovru</h1>
    <?php
	$i = 1;

	while ($i <= 50) {
  		if ($i % 2 != 0) {
    	echo $i . " ";
  	}
  	$i++;
	}
	?>
</body>

</html>