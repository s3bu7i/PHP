<?php
function getTable($cols = 5, $rows = 5, $color = 'white') {
  $table_html = "<table style='background-color:$color'>";

  for ($i=1; $i<=$rows; $i++) {
    $table_html .= "<tr>";
    for ($j=1; $j<=$cols; $j++) {
      $table_html .= "<td>" . $i*$j . "</td>";
    }
    $table_html .= "</tr>";
  }

  $table_html .= "</table>";

  return $table_html;
}
echo getTable(10, 10, 'lightblue');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="az" lang="az">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Vurma cədvəli</title>
</head>

<body>
    <h1>Vurma cədvəli</h1>
    <?php
	// 3 sətir, 5 sütunlu, sarı rəngli vurma cədvəli
	echo getTable(5, 3, 'yellow');

	// 7 sətir, 3 sütunlu, çəhrayı rəngli vurma cədvəli
	echo getTable(3, 7, 'pink');

	// Default olaraq yaradılan, 5 sətir, 5 sütunlu, ağ rəngli vurma cədvəli
	echo getTable();

	// 2 sətir, 10 sütunlu, mavi rəngli vurma cədvəli
	echo getTable(10, 2, 'blue');

	// Heç bir qiymət vermədən çağırma
	echo getTable();

	// Bir parametrinə qiymət verərək çağırma
	echo getTable(7);

	// İki parametrinə qiymət verərək çağırma
	echo getTable(3, 5);

	?>
</body>

</html>