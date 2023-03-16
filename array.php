<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Massivlər</title>
</head>

<body>
    <h1>Massivlər</h1>
    <?php
		// Create the $bmw array and fill it with values
		$bmw = array(
			"model" => "X6",
			"speed" => 120,
			"doors" => 5,
			"year" => "2017"
		);
		// Create the $toyota array and fill it with values
		$toyota = array(
			"model" => "Carina",
			"speed" => 130,
			"doors" => 4,
			"year" => "2016"
		);
		// Create the $opel array and fill it with values
		$opel = array(
			"model" => "Corsa",
			"speed" => 140,
			"doors" => 5,
			"year" => "2014"
		);
		echo "bmw - " . $bmw["model"] . " - " . $bmw["speed"] . " - " . $bmw["doors"] . " - " . $bmw["year"] . "<br>";
		echo "toyota - " . $toyota["model"] . " - " . $toyota["speed"] . " - " . $toyota["doors"] . " - " . $toyota["year"] . "<br>";
		echo "opel - " . $opel["model"] . " - " . $opel["speed"] . " - " . $opel["doors"] . " - " . $opel["year"] . "<br>";
		
	?>
</body>

</html>