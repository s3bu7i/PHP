<?php
	$now = date('m.d.Y');
	$birthday = '12.22.2003';

	
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="az" lang="az">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Tarix və vaxtla işləyən funksiyaların istifadəsi</title>
</head>

<body>
    <h1>Tarix və vaxtla işləyən funksiyaların istifadəsi</h1>
    <?php
	// Ad günümüzün tarixi
	$birthday = '12.22.2003';

	// Ad günümüzün tarixini tarix obyektinə çeviririk
	$birthday_date = date_create_from_format('m.d.Y', $birthday);

	// Şimdiki vaxtı alırıq
	$now = new DateTime();

	// Şimdiki vaxtla ad günümüzü müqayisə edirik
	$diff = $now->diff($birthday_date);

	// Saniyələrə çeviririk
	$seconds = $diff->days * 24 * 60 * 60 + $diff->h * 60 * 60 + $diff->i * 60 + $diff->s;

	// Frazanı ekrana çıxarırıq
	echo "Ad günümə $seconds saniyə qalıb";

	
	?>
</body>

</html>