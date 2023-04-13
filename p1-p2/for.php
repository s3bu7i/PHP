<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="az" lang="az">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>for dövrü</title>
</head>

<body>
    <h1>for dövrü</h1>
    <?php
		for ($i = 1; $i <= 50; $i++) {
  			if ($i % 2 != 0) {
    			echo $i . " ";
  			}
		}
	?>
</body>

</html>