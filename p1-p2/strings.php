<?php

	$login = "root";
	$password = "megaP@ssw0rd";
	$email = "hesen@ilkaddimlar.com";


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="az" lang="az">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Sətirlərlə işləyən funksiyalar</title>
</head>

<body>
    <?php

	// $login, $password, $email dəyişənləri mövcuddur

	// $login dəyişəninin ilk simvolunu böyük edin
	$login = ucfirst($login);

	// $password dəyişəninin ilk simvolunu böyük edin
	$password = ucfirst($password);

	// $email dəyişənində "@" simvolunun olub olmamasını yoxlayın
	if (strpos($email, '@') !== false) {
	echo "Email ünvanı doğrudur.";
	} else {
	echo "Email ünvanı yanlışdır.";
	}

    ?>
</body>

</html>